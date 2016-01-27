<?php

  print_r($_POST);
  extract($_POST);
  $image = new Imagick("img/20160127193911.original.jpeg");
  $image->cropImage(  $width ,  $height ,  $x ,  $y );
  $image->writeImage("xxx".time().".png");
  echo $cropped;


 ?>