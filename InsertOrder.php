
<?php
include_once("./Regvalidation.php");
$validate=new Validation();
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = 'plantshop';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
        session_start();
        if(count($_SESSION) > 0){
     $userid= $_SESSION['uid'];
     $uemail= $_SESSION['username'];
     $pid = $_POST['pid'];
     $pname_ord =$_POST['pname'];
     $qty_ord = $_POST['qty'];
     $price_ord =$_POST['total'];
     $phone_ord =$validate->is_phone_valid($_POST['dphone']);
     $address_ord =$validate->is_address_valid($_POST['deladdr']);
     $mydate = date("Y").'-'.date("M").'-'.date("j");

	 if ($phone_ord==true && $address_ord==true){

     $sql = "INSERT INTO orders(user_id,uemail,pid,pname_ord,qty_ord,price_ord,phone_ord,address_ord,order_date) VALUES 
     ('$userid','$uemail','$pid','$pname_ord','$qty_ord','$price_ord','$phone_ord','$address_ord','$mydate')";
     if (mysqli_query($conn, $sql)) {
        echo '<h3 style="color:green">Your Order Successfully</h3>
        <br/><a href="index.php">Home</a>';
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
	 }else{
		 echo '<button onclick="history.back()">Go Back</button>';
	 }
     mysqli_close($conn);   

    }else{
        echo "<script>
     window.alert(' Please Login First!')
     window.location.href='login.php';
        </script>";
    }
?>