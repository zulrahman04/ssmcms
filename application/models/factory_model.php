<?php
class Factory_model extends CI_Model
{
    
    public function getFactory(){
        return $this->db->select('a.id, a.nama, a.description, a.image, a.urutan, b.name as category')->from('mst_factory a')->join('mst_categories b', 'a.category = b.id')->where('type','factory')->get()->result();
    }

    public function getCatFactory(){
        return $this->db->from('mst_categories')->where('type','factory')->get()->result();
    }
}