<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>User Profile</title>
	<style>
      body{
          background-image: url("http://www.hardens.com/images_new/search_backgrounds/search-location-edinburgh.jpg");
          color:gainsboro;
      }
   </style>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<ul class="nav nav-pills">
    		<li role="presentation"><a href="/users/logoff">Signout</a></li>
    		<li role="presentation"><a href="/dashboards/dashboard">Dashboard</a></li>
    		<li role="presentation" class="active"><a href="/users/show/<?=$this->session->userdata['logged_user']?>/">Profile</a></li>
    		<li role="presentation"><a href="/users/new_user">Create A New User</a></li>
  		</ul>
			<hr>
			<h3><?= $user['first_name'] ?>'s Profile</h3>
			<br>
			<h4><strong>Number of topics: <?=$user['topic_counter']?></strong>
				<span class="glyphicon glyphicon-ok"></span>
			</h4>
			<h4><strong>Number of posts: <?=$user['post_counter']?></strong>
				<span class="glyphicon glyphicon-ok"></span>
			</h4>
			<h4><strong>Number of comments: <?=$user['comment_counter']?></strong>
				<span class="glyphicon glyphicon-ok"></span>
			</h4>
			<br>
		</div>
	</div>
</body>
</html>