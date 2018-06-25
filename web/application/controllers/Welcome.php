<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index()
    {
        try {
            $user = $this->user_model->getCurrentUser();
            switch ($user->role) {
                case 'admin':
                    redirect(base_url('/admin'));
                    break;
                case 'professor':
                    redirect(base_url('/professor'));
                    break;
                case 'undergraduate':
                    redirect(base_url('/student'));
                    break;
                case 'graduate':
                    redirect(base_url('/student'));
                    break;
                case 'librarian':
                    redirect(base_url('/librarian'));
                    break;
                case 'manager':
                    redirect(base_url('/companySessionManager'));
            }

            // don't know what the user is
            print_r($user);
        } catch (Exception $ex) {
            redirect(base_url('/signin'));
        }
    }

}
