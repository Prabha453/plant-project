<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Orders</title>
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
    td a{
      
        color:white;
        text-decoration: none;
        background-color:red;
        padding:3px;
        border-radius:7px;
    }
</style>
<div class="container mt-3">
<h2>Your Orders</h2>
    <p>You can Cancel the Orders here.</p> 
    <table width='100%' border=0 class="table mt-3" cellpadding=2>
    <tr bgcolor='#CCCCCC'>
    <th>UserId</th>
        <th>Plantname</th>
        <th>Qty</th>
        <th>Price</th>
        <th>Address</th>
        <th>OrderDate</th>
        <th>Actions</th>
    </tr>
<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = 'plantshop';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
        if(count($_SESSION) > 0){
     $userid= $_SESSION['uid'];
     $sql = "SELECT * FROM orders WHERE user_id='$userid'";
     
	 $data = mysqli_query($conn, $sql);
        
	if ($data->num_rows > 0) {  
  
  while($row = $data->fetch_assoc()) {
    echo "<tr>";
        echo "<td>".$row['user_id']."</td>";
        echo "<td>".$row['pname_ord']."</td>";
        echo "<td>".$row['qty_ord']."</td>";
        echo "<td>₹".$row['price_ord']."</td>"; 
        echo "<td>".$row['address_ord']."</td>"; 
        echo "<td>".$row['order_date']."</td>"; 
        echo "<td><a href=\"cancelOrder.php?pid=$row[pid]\" onClick=\"return confirm('Are you sure you want to Cancel?')\">Cancel</a></td>";       
        echo "<tr>";
    }
  }
   else {
  echo '<h3 class="mt-4 text-center">0 Orders</h3>';
}
     mysqli_close($conn); 
}
else{
    echo "<script>
    window.alert(' Please Login First!')
    window.location.href='login.php';
       </script>";
}
?>

</div>

</body>
</html>

