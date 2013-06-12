<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Users {
    
    public function __construct() {
        $this->CI =& get_instance();
    }

    public function login($username, $password) {
    
        $this->CI->db->where('client_email', $username);
        $client = $this->CI->db->get('clients');
        
        if ($client->num_rows() > 0) {
            
            $user = $client->result();
            if ($password == $user['0']->client_password) {
                $data = array(
                              'username'    =>  $username,
                              'is_loggedIn' =>  true
                );
                
                $this->CI->session->set_userdata($data);
                return true;
                
            } else {
                return false;
                
            }
            
        } else {
            return false;
            
        }
    
    }
    
    public function logout() {
        
    }
    
    public function get_userId($username) {
        
    }
}
?>