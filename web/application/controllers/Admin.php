<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/overview",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);

    }

    public function overview()
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/overview",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function departments()
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/departments",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function departmentsHeads()
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/departmentsHeads",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function professors()
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/professors",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function students()
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/students",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function courses()
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/courses",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function courseSections()
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/courseSections",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function companySession()
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/companySession",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function userCreation()
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/createUser",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function profile()
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/common/profile/profileView",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);
    }
}