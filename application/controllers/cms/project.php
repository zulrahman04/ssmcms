<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('project_model','project');
    }

	public function index()
	{
		$this->data['pagetitle'] = 'Project';
        $this->data['menuname'] = 'Project';
        // $this->data['submenuname'] = 'Dashboard';
     
        $this->data['project'] = $this->project->getProject();
        $this->data['category'] = $this->project->getCatProject();

        $this->data['view'] = 'cms/project';
		$this->load->view('cms/layout',$this->data);
	}

	public function addProject()
	{	
        $nama = $_POST['nama'];
        $cat = $_POST['cat'];
        $desc = $_POST['desc'];
        $urutan = $_POST['urutan'];

        $config['upload_path'] = './public/assets/img';
        $config['allowed_types'] = 'jpg|png|jpeg';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
            $result = $this->upload->data();

            $this->session->set_flashdata('success','Project berhasil tambah'); 
            $query = $this->project->addProject($nama, $cat, $desc, $urutan, $result['file_name']);
            redirect('cms/project');
        }
	}

	public function cekProject()
	{
        $data = $this->project->getProjectById($_POST['project']);
		
		echo json_encode($data);
	}

	public function editProject()
	{	
        $id = $_POST['id'];
        $nama = $_POST['nama2'];
        $cat = $_POST['cat2'];
        $desc = $_POST['desc2'];
        $urutan = $_POST['urutan2'];

        if (isset($_POST['image2'])) {
            $config['upload_path'] = './public/assets/img';
            $config['allowed_types'] = 'jpg|png|jpeg';
    
            $this->load->library('upload', $config);
    
            if (!$this->upload->do_upload('image2')) {
                $error = $this->upload->display_errors();
                // menampilkan pesan error
                print_r($error);
            } else {
                $result = $this->upload->data();
    
                $this->session->set_flashdata('success','Project berhasil tambah'); 
                $query = $this->project->editProject($id, $nama, $cat, $desc, $urutan, $result['file_name']);
                redirect('cms/project');
            }
        } else {
            $this->session->set_flashdata('success','Project berhasil diubah'); 
            $query = $this->project->editProject($id, $nama, $cat, $desc, $urutan, null);
            redirect('cms/project');
        }
	}

    public function deleteProject(){
		$id = $_POST['id'];
        $add = $this->project->deleteProject($id);

        if ($add) {
            echo json_encode('Berhasil');
        }else {
            echo json_encode('Gagal');
        }
    }
}