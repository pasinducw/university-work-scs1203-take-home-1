<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Librarian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('professor_model');
        $this->load->model('user_model');
        $this->load->model('book_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        redirect(base_url('/librarian/overview'));
    }

    public function overview()
    {
        $data = array(
            'navigationData' => getNavigationEntries('librarian'),
            'view' => "pages/librarian/overview",
            'viewData' => array(),
        );

        $books = $this->book_model->getAllBooks();
        // $notReturnedBooks = $this->book_model->getAllNotReturnedBooks();
        $textBooks = $this->book_model->getAllTextBooks();

        $data['viewData']['books'] = $books;
        $data['viewData']['textBooks'] = $textBooks;

        $this->load->view('templates/dashboard', $data);

    }

    public function book()
    {
        //adding book rules
        $this->form_validation->set_rules('input-book-title', 'Title', 'required');
        $this->form_validation->set_rules('input-book-pub', 'Publisher', 'required');
        $this->form_validation->set_rules('input-book-isbn', 'ISBN', 'required');
        $this->form_validation->set_rules('input-book-copy-count', 'Number of copies', 'required');
        $this->form_validation->set_rules('input-book-publish-year', 'Published year', 'required');

        if ($this->input->post('add-book-request') && $this->form_validation->run() == true) {
            $title = $this->input->post('input-book-title');
            $publisher = $this->input->post('input-book-pub');
            $isbn = $this->input->post('input-book-isbn');
            $copyCount = $this->input->post('input-book-copy-count');

            $this->book_model->addBook($title, $publisher, $isbn, $copyCount);
        }

        if ($this->input->post('delete-book-request')) {
            $isbn = $this->input->post('delete-book-isbn');
            $this->book_model->removeBook($isbn);
        }

        if ($this->input->post('add-author-to-book-request')) {
            $isbn = $this->input->post('add-author-request-book');
            $authorName = $this->input->post('add-author-request-author');

            $this->book_model->addAuthorToBook($isbn, $authorName);
        }

        $data = array(
            'navigationData' => getNavigationEntries('librarian'),
            'view' => "pages/librarian/book",
            'viewData' => array(),
        );

        $authors = $this->book_model->getAllAuthors('');

        $bookTitleFilter = $this->input->post('input-filter-book-title');
        $books = $this->book_model->getAllBooks($bookTitleFilter);

        $data['viewData']['books'] = $books;
        $data['viewData']['authors'] = $authors;

        $this->load->view('templates/dashboard', $data);
    }

    public function author()
    {
        $this->form_validation->set_rules('input-author-name', 'Author Name', 'required');
        if ($this->input->post('add-author-request') && $this->form_validation->run() == true) {
            $authorName = $this->input->post('input-author-name');
            $professorId = $this->input->post('select-prof') == '' ? null : $this->input->post('select-prof');
            $this->book_model->addAuthor($authorName, $professorId);
        }

        if ($this->input->post('remove-author-request')) {
            $authorName = $this->input->post('input-delete-author-name');
            $this->book_model->removeAuthor($authorName);
        }

        $data = array(
            'navigationData' => getNavigationEntries('librarian'),
            'view' => "pages/librarian/author",
            'viewData' => array(),
        );

        $professorFilter = $this->input->post('input-prof-name');
        $professors = $this->professor_model->getAllProfessors($professorFilter);

        $authorNameFilter = $this->input->post('input-filter-author-name');
        $authors = $this->book_model->getAllAuthors($authorNameFilter);

        $data['viewData']['professors'] = $professors;
        $data['viewData']['authors'] = $authors;

        $this->load->view('templates/dashboard', $data);
    }

    public function borrowAndReturnBook()
    {
        $data = array(
            'navigationData' => getNavigationEntries('librarian'),
            'view' => "pages/librarian/borrowAndReturnBook",
            'viewData' => array(),
        );

        $this->load->view('templates/dashboard', $data);
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
            'navigationData' => getNavigationEntries('librarian'),
            'view' => "pages/common/profile/profileView",
            'viewData' => array(),
        );

        $data['viewData']['user'] = $this->user_model->getUser($user['user_id']);
        $data['viewData']['formSubmissionLink'] = '/librarian/profile';

        $this->load->view('templates/dashboard', $data);

    }
}
