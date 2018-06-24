<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Librarian extends CI_Controller
{

    public function index()
    {
        $data = array(
            'navigationData' => getNavigationEntries('librarian'),
            'view' => "pages/librarian/overview",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);

    }

    public function overview()
    {
        $data = array(
            'navigationData' => getNavigationEntries('librarian'),
            'view' => "pages/librarian/overview",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);

    }

    public function profile(){
        $data = array(
            'navigationData' => getNavigationEntries('librarian'),
            'view' => "pages/common/profile/profileview",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);
    }
}