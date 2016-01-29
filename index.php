<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Title Page</title><!-- Bootstrap CSS -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"><!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<script src="//code.jquery.com/jquery.js"></script>
</head>
<body>
		<div class="container">
			<?php include("includes/navibar.php"); ?>
			<div class="panel panel-primary">
				<div class="panel-heading">
						<h3 class="panel-title">Tool of Santo</h3>
				</div>
				<div class="panel-body">
					<h2>Chào bạn</h2>

					<p>Câu nói <b>“If you’re not learning, you’re dying”</b> của Bill Gates là câu hói đặc biệt đúng trong thời đại công nghệ thông tin phát triển như hiện nay, vì nếu bạn không học hỏi và phát triển, bạn chết chắc!</p>

					<hr>

					<div class="text-center"><a href="/Utinity/Quote.php" class="btn btn-primary">Quote</a></div>

					<!-- <p>Đây là những công cụ của tôi</p> -->


<!--
	<h2>Script chạy tất cả các link có trong page</h2>
	<pre>
	$("a").each(function(){
		window.open($(this).attr("href"),"_blank");
	});
	</pre>
-->
				</div>

				<!-- END panel-body -->
			</div>
			<!-- END panel -->
		</div>
		<!-- END container -->

	<!-- jQuery -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
