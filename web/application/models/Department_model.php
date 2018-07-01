<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Department_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    public function getDepartment($departmentId){
        $this->db->select('*');
        $this->db->from('departments_view');
        $this->db->where('department_id', $departmentId);
        $query = $this->db->get();

        $department = $query->row();
        if(!isset($department)) throw new Exception('Invalid Department');
        return $department;
    }

    public function getDepartments($filter = '')
    {
        $this->db->select('*');
        $this->db->from('departments_view');
        $this->db->like('name', $filter);
        $query = $this->db->get();

        return $query->result();
    }

    public function addDepartment($name, $location, $phone)
    {
        $departmentId = str_replace(" ", "-", strtolower($name)) . '-' . rand(10, 99);

        $sql = '
            INSERT INTO departments (name, location, phone, department_id) VALUES
            (?, ?, ?, ?)
        ';
        $this->db->query($sql, array($name, $location, $phone, $departmentId));
    }

    public function updateDepartment($departmentId, $name, $location, $phone, $departmentHeadId)
    {
        $sql = '
            UPDATE departments 
            SET name = ?, location = ?, phone = ?, department_head_id = ?
            WHERE department_id = ?
        ';
        $this->db->query($sql, array($name, $location, $phone, $departmentHeadId, $departmentId));
    }

    public function removeDepartment($departmentId)
    {
        $sql = '
            DELETE FROM departments WHERE department_id = ?
        ';

        $query = $this->db->query($sql, array($departmentId));
    }
}
