<?php
session_start();
if(isset($_SESSION['login']) && !empty($_SESSION['login'])) {
   
}
else{
    header("location:../index.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Home Page</title>
    <link rel="stylesheet" href="../assets/css/home.css">
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar">
        
            <span class="a"> <img src="../assets/image/plane.png" class="img"> Profile</span>
            <form class="form-inline">
            <a href="<?php //print SITE_URL; ?>../controller/logout.php?q=logout" class="float-right btn btn-danger btn-sm">LOGOUT</a>
            </form>
            
        
    </nav>
    </div> 
    <div class="container">
            <div class="row">
              <div class="col-sm-12 edit">
                  <!-- <form action="#" class="form"> -->
               
                  <a href = "createpost.php"><i class="fa fa-plus-square"></i></a>
                  <!-- </form> -->
              </div>
           </div>
            <!-- <div class="row">
                <div class="col-lg-12 h2">
                    <h2>Profile</h2>
                    <form class="form-inline">
            <a href="<?php //print SITE_URL; ?>../controller/logout.php?q=logout" class="float-right btn btn-danger btn-sm">LOGOUT</a>
            </form>
                    <button class="createpost"><i class="fa fa-plus-square"></i></button>                  
                </div>
            </div> -->
               
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <p><strong>Full Name: </strong><?php print $userInfo['name'];?></p>        
                        <p><strong>Email: </strong><?php print $userInfo['email'];?></p>
                    </div>
                </div> -->
            <!-- <a href="editpost.php">       -->
            <div class="row row2">
                <div class="col-sm-3 column">
                <img src="../assets/image/book.jpg" class="img2">
            </div>
            <div class="col-sm-9 column">
                <div class="parent-heading">
        
                     <h5>Job Title<?php //echo $rows['jobtitle']; ?></h5>
                </div>   
                <div class="child-heading">
                     <b><span>Posted by -</span></b><span><?php// echo $rows['name']; ?></span>
                </div>
                <div class="child-heading">
                     <span class=child2-heading>
                        <b><span>Posted on -</span></b><span><?php //echo date("d-m-Y"); ?></span>
                     </span>   
                     <span class=child3-heading>
                        <b><span>Location -</span></b><span><?php //echo $rows['location']; ?></span>
                     </span>
                </div>
                <div class="child-heading">
                     <b><span>Contact Email -</span></b><span><?php echo $rows['email']; ?></span>
               
                </div>
          
            </div>
       
            <!-- </a> -->
            <div class="row">
            <div class="col-sm-12">
                <hr>
            </div>
            </div> 

             
    </div>
</body>
</html>