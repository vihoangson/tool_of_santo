<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<div class="container">
		<?php include("../includes/navibar.php"); ?>
		<h1>Tools</h1>
		<div class="panel panel-primary">
			  <div class="panel-heading">
					<h3 class="panel-title">Mở nhiều link 1 lúc</h3>
			  </div>
			  <div class="panel-body">
				<h3>Ví dụ:</h3>
				http://nabtesco.com.santo.cba/inquiry/index<br>
				http://nabtesco.com.santo.cba/inquiry/webmaster<br>
				http://nabtesco.com.santo.cba/inquiry/ir<br>
				http://nabtesco.com.santo.cba/inquiry/recruit<br>
				http://nabtesco.com.santo.cba/inquiry/products<br>
				http://nabtesco.com.santo.cba/inquiry/checkData<br>
				http://nabtesco.com.santo.cba/inquiry/confirm<br>
				http://nabtesco.com.santo.cba/inquiry/complete<br>

				<p><textarea name="" id="input-link" class="form-control" rows="20" required="required"></textarea></p>
				<p><button class="btn btn-lg btn-block btn-primary" id="input-link_btn">Process</button></p>
			  </div>
		</div>
	</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script>
		$("#input-link_btn").click(function(){
			var links = $("#input-link").val().split("\n");
			$.each(links, function(index, val) {
				if(val.match(/^http/)){
					window.open(val,"_blank");
				}
			});
		})
		</script>
	</body>
</html>