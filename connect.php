<?php
// Create connection
$con=mysqli_connect("127.0.1.1","root","0273","eko_spats");

// Check connection
if(!$con){
	echo "Failwed";
}else{
	echo "s";
}
//
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?> 
