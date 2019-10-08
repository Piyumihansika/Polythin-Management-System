<?php require_once('inc/connection.php'); 
 


 if(isset ( $_POST['submit']))
 {

$productCode=$_POST['productCode'];
$productName=$_POST['productName'];
$productSize=$_POST['productSize'];




$result="SELECT * FROM products WHERE productName='".$productName."'";//products is table name here.


if(mysqli_query($connection,$result))

{


$sql="SELECT * FROM products WHERE  productName='".$productName."'" ;
$res = mysqli_query($connection, $sql);
$row = mysqli_fetch_array($res);


$new=($row['productSize'] - $productSize);

		
$query="UPDATE products SET productSize =$new  WHERE productName='".$productName."'";


}



else
{

$query="INSERT INTO products(productCode,productName,productSize,productPrice) VALUES('$productCode','$productName','$productSize','$productPrice') ";


}




}
if(mysqli_query($connection,$query))
	echo "Record Added Successfully.";

else
	echo "Record Added Fail";



	 mysqli_close($connection);

?>