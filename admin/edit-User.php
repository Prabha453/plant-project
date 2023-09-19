<!DOCTYPE html>
<html lang="en">
<head>
  <title>EDIT USERS</title>
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
  <?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = 'plantshop';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
	 $id=$_GET['uid'];
     $sql = "SELECT * FROM Users where uid='$id'";
     
	 $data = mysqli_query($conn, $sql);
        
	if ($data->num_rows > 0) {  
  
  while($row = $data->fetch_assoc()) {
    $uname = $row['uname'];
    $uemail = $row['uemail'];
    $upass = $row['upass'];
    $uphone = $row['uphone'];
    $uaddress = $row['uaddress'];
    }
  }
   else {
  echo "0 results";
}
     mysqli_close($conn); 
?>
<div class="container mt-5 bg-light p-4 mb-5">
  <div class="text-center">
<img src=".\img\user.png" width="150" height="150">
  <h2 class="mt-3">Edit User</h2>
  <p>You can edit here.</p>  
  </div>          
  <form class="form-horizontal p-2" action="Editation-User.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="uname"><i class="fa fa-user"></i> User Names<sup>*</sup></label>
      <div class="col-sm-12"> 
        <input type="text" class="form-control" id="uname" value="<?php echo $uname ?>" placeholder="Enter name" name="uname" required>
      </div>
    </div>
    <div class="form-group mt-3">
      <label class="control-label col-sm-2" for="uemail"><i class="fa fa-envelope"></i> Email<sup>*</sup></label>
      <div class="col-sm-12">
        <input type="email" class="form-control" id="uemail" value="<?php echo $uemail ?>" placeholder="Enter mail" name="uemail"  required>
      </div>
    </div>
	<div class="form-group mt-3">
      <label class="control-label col-sm-2" for="upass"><i class="fa-solid fa-lock"></i> Password<sup>*</sup></label>
      <div class="col-sm-12">
        <input type="password" class="form-control" id="upass" value="<?php echo $upass ?>" placeholder="Enter password" name="upass"  required>
      </div>
    </div>
	<div class="form-group mt-3">
      <label class="control-label col-sm-2" for="uphone"><i class="fa fa-phone"></i> Phone<sup>*</sup></label>
      <div class="col-sm-12">
        <input type="text" class="form-control" id="uphone" value="<?php echo $uphone ?>" placeholder="Enter phone" name="uphone"  required>
      </div>
    </div>
	<div class="form-group mt-3">
      <label class="control-label col-sm-2" for="uaddr"><i class="fa-solid fa-location-dot"></i> Address<sup>*</sup></label>
      <div class="col-sm-12">
        <input type="text" class="form-control" id="uaddr" value="<?php echo $uaddress ?>" placeholder="Enter address" name="uaddr"  required>
      </div>
    </div>
    <div class="form-group mt-3">        
      <div class="col-sm-offset-2 col-sm-10">
      <input type="hidden" name="id" value=<?php echo $_GET['uid'];?>>
        <button type="submit" name="Update" class="btn btn-default bg-warning text-dark">Submit</button>
        <button type="reset" class="btn btn-default bg-success text-light">Reset</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>



