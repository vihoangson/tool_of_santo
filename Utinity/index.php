<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Utinity</title><!-- Bootstrap CSS -->
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

		$(document).ready(function() {
			equalHeight($(".thumbnail"));
			equalHeight($(".col-ele"));
			
		});
	</script>
</head>
<body>
		<div class="container">
			<?php include("../includes/navibar.php"); ?>
			<div class="panel panel-primary">
				<div class="panel-heading">
						<h3 class="panel-title">Utinity</h3>
				</div>
				<div class="panel-body">
					<h2>Utinity web</h2>
					<div class="row">
						<div class="col-md-3 col-ele">
							<a href="http://github.com" class="thumbnail" target="_blank">
								<img src="img/github-logo.png">
							</a>
							<div class="text-center"><h3>Github</h3></div>
							<p><b>Note:</b> Tạo và quản lý reponsiotry</p>
						</div>
						<div class="col-md-3 col-ele">
							<a href="http://gist.github.com" class="thumbnail" target="_blank">
								<img src="img/github-gist-logo.png">
							</a>
							<div class="text-center"><h3>Gist github</h3></div>
							<p><b>Note:</b> Tạo và chia sẻ các script</p>
						</div>
						<div class="col-md-3 col-ele">
							<a href="https://regex101.com/" class="thumbnail" target="_blank">
								<img src="img/resource-regex101.jpg">
							</a>
							<div class="text-center"><h3>Regex101</h3></div>
							<p><b>Note:</b> Học và test thử regular expression</p>
						</div>
						<div class="col-md-3 col-ele">
							<a href="http://Jsfiddle.net" class="thumbnail" target="_blank">
								<img src="img/JSfiddle-blue-w-type.sh-600x600.png">
							</a>
							<div class="text-center"><h3>Jsfiddle</h3></div>
							<p><b>Note:</b> Test thử Javascript HTML</p>
						</div>
					</div>
					<h2>Library</h2>
					<div class="row">
						<div class="col-md-3 col-ele">
							<a href="http://simplehtmldom.sourceforge.net/" class="thumbnail" target="_blank">
								<img src="img/simple_html_dom.jpg">
							</a>
							<div class="text-center"><h3>Simple html dom</h3></div>
							<p><b>Note:</b> </p>
						</div>
					</div>
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