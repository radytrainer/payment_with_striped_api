<?php
class Customer {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function addCustomer($data) {
        // prepare query
        $this->db->query('INSERT INTO customers(id, firstname,lastname,email) 
        VALUES(:id, :firstname, :lastname, :email)');

        // Bind values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':firstname',$data['firstname']);
        $this->db->bind(':lastname',$data['lastname']);
        $this->db->bind(':email',$data['email']);

        // Execute
        if($this->db->execute()) {
            return true;
        }else {
            return false;
        }
    }
    public function getCustomers() {
        $this->db->query('SELECT * FROM customers ORDER BY created_at DESC');

        $result = $this->db->resultset();
        return $result;
    }
}