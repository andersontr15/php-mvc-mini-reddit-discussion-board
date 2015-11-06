<!DOCTYPE html>
<html>
<head>
  <title>User Dashboard</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <style>
     body{
     background-image: url("http://i.huffpost.com/gen/1969848/images/o-SCOTTISH-FLAG-facebook.jpg");
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
  <hr>
  <h3>Welcome, <?= $user['first_name'];?></h3>
  <h3>All Users</h3>
  <table class="table table class table-bordered table-hover">
    <thead>
      <tr class="active">
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Created At</th>
        <th>Actions</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($users as $user) { ?>
        <tr class="active">
          <td><?= $user['id'] ?></td>
          <td>
          <a href="/users/show/<?= $user['id'] ?>">
          <?= $user['first_name'] ?> <?= $user['last_name'] ?>
          </a>
          </td>
          <td><?= $user['email'] ?></td>
          <td><?=date('F j, Y',strtotime($user['created_at']))?></td>
          <td>
          <a href="/users/edit_user/<?=$user['id']?>/"><button class="btn btn-primary">Edit</button></a>
          <a href="/users/delete/<?=$user['id']?>/"><button class="btn btn-danger">Delete</button></a>
          </td>
      </tr>
     <?php } ?>
  </tbody>
</table>
<hr>
  <h3>All Topics</h3>
  <table class="table class table-bordered table-striped table-hovered">
    <thead>
     <tr class="active">
       <th>Category</th>
        <th>Topic</th>
        <th>User Name</th>
        <th>Created At</th>
        <th>Actions</th>
    </tr>
  </thead>
  <tbody>
   <?php foreach ($topics as $topic) { ?>
      <tr class="active">
        <td><?= $topic['category'] ?></td>
        <td><a href="/topics/show_topic/<?=$topic['topics_id']?>/"><?= $topic['topic'] ?></a></td>
        <td><?= $topic['first_name']?></td>
        <td><?=date('F j, Y',strtotime($topic['created_at']))?></td>
        <td>
        <a href="/topics/edit/<?=$topic['topics_id']?>/"><button class="btn btn-primary">Edit</button></a>
        <a href="/topics/delete_topic/<?= $topic['topics_id']?>/"><button class="btn btn-danger">Delete</button></a></td>
      </tr>
     <?php } ?>
  </tbody>
</table>
<hr>
   <h3>Add a new topic</h3> 
    <form action="/topics/add_topic" method="post" class="form-control"  style="height:320px; width:330px;">
      <label for="">Topic:</label>
      <input type="text" name="topic" placeholder="Topic here.." required  minlength=5 maxlength=50 class="form-control">
      <br>
      <label for="">Description:</label>
      <textarea name="description" id="" cols="23" rows="3" placeholder="Description here.." style="resize:none" required minlength=5 maxlength=50 class="form-control"></textarea>
      <br>
      <label for="">Category:</label>
      <select name="category" id="" required minlength=3 maxlength=20  class="form-control">
        <option value="HTML5">HTML5</option>
        <option value="CSS3">CSS3</option>
        <option value="PHP">PHP</option>
        <option value="Ruby">Ruby</option>
        <option value="Python">Python</option>
        <option value="Java">Java</option>
      </select><br>
    <input type="submit" class="btn btn-default btn-success">
    </form>
</div>
</body>
</html>