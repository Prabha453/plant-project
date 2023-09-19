<!DOCTYPE html>
<html lang="en">
<head>
  <title>REGISTER</title>
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
  <style>
.container
    {
      width:50%;
      border-radius:30px;
    }
.container:hover{
  box-shadow: 0px 0px 4px -1px black;
}
    @media only screen and (max-width:900px)
{
   .container{ 
    width: 100%;
    }
}
  </style>
<?php include "header.php"; ?>
<div class="container  mt-5 bg-light p-4 mb-5">
  <div class="text-center text-secondary">
  <h2>Login User <img src=".\img\login.png" width="50" height="50"></h2> 
</div>          
  <form class="form-horizontal" action="loginUser.php" method="post">
  
    <div class="form-group mt-3">
      <label class="control-label col-sm-2" for="uemail">Email:</label>
      <div class="col-sm-12">
        <input type="email" class="form-control" id="uemail" placeholder="Enter mail" name="uemail" required>
      </div>
    </div>
	<div class="form-group mt-3">
      <label class="control-label col-sm-2" for="upass">Password:</label>
      <div class="col-sm-12">
        <input type="password" class="form-control" id="upass" placeholder="Enter password" name="upass" required>
      </div>
    </div>
    <div class="form-group mt-5">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default bg-warning">Login</button>
		<a href="./RegisterUser.php" class="btn btn-default bg-success text-light">Register</a>
    <button type="reset" class="btn btn-default bg-success text-light">Reset</button>

      </div>
    </div>
  </form>
</div>

</body>
</html>



