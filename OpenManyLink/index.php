<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			div#storebox {
				overflow: auto;
				height: 170px;
			}
			a.revert_box {
				background: #214952;
				display: block;
				padding: 10px;
				margin: 2px 0;
			}
		</style>
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
				<button type="button" class="btn btn-info" style="float:right;"  onclick="$('.tool').toggle();" id="">Show tool</button>
				<div class="tool" style="display:none;">
					<button type="button" class="btn btn-danger" id="remove_session">Remove all session</button>
					<div id="storebox"></div>
				</div>
				<p><textarea name="" id="input-link" class="form-control" rows="20" required="required"></textarea></p>
				<p><button class="btn btn-lg btn-block btn-primary" id="input-link_btn">Process</button></p>
			</div>
		</div>
	</div>

		<script src="http://momentjs.com/downloads/moment.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script>
			// Khởi tạo
			load_store();
			$("#input-link_btn").click(function(){
				localStorage[$.now()]=$("#input-link").val();
				var links = $("#input-link").val().split("\n");
				$.each(links, function(index, val) {
					if(val.match(/^http/)){
						window.open(val,"_blank");
					}
				});
				load_store();
			});

			$(document).on('click',".revert_box",function(){
				key_s = $(this).data("time");
				$("textarea").val(localStorage[key_s]);
			});

			$("#remove_session").click(function(){
				localStorage.clear();
				load_store();
			});

			function load_store(){
				$("#storebox").html("");
				$.each(localStorage, function(index, val) {
					var int_index = parseInt(index);
					var now=moment($.now());
					var then=moment(int_index);
					time_c = moment.duration(now.diff(then)).humanize();
					$("#storebox").prepend("<div><a href='javascript:void(0)' class='revert_box' data-time='"+index+"'>Session in "+time_c+" ago</a></div>");
				});
			}

		</script>
	</body>
</html>