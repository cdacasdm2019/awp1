<?php
		
$username = 'root';
$password = 'actscdac';
$host = 'localhost';
$dbname = 'movies';

$connect = mysqli_connect($host,$username,$password) or die("Unable to connect");

$sel_db = mysqli_select_db($connect,$dbname) or die('No Database Found');

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
?>