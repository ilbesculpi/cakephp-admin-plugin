<?php

class AdminController extends AdminAppController {
	
	public function index() {
		pr('Admin::index()');
	}
	
	public function login() {
		$this->layout = 'login';
		if( $this->request->is('post') ) {
			if( $this->Auth->login() ) {
				$this->redirect( $this->Auth->redirect() );
			}
			else {
				$this->setFlash( __('Invalid username or password.'), 'danger' );
			}
		}
	}
	
}