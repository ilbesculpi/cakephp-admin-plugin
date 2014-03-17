<?php

class AdminAppController extends AppController {
	
	public $components = array(
		'Session',
		'Auth' => array(
			'loginRedirect' => '/admin/dashboard',
			'logoutRedirect' => '/admin/login',
			'loginAction' => '/admin/login',
			'Form' => array(
				'userModel' => 'Admin.Member',
				'fields' => array('username' => 'email')
			)
		)
	);
	
	public function setFlash($message, $type = 'info') {
		if( $type === 'error' ) $type = 'danger';
		$this->Session->setFlash( $message, 'flash', array('type' => $type) );
	}
	
	public function index() {
		
	}
	
}