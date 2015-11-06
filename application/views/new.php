<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Create a new user</title>
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
    		<li role="presentation"><a href="/dashboards/dashboard">Dashboard</a></li>
    		<li role="presentation"><a href="/users/show/<?=$this->session->userdata['logged_user']?>/">Profile</a></li>
    		<li role="presentation" class="active"><a href="/users/new_user">Create A New User</a></li>
  		</ul>
		<hr>
		<h3>Add a new user</h3>
		<form action="/users/insert_new" method="post" class="form-control" style="width:300px; height:350px">
			First Name: <input type="text" name="first_name" required minlength=5 maxlength=20 class="form-control" placeholder="First Name..">
			<br>
			Last Name: <input type="text" name="last_name" required minlength=5 maxlength=20 class="form-control" placeholder="Last Name.."> 
			<br>
			Email: <input type="text" name="email" required minlength=5 maxlength=20 class="form-control" placeholder="Email..">
			<br>
			Password: <input type="password" name="password" required minlength=5 maxlength=20 class="form-control" placeholder="Password..">
			<br>
			<input type="submit" class="btn btn-success">
		</form>
	</div>
</body>
</html>