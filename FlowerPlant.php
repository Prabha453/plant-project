<!DOCTYPE html>
<html lang="en">
<head>
  <title>FLOWERS PLANT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href=".\css\bootstrap.min.css">
    <link rel="stylesheet" href=".\css\bootstrap-icons.css">
    <link rel="stylesheet" href=".\css\font-awesome.min.css">
    <link rel="stylesheet" href=".\css\style.css">
    <script src=".\js\cart.js"></script>
  <script src=".\js\bootstrap.min.js"></script>
  <script src=".\js\bootstrap.bundle.min.js"></script>
  <script src=".\js\jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php include "header.php"; ?>
<style>
  .card:hover
{
padding: 6px;
}
</style>
<div class="container mt-4">
  <div class="card-group">
<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = 'plantshop';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
	 
     $sql = "SELECT * FROM plant WHERE ptype=0";
     
	 $data = mysqli_query($conn, $sql);
        
	if ($data->num_rows > 0) {  
  
  while($row = $data->fetch_assoc()) {
    echo '
    <div class="col-md-4 mt-4 text-dark p-3 text-center">
    <div class="card rounded-2"  style="box-shadow:0px 0px 2px 0px black">
    <img src='. $row["imgpath"].' class="card-img-top p-3 bg-light" width="200" height="300" >
    <div class="card-body  bg-light">
      <h1 class="card-title mt-2">'.$row["pname"].'</h1>
      <p class="card-text mt-2">'.$row["pdesc"].'</p>
      <h2 class="card-text mt-2">₹'.$row["price"].' / '.$row["qty"].' Plant</h2>
      <a href="order.php?pid='.$row["pid"].'" class="nav-link bg-dark p-3 text-light mt-2">Order Now!</a>
    </div>
    </div>
  </div>';
  }
} else {
  echo "0 results";
}
     mysqli_close($conn); 
?>

</div>
</div>
<?php include "footer.php"; ?>

</body>
</html>

