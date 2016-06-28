

<html>
<body> 

<link rel="stylesheet" href="css/style.css">
  <meta name='viewport' content='width=device-width, initial-scale=1.0' >


<img src="css/images/HeaderIMG.png" alt="Icon" right: 100%; style="width:300px;height:113px;">

 
<form autocomplete="off" action="home.php" method="post">
	
	 <div> 
<span style="width:100px; display: inline-block;">
<input type="text" placeholder="Username" class="TextField_Username" name="username"/><br/>

 <span style="width:100px; display: inline-block;"> <input type="password" placeholder="Password" class="TextField_Password" name="password"/></br>
 
  <input type="submit" class="SubmitButton" name="SubmitButton"/>
  </div>
</form>    
</body>
</html>


<?php    

if(isset($_POST['SubmitButton'])){ //check if form was submitted
$n = $_POST['username'];
$p = $_POST['password'];

}

?>