<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model','user');
		
    }

	public function index()
	{
        $this->data['page'] = 'home';
        $this->data['category'] = $this->db->where('type','factory')->get('mst_categories')->result();
        $this->data['categoryp'] = $this->db->where('type','project')->get('mst_categories')->result();
        $this->data['project'] = $this->db->limit('9')->order_by('urutan', 'ASC')->get('mst_project')->result();
        $this->data['factory'] = $this->db->limit('9')->order_by('urutan', 'ASC')->get('mst_factory')->result();
        $this->data['clients'] = $this->db->get('mst_client')->result();
		$this->load->view('layout',$this->data);
	}

	public function about()
	{
        $this->data['page'] = 'about';
		$this->load->view('layout',$this->data);
	}

	public function contact()
	{
        $this->data['page'] = 'contact';
		$this->load->view('layout',$this->data);
	}

	public function project()
	{
        $this->data['project'] = $this->db->get('mst_project')->result();
        $this->data['categoryp'] = $this->db->where('type','project')->get('mst_categories')->result();
        $this->data['page'] = 'project';
		$this->load->view('layout',$this->data);
	}

	public function factory()
	{
        $this->data['category'] = $this->db->where('type','factory')->get('mst_categories')->result();
        $this->data['factory'] = $this->db->get('mst_factory')->result();
        $this->data['page'] = 'factory';
		$this->load->view('layout',$this->data);
	}

	public function block()
	{
        $this->data['page'] = '404';
		$this->load->view('layout',$this->data);
	}
}
