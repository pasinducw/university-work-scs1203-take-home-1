<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Professor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('course_section_model');
        $this->load->model('lab_session_model');
        $this->load->model('professor_model');
        $this->load->model('user_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        redirect(base_url('/professor/overview'));
    }

    public function profile()
    {
        $user = $this->user_model->getCurrentUser();

        $updateProfileRequest = $this->input->post('update-profile');
        if ($updateProfileRequest) {
            $this->form_validation->set_rules('input-fname', 'First Name', 'required');
            $this->form_validation->set_rules('input-lname', 'Last Name', 'required');

            if ($this->form_validation->run() == true) {
                $firstName = $this->input->post('input-fname');
                $lastName = $this->input->post('input-lname');
                $phone = $this->input->post('input-contact-no');

                $this->user_model->updateUser($user['user_id'], $firstName, $lastName, $phone);
            }
        }

        $updatePasswordRequest = $this->input->post('change-password');
        if ($updatePasswordRequest) {
            // implement
        }

        $data = array(
            'navigationData' => getNavigationEntries('professor'),
            'view' => "pages/common/profile/profileView",
            'viewData' => array(),
        );

        $data['viewData']['user'] = $this->user_model->getUser($user['user_id']);
        $data['viewData']['formSubmissionLink'] = '/professor/profile';

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
            $this->course_section_model->assignCourseSection($professor_id, $course_id, $section_id, $semester, $year);
        }

        $unassignSection = $this->input->post('unassign-section');
        if (isset($unassignSection)) {
            $course_id = strtok($unassignSection, ':');
            $section_id = strtok(':');
            $semester = strtok(':');
            $year = strtok(':');
            $professor_id = $professor->employee_id;
            $this->course_section_model->unassignCourseSection($professor_id, $course_id, $section_id, $semester, $year);
        }

        $data = array(
            'navigationData' => getNavigationEntries('professor'),
            'view' => "pages/professor/courseSections",
            'viewData' => array(),
        );

        $data['viewData']['courseSections'] = $this->course_section_model->
            getCourseSections($professor->department_id, $courseFilter);
        $data['viewData']['assignedCourseSections'] = $this->course_section_model->
            getAssignedCourseSections($professor->employee_id, $professor->department_id);

        $data['viewData']['courseFilter'] = $courseFilter;

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

    public function labSessions()
    {
        $professor = $this->professor_model->getCurrentProfessor();

        $data = array(
            'navigationData' => getNavigationEntries('professor'),
            'view' => "pages/professor/labSessions",
            'viewData' => array(),
        );

        $createLabSessionRequest = $this->input->post('create-lab-session');
        if ($createLabSessionRequest) {
            $this->form_validation->set_rules('select-course-section', 'Course Section', 'required');
            $this->form_validation->set_rules('input-lab-session-topic', 'Lab Session Topic', 'required');
            $this->form_validation->set_rules('input-lab-session-start-time', 'Lab Session Start Time', 'required');
            $this->form_validation->set_rules('input-lab-session-end-time', 'Lab Session End Time', 'required');
            $this->form_validation->set_rules('input-lab-session-location', 'Lab Session Location', 'required');

            if ($this->form_validation->run() == true) {
                $courseSection = $this->input->post('select-course-section');
                $topic = $this->input->post('input-lab-session-topic');
                $startTime = $this->input->post('input-lab-session-start-time');
                $endTime = $this->input->post('input-lab-session-end-time');
                $location = $this->input->post('input-lab-session-location');

                $courseId = strtok($courseSection, ':');
                $sectionId = strtok(':');
                $semester = strtok(':');
                $year = strtok(':');
                $professorId = $professor->employee_id;

                $this->lab_session_model->createLabSession($professorId, $courseId, $sectionId, $semester,
                    $year, $topic, $startTime, $endTime, $location);
            }
        }

        $deleteLabSessionRequest = $this->input->post('delete-lab-session');
        if ($deleteLabSessionRequest) {
            $courseSection = $this->input->post('course-section');
            $topic = $this->input->post('lab-session-topic');

            $courseId = strtok($courseSection, ':');
            $sectionId = strtok(':');
            $semester = strtok(':');
            $year = strtok(':');
            $professorId = $professor->employee_id;

            $this->lab_session_model->removeLabSession($professorId, $courseId, $sectionId, $semester,
                $year, $topic);
        }

        $data['viewData']['assignedCourseSections'] = $this->course_section_model->
            getAssignedCourseSections($professor->employee_id, $professor->department_id);
        $data['viewData']['labSessions'] = $this->lab_session_model->
            getLabSessionsOfProfessor($professor->department_id, $professor->employee_id);

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

}
