<?php

    class Admin_model extends CI_Model{

        public function register_user($username, $password){
            $data = array(
                'username' => $username,
                'password' => $password
            );
            
            $this->db->insert('users', $data);
        }


        public function user_login($username, $password) {
            $this->db->where('username', $username);
            $result =  $this->db->get('users');

            $hash = $result->row(0)->password;

            if($result->num_rows() == 1) {

                if(password_verify($password, $hash) == $hash ) {
                    
                    $sessiondata = array(
                        'logged_in' => true,
                        'name' => $username
                    );

                    $this->session->set_userdata($sessiondata);
                    
                }

            } else {

                 $sessiondata = array(
                    'logged_in' => FALSE
                );
                
                $this->session->set_userdata($sessiondata);

            }
        
        }

    }


?>