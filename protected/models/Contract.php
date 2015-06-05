<?php

/**
 * This is the model class for table "{{contract}}".
 *
 * The followings are the available columns in table '{{contract}}':
 * @property integer $id
 * @property integer $client_id
 * @property integer $date
 * @property integer $status
 * @property integer $progress
 * @property string $services
 * @property integer $price
 */
class Contract extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{contract}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('client_id,status, progress, services, price', 'required'),
			array('client_id, date, status, progress, price', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, client_id, date, status, progress, services, price', 'safe', 'on'=>'search'),
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
			'clientId' => array(self::BELONGS_TO, 'Client', 'client_id'),
			'statusId' => array(self::BELONGS_TO, 'ContractStatus', 'status'),
			'servicesId' => array(self::HAS_MANY, 'Services', 'services')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'client_id' => 'Клиент',
			'date' => 'Date',
			'status' => 'Статус',
			'progress' => 'Прогресс',
			'services' => 'Услуги',
			'price' => 'Цена',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	//Перевод даты в UnixTime
	public static function getUnixTime($date){
		$dateElements = explode("/", $date);
		return mktime(0,0,0,$dateElements[1],$dateElements[2],$dateElements[0]);
	}
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('client_id',$this->client_id);
		$criteria->compare('date',$this->date);
		$criteria->compare('status',$this->status);
		$criteria->compare('progress',$this->progress);
		$criteria->compare('price',$this->price);
		if (isset($_GET['Contract']['services'])) {
			$criteria->compare( 'services', implode(',',$_GET['Contract']['services']) );
		}
		if (isset($_GET['PriceStart']) and isset( $_GET['PriceEnd'])) {
			$criteria->addBetweenCondition( 'price', $_GET['PriceStart'], $_GET['PriceEnd'], 'and' );//Фильтр по диапозону цен
		}
		if (isset($_GET['dateStart_submit'])  && strlen($_GET['dateStart_submit']) > 0) {
			if (isset($_GET['dateEnd_submit'])  && strlen($_GET['dateEnd_submit']) > 0){
				$criteria->addBetweenCondition( 'date', $this->getUnixTime($_GET['dateStart_submit']), $this->getUnixTime($_GET['dateEnd_submit']), 'and' );//Фильтр по диапозону дат
			}
		}
		$criteria->order = 'date DESC';
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contract the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function BeforeSave() {
		if($this->IsNewRecord)
			$this->date = time();
		return parent::BeforeSave();
	}
	public static function progress($prog){//
		return str_repeat("• ", $prog);
	}
}
