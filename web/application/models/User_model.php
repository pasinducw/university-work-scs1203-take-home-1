<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class User_model extends CI_Model
{

    // not needed at the moment.
    // public $username;
    // public $first_name;
    // public $last_name;
    // public $phone;
    // public $password;
    // public $is_admin;

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->library('session');
    }

    public function login($username, $password)
    {
        $this->session->unset_userdata('user');

        $this->db->select('user_id, username, first_name, last_name, phone, role');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get();

        $user = $query->row();
        if (!isset($user)) {
            return false;
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
            throw new Exception('User not logged in!');
        }
        return $this->session->user;
    }

    public function getUser($userId)
    {
        $this->db->select('user_id, username, first_name, last_name, phone, role');
        $this->db->from('users');
        $this->db->where('user_id', $userId);
        $query = $this->db->get();
        return $query->row();
    }

    public function updateUser($userId, $firstName, $lastName, $phone)
    {
        $sql = '
            UPDATE users
            SET first_name = ?, last_name = ?, phone = ?
            WHERE user_id = ?
        ';
        $this->db->query($sql, array($firstName, $lastName, $phone, $userId));
    }

}
