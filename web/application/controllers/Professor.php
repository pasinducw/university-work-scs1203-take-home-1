<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Professor extends CI_Controller
{

    public function index()
    {
        $data = array(
            'navigationData' => getNavigationEntries('professor'),
            'view' => "pages/professor/overview",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function profile()
    {
        $data = array(
            'navigationData' => getNavigationEntries('professor'),
            'view' => "pages/common/profile/profileView",
            'viewData' => array() 
        );

        $this->load->view('templates/dashboard',$data);

    }

    public function overview()
    {
        $data = array(
            'navigationData' => getNavigationEntries('professor'),
            'view' => "pages/professor/overview",
            'viewData' => array(
                'links' => array(
                    'change_course_section' => base_url("professor/courseSections"),
                    'change_lab_sessions' => base_url("professor/labSessions"),
                    'change_text_books' => base_url("professor/textBooks")
                )
            ) 
        );

        $this->load->view('templates/dashboard',$data);

    }

    public function assignGraduate()
    {

        $data = array(
            'navigationData' => getNavigationEntries('professor'),
            'view' => "pages/professor/assignGraduate",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard',$data);

    }

    public function courseSections(){
        $data = array(
            'navigationData' => getNavigationEntries('professor'),
            'view' => "pages/professor/courseSections",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard',$data);
    }

    public function labSessions(){
        $data = array(
            'navigationData' => getNavigationEntries('professor'),
            'view' => "pages/professor/labSessions",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard',$data);
    }

    public function textBooks(){
        $data = array(
            'navigationData' => getNavigationEntries('professor'),
            'view' => "pages/professor/textBooks",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard',$data);
    }

}
