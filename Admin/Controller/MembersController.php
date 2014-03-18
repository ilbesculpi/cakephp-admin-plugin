<?php

class MembersController extends AdminAppController {
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('create');
	}
	
	public function index() {
		
	}
	
	public function create() {
		if( $this->request->is('post') ) {
			$this->Member->save( $this->request->data );
			$this->setFlash('Member created.', 'success');
		}
	}
	
}