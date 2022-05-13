<?php
class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Login User
    public function login($email, $password)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        $db_password = $row->password;
        if (password_verify($password, $db_password)) {
            return $row;
        } else {
            return false;
        }
    }
}
