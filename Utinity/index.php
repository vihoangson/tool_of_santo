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

<?php 

$array = [
	"The CodePlayer"=> [
		"The CodePlayer",
		"http://thecodeplayer.com/",
		"thecodeplayer.png",
	],
	"Codecademy"=> [
		"Codecademy",
		"http://www.codecademy.com/#!/exercises/0",
		"codecademy.png",
	],
	"Udacity"=> [
		"Udacity",
		"https://www.udacity.com/how-it-works",
		"udacity.png",
	],
	"Code School"=> [
		"Code School",
		"https://www.codeschool.com/",
		"Code School.png",
	],
	"Dash"=> [
		"Dash",
		"https://dash.generalassemb.ly/",
		"dash.png",
	],
	"W3schools"=> [
		"W3schools",
		"http://www.w3schools.com/",
		"w3schools.png",
	],
	"MIT OpenCourseWare"=> [
		"MIT OpenCourseWare",
		"http://ocw.mit.edu/courses/electrical-engineering-and-computer-science/",
		"mit.edu.png",
	],
	"Mozilla Developer Network"=> [
		"Mozilla Developer Network",
		"https://developer.mozilla.org/en-US/",
		"Mozilla Developer Network.jpg",
	],

	"Coursera"=> [
		"Coursera",
		"https://www.coursera.org/",
		"coursera.png",
	],
	"Khan Academy"=> [
		"Khan Academy",
		"https://www.khanacademy.org/cs/tutorials/programming-basics",
		"khan.png",
	],
	"Learn Python the Hard Way"=> [
		"Learn Python the Hard Way",
		"http://learnpythonthehardway.org/",
		"learnpython.png",
	],
	"HTML5 Rocks"=> [
		"HTML5 Rocks",
		"http://www.html5rocks.com/en/",
		"html5rock.png",
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



 
					<h2>Education</h2>
					<div class="row">
<?php
foreach ($order as $key => $value) {
	$value=$array[$value]
	?>
		<div class="col-md-3 col-ele">
			<a href="<?= $value[1]; ?>" class="thumbnail" target="_blank">
				<img src="img/<?= $value[2]; ?>">
			</a>
			<div class="text-center"><h3><?= $value[0]; ?></h3></div>
			<p><b>Note:</b> </p>
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