<html lang="en">
<head>
  <title>EDIT PLANT</title>
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

<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = 'plantshop';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
	 $id=$_GET['pid'];
     $sql = "SELECT * FROM plant where pid='$id'";
     
	 $data = mysqli_query($conn, $sql);
        
	if ($data->num_rows > 0) {  
  
  while($row = $data->fetch_assoc()) {

    $pname = $row['pname'];
    $pdesc = $row['pdesc'];
    //$pimg = $_POST['img'];
    $pprice = $row['price'];
    $pqty = $row['qty'];
    $ptype = $row['ptype'];
    $pimg =$row['imgpath'];
    }
  }
   else {
  echo "0 results";
}
     mysqli_close($conn); 
?>
<div class="container mt-5">
  <h2>Edit Plants</h2>
  <p>You can  update the products here.</p>            
  <form class="form-horizontal" action="Editation-plant.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
      <label class="control-label col-sm-2" for="ptype">Plant Type:</label>
      <div class="col-sm-10">
        <select class="form-control" id="ptype" name="ptype">
          <?php 
          if($ptype==0)
          {
          echo'<option value="0">Flower Plant</option>';
          }
			   if($ptype==1)
          {
          echo '<option value="1">Fruit Plants</option>';
          }
          if($ptype==2)
          {
           echo'<option value="2">Other Plants</option>';
          }
          ?>
          <option value="0">Flower Plant</option>
          <option value="1">Fruit Plants</option>
          <option value="2">Other Plants</option>
		</select> 
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pname">Plant Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pname"  value="<?php echo $pname ?>" placeholder="Enter name" name="pname" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pdesc">Plant Description:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pdesc"  value="<?php echo $pdesc ?>" placeholder="Enter desc" name="pdesc" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="price">Price:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="price"  value="<?php echo $pprice ?>" placeholder="Enter price" name="price" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" id="qtyid" for="qty">Qty:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="qty"  value="<?php echo $pqty ?>" placeholder="Enter Value" name="qty" required>
      </div>
    </div>
    <div class="form-group mt-3">        
      <div class="col-sm-offset-2 col-sm-10">
      <input type="hidden" name="id" value=<?php echo $_GET['pid'];?>>
        <button type="submit" name="Update_plant" class="btn btn-default bg-success text-light">Submit</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>



