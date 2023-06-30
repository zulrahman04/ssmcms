<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Factory extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('factory_model','factory');
    }

	public function index()
	{
		$this->data['pagetitle'] = 'Factory';
        $this->data['menuname'] = 'Factory';
        // $this->data['submenuname'] = 'Dashboard';
     
        $this->data['factory'] = $this->factory->getFactory();
        $this->data['category'] = $this->factory->getCatFactory();

        $this->data['view'] = 'cms/factory';
		$this->load->view('cms/layout',$this->data);
	}
}
