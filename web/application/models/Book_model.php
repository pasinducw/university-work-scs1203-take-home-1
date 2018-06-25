<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Book_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    public function getAllBooks($filter = '')
    {
        $this->db->select('*');
        $this->db->from('books_view');
        $this->db->like('title', $filter);
        $query = $this->db->get();

        return $query->result();
    }

    public function addBook($title, $publisher, $isbn, $copyCount)
    {
        $sql = '
            INSERT INTO books (title, publisher, book_id, copies) VALUES
            (?, ?, ?, ?)
        ';
        $this->db->query($sql, array($title, $publisher, $isbn, $copyCount));
    }

    public function removeBook($isbn)
    {
        $sql = '
            DELETE FROM books WHERE book_id = ?
        ';

        $query = $this->db->query($sql, array($isbn));
    }

    public function getAllAuthors($filter = '')
    {
        $this->db->select('*');
        $this->db->from('authors');
        $this->db->like('author_name', $filter);
        $query = $this->db->get();

        return $query->result();
    }

    public function addAuthor($authorName, $professorId)
    {
        $sql = '
            INSERT INTO authors (author_name, professor_id) VALUES (?, ?)
        ';
        $this->db->query($sql, array($authorName, $professorId));
    }

    public function removeAuthor($authorName)
    {
        $sql = '
            DELETE FROM authors WHERE author_name = ?
        ';

        $query = $this->db->query($sql, array($authorName));
    }

    public function addAuthorToBook($isbn, $authorName)
    {
        $sql = '
            INSERT INTO book_authorships (book_id, author_name) VALUES(?,?)
        ';
        $this->db->query($sql, array($isbn, $authorName));
    }

    public function getAllTextBooks()
    {
        $sql = '
            SELECT * FROM textbooks
        ';
        $query = $this->db->query($sql);
        return $query->result();
    }
}
