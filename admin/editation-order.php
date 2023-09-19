<?php
$servername='localhost';
$username='root';
$password='';
$dbname = 'plantshop';
$conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
      die('Could not Connect MySql Server:' .mysql_error());
    }
if(isset($_POST['Submit']))
{       
    $id = $_POST['pid']; 
    $pname = $_POST['pname'];
    $pprice = $_POST['price'];
    $pqty = $_POST['qty'];
    $paddr = $_POST['deladdr'];
    $pphone = $_POST['dphone'];

     $sql = "UPDATE orders SET pname_ord='$pname',price_ord='$pprice',qty_ord='$pqty',address_ord='$paddr',phone_ord='$pphone' WHERE pid='$id'";
     if (mysqli_query($conn, $sql)) {
        echo '<h3 style="color:green">Updated Successfully</h3><br/>
       <a href="orders.php">View Result</a>';
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
	 }else{
		 echo '<button onclick="history.back()">Go Back</button>';
	 }
     mysqli_close($conn); 
?>