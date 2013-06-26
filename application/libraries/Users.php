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
            $new_password = $user['0']->client_salt . $password;
            $hash = hash('sha256', $new_password);
            if ($hash == $user['0']->client_password) {
                $data = array(
                              'username'    =>  $username,
                              'id'          =>  $user['0']->id,
                              'company_name'=>  $user['0']->client_name,
                              'is_loggedIn' =>  true
                );

                if ($user['0']->is_admin == 1) {
                    $data['is_admin'] = 1;
                }
                if ($user['0']->chg_password == 1) {
                    $data['chg_password'] = 1;
                }
                
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

        $this->CI->db->where('client_email', $username);
        $raw = $this->CI->db->get('clients');

        $result = $raw->result();
        return $result['0']->id;

        
    }
}
?>