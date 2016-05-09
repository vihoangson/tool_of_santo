<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Tool of Santo</title><!-- Bootstrap CSS -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"><!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<script src="//code.jquery.com/jquery.js"></script>
	<script>
	$(document).ready(function() {
		$(".change-size-6").click(function(event) {
			$(".row > div").attr('class','');
			$(".row > div").addClass('col-md-6');
		});
		$(".change-size-4").click(function(event) {
			$(".row > div").attr('class','');
			$(".row > div").addClass('col-md-4');
		});
		$(".change-size-3").click(function(event) {
			$(".row > div").attr('class','');
			$(".row > div").addClass('col-md-3');
		});
		$(".change-size-2").click(function(event) {
			$(".row > div").attr('class','');
			$(".row > div").addClass('col-md-2');
		});
	});
	</script>
</head>
<body>
		<div class="container">
			<?php include("../includes/navibar.php"); ?>
			<div class="panel panel-primary">
				<div class="panel-heading">
						<h3 class="panel-title">Bootstrap CDN</h3>
				</div>
				<div class="panel-body">

							<button type="button" class="btn btn-info change-size-6">size 6</button>
							<button type="button" class="btn btn-info change-size-4">size 4</button>
							<button type="button" class="btn btn-info change-size-3">size 3</button>
							<button type="button" class="btn btn-info change-size-2">size 2</button>
							<hr>
							<div class="row">
								<div class="col-md-2">
									<a href="#" class="thumbnail"><img src="thumbnail/cerulean.png"></a>
									<input class="form-control" id="html_cerulean" type="text" value="&lt;link href=&quot;https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/cerulean/bootstrap.min.css&quot; rel=&quot;stylesheet&quot; integrity=&quot;sha256-Ucf/ylcKTNevYP6l7VNUhGLDRZPQs1+LsbbxuzMxUJM= sha512-FW2XqnqMwERwg0LplG7D64h8zA1BsxvxrDseWpHLq8Dg8kOBmLs19XNa9oAajN/ToJRRklfDJ398sOU+7LcjZA==&quot; crossorigin=&quot;anonymous&quot;&gt;">
									<hr>
								</div>
								<div class="col-md-2">
									<a href="#" class="thumbnail"><img src="thumbnail/cosmo.png"></a>
									<input class="form-control" id="html_cosmo" type="text" value="&lt;link href=&quot;https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/cosmo/bootstrap.min.css&quot; rel=&quot;stylesheet&quot; integrity=&quot;sha256-Whc+9091keLVBxbyK4U697hqB4bcED+6LC64E9GuJkk= sha512-9PPlANXApnRCz1LMx2LPWwRfOKkWjQvH98q2lkxEG6/r6YVoQ+F48btbiuOpDsWHjpZrCfcGrPoVenVl69V09A==&quot; crossorigin=&quot;anonymous&quot;&gt;">
									<hr>
								</div>
								<div class="col-md-2">
									<a href="#" class="thumbnail"><img src="thumbnail/cyborg.png"></a>
									<input class="form-control" id="html_cyborg" type="text" value="&lt;link href=&quot;https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/cyborg/bootstrap.min.css&quot; rel=&quot;stylesheet&quot; integrity=&quot;sha256-P5gS9tfR0S0WBWIsn0OUp1YR2pcYMGwgfwjxX3AqncA= sha512-Jwcua5M3o+swptQ5w8vJxSuiFjfuTG0mwkJAQ/XMoT8dLVr7ZyhiLxEZPwuDSTtQEl22wYbdfQAlGxd7otaCJw==&quot; crossorigin=&quot;anonymous&quot;&gt;">
									<hr>
								</div>
								<div class="col-md-2">
									<a href="#" class="thumbnail"><img src="thumbnail/darkly.png"></a>
									<input class="form-control" id="html_darkly" type="text" value="&lt;link href=&quot;https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/darkly/bootstrap.min.css&quot; rel=&quot;stylesheet&quot; integrity=&quot;sha256-KC5lAzGRWwscU0sTmXtd8ka5mt7Vk8a0L5JqOhwA28s= sha512-+f2l7T69JKgnn0+Lc8P0WpM4J34GfEIInTI+iLOQWekcR9KxXE1epKQkwzFIZ7mf12jQlCryh2HfZqS8GcpR8Q==&quot; crossorigin=&quot;anonymous&quot;&gt;">
									<hr>
								</div>
								<div class="col-md-2">
									<a href="#" class="thumbnail"><img src="thumbnail/flatly.png"></a>
									<input class="form-control" id="html_flatly" type="text" value="&lt;link href=&quot;https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/flatly/bootstrap.min.css&quot; rel=&quot;stylesheet&quot; integrity=&quot;sha256-Av2lUNJFz7FqxLquvIFyxyCQA/VHUFna3onVy+5jUBM= sha512-zyqATyziDoUzMiMR8EAD3c5Ye55I2V3K7GcmJDHbL49cXzFQCEA6flSKqxEzwxXqq73/M4A0jKFFJ/ysEhbExQ==&quot; crossorigin=&quot;anonymous&quot;&gt;">
									<hr>
								</div>
								<div class="col-md-2">
									<a href="#" class="thumbnail"><img src="thumbnail/journal.png"></a>
									<input class="form-control" id="html_journal" type="text" value="&lt;link href=&quot;https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/journal/bootstrap.min.css&quot; rel=&quot;stylesheet&quot; integrity=&quot;sha256-fHWoqb8bPKjLiC7AuV6qy/lt0hrzfwM0ciyAu7Haf5w= sha512-3t2GeiCRNeKhZnUaUMygGiLKZzb/vPhvfw3y1Rt2FCwKuRaLVrOCTpavIYsZ4xqM52mbO7M93NaXbm/9dOA2Og==&quot; crossorigin=&quot;anonymous&quot;&gt;">
									<hr>
								</div>
								<div class="col-md-2">
									<a href="#" class="thumbnail"><img src="thumbnail/lumen.png"></a>
									<input class="form-control" id="html_lumen" type="text" value="&lt;link href=&quot;https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/lumen/bootstrap.min.css&quot; rel=&quot;stylesheet&quot; integrity=&quot;sha256-QSktus/KATft+5BD6tKvAwzSxP75hHX0SrIjYto471M= sha512-787L1W8XyGQkqtvQigyUGnPxsRudYU2fEunzUP5c59Z3m4pKl1YaBGTcdhfxOfBvqTmJFmb6GDgm0iQRVWOvLQ==&quot; crossorigin=&quot;anonymous&quot;&gt;">
									<hr>
								</div>
								<div class="col-md-2">
									<a href="#" class="thumbnail"><img src="thumbnail/paper.png"></a>
									<input class="form-control" id="html_paper" type="text" value="&lt;link href=&quot;https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/paper/bootstrap.min.css&quot; rel=&quot;stylesheet&quot; integrity=&quot;sha256-ZSKfhECi0yCEmGVAuQLWTHtJEn2vBNPexEWsJCIC/Nc= sha512-b+mSnD4QXw1uYwkgJ3d0XxoMXo+ZKHJNTNNFIddJ0IazcwKvKYtIlWADZ1JEREJzxUG428sfCw7qDuswAFcrOQ==&quot; crossorigin=&quot;anonymous&quot;&gt;">
									<hr>
								</div>
								<div class="col-md-2">
									<a href="#" class="thumbnail"><img src="thumbnail/readable.png"></a>
									<input class="form-control" id="html_readable" type="text" value="&lt;link href=&quot;https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/readable/bootstrap.min.css&quot; rel=&quot;stylesheet&quot; integrity=&quot;sha256-1ROOYEu5qE1d8KD4rRwaA0SiMa6HgZbi8wfdUq2Y4KY= sha512-OF8N9v4J29doCMzg5g0dJ6uz/bnqOaMGz1XFy15YomHPsHAhg52BKTqqi6n7n/Fid2V9CZu2SkyEwivsoUTH7Q==&quot; crossorigin=&quot;anonymous&quot;&gt;">
									<hr>
								</div>
								<div class="col-md-2">
									<a href="#" class="thumbnail"><img src="thumbnail/sandstone.png"></a>
									<input class="form-control" id="html_sandstone" type="text" value="&lt;link href=&quot;https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/sandstone/bootstrap.min.css&quot; rel=&quot;stylesheet&quot; integrity=&quot;sha256-oqtj+Pkh1c3dgdH6V9qoS7qwhOy2UZfyVK0qGLa9dCc= sha512-izanB/WZ07hzSPmLkdq82m5xS7EH/qDMgl5aWR37EII+rJOi5c6ouJ3PYnrw6K+DWQcnMZ+nO1NqDr6SBKLBDg==&quot; crossorigin=&quot;anonymous&quot;&gt;">
									<hr>
								</div>
								<div class="col-md-2">
									<a href="#" class="thumbnail"><img src="thumbnail/simplex.png"></a>
									<input class="form-control" id="html_simplex" type="text" value="&lt;link href=&quot;https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/simplex/bootstrap.min.css&quot; rel=&quot;stylesheet&quot; integrity=&quot;sha256-rgHoMgF45/9e2kvxfvR0KarwQNw5CRqgxbrthGpeUuc= sha512-CGGV53FSdrXrjyGCNk04p+xuna3CbE33n773A0EEmqtcN8W3NaFsR0vSQcbll5dpSS90d3i2Zh3jFX/j46hzJA==&quot; crossorigin=&quot;anonymous&quot;&gt;">
									<hr>
								</div>
								<div class="col-md-2">
									<a href="#" class="thumbnail"><img src="thumbnail/slate.png"></a>
									<input class="form-control" id="html_slate" type="text" value="&lt;link href=&quot;https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/slate/bootstrap.min.css&quot; rel=&quot;stylesheet&quot; integrity=&quot;sha256-purz3wKA8uL+3JryAuYkSkIZL1CHBSzJ2UwvxAOmYmM= sha512-ge9yLSNqO8D9q8z+kLuUnluXxJTVKdLCwzYBS9rZ3eDW7oJK+mLjRsQa4995TpGINC4GWYi4S2ocDssunh1q3g==&quot; crossorigin=&quot;anonymous&quot;&gt;">
									<hr>
								</div>
								<div class="col-md-2">
									<a href="#" class="thumbnail"><img src="thumbnail/spacelab.png"></a>
									<input class="form-control" id="html_spacelab" type="text" value="&lt;link href=&quot;https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/spacelab/bootstrap.min.css&quot; rel=&quot;stylesheet&quot; integrity=&quot;sha256-Ms+D/LmYu22BlovNARzPeE+n0PSOreOjj3aCsoHqi9o= sha512-OIJ6pwbyFgZ1r01HjgmF0MCHZstQ4L7n6nye+G2q/z8vvzG5On8s6fSFp3OkOVsYj+tVRNmWi8PYKTU3Fd4B7g==&quot; crossorigin=&quot;anonymous&quot;&gt;">
									<hr>
								</div>
								<div class="col-md-2">
									<a href="#" class="thumbnail"><img src="thumbnail/superhero.png"></a>
									<input class="form-control" id="html_superhero" type="text" value="&lt;link href=&quot;https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/superhero/bootstrap.min.css&quot; rel=&quot;stylesheet&quot; integrity=&quot;sha256-AbCXzDgd7Vj/2JrsXgjrLdYZ92AgN262cXvQr4tAQa4= sha512-cA2CLCEXBR7hnXGgSNa+TaQ7WT2zW1IVm6uCLcu3ebHNhy+VIudw9kwgHlcL57wCiiXLZ1x7yT5Mv3QkDO2XZA==&quot; crossorigin=&quot;anonymous&quot;&gt;">
									<hr>
								</div>
								<div class="col-md-2">
									<a href="#" class="thumbnail"><img src="thumbnail/united.png"></a>
									<input class="form-control" id="html_united" type="text" value="&lt;link href=&quot;https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/united/bootstrap.min.css&quot; rel=&quot;stylesheet&quot; integrity=&quot;sha256-mKuwI+x5TH/8YJ3N3ZHLGK0+IMRL4bZ1Me+2ylaxrwY= sha512-ltZkxhZ59a1sQYi1uob1y0iNgfeEoS8ouAdSyKMCLXDNcbNaSWM2vTpGOqmaVtri+qENaJ3YWANjGjjGX9ij8A==&quot; crossorigin=&quot;anonymous&quot;&gt;">
									<hr>
								</div>
								<div class="col-md-2">
									<a href="#" class="thumbnail"><img src="thumbnail/yeti.png"></a>
									<input class="form-control" id="html_yeti" type="text" value="&lt;link href=&quot;https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/yeti/bootstrap.min.css&quot; rel=&quot;stylesheet&quot; integrity=&quot;sha256-daEYF2SGTkiPl4cmxH06AOMnZ+Hb8wBpvs7DqvceszY= sha512-xmSDqcgDrroCG8Sp/p0IArjjB3lO0m0Yde0tm1mOFD4BwmsvZnVNfHgw7icU6q4ScrTCQKCokxnYMy/hUUfGrg==&quot; crossorigin=&quot;anonymous&quot;&gt;">
									<hr>
								</div>
							</div>
							<!-- END row -->
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