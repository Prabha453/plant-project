<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = 'plantshop';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }

     $pname = $_POST['pname'];
     $pdesc = $_POST['pdesc'];
	 //$pimg = $_POST['img'];
     $pprice = $_POST['price'];
	 $pqty = $_POST['qty'];
	 $ptype = $_POST['ptype'];
	 $temp = $_FILES['img']['tmp_name'];
	 $pimg = 'uploads/'.$_FILES['img']['name'];
	 move_uploaded_file($temp, '../uploads/' .$_FILES['img']['name']);
	 
     $sql = "INSERT INTO plant(pname,pdesc,imgpath,price,qty,ptype) VALUES ('$pname','$pdesc','$pimg','$pprice','$pqty','$ptype')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully ! <br/><a href='addPlant.php'>Add Plants</a>";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn); 
?>