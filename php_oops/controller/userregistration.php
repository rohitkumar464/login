<?php 
spl_autoload_register(function($class){
    include "../model/$class.php";
});
$user = new User();

if ($user->getSession()===TRUE) {
    header("location:../view/home.php");
}
$status = '';

//$errors = array(); 

//If our form has been submitted.
if(isset($_POST['submit'])){
    extract($_POST);
    //Get the values of our form fields.
 
    $fullname = isset($fullname) ? $fullname : null;
    $uemail = isset($uemail) ? $uemail : null;
    $uname = isset($uname) ? $uname : null;
    $password = isset($password) ? $password : null;
    $gender = isset($gender) ? $gender : null;
    $phone =isset($phone) ? $phone :null;
    $captcha=isset($captcha) ? $captcha :null;
    // echo "hello3";
    // //Check the name and make sure that it isn't a blank/empty string.
    // if(strlen(trim($fullname)) === 0){
    //     //Blank string, add error to $errors array.
    //     $errors[] = "You must enter your fullname!";
    // }
    // echo "hello4";
    // if(strlen(trim($uname)) === 0){
    //     //Blank string, add error to $errors array.
    //     $errors[] = "You must enter your user name!";
    // }
    // if(strlen(trim($password)) === 0){
    //     //Blank string, add error to $errors array.
    //     $errors[] = "You must enter your password!";
    // }
    // //email address is valid.
    // if(!filter_var($uemail, FILTER_VALIDATE_EMAIL)) {
    //     //$email is not a valid email. Add error to $errors array.
    //     $errors[] = "That is not a valid email address!";
    // }
    // echo "hello3";
    // //If our $errors array is empty, we can assume that everything went fine.
    // if(empty($errors)){
        //insert data into database.
       if($_SESSION['captcha'] == $captcha){
        $user->setName($fullname);
        $user->setEmail($uemail);
        $user->setUsername($uname);
        $user->setPassword($password);
        $user->setGender($gender);
        $user->setPhone($phone);
        
        $register = $user->userRegistration();
       
        if ($register) {    
            $status = 'Registration successful <a href="../index.php">Click here</a> to login</div>';
            header("location:../view/registration.php?status=".$status);
        } else {    
            $status = 'Registration failed. Email or Username already exits please try again';
            header("location:../view/registration.php?status=".$status);
        }
    }
    else{
        $status = 'InValid Captcha';
            header("location:../view/registration.php?status=".$status);
    }
    }
//}

?>