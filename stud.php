<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

	if(isset($_POST['btn']))
	{
	$qry=mysqli_query($connect,"select * from stud where name='$sname'&& reg='$psw'");
	$row=mysqli_num_rows($qry);
		if($row==1)
		{
		$qr=mysqli_query($connect,"select * from stud where name='$sname'&& reg='$psw'");
		$rw=mysqli_fetch_assoc($qr);
		$reg=$rw['reg'];
		
		
			
			echo "<script>alert('login sucessfully')</script>";
			$_SESSION['reg']=$reg;
			header("location:studhome.php");
		
		}
		else
		{
			echo "<script>alert('Stuent name and password wrong')</script>"; 
			
		
		}
		}
	?>
	
	<html>
<head>
  <title>Hostel</title>
  <meta name="description" content="website description" />
  <link rel="stylesheet" href="indexstyle.css">
  
  <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
 
   
      <a href="index.php" class="button pulse">Back</a>
      


    
  <div class="center">
<h1>Student Login</h1>
 <form action="" method="POST">
	  <div class="txt_field">
          <input type="text" name="sname" />
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="psw" />
          <span></span>
          <label>Password</label>
        </div>
        <br>
         <br>
             <input name="btn" type="submit" id="btn" value="Login" />
			 
</form>
</div>

  
  
 
       
	 
	 
	 
	  



</body>
</html>
