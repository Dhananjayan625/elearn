<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ( ! class_exists('My_Controller'))
{
    require_once APPPATH.'core/MY_controller.php';
}
class Admin extends Admin_controller {

  public function __construct() {
    parent::__construct();
    
  }

	public function index() {
		$data['main_content'] = 'home';
		$data['title'] = 'Home';
		$data['css'] = array();
		$data['js'] = array();
		$this->view($data);
	}

	public function users() {
		$data['main_content'] = 'users';
		$data['title'] = 'Home';
		$data['css'] = array(
			'http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css'
		);
		$data['js'] = array(
			'//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js',
			base_url().'public/javascripts/users.js',
			'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js'
		);
		$this->view($data);
	}

	public function category() {
		$data['main_content'] = 'category';
		$data['title'] = 'admin';
		$data['css'] = array(
			'http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css'
		);
		$data['js'] = array(
			'//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js',
			base_url().'public/javascripts/category.js',
			'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js'
		);
		$this->view($data);
	}

}
