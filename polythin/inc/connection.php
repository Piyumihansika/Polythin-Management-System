<?php


$connection =mysqli_connect('localhost','root','','patient');




if(mysqli_connect_errno())
{


	die("fail".mysqli_connect_error());

}
else echo "Connection Successful.";








?>