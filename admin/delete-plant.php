<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = 'plantshop';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
	  $id = $_GET['pid'];
     $sql ="DELETE FROM plant WHERE pid='$id'";
     
	 $result= mysqli_query($conn, $sql);
  
     if ($result == false) {
        echo 'Error: cannot delete id ' . $id;
        return false;
    } else {
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a> <br>"; 
        echo "<font color='green'>Data Deleted successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
     mysqli_close($conn); 
?>