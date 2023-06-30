<?php
class Project_model extends CI_Model
{
    public function getProject(){
        return $this->db->select('a.id, a.nama, a.description, a.image, a.urutan, b.name as category')->from('mst_project a')->join('mst_categories b', 'a.category = b.id')->where('type','project')->get()->result();
    }

    public function getCatProject(){
        return $this->db->from('mst_categories')->where('type','project')->get()->result();
    }

    public function addProject($nama, $cat, $desc, $urutan, $image){

        $this->db->trans_begin();

        $data = [
            'nama'=> $nama,
            'category'=> $cat,
            'description'=> $desc,
            'image' => $image,
            'urutan' => $urutan
        ];
        $this->db->insert('mst_project', $data);
    
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function getProjectById($id){
        return $this->db->select('a.id, b.id as category_id, a.nama, a.description, a.image, a.urutan, b.name as category')->from('mst_project a')->join('mst_categories b', 'a.category = b.id')->where('type','project')->where('a.id',$id)->get()->result();
    }

    public function editProject($id, $nama, $cat, $desc, $urutan, $image){

        $this->db->trans_begin();

        if ($image == null) {
            $data = [
                'nama'=> $nama,
                'category'=> $cat,
                'description'=> $desc,
                'urutan' => $urutan
            ];
        }else {
            $data = [
                'nama'=> $nama,
                'category'=> $cat,
                'description'=> $desc,
                'image' => $image,
                'urutan' => $urutan
            ];
        }

        $this->db->where('id',$id);
        $this->db->update('mst_project', $data);
    
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function deleteProject($id)
    {
        $this->db->trans_begin();

        $this->db->query("DELETE FROM mst_project WHERE id = '$id'");

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }
}