<?php

class User_model extends CI_Model{

    //insert data
    public function add_user($formArray) {
        $this->db->insert('users', $formArray);
    }
    
    // fetch data
    public function getUsers() {
        $users = $this->db->get('users')->result_array();
        return $users;
    }

}
?>


