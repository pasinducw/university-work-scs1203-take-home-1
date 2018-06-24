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

    public function borrowAndReturnBook(){
        $data = array(
            'navigationData' => getNavigationEntries('librarian'),
            'view' => "pages/librarian/borrowAndReturnBook",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function returnBook(){
        $data = array(
            'navigationData' => getNavigationEntries('librarian'),
            'view' => "pages/librarian/returnBook",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function book(){
        $data = array(
            'navigationData' => getNavigationEntries('librarian'),
            'view' => "pages/librarian/book",
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