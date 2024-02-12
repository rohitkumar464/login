<?php 
  session_start();
  
  function randText(){
    $txt="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    $str="";
    for($i=0;$i<5;$i++)
    {
      $index=rand(0,strlen($txt)-1);
      $str.=$txt[$index];
    }
    return $str;
  }

  header("Content-type:image/png");
  $image=imagecreate(80,30);
  $backColor=imagecolorallocate($image,130,130,130);
  $txtColor=imagecolorallocate($image,250,250,250);
  $code=randText();
  $_SESSION['captcha']=$code;
  imagestring($image,5,15,7,$code,$txtColor);
  imagepng($image);
  imagecolordeallocate($backColor);
  imagecolordeallocate($txtColor);
  imagedestroy($image);
?>