<?php
	require_once('../admin/classes/Auth.php');
	require_once('../admin/classes/Comment.php');
	require_once('../admin/classes/Form.php');
	$form = new Form();
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		$comment = new Comment();
		$comment->createComment($_POST['answer']);
	}

?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index</title>
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bower_components/FlexSlider/flexslider.css">
	<!--<link rel="stylesheet" href="bower_components/modal/basic.css">-->
	<link rel="stylesheet" href="bower_components/magnifik/magnific-popup.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="bower_components/FlexSlider/jquery.flexslider-min.js"></script>
	<script src="bower_components/magnifik/jquery.magnific-popup.min.js"></script>
	<script src="js/scritp.js"></script>
	<!--<script src="bower_components/modal/jquery-1.3.2.min.js"></script>-->
	<!--<script src="bower_components/modal/jquery.simplemodal.js"></script>-->
	<!--<script src="bower_components/modal/init.js"></script>-->
</head>
<body>
<script>
	$(function () {

		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "slide",              //Выбор типа анимации (fade/slide)
				directionNav: false,             //Включение навигации предыдущий/следующий (true/false)
				controlNav: false
			});
		});


	});
</script>
<a class="popup-modal" href="#test-modal" style="display: none;" rel="nofollow">Open modal</a>

<div id="test-modal" class="mfp-hide white-popup-block">
	<div class="row">
		<p><a class="popup-modal-dismiss" href="#"><span class="glyphicon glyphicon-remove-circle"></span></a></p>
		<div class="col-xs-12 main-form">
			<h2>Оставьте отзыв</h2>
			<form class="form-inline" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<?php
					$formRow = $form->getForm();
					echo $formRow['content'];
				?>
				<button type="submit" class="btn btn-primary">Отправить</button>
			</form>
			<div class="col-xs-12 main-comment flexslider">
				<ul class="slides comment">
					<li class="item">
						<div class="content">
							Lorem ipsum dolor sit amet,eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
						</div>
					</li>
					<li class="item">
						<div class="content">
							Lorem ipsum dolor sit amet,eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
						</div>
					</li>
					<li class="item">
						<div class="content">
							Lorem ipsum dolor sit amet,eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
</body>
</html>