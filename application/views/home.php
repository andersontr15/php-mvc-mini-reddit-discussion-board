<!DOCTYPE html>
<html>
<head>
  <title>Login and Registration</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <style>
    label{
      display: block;
    }
    body{
      font-family: sans-serif;
     background-image: url("http://www.hardens.com/images_new/search_backgrounds/search-location-edinburgh.jpg");
     color:black;
    }
    }
    .warning{
      color: white;
    }
    .success{
      color: white;
    }
    label{
      display: block;
    }
    body{
      font-family: sans-serif;
    }
    .warning{
      color: white;
    }
    .success{
      color: white;
    }
  </style>
</head>
<body>
  <div class="container">
    <center> <h1>Discussion Board built in PHP</h1>
    <form method="post" action="/users/login" class="form-control" style="width:300px; pull-left;height:220px; background-color:white; color:black">
      <fieldset>
      <legend>Login</legend>
      <label>Email: <input type="text" name="email" class="form-control" placeholder="Email here.."></label>
      <label>Password: <input type="password" name="password" class="form-control" placeholder="Password here.."></label>
      <input type="submit" value="Login" class="btn btn-success">
     </fieldset>
  </form>
</div>

  <div class="container">
    <center>
  <?php if($this->session->flashdata('errors')) { ?>
    <div class="warning"><?= $this->session->flashdata('errors') ?></div>
  <?php } ?>

  <?php if($this->session->flashdata('success')) { ?>
    <div class="success"><?= $this->session->flashdata('success') ?></div>
  <?php } ?>
  <form method="post" action="/users/register" class="form-control" style="width:300px;pull-right;margin-top:5px; height:400px; background-color:white; color:black;">
    <fieldset>
      <legend>Register</legend>
      <label>First Name: <input type="text" name="first_name" class="form-control" placeholder="First Name here.."></label>
      <label>Last Name: <input type="text" name="last_name" class="form-control" placeholder="Last Name here.."></label>
      <label>Email: <input type="text" name="email" class="form-control" placeholder="Email here.."></label>
      <label>Password: <input type="password" name="password" class="form-control" placeholder="Password here.."></label>
      <label>Confirm PW: <input type="password" name="password_confirmation" class="form-control" placeholder="Password confirmation.."></label>
      <input type="submit" value="Register" class="btn btn-success">
    </fieldset>
  </form>
  </div>
</body>
</html>