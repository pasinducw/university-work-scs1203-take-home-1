<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    private $user; // current user
    private $admin; // current admin

    public function __construct()
    {
        parent::__construct();

        $this->load->model('department_model');
        //  $this->load->model('admin_model');
        $this->load->model('user_model');
        $this->load->model('professor_model');

        $this->load->helper('form');
        $this->load->library('form_validation');

        try {
            $this->user = $this->user_model->getCurrentUser();  
        } catch (Exception $ex) {
            $this->user_model->logout();
            redirect(base_url('/signin'));
        }
    }

    public function index()
    {
        redirect(base_url('/admin/overview'));
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
        $this->form_validation->set_rules('input-dept-name', 'Department Name', 'required');
        $this->form_validation->set_rules('input-dept-location', 'Location', 'required');
        $this->form_validation->set_rules('input-dept-phone', 'Phone', 'required');

        if ($this->input->post('add-department-request') && $this->form_validation->run() == true) {
            $name = $this->input->post('input-dept-name');
            $location = $this->input->post('input-dept-location');
            $phone = $this->input->post('input-dept-phone');

            $this->department_model->addDepartment($name, $location, $phone);
        }

        if ($this->input->post('delete-department-request')) {
            $departmentId = $this->input->post('delete-department-id');
            $this->department_model->removeDepartment($departmentId);
        }

        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/departments/departments",
            'viewData' => array(
                'urls' => array(
                    'editDept' => "editDepartments"
                )
            )
        );

        $departments = $this->department_model->getDepartments();

        $data['viewData']['departments'] = $departments;

        $this->load->view('templates/dashboard', $data);
    }

    public function editDepartments($departmentId)
    {
        $this->form_validation->set_rules('input-dept-name', 'Department Name', 'required');
        $this->form_validation->set_rules('input-dept-location', 'Location', 'required');
        $this->form_validation->set_rules('input-dept-phone', 'Phone', 'required');
        $this->form_validation->set_rules('select-prof', 'Head of Department', 'required');

        if ($this->form_validation->run() == true) {
            $name = $this->input->post('input-dept-name');
            $location = $this->input->post('input-dept-location');
            $phone = $this->input->post('input-dept-phone');
            $departmentHeadId = $this->input->post('select-prof');

            $this->department_model->updateDepartment($name, $location, $phone, $departmentHeadId);
        }

        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/departments/editDepartments",
            'viewData' => array(
                'urls' => array(
                    'back_url' => "../departments"
                )
            )
        );

        $professors = $this->professor_model->getProfessorsOfDepartment($departmentId);
        $department = $this->department_model->getDepartment($departmentId);
        
        $data['viewData']['department'] = $department;
        $data['viewData']['professors'] = $professors;

        $this->load->view('templates/dashboard', $data);
    }

    public function departmentsHeads()
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/departmentsHead/departmentsHeads",
            'viewData' => array(
                'urls' => array(
                    'addDptHead' => 'addDepartmentsHead',
                    'editDptHead' => 'editDepartmentHead',
                    'dptHeadOrder' => 'setDepartmentHeadOrder'
                )
            )
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function addDepartmentsHead($dptID)
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/departmentsHead/addDepartmentsHeads",
            'viewData' => array(
                'urls' => array(
                    'back_url' => 'departmentsHeads'
                )
            )
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function editDepartmentHead($dptID)
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/departmentsHead/editDepartmentHead",
            'viewData' => array(
                'urls' => array(
                    'back_url' => 'departmentsHeads'
                )
            )
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function setDepartmentHeadOrder($dptID)
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/departmentsHead/setDepartmentHeadOrder",
            'viewData' => array(
                'urls' => array(
                    'back_url' => 'departmentsHeads'
                )
            )
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function professors()
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/professors/professors",
            'viewData' => array(
                'urls' => array(
                    'editProf' => 'editProfessor'
                )
            )
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function editProfessor($profID)
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/professors/editProfessor",
            'viewData' => array(
                'urls' => array(
                    'back_url' => 'professors'
                )
            )
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function students()
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/students/students",
            'viewData' => array(
                'urls' => array(
                    'editStudent' => "editStudents",
                    'moreStudent' => "moreAboutStudent"
                )
            )
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function editStudents($studentID)
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/students/editStudents",
            'viewData' => array(
                'urls' => array(
                    'back_url' => "../students"
                )
            )
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function moreAboutStudent($studentID)
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/students/moreStudent",
            'viewData' => array(
                'urls' => array(
                    'back_url' => "../students"
                )
            )
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function courses()
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/courses/courses",
            'viewData' => array(
                'urls' => array(
                    'editCourse' => "editCourse",
                    'cousePrereq' => "cousePrerequisities"
                )
            )
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function editCourse($courseID)
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/courses/editCourse",
            'viewData' => array(
                'urls' => array(
                    'back_url' => "courses"
                )
            )
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function cousePrerequisities($courseID)
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/courses/cousePrerequisities",
            'viewData' => array(
                'vd'=> $courseID,
                'urls' => array(
                    'back_url' => "courses"
                )
            )
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function courseSections()
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/courseSections/courseSections",
            'viewData' => array(
                'urls' => array(
                    'addCourseSection' => 'addCourseSections'
                )
            )
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function addCourseSections($courseID)
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/courseSections/addCourseSections",
            'viewData' => array(
                'urls' => array(
                    'editCourseSec' => "../editCourseSections/".$courseID,
                    'back_url' => "../courseSections"
                )
            )
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function editCourseSections($courseID,$sectionID)
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/courseSections/editCourseSections",
            'viewData' => array(
                'urls' => array(
                    'back_url' => "../../addCourseSections/".$courseID
                )
            )
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function companySession()
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/companySession/companySession",
            'viewData' => array(
                'urls' => array(
                    'editCompSession' => "editCompanySessions",
                    'addManager' => 'companySessionManager'
                )
            )
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function editCompanySessions($sessionID)
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/companySession/editCompanySessions",
            'viewData' => array(
                'urls' => array(
                    'addManager' => '../companySessionManager',
                    'back_url' => "../companySession"
                )
            )
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function companySessionManager()
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/companySessionManager/companySessionManager",
            'viewData' => array(
                'urls' => array(
                    'editManager' => "editCompanySessionManager"
                )
            )
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function editCompanySessionManager($managerID)
    {

        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/companySessionManager/editCompanySessionManager",
            'viewData' => array(
                'urls' => array(
                    'back_url' => "../companySessionManager"
                )
            )
        );

        $this->load->view('templates/dashboard', $data);

    }

    public function userCreation()
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/userCreation/createUser",
            'viewData' => array(
                'urls' => array(
                    'adminUser' => "createUserAdmin",
                    'studentUser' => "studentUser"
                )
            )
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function createUserAdmin()
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/userCreation/createUserAdmin",
            'viewData' => array(
                'urls' => array(
                    'back_url' => "userCreation"
                )
            )
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function studentUser()
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/userCreation/studentUser",
            'viewData' => array(
                'urls' => array(
                    'back_url' => "userCreation"
                )
            )
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