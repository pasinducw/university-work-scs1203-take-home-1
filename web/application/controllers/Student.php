<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student extends CI_Controller
{
    public function index()
    {
        $data = array(
            'navigationData' => getNavigationEntries('student'),
            'view' => "pages/student/overview",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);

    }

    public function overview()
    {
        $data = array(
            'navigationData' => getNavigationEntries('student'),
            'view' => "pages/student/overview",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function courses()
    {
        $data = array(
            'navigationData' => getNavigationEntries('student'),
            'view' => "pages/student/courses",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function companySessions()
    {
        $data = array(
            'navigationData' => getNavigationEntries('student'),
            'view' => "pages/student/companySession",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function library()
    {
        $data = array(
            'navigationData' => getNavigationEntries('student'),
            'view' => "pages/student/library",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function grades()
    {
        $data = array(
            'navigationData' => getNavigationEntries('student'),
            'view' => "pages/student/grades",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);   
    }

    public function profile()
    {
        $data = array(
            'navigationData' => getNavigationEntries('student'),
            'view' => "pages/common/profile/profileView",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);
    }

}