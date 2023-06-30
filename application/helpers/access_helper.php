<?php

function is_logged_in(){
    $ci = get_instance();

    $inactive = 5000;     
    if ((time() - $_SESSION['timestamp']) > $inactive) {
        redirect('logout');
    } else {
        $_SESSION['timestamp'] = time();
    }

    if(!$ci->session->userdata('email')){
        redirect(base_url('cms'));
    }

}