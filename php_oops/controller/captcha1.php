<?php
	 session_start();

  

	if(isset($_POST['submit'])){
	    // $email=$_POST['email'];
		// $password = $_POST['password'];
		$captcha = $_POST['captcha'];
        // echo $username;
		// if($email == "admin@gmail.com" && $password == "Admin@123"){
			if($_SESSION['captcha'] == $captcha){
				echo "<center><label class='text-success'>Login successfully</label></center>";
			}else{
				echo "<center><label class='text-danger'>Invalid captcha!</label></center>";
			}
		
	}
?>