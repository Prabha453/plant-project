<html lang="en">
<head>
  <title>ADMIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href=".\css\bootstrap.min.css">
    <link rel="stylesheet" href=".\css\bootstrap-icons.css">
    <link rel="stylesheet" href=".\css\font-awesome.min.css">
    <link rel="stylesheet" href=".\css\style.css">
  <script src=".\js\bootstrap.min.js"></script>
  <script src=".\js\bootstrap.bundle.min.js"></script>
  <script src=".\js\jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <?php include "header.php" ?>
  <style>
td a{
      
      color:white;
      text-decoration: none;
      background-color:red;
      padding:3px;
      border-radius:7px;
  }
</style>
<div class="container mt-5">
  <h2>Plant List</h2>
  <p>You can edit or delete the products here.</p>            
  <table class="table table-condensed">
    <thead>
      <tr bgcolor='#CCCCCC'>
      <th>PlantId</th>
      <th>PlantType</th>
        <th>Plant Name</th>
        <th>Description</th>
        <th>Price</th>
		<th>Qty</th>
		<th>Edit</th>
    <th>Delete</th>
      </tr>
    </thead>
	<tbody>
	<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = 'plantshop';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
	 
     $sql = "SELECT * FROM plant";
     
	 $data = mysqli_query($conn, $sql);
        
	if ($data->num_rows > 0) {
  
  while($row = $data->fetch_assoc()) {
	  
    echo "<tr>
    <td>" . $row["pid"]. "</td>
    <td>" . $row["ptype"]. "</td>
    <td>" . $row["pname"]. "</td>
    <td>" . $row["pdesc"]. "</td>
    <td>₹" . $row["price"]. "</td>
    <td>" . $row["qty"]. "</td>
    <td>
    <a href=\"edit-plant.php?pid=$row[pid]\">Edit</a>
    </td>
   <td>
   <a href=\"delete-plant.php?pid=$row[pid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>
   </td>
   </tr>";
  }
} else {
  echo "0 results";
}
     mysqli_close($conn); 
?>
    
      
    </tbody>
  </table>
</div>

</body>
</html>



