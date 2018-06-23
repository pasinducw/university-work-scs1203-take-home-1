<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sample extends CI_Controller
{

    public function index()
    {
        $data = array();

        $data['navigationData'] = array();

        $data['view'] = "pages/sample/sample";
        $data['viewData'] = array();

        $this->load->view('templates/dashboard', $data);
    }

    public function custom($role = 'admin')
    {
        $data = array();

        $data['navigationData'] = array(
            'navEntries' => getNavigationEntries($role),
        );

        $data['view'] = "pages/sample/sample";
        $data['viewData'] = array();

        $this->load->view('templates/dashboard', $data);
    }

}
