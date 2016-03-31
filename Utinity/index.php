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
		$(window).load(function(){
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
						<div class="col-md-3 col-ele">
							<a href="http://codepen.io/" class="thumbnail" target="_blank">
								<img src="img/Codepen.png">
							</a>
							<div class="text-center"><h3>Codepen</h3></div>
							<p><b>Note:</b> Tạo và chia sẻ các script</p>
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
						<div class="col-md-3 col-ele">
							<a href="http://jade-lang.com/" class="thumbnail" target="_blank">
								<img src="img/jade_lang.png">
							</a>
							<div class="text-center"><h3>Jade HTML lang template</h3></div>
							<p><b>Note:</b> </p>
						</div>
						
					</div>
					<?php
							$array_website = [
								"The CodePlayer"=> [
									"name_web"    =>"The CodePlayer",
									"link_web"    =>"http://thecodeplayer.com/",
									"img_preview" =>"thecodeplayer.png",
									"note"        =>"Đây là một trang web đáng xem",
								],
								"Codecademy"=> [
									"name_web"    =>"Codecademy",
									"link_web"    =>"http://www.codecademy.com/#!/exercises/0",
									"img_preview" =>"codecademy.png",
									"note"        =>"",
								],
								"Udacity"=> [
									"name_web"    =>"Udacity",
									"link_web"    =>"https://www.udacity.com/how-it-works",
									"img_preview" =>"udacity.png",
									"note"        =>"",
								],
								"Code School"=> [
									"name_web"    =>"Code School",
									"link_web"    =>"https://www.codeschool.com/",
									"img_preview" =>"Code School.png",
									"note"        =>"",
								],
								"Dash"=> [
									"name_web"    =>"Dash",
									"link_web"    =>"https://dash.generalassemb.ly/",
									"img_preview" =>"dash.png",
									"note"        =>"",
								],
								"W3schools"=> [
									"name_web"    =>"W3schools",
									"link_web"    =>"http://www.w3schools.com/",
									"img_preview" =>"w3schools.png",
									"note"        =>"",
								],
								"MIT OpenCourseWare"=> [
									"name_web"    =>"MIT OpenCourseWare",
									"link_web"    =>"http://ocw.mit.edu/courses/electrical-engineering-and-computer-science/",
									"img_preview" =>"mit.edu.png",
									"note"        =>"",
								],
								"Mozilla Developer Network"=> [
									"name_web"=>"Mozilla Developer Network",
									"link_web"=>"https://developer.mozilla.org/en-US/",
									"img_preview"=>"Mozilla Developer Network.jpg",
									"note"=>"",
								],
								"Coursera"=> [
									"name_web"=>"Coursera",
									"link_web"=>"https://www.coursera.org/",
									"img_preview"=>"coursera.png",
									"note"=>"",
								],
								"Khan Academy"=> [
									"name_web"=>"Khan Academy",
									"link_web"=>"https://www.khanacademy.org/cs/tutorials/programming-basics",
									"img_preview"=>"khan.png",
									"note"=>"",
								],
								"Learn Python the Hard Way"=> [
									"name_web"=>"Learn Python the Hard Way",
									"link_web"=>"http://learnpythonthehardway.org/",
									"img_preview"=>"learnpython.png",
									"note"=>"",
								],
								"HTML5 Rocks"=> [
									"name_web"=>"HTML5 Rocks",
									"link_web"=>"http://www.html5rocks.com/en/",
									"img_preview"=>"html5rock.png",
									"note"=>"",
								]
							];
							$order = [
							"The CodePlayer",
							"Codecademy",
							"W3schools",
							"Code School",
							"HTML5 Rocks",
							"Mozilla Developer Network",
							"Learn Python the Hard Way",
							"Udacity",
							"Dash",
							"MIT OpenCourseWare",
							"Coursera",
							"Khan Academy",
							];
						?>
					<hr>
					<h2>Education</h2>
					<h4>Một số trang web dạy lập trình</h4>
					<div class="row">
						<?php
						foreach ($order as $key => $value) {
							$value=$array_website[$value];
							?>
								<div class="col-md-3 col-ele text-cente"r>
									<a href="<?= $value["link_web"]; ?>" class="thumbnail" target="_blank">
										<img src="img/<?= $value["img_preview"]; ?>">
									</a>
									<div class="text-center"><h3><?= $value["name_web"]; ?></h3></div>
									<p><b>Note:</b> <?= $value["note"]; ?> </p>
								</div>
							<?php
						}
						?>
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