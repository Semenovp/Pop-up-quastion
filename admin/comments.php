<?php
	require_once('inc/header.php');
	require_once('classes/Auth.php');
	require_once('classes/Comment.php');
	$auth = new Auth();
	$comments = new Comment();
	if(isset($_GET['exit'])) {
		$auth->out();
		header('Location: comments.php');
	}
	if (isset($_GET['deleteId'])){
		$comments->deleteComment($_GET['deleteId']);
	}
//	if (!$auth->isAuth()) {
//		header('Location: login.php');
//	}
?>

<body>
<div class="wrap">
	<div class="row">
		<div class="col-xs-3 aside">
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="/"><span class="glyphicon glyphicon-comment"></span> Комментарии</a></li>
				<li><a href="/editform.php"><span class="glyphicon glyphicon-pencil"></span> Редактировать форму</a></li>
				<li><a href="comment.php?exit"><span class="glyphicon glyphicon-eject"></span> Выход</a></li>
			</ul>
		</div>
		<div class="col-xs-9 content">
			<div class="row">
				<div class="col-xs-7 comment-list">
					<ul class="comment">
						<?php
							$comments_arr = $comments->getCommentsList();
							foreach ($comments_arr as $comment_arr) {
						?>
								<li class="item">
									<h2>Комментарий №<?php echo $comment_arr['ID'];?></h2>
									<div class="content">
										<?php echo $comment_arr['content'];?>
									</div>
									<div class="category">
										<?php echo $comment_arr['tagn'];?>
									</div>
									<div class="note">
										<?php echo $comment_arr['note'];?>
									</div>
									<div class="btn-group btn-group-justified">
										<div class="btn-group">
											<a href="comments.php/?approved=true&id=<?php echo $comment_arr['ID'];?>" class="btn btn-success">Одобрить</a>
										</div>
										<div class="btn-group">
											<a href="/editcomment.php/?id=<?php echo $comment_arr['ID'];?>" class="btn btn-primary">Редактировать</a>
										</div>
										<div class="btn-group">
											<a href="comments.php/?deleteId=<?php echo $comment_arr['ID'];?>" class="btn btn-danger">Удалить</a>
										</div>
									</div>
								</li>
						<?php
							}
						?>
					</ul>
					<div class="page">
						<ul class="pagination">
							<li><a href="#">&laquo;</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
 