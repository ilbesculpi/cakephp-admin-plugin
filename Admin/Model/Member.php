<?php

class Member extends AdminAppModel {
	
	public $useTable = 'administrators';
	
	public function beforeSave($options = array()) {
        $this->data[$this->name]['password'] = AuthComponent::password($this->data[$this->name]['password']);
        return parent::beforeSave($options);
    }
	
}
