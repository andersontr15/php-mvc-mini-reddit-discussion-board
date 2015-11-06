<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit User</title>
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
		<hr>
		<h4>Update User Information</h4>
		<form action="/users/update/" method="post" class="form-control" style="width:320px; height:420px">
			First Name: <input type="text" name="first_name" value="<?=$user['first_name']?>" class="form-control">
			<br>
			Last Name: <input type="text" name="last_name" value="<?=$user['last_name']?>" class="form-control">
			<br>
			Email: <input type="text" name="email" value="<?=$user['email']?>" class="form-control">
			<br>
			Password: <input type="password" name="password" value="<?=$user['password']?>" class="form-control">
			<br>
			Confirm Password:<input type="password" name="confirm_password" value="<?=$user['password']?>" class="form-control">
			<br>
			<input type="submit" value="Update" class="btn btn-success">
		</form>
	</div>
</body>
</html>