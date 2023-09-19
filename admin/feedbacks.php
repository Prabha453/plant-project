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
        background-color:green;
        padding:3px;
        border-radius:7px;
    }
</style>
<div class="container mt-3">
<h2>Feed Backs List</h2>
  <p>You can Reply The Feedbacks here.</p> 
    <table width='100%' border=0 class="table mt-3" cellpadding=2>
      <thead>
    <tr bgcolor='#CCCCCC'>
    <th>S.No</th>
    <th>UserName</th>
    <th>UserEmail</th>
    <th>FeedBack</th>
        <th>Reply</th>
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
     $sql = "SELECT * FROM feedback";
     
	 $data = mysqli_query($conn, $sql);
        
	if ($data->num_rows > 0) {  
  
  while($row = $data->fetch_assoc()) {
    echo "<tr>";
        echo "<td>".$row['slno']."</td>";
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['useremail']."</td>";
        echo "<td>".$row['feedbacks']."</td>";
        echo "<td><a href=mailto:".$row['useremail'].">Reply</a></td>"; 
        echo "<tr>";
    }
  }
   else {
  echo '<h3 class="mt-4 text-center">0 FeedBacks</h3>';
}
     mysqli_close($conn); 
?>
</div>
</body>
</html>

