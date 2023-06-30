<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model','user');
    }

	public function index()
	{
        if ($this->session->userdata('email')) {
            redirect('cms/dashboard');
        }
        $this->data['view'] = 'cms/login';
		$this->load->view('cms/login',$this->data);
	}

	public function cekUser()
	{
		if (!$this->user->cekEmail($_POST['email'])) {
			$this->session->set_flashdata('success','User Tidak terdaftar'); 
		}else {
			if ($this->user->cekUser($_POST['email'], $_POST['password'])) {
				redirect('cms/dashboard');
			}else {
				$this->session->set_flashdata('success','Password salah'); 
			}
		}
		redirect('cms/login');
	}

	public function logout()
	{
        $this->session->sess_destroy();
		redirect('cms/login');
	}

    public function block(){
        $this->data['view'] = 'cms/404';
		$this->load->view('cms/layout',$this->data);
    }
}
