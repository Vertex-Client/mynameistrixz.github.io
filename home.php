

<html>
<body> 

<link rel="stylesheet" href="css/homestyle.css">
  <meta name='viewport' content='width=device-width, initial-scale=1.0' >

 



<?php    

if(isset($_POST['SubmitButton'])){ //check if form was submitted
$n = $_POST['username'];
$p = $_POST['password'];

if($n != "Admin" || $p != "root"){

echo "Password and username were not right";
return;

}

}

?>