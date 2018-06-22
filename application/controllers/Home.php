<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data = array();

        $this->load->view('templates/header');
        $this->load->view('templates/navigation');
        $this->load->view('pages/signin/signin', $data);
        $this->load->view('templates/footer');
    }

}
