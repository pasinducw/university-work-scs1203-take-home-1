<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class User_model extends CI_Model
{

    public $username;
    public $first_name;
    public $last_name;
    public $phone;
    public $password;
    public $is_admin;

    public function __construct()
    {
        $this->load->database();
        $this->load->library('session');
    }

    public function login($username, $password)
    {
        $user = array();
        $this->session->unset_userdata('user');

        $this->db->select('user_id, username, first_name, last_name');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get();

        $result = $query->row();
        if (isset($result)) {
            return false;
        }

        $user['user_id'] = $result['user_id'];
        $user['username'] = $result['username'];
        $user['first_name'] = $result['first_name'];
        $user['last_name'] = $result['last_name'];
        $user['phone'] = $result['phone'];

        $this->db->select('*');
        $this->db->from('userRoles');
        $this->db->where('user_id', $user['user_id']);
        $query = $this->db->get();

        foreach ($query->result() as $result) {
            if ($result['is_admin']) {
                $user['is_admin'] = true;
            }

            if ($result['is_professor']) {
                $user['is_professor'] = true;
            }

            if ($result['is_student']) {
                $user['is_student'] = true;
            }

            if ($result['is_librarian']) {
                $user['is_librarian'] = true;
            }

            if ($result['is_manager']) {
                $user['is_manager'] = true;
            }
        }

        $this->session->set_userdata('user', $user);
        return true;
    }

    public function logout()
    {
        $this->session->unset_userdata('user');
    }

    public function getCurrentUser()
    {
        if (!$this->session->has_userdata('user')) {
            throw new Error('User not logged in!');
        }
        return $this->session->user;
    }



}
