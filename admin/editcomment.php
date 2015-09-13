<?php
	require_once('classes/Auth.php');
	require_once('classes/Comment.php');
	$auth = new Auth();
	$comments = new Comment();
	if(isset($_GET['exit'])) {
		$auth->out();
		header('Location: comments.php');
	}
	//	if (!$auth->isAuth()) {
	//		header('Location: login.php');
	//	}
	if($_SERVER['REQUEST_METHOD']=='POST') {
		$comments->editComment($_POST['id'],$_POST['content'],$_POST['tag'],$_POST['note']);
	}
	if (!$auth->isAuth()) {
		header('Location: login.php');
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
<div class="wrap">
	<div class="row">
		<div class="col-xs-3 aside">
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="/markup/comments.html"><span class="glyphicon glyphicon-comment"></span> Комментарии</a></li>
				<li><a href="/markup/editform.html"><span class="glyphicon glyphicon-pencil"></span> Редактировать форму</a></li>
			</ul>
		</div>
		<div class="col-xs-9 content">
			<div class="row">
				<div class="col-xs-7 comment-list">
					<?php
						if (isset($_GET['id'])) {
							$singleComment = $comments->loadComment($_GET['id']);
					?>
							<ul class="comment">
								<li class="item">
									<h2>Редактировать</h2>
									<form class="form-horizontal" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
										<input type="hidden" value="<?php echo $singleComment['ID'];?>" name="id">
										<div class="form-group">
											<label for="content"
											       class="col-sm-2 control-label">Комментарий</label>
											<div class="col-sm-10 form-control-edit">
												<textarea class="form-control" id="content" cols="30" rows="10" name="content"><?php echo $singleComment['content']; ?></textarea>
											</div>
											<label for="tag"
											       class="col-sm-2 control-label">Тэг</label>
											<div class="col-sm-10 form-control-edit">
												<input  type ="text" class="form-control" id="tag" value="<?php echo $singleComment['tagn']; ?>" name="tag"/>
											</div>
											<label for="note"
											       class="col-sm-2 control-label">Заметка</label>
											<div class="col-sm-10 form-control-edit">
												<input type="text" class="form-control" id="note" value="<?php echo $singleComment['note']; ?>" name="note">
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-offset-2 col-sm-10">
												<button type="submit" class="btn btn-primary">Сохранить</button>
											</div>
										</div>
									</form>
								</li>
							</ul>
					<?php
						}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
 