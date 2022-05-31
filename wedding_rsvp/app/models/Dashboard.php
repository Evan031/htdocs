<?php
class Dashboard
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getGuests()
    {
        $this->db->query('SELECT * FROM guests ORDER BY id DESC');

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

    public function deleteGuest($id){
        $this->db->query('DELETE FROM guests WHERE id = :id');
        // bind values
        $this->db->bind(':id', $id);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function updateGuest($data)
    {
        $this->db->query('UPDATE guests SET name = :name, surname = :surname WHERE id = :id');
        // bind values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':surname', $data['surname']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getGuestById($id)
    {
        $this->db->query('SELECT * FROM guests WHERE id = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function guestAttendingGraph()
    {

        $this->db->query('SELECT COUNT(IF(attending = 1, 1, NULL)) AS "Yes", COUNT(IF(attending = 0, 1, NULL)) AS "No" FROM details');

        $results = $this->db->resultSet();

        return $results;
        
    }

    public function guestRsvpGraph()
    {

        $this->db->query('SELECT COUNT(IF(rsvp = 1, 1, NULL)) AS "Yes", COUNT(IF(rsvp = 0, 1, NULL)) AS "No" FROM guests');

        $results = $this->db->resultSet();

        return $results;
        
    }

    public function getGuestCount()
    {
        $this->db->query('SELECT * FROM guests');

        $count = $this->db->rowCount();

        return $count;
    }

    
}
