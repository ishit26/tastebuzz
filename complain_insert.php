
<?php
  include "connect.php";
  if (isset($_POST["comp"])) 
  {
    $name1 = $_POST["name"];
    $email1 = $_POST["email"];
    $sub1 = $_POST["sub"];
    $msg1 = $_POST["msg"];
    $query = "INSERT into complain(Name,Email,Subject,Message)VALUES('$name1','$email1','$sub1','$msg1')";
      if(mysqli_query($conn,$query))
      {
        echo'<script language="javascript" type="text/javascript"> alert("We Have Receive Your Complain.") </script>';
      }
  }       
?>