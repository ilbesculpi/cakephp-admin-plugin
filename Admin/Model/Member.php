<?php

App::uses('AuthComponent', 'Controller/Component');

class Member extends AdminAppModel {
	
	public $useTable = 'administrators';
	
	public function beforeSave($options = array()) {
		if( !$this->id ) {
			$this->data[$this->name]['password'] = AuthComponent::password($this->data[$this->name]['password']);
		}
        return parent::beforeSave($options);
    }
	
}
