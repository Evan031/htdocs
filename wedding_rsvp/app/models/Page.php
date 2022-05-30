<?php
class Page
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getGuestInfo()
    {
        $this->db->query(
            'SELECT * FROM guests WHERE rsvp = 0'
        );

        $results = $this->db->resultSet();

        return $results;
    }

    public function notAttending($guest_id)
    {
        $this->db->query(
            "INSERT INTO details (id, guest_id, main, attending) VALUES (NULL, :guest_id, 1, 0)"
        );


        // bind values
        $this->db->bind(':guest_id', $guest_id);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function attending($data)
    {
        $this->db->query(
            "INSERT INTO details (id, guest_id, main, attending) VALUES (NULL, :guest_id, :guest_main, 1)"
        );

        // bind values
        $this->db->bind(':guest_id', $data['guest_id']);
        $this->db->bind(':guest_main', $data['guest_main']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function rsvp($data)
    {
        $this->db->query(
            "UPDATE guests SET rsvp = '1' WHERE guests.id = :guest_id"
        );

        // bind values
        $this->db->bind(':guest_id', $data['guest_id']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function register($data)
    {
        $this->db->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
        // bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getMains()
    {
        $this->db->query(
            'SELECT * FROM foods'
        );

        $results = $this->db->resultSet();

        return $results;
    }
}
