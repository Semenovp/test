<?php
	class BootstrapPager extends CLinkPager {
		public function run()
		{
			$buttons=$this->createPageButtons();
			if(empty($buttons))
				return;
			$this->registerClientScript();
			echo CHtml::tag('ul',array('class' => 'pagination'),implode("\n",$buttons));
		}

		protected function createPageButton($label,$page,$class,$hidden,$selected)
		{
			if($hidden || $selected)
				$class.=' '.($hidden ? self::CSS_HIDDEN_PAGE : self::CSS_SELECTED_PAGE);
			return '<li class="'.$class.'">'.CHtml::link($label,$this->createPageUrl($page)).'</span>';
		}
	}