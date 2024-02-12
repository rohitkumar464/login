
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Sign up</title>
    <link rel="stylesheet" href="../assets/css/registration.css">
</head>
<body>
    <div class="container">
         <div class="row">
              <div class="col-lg-12"><?php //echo $status; ?></div>
        </div>
        <div class="row">
            <div class="col-lg-12"><ul><?php 
               // foreach ($errors as $value) {
                   // echo '<li style="color: red; font-size: 13px;">'.$value.'</li>' ;
              //  }
              $status=$_GET['status'];
              if(!empty($status)){
              echo '<div class="alert alert-success">'.$status.'';
              $status=NULL;
              }
            ?></ul>
            </div>
        </div>
        <form id="signup" class="form" action="../controller/userregistration.php" method="POST">
            <h1>Registration</h1>
            <p><span class="error">* required field</span></p>
            <div class="form-field">
                <label for="fullname">Full Name:<span class="error">* </span></label>
                <input type="text" name="fullname" id="fullname" autocomplete="off" Required>
                <small></small>
            </div>
            <!-- <div class="form-field">
                <label for="fullname">LastName:</label>
                <input type="text" name="fullname" id="fullname" autocomplete="off" Required>
                <small></small>
            </div> -->
            <div class="form-field">
                <label for="uname">Username:<span class="error">* </span></label>
                <input type="text" name="uname" id="uname" autocomplete="off" Required>
                <small></small>
            </div>
            <div class="form-field">
                <label for="uemail">Email:<span class="error">* </span></label>
                <input type="text" name="uemail" id="uemail" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" autocomplete="off" Required>
                <small></small>
            </div>
             
            <div class="radio">
                <label for="gender">Gender:<span class="error">* </span> </label>
                
                <input type="radio" name="gender" id="male" value="Male" autocomplete="off" Required>Male
             
                <input type="radio" name="gender" id="female" value="Female" autocomplete="off" Required>Female
      
                
            </div>
           
            <div id="input-wrapper">
                Contact NO.<span class="error">* </span><br>
               <label for="phone">+91</label>
               <input type="text" id='phone' name="phone" pattern="^(\+91[\-\s]?)?[0]?(91)?[6789]\d{9}$" oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}"/>
            </div>
            <br><br>
            <!-- <div class="form-field">
                <label for="country">Country:</label>
                <select class="form-select" id="country-dropdown" autocomplete="off" Required>
                    
                </select>
                <small></small>
            </div>
            <div class="form-field">
                <label for="state">State:</label>
                <select class="form-select" id="country-dropdown" autocomplete="off" Required>
                    
                </select>
                <small></small>
            </div>

            <div class="form-field">
                <label for="city">City:</label>
                <select class="form-select" id="country-dropdown" autocomplete="off" Required>
                    
                </select>
                <small></small>
            </div> -->
            <div class="form-field">
                <label for="password">Password:<span class="error">* </span></label>
                <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" autocomplete="off" Required>
                <small></small>
            </div>
            <div class="form-field">
                <img src="../controller/captcha.php">
                <label for="captcha">Captcha:<span class="error">* </span></label>
                <input type="text" name="captcha" id="captcha" required placeholder='Enter Captcha'>
                
                <small></small>
            </div>
            <!-- <div class="form-field">
                <label for="firstname">First Name:</label>
                <input type="text" name="firstname" id="firstname" autocomplete="off" Required>
                <small></small>
            </div>
            <div class="form-field">
                <label for="lastname">Last Name:</label>
                <input type="text" name="lastname" id="last name" autocomplete="off" Required>
                <small></small>
            </div> -->

            <!-- <div class="form-field">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" autocomplete="off" Required>
                <small></small>
            </div> 
           
           
            <div class="radio">
                <label>Gender: </label>
                
                <input type="radio" name="gender" id="gender" autocomplete="off" Required>Male
             
                <input type="radio" name="gender" id="gender" autocomplete="off" Required>Female
      
                
            </div>
            <br>
            <div class="form-field">
                <img src="captcha.php">
                <label for="captcha">Captcha:</label>
                <input type='text' name='captcha' required placeholder='Enter Captcha'>
                
                <small></small>
            </div>    
           
            <div class="form-field">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" autocomplete="off" Required>
                <small></small>
            </div>
            
            <div class="form-field">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" name="confirm-password" id="confirm-password" autocomplete="off" required>
                <small></small>
            </div>  -->
            <?php //include 'captcha1.php'?>
            <div class="footer">
                <input type="submit" value="Register" name="submit">
              
                <button type="button" onclick="fun()" class="btn2">Reset</button>
            </div>
            <div><a href="../index.php">Already registered? Click Here!</a> </div>
        </form>
       
     
      
     
    </div>
    <script>
      

        <?php require_once("../assets/js/registration.js");?>
    </script>   
</body>
</html>    