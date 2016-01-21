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
<!-- composer -->
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


					<h2>Library</h2>
					<div class="row">

						<div class="col-md-3 col-ele">
							<a href="https://www.udacity.com/how-it-works" class="thumbnail" target="_blank">
								<img src="http://placehold.it/300x300">
							</a>
							<div class="text-center"><h3>Udacity</h3></div>
							<p><b>Note:</b> </p>
						</div>

						<div class="col-md-3 col-ele">
							<a href="http://www.codecademy.com/#!/exercises/0" class="thumbnail" target="_blank">
								<img src="http://placehold.it/300x300">
							</a>
							<div class="text-center"><h3>Codecademy</h3></div>
							<p><b>Note:</b> </p>
						</div>

						<div class="col-md-3 col-ele">
							<a href="https://www.codeschool.com/" class="thumbnail" target="_blank">
								<img src="http://placehold.it/300x300">
							</a>
							<div class="text-center"><h3>Code School</h3></div>
							<p><b>Note:</b> </p>
						</div>

						<div class="col-md-3 col-ele">
							<a href="https://dash.generalassemb.ly/" class="thumbnail" target="_blank">
								<img src="http://placehold.it/300x300">
							</a>
							<div class="text-center"><h3>Dash</h3></div>
							<p><b>Note:</b> </p>
						</div>

						<div class="col-md-3 col-ele">
							<a href="http://www.w3schools.com/" class="thumbnail" target="_blank">
								<img src="http://placehold.it/300x300">
							</a>
							<div class="text-center"><h3>W3schools</h3></div>
							<p><b>Note:</b> </p>
						</div>

						<div class="col-md-3 col-ele">
							<a href="http://ocw.mit.edu/courses/electrical-engineering-and-computer-science/" class="thumbnail" target="_blank">
								<img src="http://placehold.it/300x300">
							</a>
							<div class="text-center"><h3>MIT OpenCourseWare</h3></div>
							<p><b>Note:</b> </p>
						</div>

						<div class="col-md-3 col-ele">
							<a href="https://developer.mozilla.org/en-US/" class="thumbnail" target="_blank">
								<img src="http://placehold.it/300x300">
							</a>
							<div class="text-center"><h3>Mozilla Developer Network</h3></div>
							<p><b>Note:</b> </p>
						</div>

						<div class="col-md-3 col-ele">
							<a href="http://thecodeplayer.com/" class="thumbnail" target="_blank">
								<img src="http://placehold.it/300x300">
							</a>
							<div class="text-center"><h3>The CodePlayer</h3></div>
							<p><b>Note:</b> </p>
						</div>

						<div class="col-md-3 col-ele">
							<a href="https://www.coursera.org/" class="thumbnail" target="_blank">
								<img src="http://placehold.it/300x300">
							</a>
							<div class="text-center"><h3>Coursera</h3></div>
							<p><b>Note:</b> </p>
						</div>

						<div class="col-md-3 col-ele">
							<a href="https://www.khanacademy.org/cs/tutorials/programming-basics" class="thumbnail" target="_blank">
								<img src="http://placehold.it/300x300">
							</a>
							<div class="text-center"><h3>Khan Academy</h3></div>
							<p><b>Note:</b> </p>
						</div>

						<div class="col-md-3 col-ele">
							<a href="http://learnpythonthehardway.org/" class="thumbnail" target="_blank">
								<img src="http://placehold.it/300x300">
							</a>
							<div class="text-center"><h3>Learn Python the Hard Way</h3></div>
							<p><b>Note:</b> </p>
						</div>

						<div class="col-md-3 col-ele">
							<a href="http://www.html5rocks.com/en/" class="thumbnail" target="_blank">
								<img src="http://placehold.it/300x300">
							</a>
							<div class="text-center"><h3>HTML5 Rocks</h3></div>
							<p><b>Note:</b> </p>
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