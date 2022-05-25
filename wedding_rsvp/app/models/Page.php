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
}
