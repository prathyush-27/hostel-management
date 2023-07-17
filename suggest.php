<?php
include("dbconnect.php");
extract($_POST);
session_start();
	$reg=$_SESSION['reg'];
	if(isset($_POST['btn']))
	{
	$max_qry=mysqli_query($connect,"select max(id) from suggest");
	$max_row=mysqli_fetch_array($max_qry);
	$id=$max_row['max(id)']+1;
	$qry=mysqli_query($connect,"insert into suggest values('$id','$reg','$name','$sub','$cmpl')");
	if($qry)
	{
		echo "<script>alert('We Get your Suggestions if it is posiible we will take action for that')</script>";
		
	}
	else
	{
		echo "<script>alert('Enter the fields Correctly')</script>";
	
	}

}

?>
<html>
<head>
  <title>Hostel</title>
  <meta name="description" content="website description" />
  <link rel="stylesheet" href="indexstyle.css">
  <link rel="stylesheet" href="font.css">
  <link rel="stylesheet" href="gradient.css">
</head>


<body>
<div id="grad3">
  <table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#666666" scope="col"><h1>Hostel Information Management System</h1>
      </th>
    </tr>
  </table>
  <table width="100%" border="0">
    <tr>
      <th scope="col"><a href="studhome.php" class="button pulse">StudentHome</a></th>
      <th scope="col"><a href="pay.php" class="button pulse">payment</a></th>
       <th scope="col"><a href="viewp.php" class="button pulse">Paid Details</a></th>
      <th scope="col"><a href="suggest.php" class="button pulse">Suggestions</a></th>
       <th scope="col"><a href="index.php" class="button pulse">Logout</a></th>
    </tr>
  </table>
  

  
  
  <p>&nbsp;</p>
  <div id="content"/>
  

 <h2 align="center">Leave Your Feed Back About Hostel And Mess</h2>
		  <form action="" method="post">
	
  <table width="47%" height="201" border="0" align="center">
	
   
	 <tr>
      <td width="44%" height="52" align="justify">Student Name</td>
      <td width="56%">
	  <input type="text" name='name' />
      </td>
     
    </tr>
	 
    <tr>
     
      <td height="52" align="justify">Subject</td>
      <td>  <input type="text" name="sub"></td>
     
    </tr>
	
	  
     
      <td align="justify">Complaints or Suggestions</td>
      <td> <textarea name="cmpl"></textarea></td>
      
    </tr>
	 
	   <tr>
     
      <td colspan="2" align="center"> <input type="submit" name="btn" /></td>
     
    </tr>
	
  </table>
</form>



			  
<br>
<br>
<br>
<br>

	  
<table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#666666" scope="col"><p>Hostel Management</p>
      </th>
    </tr>
</table>

</div>
</body>
</html>
