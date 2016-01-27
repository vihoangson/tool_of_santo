<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Tutorial</title><!-- Bootstrap CSS -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"><!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<style>
		a.thumbnail {
			vertical-align: middle;
			display: table-cell;
			background:white;
		}
	</style>
	<script src="//code.jquery.com/jquery.js"></script>
	<script>
		function equalHeight(group) {
			var tallest = 0;
			group.each(function() {
				var thisHeight = $(this).height();
				if(thisHeight > tallest) {
					tallest = thisHeight;
				}
			});
			group.each(function() { $(this).height(tallest); });
		}
		$(window).load(function(){
			equalHeight($(".thumbnail"));
			equalHeight($(".col-ele"));
		});
		$(document).ready(function() {
			$(".title-trick").each(function(index, el) {
				$(".summary").append("<h5><a href='#"+$(this).attr("id")+"'>"+$(this).text()+"</a></h5>");
			});
		});
	</script>
</head>
<body>
<!-- composer -->
		<div class="container">
			<?php include("../includes/navibar.php"); ?>
			<div class="panel panel-primary">
				<div class="panel-heading">
						<h3 class="panel-title">Tutorial</h3>
				</div>
				<div class="panel-body">
					<h2>Tutorial</h2>
					<h3>Summary</h3>
					<div class="summary"></div>
					<div class="row">
						<!-- ============ ============ ============  ============ ============ ============ -->
						<hr>
						<h2 class="text-center title-trick" id="01">Hướng dẫn: Multi cursor</h2>
						<p class="text-center"><img style="width:100%;" src="files/multi_cursor.gif"></p>
						<!-- ============ ============ ============  ============ ============ ============ -->
						<hr>
						<h2 class="text-center title-trick" id="02">Hướng dẫn: Package docblockr</h2>
						<p class="text-center"><img style="width:100%;" src="files/docblockr.gif"></p>
						<!-- ============ ============ ============  ============ ============ ============ -->
						<hr>
						<h2 class="text-center title-trick" id="03">Hướng dẫn: Package Insert nums</h2>
						<p class="text-center"><img style="width:100%;" src="files/insert_nums.gif"></p>
						<!-- ============ ============ ============  ============ ============ ============ -->
						<hr>
						<h2 class="text-center title-trick" id="04">Max width - CSS3</h2>
<h3> Code CSS</h3>
<pre>
	@media screen and (max-width:768px){
		.test-size{
			display:none;
		}
	}
</pre>
<h3>Preview</h3>
						<p class="text-center"><img style="width:100%;" src="files/CSS3-max-width.gif"></p>

					</div>
<p><a href="\\10.11.8.118\www\nabtesco\application\controllers\Library.php">\\10.11.8.118\www\nabtesco\application\controllers\Library.php</a></p>
				<!-- END panel-body -->
			</div>
			<!-- END panel -->
		</div>
		<!-- END container -->
		
	<!-- jQuery -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>