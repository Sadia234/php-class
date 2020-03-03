<?php

include 'connection.php';

$pages = "CREATE TABLE IF NOT EXISTS pages(
page_id INT UNSIGNED AUTO_INCREMENT PRIMARY key,
page_title VARCHAR(30),
page_content TEXT)";

if(mysqli_query($connect, $pages)){
	echo"<br>table cretaed";
} else{
	echo"table not created";
}

?>