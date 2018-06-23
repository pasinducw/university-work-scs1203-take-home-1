<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Professor extends CI_Controller
{

    public function index()
    {
        $data = array();

        $data['navigationData'] = array();

        $data['view'] = "pages/sample/sample";
        $data['viewData'] = array();

        $this->load->view('templates/dashboard', $data);
    }

    public function profile()
    {
        $data = array(
            'navigationData' => array(),
            'view' => "pages/common/profile/profileView",
            'viewData' => array() 
        );

        $this->load->view('templates/dashboard',$data);

    }

}
