<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (!function_exists('getNavigationEntries')) {
    function getNavigationEntries($role = 'admin')
    {
        switch ($role) {
            case 'admin':
                return navigation_getAdminNavs();
            case 'professor':
                return navigation_getProfessorNavs();
            case 'student':
                return navigation_getStudentNavs();
            case 'librarian':
                return navigation_getLibrarianNavs();
            case 'manager':
                return navigation_getManagerNavs();
        }
    }

    function navigation_getAdminNavs()
    {
        $entries = array();

        $entries['profile'] = array(
            'name' => 'Profile',
            'url' => base_url('admin/profile'),
            'icon' => 'user',
        );

        $entries['departments'] = array(
            'name' => 'Departments',
            'url' => base_url('admin/departments'),
            'icon' => 'tablet',
        );
        return $entries;
    }

    function navigation_getProfessorNavs()
    {
        $entries = array(
            'overview' => array(
                'name' => 'Overview',
                'url' => base_url('professor/overview'),
                'icon' => 'clipboard'
            ),
            'courseSections' => array(
                'name' => 'Course Sections',
                'url' => base_url('professor/courseSections'),
                'icon' => 'award'
            ),
            'labSession' => array(
                'name' => 'Lab Sections',
                'url' => base_url('professor/labSessions'),
                'icon' => 'grid'
            ),
            'textBooks' => array(
                'name' => 'Text Books',
                'url' => base_url('professor/textBooks'),
                'icon' => 'book'
            ),
            'asignGrad' => array(
                'name' => 'Lab Session Conductors',
                'url' => base_url('professor/assignGraduate'),
                'icon' => 'git-branch'
            ),
            'profile' => array(
                'name' => 'Profile',
                'url' => base_url('professor/profile'),
                'icon' => 'user'
            )
        );

        return $entries;
    }

    function navigation_getStudentNavs()
    {
        $entries = array(
            'overview' => array(
                'name' => 'Overview',
                'url' => base_url('student/overview'),
                'icon' => 'clipboard'
            ),
            'profile' => array(
                'name' => 'Profile',
                'url' => base_url('student/profile'),
                'icon' => 'user',
            )
        );

        $entries['courses'] = array(
            'name' => 'Enroll for Course',
            'url' => base_url('student/courses'),
            'icon' => 'book-open',
        );
        return $entries;
    }

    function navigation_getLibrarianNavs()
    {
        $entries = array(
            'overview' => array(
                'name' => 'Overview',
                'url' => base_url('librarian/overview'),
                'icon' => 'clipboard'
            ),
            'addBook' => array(
                'name' => 'Books',
                'url' => base_url('librarian/book'),
                'icon' => 'book-open'
            ),
            'authors' => array(
                'name' => 'Authors',
                'url' => base_url('librarian/author'),
                'icon' => 'users'
            ),
            'bookBorrowAndReturn' => array(
                'name' => 'Borrow & Return Books',
                'url' => base_url('librarian/borrowAndReturnBook'),
                'icon' => 'code'
            ),
            'profile' => array(
                'name' => 'Profile',
                'url' => base_url('librarian/profile'),
                'icon' => 'user'
            )
        );

        return $entries;
    }

    function navigation_getManagerNavs()
    {
        $entries = array(
            'company_Sessions' => array(
                'name' => 'Company Sessions',
                'url' => base_url('CompanySessionManager/companySessions'),
                'icon' => 'briefcase'
            ),
            'student_evaluation' => array(
                'name' => 'Student Evaluations',
                'url' => base_url('CompanySessionManager/studentEvaluation'),
                'icon' => 'list'
            ),
            'profile' => array(
                'name' => 'Profile',
                'url' => base_url('CompanySessionManager/profile'),
                'icon' => 'user'
            )
        );

        return $entries;
    }
}
