<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signin extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/navigation');
        $this->load->view('pages/signin/signin');
        $this->load->view('templates/footer');
    }

}
