<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/overview",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);

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
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/departments",
            'viewData' => array(
                'urls' => array(
                    'editDept' => "editDepartments"
                )
            )
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function editDepartments($deptID)
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/edit/editDepartments",
            'viewData' => array(
                'urls' => array(
                    'back_url' => "../departments"
                )
            )
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function departmentsHeads()
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/departmentsHeads",
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
            'view' => "pages/admin/add/addDepartmentsHeads",
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
            'view' => "pages/admin/edit/editDepartmentHead",
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
            'view' => "pages/admin/setDepartmentHeadOrder",
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
            'view' => "pages/admin/professors",
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
            'view' => "pages/admin/edit/editProfessor",
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
            'view' => "pages/admin/students",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function courses()
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/courses",
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
            'view' => "pages/admin/edit/editCourse",
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
            'view' => "pages/admin/cousePrerequisities",
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
            'view' => "pages/admin/courseSections",
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
            'view' => "pages/admin/add/addCourseSections",
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
            'view' => "pages/admin/edit/editCourseSections",
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
            'view' => "pages/admin/companySession",
            'viewData' => array()
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function userCreation()
    {
        $data = array(
            'navigationData' => getNavigationEntries('admin'),
            'view' => "pages/admin/createUser",
            'viewData' => array()
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