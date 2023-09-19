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
     $sql = "SELECT * FROM orders where pid='$id'";
     
	 $data = mysqli_query($conn, $sql);
        
	if ($data->num_rows > 0) {  
  
  while($row = $data->fetch_assoc()) {
      $pid=$row['pid'];
    $pname = $row['pname_ord'];
    $pprice = $row['price_ord'];
    //$pimg = $_POST['img'];
    $pphone = $row['phone_ord'];
    $pqty = $row['qty_ord'];
    $paddr = $row['address_ord'];
    }
  }
   else {
  echo "0 results";
}
     mysqli_close($conn); 
?>
 <div class="container mt-5 bg-light p-4 mb-5">
 <h2>Edit Orders</h2>
  <p>You can  update the Orders here.</p>              
    <form class="form-horizontal" action="editation-order.php" method="post" enctype="multipart/form-data">
      <div class="form-group mt-2">
        <label class="control-label col-sm-2" for="pname">Plant Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" value="<?php echo $pname ?>" id="pname" placeholder="Enter name" name="pname" required>
        </div>
      </div>
      <div class="form-group mt-2">
        <label class="control-label col-sm-2" for="price">Price:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="price" value="<?php echo $pprice ?>" placeholder="Enter price" name="price" required>
        </div>
      </div>
      <div class="form-group mt-2">
        <label class="control-label col-sm-2" id="qtyid" for="qty">Qty:</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="qty" value="<?php echo $pqty ?>"  placeholder="Enter Qty" name="qty" required>
        </div>
      </div>
    <div class="form-group mt-2">
    <label class="control-label col-sm-2" for="dphone">Phone No:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="dphone" value="<?php echo $pphone ?>" placeholder="Enter Phone No" name="dphone" required>
    </div>
  </div>
  <div class="form-group mt-2">
  <label class="control-label col-sm-2" for="deladdr">Delivery Address:</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="deladdr" value="<?php echo $paddr ?>" placeholder="Enter Delivery Address" name="deladdr" required>
  </div>
</div>
      <div class="form-group mt-3">        
        <div class="col-sm-offset-2 col-sm-10">
        <input type="hidden" name="pid" value="<?php echo $pid ?>">
          <button type="submit" name="Submit" class="btn btn-default bg-success text-light">Submit</button>
        </div>
      </div>
    </form>
</div>
<script>
$('#price, #qty').change(function(){
    var rate = parseFloat($('#price').val()) || 0;
    var box = parseFloat($('#qty').val()) || 0;

    $('#price').val(rate * box);    
});
</script>
</body>
</html>



