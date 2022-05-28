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
            'SELECT * FROM guests'
        );

        $results = $this->db->resultSet();

        return $results;
    }

    public function notAttending($guest_id)
    {
        $this->db->query("INSERT INTO details (id, guest_id, main, attending) VALUES (NULL, :guest_id, 1, 0)");
  
        // bind values
        $this->db->bind(':guest_id', $guest_id);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function Attending($guest_id)
    {
        $this->db->query("INSERT INTO details (id, guest_id, main, attending) VALUES (NULL, :guest_id, 1, 0)");
  
        // bind values
        $this->db->bind(':guest_id', $guest_id);

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
