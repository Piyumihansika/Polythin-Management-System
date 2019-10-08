<?php require_once('inc/connection.php'); 
 


 if(isset ( $_POST['submit']))
 {

$productCode=$_POST['productCode'];
$productName=$_POST['productName'];
$productSize=$_POST['productSize'];
$productPrice=$_POST['productPrice'];


$query="UPDATE products SET productName='$productName',productSize='$productSize',productPrice='$productPrice' WHERE productCode='$productCode' ";



}
if(mysqli_query($connection,$query))
	echo "Record Added Successfully.";

else
	echo "Record Added Fail.";



	 mysqli_close($connection);

?>