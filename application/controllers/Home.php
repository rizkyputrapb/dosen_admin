<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index($name = '')
    {
        $data['title'] = 'Home';

        $this->load->view('template/header', $data);
        //echo "Selamat Datang di Halaman Home";
        //$data['name'] = $name;
        $this->load->view('home/index', $data);
        $this->load->view('template/footer');

        if ($this->session->userdata('level') != "admin") {
            redirect('login', 'refresh');
        }
    }
}

/* End of file Home.php */
