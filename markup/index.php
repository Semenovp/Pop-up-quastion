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
	<!--<link rel="stylesheet" href="bower_components/modal/basic.css">-->
	<link rel="stylesheet" href="bower_components/magnifik/magnific-popup.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="bower_components/magnifik/jquery.magnific-popup.min.js"></script>
	<script src="js/scritp.js"></script>
</head>
<body>
<a class="popup-modal" href="#test-modal" style="display: none;" rel="nofollow">Open modal</a>

<div id="test-modal" class="mfp-hide white-popup-block">
	<div class="row">
		<div class="col-xs-12 main-form">
			<h3 align="center">Дорогой клиент, скажите пожалуйста, <br> что для Вас главное при покупке гаражных ворот</h3>
			<form class="form-inline" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<?php
					$formRow = $form->getForm();
					echo $formRow['content'];
				?>
				<button type="submit" class="btn btn-primary">Отправить</button>
			</form>
			<div class="col-xs-12 response">
				<ul class="comment">
					<h4>Последние ответы</h4>
					<li>
							Lorem ipsum dolor sit amet,eiusmod tempor
					</li>
					<li>
							Lorem ipsum dolor sit amet,eiusmod tempor
					</li>
					<li>
							Lorem ipsum dolor sit amet,eiusmod tempor
					</li>
				</ul>
			</div>
			<div class="col-xs-12 footer">
				<div class="row">
				<div class="col-xs-6">
					<p>
						А что хотят выши клиенты<br>
						Знает система опросов DirectMarketing.
					</p>
				</div>
				<div class="col-xs-6 pull-right">
					<br>
					<p><a class="popup-modal-dismiss" href="#">Вернуться на сайт/закрыть </a></p>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>