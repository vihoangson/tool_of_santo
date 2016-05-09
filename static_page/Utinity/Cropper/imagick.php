<?php
	//============ ============  ============ ============
	//  Param input necessary
	// $_POST["width"]
	// $_POST["height"]
	// $_POST["x"]
	// $_POST["y"]
	// $_POST["path_file"]
	//
	//============ ============  ============ ============
	$_POST["path_file"] = "img/20160127193911.original.jpeg";
	if(
		!(
			$_POST["width"] &&
			$_POST["height"] &&
			$_POST["x"] &&
			$_POST["y"] &&
			$_POST["path_file"]
		)
	){
		die;
	}
	//$_POST["path_file"] = "img/20160127193911.original.jpeg";

	// ============ ============  ============ ============
	// Rã biến Post ra thành các biến con
	// [$_POST["x"] => $x]
	extract($_POST);
	// Khởi tạo đối tượng Imagick với nội dung là file input
	$image = new Imagick($path_file);
	// Crop hình theo thông số truyền vào
	$image->cropImage(  $width ,  $height ,  $x ,  $y );
	// Lưu file xuống
	$image->writeImage("img_output/xxx".time().".png");

?>