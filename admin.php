<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

if(isset($_POST['btn']))
{
$qry=mysqli_query($connect,"select * from admin where name='$uname' && psw='$password'");
$num=mysqli_num_rows($qry);
if($num==1)
{
?>
<script>alert('welcome to admin home page');
</script>
<?php

header("location:adminhome.php");
}
else
{
echo "<script>alert('User Name Password Wrong.....')</script>";

}
}
?> 
<html>
<head>
  <title>Hostel Management</title>
  <meta name="description" content="website description" />
  <link rel="stylesheet" href="loginstyle.css">
  <link rel="stylesheet" href="indexstyle.css">  
</head>
<body>
                <div align="left">
  
    
     <h3> <a href="index.php" class="button pulse">Back</a></h3>
      

    
  </div>   
<div class="center">
<h1>Admin Login</h1>
<form id="form1" name="form1" method="post" action="">
	  <div class="txt_field">
          <input type="text" name="uname" id="uname" />
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" id="password" />
          <span></span>
          <label>Password</label>
        </div>
        <br>
         <br>
             <input name="btn" type="submit" id="btn" value="Login" />
			 <a href="index.php" type="submit" value="Back"/> 
</form>
</div>
</body>
</html>
