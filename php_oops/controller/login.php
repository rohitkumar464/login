<?php 
spl_autoload_register(function($class){
    include "../model/$class.php";
});

$msg = '';

$user = new User();

if (isset($_POST['submit'])) { 
	extract($_POST);
  $captcha=isset($captcha) ? $captcha :null;
	$user->setUsername($email);
	$user->setPassword($password);   
  if($_SESSION['captcha'] == $captcha ){
    $login = $user->doLogin();
    if ($login) {	        
       header("location:../view/home.php");
    } else {	
      $msg="wrong password or email";
      header("location:../index.php?msg=".$msg);           
    }
  }
  else{
    $msg="Invalid Captcha!";
      header("location:../index.php?msg=".$msg); 
  }
    
}

?>