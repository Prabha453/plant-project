<?php
$servername='localhost';
$username='root';
$password='';
$dbname = 'plantshop';
$conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
      die('Could not Connect MySql Server:' .mysql_error());
    }
if(isset($_POST['Update_plant']))
{       
    $id = $_POST['id']; 
    $pname = $_POST['pname'];
    $pdesc = $_POST['pdesc'];
    $pprice = $_POST['price'];
    $pqty = $_POST['qty'];
    $ptype = $_POST['ptype'];

     $sql = "UPDATE plant SET pname='$pname',pdesc='$pdesc',price='$pprice',qty='$pqty',ptype='$ptype' WHERE pid='$id'";
     if (mysqli_query($conn, $sql)) {
        echo '<h3 style="color:green">Updated Successfully</h3><br/>
       <a href="index.php">View Result</a>';
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
	 }else{
		 echo '<button onclick="history.back()">Go Back</button>';
	 }
     mysqli_close($conn); 
?>