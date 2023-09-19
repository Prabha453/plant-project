<!DOCTYPE html>
<html lang="en">
<head>
  <title>Orders</title>
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
<h2>Orders List</h2>
  <p>You can edit or delete the  orders here.</p> 
    <table width='100%' border=0 class="table mt-3" cellpadding=2>
      <thead>
    <tr bgcolor='#CCCCCC'>
    <th>UserId</th>
    <th>Pid</th>
    <th>UserEmail</th>
        <th>Plantname</th>
        <th>Qty</th>
        <th>Price</th>
        <th>Phone</th>
        <th>Address</th>
        <th>OrderDate</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = 'plantshop';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
     $sql = "SELECT * FROM orders";
     
	 $data = mysqli_query($conn, $sql);
        
	if ($data->num_rows > 0) {  
  
  while($row = $data->fetch_assoc()) {
    echo "<tr>";
        echo "<td>".$row['user_id']."</td>";
        echo "<td>".$row['pid']."</td>";
        echo "<td>".$row['uemail']."</td>";
        echo "<td>".$row['pname_ord']."</td>";
        echo "<td>".$row['qty_ord']."</td>";
        echo "<td>₹".$row['price_ord']."</td>"; 
        echo "<td>".$row['phone_ord']."</td>";
        echo "<td>".$row['address_ord']."</td>";
        echo "<td>".$row['order_date']."</td>";
        echo "<td><a href=\"edit-order.php?pid=$row[pid]\">Edit</a></td>"; 
        echo "<td><a href=\"delete-order.php?pid=$row[pid]\" onClick=\"return confirm('Are you sure you want to Delete?')\">Delete</a></td>";       
        echo "<tr>";
    }
  }
   else {
  echo '<h3 class="mt-4 text-center">0 Orders</h3>';
}
     mysqli_close($conn); 
?>
</div>
</body>
</html>

