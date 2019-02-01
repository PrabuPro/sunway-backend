<?php

    class Login_model extends CI_Model{

        public function register_user($username, $password){
            $data = array(
                'username' => $username,
                'password' => $password
            );
            
            $this->db->insert('users', $data);
        }

    }


?>