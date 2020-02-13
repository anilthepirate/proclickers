<?php

class Photographer extends CI_Model
{

    // Insert registration data in database
    public function registration_insert($data)
    {

        // Query to check whether username already exist or not
        $condition = "email =" . "'" . $data['email'] . "'";
        $this->db->select('*');
        $this->db->from('photographers');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {

            // Query to insert data in database
            $this->db->insert('photographers', $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            }
        } else {
            return false;
        }
    }

    // Read data using username and password
    public function login($data)
    {

        $condition = "email =" . "'" . $data['email'] . "' AND " . "password =" . "'" . md5($data['password']) . "'";
        $this->db->select('*');
        $this->db->from('photographers');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    // Read data from database to show data in admin page
    public function read_user_information($email)
    {

        $condition = "email =" . "'" . $email . "'";
        $this->db->select('*');
        $this->db->from('photographers');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function get_photographers($skill,$city)
    {
        if($skill!=''){

            $q = "SELECT * FROM photographers where city = '$city' AND skills= '$skill'";
        }
        else{
            $q = "SELECT * FROM photographers where city = '$city' AND skills like '%%'";

        }
        $sql = $this->db->query($q);
       /*  if (!$sql->num_rows() > 0) {
            die("There are no photographers in the database.");
        } */
        return $sql->result();
        
    }
    function get_photographer_details($id)
    {
        $q = "SELECT * FROM photographers where id = '$id'";
        $sql = $this->db->query($q);
       /*  if (!$sql->num_rows() > 0) {
            die("There are no photographers in the database.");
        } */
        return $sql->result();
        
    }
}
