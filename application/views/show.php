<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Show Topic</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style>
	body{
	 background-color:white;
     color:black;
    }
	</style>
</head>
<body>
	<div class="container">
		<ul class="nav nav-pills">
    		<li role="presentation"><a href="/users/logoff">Signout</a></li>
    		<li role="presentation" class="active"><a href="/dashboards/dashboard">Dashboard</a></li>
    		<li role="presentation"><a href="/users/show/<?=$this->session->userdata['logged_user']?>/">Profile</a></li>
    		<li role="presentation"><a href="/users/new_user">Create A New User</a></li>
  		</ul>
		<h4>Topic: <?=$topic['topic']?></h4>
		<h4>Description: <?=$topic['description']?></h4>
		<h4> Posted by: <a href="/users/show/<?=$topic['user_id']?>/"><?= $topic['first_name'] ?></a></h4>
		<hr>
		<h4>Leave your message here:</h4>
		<form action="/topics/add_post" method="post" class="form-control" style="width:200px;height:100px">
			<input type="text" name="post" required minlength=5 maxlength=50 class="form-control" placeholder="Your answer here..">
			<br>
			<input type="hidden" name="topic_id" value="<?=$topic['topic_id']?>">
			<input type="hidden" name="user_id" value="<?=$this->session->userdata['logged_user']?>">
			<input type="submit" value="Post" class="btn btn-success">
		</form>
		<hr>
		<div class="posts">
			<?php foreach ($posts as $post) 
			{ ?>
				<?=$post['first_name']?> says: <?=$post['post']?>
						<form action="/topics/add_upvote/" method="post" >
							<input type="hidden" name="user_id" value="<?=$this->session->userdata['logged_user']?>" class="form-control">
							<input type="hidden" name="post_id" value="<?=$post['post_id']?>">
							<button><span class="glyphicon glyphicon-arrow-up"></span></button>
						</form>
					<?$x=0 ?>
					<?php foreach($upvotes as $upvote)
					{
					if($upvote['upvote_post_id'] == $post['post_id']){
					$x++;
					
				  	?>

					<?php

					}

					}echo $x;?>
						<form action="/topics/add_downvote/" method="post">
							<input type="hidden" name="user_id" value="<?=$this->session->userdata['logged_user']?>">
							<input type="hidden" name="post_id" value="<?=$post['post_id']?>">
							<button><span class="glyphicon glyphicon-arrow-down"></span></button>
						</form>
					<?$y=0?>
					<?php foreach($downvotes as $downvote)
					{
					if($downvote['post_id'] == $post['post_id']){
					$y++;
				  	?>
					<?php
					}
					}echo $y;?>
				<h4 style="color:black"><strong>Add a comment</strong></h4>
				<form action="/topics/add_comment/" method="post" style="width:200px; height:100px" class="form-control">
					<input type="hidden" name="user_id" value="<?=$this->session->userdata['logged_user']?>">
					<input type="hidden" name="post_id" value="<?=$post['post_id']?>">
		        	<input type="text" name="comment"  required minlength=5 maxlength="100" class="form-control" placeholder="Your comment here..">
		       		<br>
		        	<input type="submit" value="Comment" class="btn btn-success">
				</form>
				<hr>
				<?php foreach ($comments as $comment) 
				{
				  if($comment['post_id'] == $post['post_id']){
				?>
					<?=$comment['first_name'];?> says:
					<?=$comment['comment'];?>
					<br>
					<?=$comment['created_at'];?>
					<hr>
					<h4 style="color:black"><strong>Add a comment</strong></h4>
				<form action="/topics/add_comment/" method="post" class="form-control" style="width:200px;height:100px">
					<input type="hidden" name="user_id" value="<?=$this->session->userdata['logged_user']?>">
					<input type="hidden" name="post_id" value="<?=$post['post_id']?>">
		        	<input type="text" name="comment" required minlength=5 maxlength=100 class="form-control" placeholder="Your comment here..">
		        <br>
		        <input type="submit" value="Comment" class="btn btn-success" >
				</form>
				<hr>
				<?php
				}
			  }
			}
			?>
		</div>
	</div>
</body>
</html>