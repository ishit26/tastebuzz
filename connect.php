<?php

 $conn = mysqli_connect("localhost","root", "", "tastebuzz",3308 );

 if(!$conn){
 	die("Could not connect:".mysqli_errno());
 }
?>