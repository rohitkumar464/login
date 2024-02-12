<?php 
spl_autoload_register(function($class){
    include "../model/$class.php";
});
$user = new User();
if(!empty($_SESSION['user_id'])){
    $uid = $_SESSION['user_id'];
}
if ($user->getSession()===FALSE) {
   header("location:../index.php");
}
if (isset($_GET['q'])) {
    $user->logout();
    header("location:../index.php");
}

$user->setUserID($uid);
$userInfo = $user->getUserInfo();
?>
