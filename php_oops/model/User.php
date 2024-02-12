<?php
include "DBConnection.php";
class User
{
    protected $db;
    private $_userID;
    private $_name;
    private $_email;
    private $_username;
    private $_password;
    private $_gender;
    private $_phone;
    public function setUserID($userID) {
        $this->_userID = $userID;
    }
    public function setName($name) {
        $this->_name = $name;
    }
    public function setEmail($email) {
        $this->_email = $email;
    }
    public function setUsername($username) {
        $this->_username = $username;
    }
    public function setPassword($password) {
        $this->_password = $password;
    }
    public function setGender($gender) {
        $this->_gender = $gender;
    }
    
    public function setPhone($phone) {
        $this->_phone = $phone;
    }
    
    public function __construct() {
        $this->db = new DBConnection();
        $this->db = $this->db->returnConnection();
    }
    // User registration Method
    public function userRegistration() {
        $password = $this->hash($this->_password);
        $query = 'SELECT * FROM user WHERE user_name="'.$this->_username.'" OR email="'.$this->_username.'"';			
        $result = $this->db->query($query) or die($this->db->error);			
        $count_row = $result->num_rows;			
        if($count_row == 0 ) {
            $query = 'INSERT INTO user SET user_name="'.$this->_username.'", password="'.$password.'", name="'.$this->_name.'", email="'.$this->_email.'", gender="'.$this->_gender.'", phone="'.$this->_phone.'", status="1"';				
            $result = $this->db->query($query) or die($this->db->error);				
            return true;
        } else {
            return false;
        }
    }
    
    // User Login Method
    public function doLogin() {		
        $query = 'SELECT user_id,password from user WHERE email="'.$this->_username.'" or user_name="'.$this->_username.'"';		
        $result = $this->db->query($query) or die($this->db->error);
        $user_data = $result->fetch_array(MYSQLI_ASSOC);
        // print_r($user_data);
        $count_row = $result->num_rows;
        if ($count_row == 1) {
            if (!empty($user_data['password']) && $this->verifyHash($this->_password, $user_data['password']) == TRUE) {
                $_SESSION['login'] = TRUE;
                $_SESSION['user_id'] = $user_data['user_id'];
                return TRUE;
            } else {
                return FALSE;
            }
        }   
    }
    
    // get User Information
    public function getUserInfo() {
        $query = "SELECT user_id, name, email FROM user WHERE user_id = ".$this->_userID;
        $result = $this->db->query($query) or die($this->db->error);
        $user_data = $result->fetch_array(MYSQLI_ASSOC);
        return $user_data;
    }
    
    //get Session 
    public function getSession() {
        if(!empty($_SESSION['login']) && $_SESSION['login']==TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    // logout method
    public function logout() {
        $_SESSION['login'] = FALSE;
        unset($_SESSION);
        session_destroy();
    }

        // password hash
    public function hash($password) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        return $hash;
    }

    // password verify
    public function verifyHash($password, $vpassword) {
        if (password_verify($password, $vpassword)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
