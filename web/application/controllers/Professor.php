<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Professor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('course_sections_model');
        $this->load->model('professor_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        redirect(base_url('/professor/overview'));
    }

    public function profile()
    {
        $data = array(
            'navigationData' => getNavigationEntries('professor'),
            'view' => "pages/common/profile/profileView",
            'viewData' => array(),
        );

        $this->load->view('templates/dashboard', $data);

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
                    'change_text_books' => base_url("professor/textBooks"),
                ),
            ),
        );

        $this->load->view('templates/dashboard', $data);

    }

    public function assignGraduate()
    {

        $data = array(
            'navigationData' => getNavigationEntries('professor'),
            'view' => "pages/professor/assignGraduate",
            'viewData' => array(),
        );

        $this->load->view('templates/dashboard', $data);

    }

    public function courseSections()
    {
        $courseFilter = $this->input->post('input-course-name');
        $professor = $this->professor_model->getCurrentProfessor();

        // if this is set, you have to assign the section to professor
        $courseSectionToAssign = $this->input->post('select-course-section');
        if (isset($courseSectionToAssign)) {
            // assignCourseSection($professor_id, $course_id, $section_id, $semester, $year)
            $course_id = strtok($courseSectionToAssign, ':');
            $section_id = strtok(':');
            $semester = strtok(':');
            $year = strtok(':');
            $professor_id = $professor->employee_id;
            $this->course_sections_model->assignCourseSection($professor_id, $course_id, $section_id, $semester, $year);
        }

        $unassignSection = $this->input->post('unassign-section');
        if (isset($unassignSection)) {
            $course_id = strtok($unassignSection, ':');
            $section_id = strtok(':');
            $semester = strtok(':');
            $year = strtok(':');
            $professor_id = $professor->employee_id;
            $this->course_sections_model->unassignCourseSection($professor_id, $course_id, $section_id, $semester, $year);
        }

        $data = array(
            'navigationData' => getNavigationEntries('professor'),
            'view' => "pages/professor/courseSections",
            'viewData' => array(),
        );

        $data['viewData']['courseSections'] = $this->course_sections_model->getCourseSections($professor->department_id, $courseFilter);
        $data['viewData']['assignedCourseSections'] = $this->course_sections_model->getAssignedCourseSections($professor->employee_id, $professor->department_id);

        $data['viewData']['courseFilter'] = $courseFilter;

        $this->load->view('templates/dashboard', $data);
    }

    public function labSessions()
    {
        $data = array(
            'navigationData' => getNavigationEntries('professor'),
            'view' => "pages/professor/labSessions",
            'viewData' => array(),
        );

        $this->load->view('templates/dashboard', $data);
    }

    public function textBooks()
    {
        $data = array(
            'navigationData' => getNavigationEntries('professor'),
            'view' => "pages/professor/textBooks",
            'viewData' => array(),
        );

        $this->load->view('templates/dashboard', $data);
    }

}
