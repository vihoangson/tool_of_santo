<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tool of Santo</title>

	<!-- Bootstrap CSS -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="//code.jquery.com/jquery.js"></script>
	<!-- jQuery is required -->
	<script src="vendor/cropper/cropper.min.js"></script>
	<link  href="vendor/cropper/cropper.min.css" rel="stylesheet">


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style>
		img {
			max-width: 100%;
		}
	</style>
</head>
<body>
	<!-- <form action="cron.php" method="POST" role="form"> -->
	<div class="container">
		<form class="avatar-form" action="crop.php" enctype="multipart/form-data" method="post">
			<legend>Form title</legend>
			<?php
			// ============ ============  ============ ============
			// Nội dung crop
			// ============ ============  ============ ============
			// $data = [
			// 	"rotate"=>0,
			// 	"width"=>100,
			// 	"height"=>100,
			// 	"x"=>0,
			// 	"y"=>0,
			// ];
			//$data_string = json_encode($data);
			?>
			<div class="form-group">
				<input name="avatar_src" value="<?= __DIR__; ?>" type="hidden" >
				<input name="avatar_data" value='<?= $data_string; ?>' type="hidden" >
				<label for="">label</label>
				<input type="file" name="avatar_file" class="form-control" id="" placeholder="Input field">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>


	</div>


	<div class="container">
		<h1 class="page-header">Cropper with responsive container</h1>
		<button type="button" class="btn btn-primary" id="replace">Save Img</button>
		<div class="img-container">
			<img id="image" src="img/20160127193911.original.jpeg" alt="Picture">
		</div>
	</div>

	<script>

		var $image = $('#image');
		$image.cropper({
			movable: true,
			zoomable: true,
			rotatable: true,
			guides: true,
			scalable: true,
			crop: function (e) {
				var new_tweets={};
				new_tweets.x = e.x;
				new_tweets.y = e.y;
				new_tweets.width = e.width;
				new_tweets.height = e.height;
				var json = JSON.stringify(new_tweets);
				$("[name='avatar_data']").val(json);
				console.log(new_tweets);
			}
		});

		$("button").click(function(){
			console.log($.parseJSON($("[name='avatar_data']").val()));
			new_tweets = $.parseJSON($("[name='avatar_data']").val());
			$.post('imagick.php', new_tweets, function(data, textStatus, xhr) {
				console.log(data);
			});
		});

	</script>
	<!-- jQuery -->
	<!-- Bootstrap JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>