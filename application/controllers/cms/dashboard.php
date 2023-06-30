<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model','user');
    }

	public function index()
	{
        $this->data['view'] = 'cms/dashboard';
		$this->load->view('cms/layout',$this->data);
	}
}