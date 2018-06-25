<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CompanySessionManager extends CI_Controller
{
    public function index()
    {
        $data = array(
            'navigationData' => getNavigationEntries('manager'),
            'view' => "pages/manager/companySessions",
            'viewData' => array(
                'urls' => array(
                    'enrolments_url' => 'sessionEnrolments'
                )
            )
        );

        $this->load->view('templates/dashboard', $data);

    }

    public function companySessions()
    {
        $data = array(
            'navigationData' => getNavigationEntries('manager'),
            'view' => "pages/manager/companySessions",
            'viewData' => array(
                'urls' => array(
                    'enrolments_url' => 'sessionEnrolments'
                )
            )
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function profile()
    {
        $data = array(
            'navigationData' => getNavigationEntries('manager'),
            'view' => "pages/common/profile/profileView",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function sessionEnrolments($year,$sem){
        // students from selected company session
        $data = array(
            'navigationData' => getNavigationEntries('manager'),
            'view' => "pages/manager/sessionEnrolments",
            'viewData' => ''
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function studentEvaluation(){
        $data = array(
            'navigationData' => getNavigationEntries('manager'),
            'view' => "pages/manager/studentEvaluation",
            'viewData' => array(
                'urls' => array(
                    'addStudentEvaluation_url' => 'addStudentEvaluation'
                )
            )
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function addStudentEvaluation($year,$sem){

        $data = array(
            'navigationData' => getNavigationEntries('manager'),
            'view' => "pages/manager/addStudentEvaluation",
            'viewData' => array(
                'urls' => array(
                    'edit_enrolment' => "editStudentEvaluation"
                )
            )
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function editStudentEvaluation($year,$sem,$student_id){

        $data = array(
            'navigationData' => getNavigationEntries('manager'),
            'view' => "pages/manager/editStudentEvalution",
            'viewData' => array(
                'urls' => array(
                    'back_url' => 'addStudentEvaluation/'.$year.'/'.$sem
                )
            )
        );

        $this->load->view('templates/dashboard', $data);
    }

}