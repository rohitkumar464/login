<?php
session_start();
if(isset($_SESSION['login']) && !empty($_SESSION['login'])) { }
else{
    header("location:../index.php");
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Page</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/createpost.css">
</head>
<body>
   <nav class="navbar navbar-light">
   <span class="navbar a"> <img src="../assets/image/plane.png"> JOBSTAKE</span>
   <form class="form-inline">
   <a href="homepage.php"><button class="btn btn-outline-success my-2 my-sm-0" type="button">BACK</button></a>
   </form>
   </nav>
   <div class="container">
      <h3>POST A JOB</h3>
      <form class="form" action="getpost.php" method="post">
          <label for="usrname">Name</label>
          <input type="text" id="usrname" name="usrname" required>
          <label for="email">Email</label>
          <input type="text" id="email" name="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required>

          <label for="loc">Location</label>
         <input type="text" id="loc" name="loc" >
         <label for="subject">Job Title</label>
         <textarea id="subject" name="subject"></textarea>
         <label for="files" class="img">UPLOAD A THUMBNAIL IMAGE</label>
         <input id="files" style="display:none" type="file">

         <input type="submit" value="PREVIEW POST" class="submit1">
      </form>
   </div>
 </body>
</html>