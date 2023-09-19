<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADD USERS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href=".\css\bootstrap.min.css">
    <link rel="stylesheet" href=".\css\bootstrap-icons.css">
    <link rel="stylesheet" href=".\css\font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href=".\css\style.css">
  <script src=".\js\bootstrap.min.js"></script>
  <script src=".\js\bootstrap.bundle.min.js"></script>
  <script src=".\js\jquery.min.js"></script>
</head>
<body>
<?php include "header.php"; ?>
  <style>
    .container
    {
      width:50%;
      border-radius:30px;
    }
.container:hover{
  box-shadow: 0px 0px 4px -1px black;
}
sup{
  color:red;
}
    @media only screen and (max-width:900px)
{
   .container{ 
    width: 100%;
    }
}
  </style>
<div class="container mt-5 bg-light p-4 mb-5">
  <div class="text-center">
  <h1 class="text-warning mt-4 mb-3">Welcome back <i class="fa-solid fa-face-smile"></i> !</h1>
<img src=".\img\user.png" width="150" height="150">
  <h2 class="mt-3">Add User</h2>
  <p>You can register here.</p>  
  </div>          
  <form class="form-horizontal p-2" action="InsertUsers.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="uname"><i class="fa fa-user"></i> User Names<sup>*</sup></label>
      <div class="col-sm-12"> 
        <input type="text" class="form-control" id="uname" placeholder="Enter name" name="uname" required>
      </div>
    </div>
    <div class="form-group mt-3">
      <label class="control-label col-sm-2" for="uemail"><i class="fa fa-envelope"></i> Email<sup>*</sup></label>
      <div class="col-sm-12">
        <input type="email" class="form-control" id="uemail" placeholder="Enter mail" name="uemail"  required>
      </div>
    </div>
	<div class="form-group mt-3">
      <label class="control-label col-sm-2" for="upass"><i class="fa-solid fa-lock"></i> Password<sup>*</sup></label>
      <div class="col-sm-12">
        <input type="password" class="form-control" id="upass" placeholder="Enter password" name="upass"  required>
      </div>
    </div>
	<div class="form-group mt-3">
      <label class="control-label col-sm-2" for="uphone"><i class="fa fa-phone"></i> Phone<sup>*</sup></label>
      <div class="col-sm-12">
        <input type="text" class="form-control" id="uphone" placeholder="Enter phone" name="uphone"  required>
      </div>
    </div>
	<div class="form-group mt-3">
      <label class="control-label col-sm-2" for="uaddr"><i class="fa-solid fa-location-dot"></i> Address<sup>*</sup></label>
      <div class="col-sm-12">
        <input type="text" class="form-control" id="uaddr" placeholder="Enter address" name="uaddr"  required>
      </div>
    </div>
    <div class="form-group mt-3">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default bg-warning text-dark">Submit</button>
        <button type="reset" class="btn btn-default bg-success text-light">Reset</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>



