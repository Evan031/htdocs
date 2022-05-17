<?php
class Dashboard
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUsers()
    {
        $this->db->query('SELECT * FROM users');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addGuest($data)
    {
        $this->db->query('INSERT INTO guests (name, surname) VALUES (:name, :surname)');
        
        // bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':surname', $data['surname']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
