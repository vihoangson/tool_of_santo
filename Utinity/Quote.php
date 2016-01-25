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

<?php 
				$array =
						[
							[
								"q" => "## 1. Cuộc sống là 10% những gì xảy đến với bạn và 90% còn lại là cách bạn phản ứng - Charles R. Swindoll",
								"desc"=>"Cuộc đời mỗi người là một ván bài. Có những sự việc không thể kiểm soát được, nhưng cách chơi như nào tùy thuộc vào từng các nhân. Thành công không đánh giá bởi những thứ bạn không kiểm soát được, mà bởi cách giải quyết của bạn trong từng trường hợp. Kế hoạch thay đổi, rắc rối bất ngờ đều có thể xảy ra, nhưng doanh nhân thành công biết cách kiểm soát phản ứng của minh, nhận trách nhiệm và bắt tay vào hành động.",
							],
							[
								"q" => "## 2. Nếu bạn có thể ước mơ, thì bạn cũng có thể làm được - Walt Disney",
								"desc"=>"Tạo hóa ban tặng cho con người sức sáng tạo tuyệt vời. Chúng ta không chỉ là diễn viên, mà còn là nhà biên kịch. Không gì có thể ngăn cản con người đạt được những điều tưởng chừng không thể, miễn là ta biết ước mơ và tin tưởng điều đó sẽ thành sự thật. Những doanh nhân thành công nhất luôn hành động theo mơ ước và hiện thực hóa chúng.",
							],
							[
								"q" => "## 3. Chỉ khi sâu bướm nghĩ thế giới đang kết thúc, nó mới hóa bướm - Ngạn ngữ",
								"desc"=>"Phần tối nhất của màn đêm là ngay trước khi trời sáng. Muốn thấy bình minh chúng ta phải đi qua bóng tối. Muốn tới thành công ta phải trải qua khó khăn vất vả. Các doanh nhân phải biết thế nào là tuyệt vọng trước khi đứng lại dậy. Cũng như vậy, bạn phải chịu đau đớn nhức mỏi nểu muốn có được cơ thể cường tráng, trái tim và tâm hồn phải bị tổn thương trước khi được chữa lành và trở nên mạnh mẽ hơn.",
							],
							[
								"q" => "## 4. Can đảm là chống lại và làm chủ nỗi sợ, chứ không phải trốn tránh nó - Mark Twain",
								"desc"=>"Nỗi sợ không thể bị chôn vùi, chúng luôn tồn tại. Những người thành công vẫn hành động bất chấp thực tế ấy. Họ tiến về phía trước, đối mặt và vượt qua nỗi sợ và trở nên kiên cường hơn.",
							],
							[
								"q" => "## 5. Ở đâu có tình yêu, nơi đó có sự sống - Mahatma Gandhi",
								"desc"=>"Sau cùng thì thành công chẳng thể đem lại hạnh phúc nếu không có tình yêu. Cuộc sống không chỉ ó công việc, bạn nên biết cân bằng giữa thành công cá nhân và lợi ích của những người khác. Hãy yêu thương những người xung quanh bằng cả trái tim. Đó là cuộc sống đích thực.",
							],
							[
								"q" => "## 6. Động lực khiến bạn bắt đầu. Thói quen đưa bạn tiếp tục - Jim Ryun",
								"desc"=>"Khi bắt đầu, cảm hứng và sau đó là động lực sẽ khiến bạn hành động. Nhưng sự hứng khởi ban đầu rồi sẽ dần tan biến. Hiện thực hóa một ý tưởng cần nhiều công sức, động lực và cảm hứng chưa bao giờ là đủ. Tuy nhiên, nhiệm vụ vẫn sẽ được hoàn thành nếu nó đã trở thành thói quen kèm theo chút kiên nhẫn. Thói quen nhỏ tạo nên mục tiêu lớn.",
							],
							[
								"q" => "## 7. Quyết định sai còn hơn là không dám quyết định - Maimonides",
								"desc"=>"Cuộc sống không ngừng chuyển động, chúng ta chẳng thể dừng lại. Nhưng đối khi việc quyết định có vẻ quá trọng đại tới mức chúng ta chẳng dám quyết định, và vướng vào bế tắc.<br>Thà quyết định còn hơn là không quyết định. Hãy rút kinh nghiệm từ những quyết định sai lầm để có thể sáng suốt hơn trong tương lai.",
							],
							[
								"q" => "## 8. Vết thương là chỗ ánh sáng xâm nhập bạn - Rumi",
								"desc"=>"Nỗi đau sẽ lành, thử thách rồi sẽ biến thành sức mạnh. Chúng ta sẽ phải hy sinh một phần nào đó để trở nên mạnh mẽ hơn. Khó khăn sẽ khiến ta trưởng thành và thành công.",
							]
						];

						foreach ($array as $key => $value) {
							echo "<h4>".$value["q"]."</h4>";
							echo "<br>";
							echo $value["desc"];
							echo "<hr>";
						}
 ?>
					<h4>Hà Tường</h4>
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
