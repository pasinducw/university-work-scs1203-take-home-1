<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sample extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('course_section_model');
        $this->load->model('professor_model');
        $this->load->model('user_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array();

        $data['navigationData'] = getNavigationEntries('admin');

        $data['view'] = "pages/sample/sample";
        $data['viewData'] = array();

        $this->load->view('templates/dashboard', $data);
    }

    public function custom($role = 'admin')
    {
        $data = array();

        $data['navigationData'] = getNavigationEntries($role);

        $data['view'] = "pages/sample/sample";
        $data['viewData'] = array();

        $this->load->view('templates/dashboard', $data);
    }

    public function test($u, $p)
    {
        $this->user_model->login($u, $p);
    }

}
