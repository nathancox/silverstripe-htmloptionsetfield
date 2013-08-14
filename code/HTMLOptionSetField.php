<?php

class HTMLOptionSetField extends OptionSetField {
	
	public function __construct($name, $title=null, $source=array(), $value='', $form=null, $emptyString=null) {
		parent::__construct($name, $title, $source, $value, $form, $emptyString);
	}
	
	public function Field($properties = array()) {
		Requirements::javascript(basename(dirname(__DIR__)) . '/javascript/htmloptionsetfield.js');
		Requirements::css(basename(dirname(__DIR__)) . '/css/htmloptionsetfield.css');
		return parent::Field($properties);
	}
	
	
	
}