<?php
class Login_model extends CI_Model
{
    public function cekEmail($email){
        return $this->db->where('email', $email)->get('user')->row();
    }

    public function cekUser($email, $password){

        $user = $this->cekEmail($email);
        if(password_verify($password, $user->password)) {
            $data = [
                'nama'=> $user->nama,
                'email'=> $user->email,
                'foto'=> $user->photo,
                'timestamp' => time()
            ];
            $this->session->set_userdata($data);
            return true;
        }else {
            return false;
        }
    }
}