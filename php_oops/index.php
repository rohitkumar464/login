
<?php
// include 'controller/login.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
    <title>Log In</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php 
                 $msg=$_GET['msg'];
                  if(!empty($msg)){ 
                           echo '<div class="alert alert-danger">'.$msg.'</div>';
                   } ?>  

            </div>
        </div>
        <form id="signup" class="form" action="controller/login.php" method="post">
            <h1>Log In</h1>
            <p><span class="error">* required field</span></p>
            <!-- <div class="form-field">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" autocomplete="off" Required>
                <small></small>
            </div> -->

            <div class="form-field">
                <label for="email">Email: <span class="error">* </span></label>
                <input type="text" name="email" id="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"autocomplete="off" Required>
                <small></small>
            </div>

            <div class="form-field">
                <label for="password">Password: <span class="error">*</span></label>
                <input type="password" name="password" id="password"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  autocomplete="off" Required>
                <small></small>
            </div>
            <div class="form-field">
                <img src="controller/captcha.php">
                <label for="captcha">Captcha:<span class="error">* </span></label>
                <input type="text" name="captcha" id="captcha" required placeholder='Enter Captcha'>
                
                <small></small>
            </div> 

             <?php //include 'controller/captcha1.php'?> 
            <!-- <div class="form-field">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" name="confirm-password" id="confirm-password" autocomplete="off" required>
                <small></small>
            </div> -->
            <button type="submit" name="submit" class="g">Login</button>
            <a href="<?php //print SITE_URL; ?>view/registration.php">Register</a>  
            <!-- <div c>
                <input type="submit" value="Sign Up">
            </div>-->
        </form>
        <!-- <div class="btn1"><a href="login.php"><button type="button" class="btn2">Login</button></a></div>  -->
        
    </div>

    <script>
    <?php require_once("assets/js/login.js");?>
</script>
</body>
</html>


  




