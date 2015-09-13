<?php
	require_once('classes/Auth.php');
	$auth = new Auth();
	if (isset($_POST['name'])) {
		if ($auth->checkUser( $_POST['name'], md5($_POST['password']) )) {
			$_SESSION['is_auth'] = true;
			$_SESSION['login'] = $_POST['name'];
		}else {
			$_SESSION['is_auth'] = false;
			$_SESSION['login'] = false;
		}

	}
	if ($auth->isAuth() == true) {
		header('Location: comments.php');
	}

?>


<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index</title>
	<link rel="stylesheet" href="http://<?php echo $_SERVER["HTTP_HOST"];?>/markup/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://<?php echo $_SERVER["HTTP_HOST"];?>/markup/bower_components/FlexSlider/flexslider.css">
	<!--<link rel="stylesheet" href="bower_components/modal/basic.css">-->
	<link rel="stylesheet" href="http://<?php echo $_SERVER["HTTP_HOST"];?>/markup/bower_components/magnifik/magnific-popup.css">
	<link rel="stylesheet" href="http://<?php echo $_SERVER["HTTP_HOST"];?>/markup/css/style.css">
	<script src="http://<?php echo $_SERVER["HTTP_HOST"];?>/markup/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="http://<?php echo $_SERVER["HTTP_HOST"];?>/markup/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="http://<?php echo $_SERVER["HTTP_HOST"];?>/markup/bower_components/FlexSlider/jquery.flexslider-min.js"></script>
	<script src="http://<?php echo $_SERVER["HTTP_HOST"];?>/markup/bower_components/magnifik/jquery.magnific-popup.min.js"></script>
	<script src="http://<?php echo $_SERVER["HTTP_HOST"];?>/markup/js/scritp.js"></script>
	<!--<script src="bower_components/modal/jquery-1.3.2.min.js"></script>-->
	<!--<script src="bower_components/modal/jquery.simplemodal.js"></script>-->
	<!--<script src="bower_components/modal/init.js"></script>-->
</head>
<body>
	<div class="col-xs-4 login-form">
		<form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<div class="form-group">
				<label for="name">Логин</label>
				<input type="text" class="form-control" id="name" placeholder="Введите имя пользователя" name="name">
			</div>
			<div class="form-group">
				<label for="password">Пароль</label>
				<input type="password" class="form-control" id="password" placeholder="Пароль" name="password">
			</div>
			<button type="submit" class="btn btn-primary">Отправить</button>
		</form>
	</div>

</body>
</html>
 