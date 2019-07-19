<?php

include 'dbconnect.php';

$name = $_POST['movieName'];
$price = $_POST['moviePrice'];
$rdate = $_POST['releaseDate'];
$bdate = $_POST['bookingDate'];

	$bookingID = "MOV".rand(10000,99999);    
	$sql="INSERT INTO movie (moviename,movieprice,movierelease,bookingdate) VALUES ('$name','$price','$rdate','$bdate')";
    mysqli_query($connect,$sql) or die(mysqli_error($connect));
		echo "Your Booking ID is: ".$bookingID." for the Show on ".$bdate;
	
	

?>