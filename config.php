<?php
$currency = '₹';
$db_username = 'root';
$db_password = 'root';
$db_name = 'myapp';
$db_host = '10.0.1.82:3306';
//$mysqli = new mysqli('10.0.1.87','root','password','myapp',9880);
$mysqli = new mysqli("10.0.1.82:3306","root","root","myapp");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";
?>
