<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Editing Topic</title>
	<style>
      body{
          background-image: url("http://www.hardens.com/images_new/search_backgrounds/search-location-edinburgh.jpg");
          color:black;
      }
   </style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<ul class="nav nav-pills">
    		<li role="presentation"><a href="/users/logoff">Signout</a></li>
    		<li role="presentation" class="active"><a href="/dashboards/dashboard">Dashboard</a></li>
    		<li role="presentation"><a href="/users/show/<?=$this->session->userdata['logged_user']?>/">Profile</a></li>
    		<li role="presentation"><a href="/users/new_user">Create A New User</a></li>
  		</ul>
		<h3>Editing Topic</h3>
		<form action="/topics/update/<?=$topic['topic_id']?>" method="post" class="form-control" style="height:270px; width:300px">
			Topic: <input type="text" name="topic" value="<?=$topic['topic']?>" class="form-control">
			<br>
			Category: <input type="text" name="category" value="<?=$topic['category']?>" class="form-control">
			<br>
			Description:<input type="text" name="description" value="<?=$topic['description']?>" class="form-control">
			<br>
			<input type="hidden" name= "id"value="<?=$topic['topic_id']?>">
			<input type="submit" value="Update" class="btn btn-success">
		</form>
	</div>
</body>
</html>