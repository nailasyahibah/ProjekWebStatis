<?php
$host ="localhost";
$username ="root";
$password ="";
$database_name ="projek_dinamis";
$db_link=mysqli_connect($host, $username, $password,$database_name);
if(!$db_link)
{
		
		echo"Tidak Terhubung";

}
?>