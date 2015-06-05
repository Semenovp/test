<?php

/**
 * This is the model class for table "{{client}}".
 *
 * The followings are the available columns in table '{{client}}':
 * @property integer $id
 * @property string $name
 * @property integer $date
 * @property integer $phone
 * @property string $email
 * @property string $company
 * @property integer $status
 * @property string $services
 * @property string $hote
 */
class Client extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{client}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, phone, email, company, status', 'required'),
			array('date, phone, status', 'numerical', 'integerOnly'=>true),
			array('hote, services', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, date, phone, email, company, status, hote, services', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'StatusName' => array(self::BELONGS_TO, 'ClientStatus','status')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'ФИО',
			'date' => 'Дата',
			'phone' => 'Телефон',
			'email' => 'Email',
			'company' => 'Компания',
			'status' => 'Статус',
			'hote' => 'Заметка',
			'services' => 'Услуги'
		);
	}
	//Перевод даты в UnixTime
	public static function getUnixTime($date){
			$dateElements = explode("/", $date);
			return mktime(0,0,0,$dateElements[1],$dateElements[2],$dateElements[0]);
	}
	public function search(){
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('date',$this->date);
		$criteria->compare('phone',$this->phone);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('company',$this->company,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('hote',$this->hote);
//		$criteria->condition = 'status != 7';
		$criteria->order = 'date DESC';
		if (isset($_GET['dateStart_submit'])  && strlen($_GET['dateStart_submit']) > 0) {
			if (isset($_GET['dateEnd_submit'])  && strlen($_GET['dateEnd_submit']) > 0){
				$criteria->addBetweenCondition( 'date', $this->getUnixTime($_GET['dateStart_submit']), $this->getUnixTime($_GET['dateEnd_submit']), 'and' );//Фильтр по диапозону дат
			}
		}
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
//			'pagination'=>array(
//                                'pageSize'=>'5'),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Client the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public static function allClients() {
		$models = self::model()->findAll();
		return CHtml::listData($models,'id','name');
	}
	public function BeforeSave() {
		if($this->IsNewRecord) {
			$this->date = time();
		}
		If($this->status == 6){
			$this->status = 7;
		}
		return parent::BeforeSave();
	}
}
