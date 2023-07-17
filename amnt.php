<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	if(isset($_POST['btn']))
	{
	$max_qry = mysqli_query($connect,"select max(id) from amnt");
		$max_row = mysqli_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;
	$qry=mysqli_query($connect,"insert into amnt values('$id','$hf','$mf','$hf'+'$mf','$month','$date')");
		if($qry)
		{
			echo "<script>alert('Fees Details entered Sucessfully')</script>";
		
		}
		else
		{
			echo "<script>alert('Enter Again')</script>"; 
			
		
		}
		}
	?>
<html>
<head>
  <title>Hostel</title>
  <meta name="description" content="website description" />
    <link rel="stylesheet" href="indexstyle.css">
	<link rel="stylesheet" href="gradient.css">
	<link rel="stylesheet" href="font.css">
</head>
<body>
  <table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#ccffff" scope="col"><h1>Hostel Information Management System</h1>
      </th>
    </tr>
  </table>
  <div id="grad4">
  <table width="100%" border="0">
     <tr>
      <th scope="col"><a href="adminhome.php" class="button pulse">Admin Home</a></th>
      <th scope="col"><a href="hostel.php" class="button pulse">Hostel</a></th>
      <th scope="col"><a href="amnt.php" class="button pulse">Monthly Amount</a></th>
      <th scope="col"><a href="viewstud.php" class="button pulse">View Students</a></th>
	  <th scope="col"><a href="viewf.php" class="button pulse">View Feedbacks</a></th>
      <th scope="col"><a href="index.php" class="button pulse">LogOut</a></th>
    </tr>
  </table>
  

  
  
  <p>&nbsp;</p>
  <div id="content" />
   <img src="images\sjc.jpeg" width="1350" height="200">

<br>
<br>
<br>


 <h2 align="center">Enter Mess Bill</h2>

<form id="f1" name="f1" method="post" action="#" >
  <table width="31%" height="243" border="0" align="center">
	
	 <tr>
     
      <td width="39%" height="55" align="justify">Hostel Fees </td>
      <td width="61%">
        <input name="hf" type="text" id="hf" />
      </td>
      
   
    <tr>
      <td height="46" align="justify">Mess Fees</td>
      <td><input name="mf" type="text" id="mf"  /></td>
    </tr>
	
	  
    <tr>
      <td height="44" align="justify">Month</td>
      <td><select name="month">
	  <option value="">select</option>
	  <option value="january">january</option>
	  <option value="Februry">Februry</option>
	  <option value="March">March</option>
	  <option value="April">April</option>
	  <option value="May">May</option>
	  <option value="June">June</option>
	  <option value="July">July</option>
	  <option value="Agust">Agust</option>
	  <option value="September">September</option>
	  <option value="November">October</option>
	  <option value="November">November</option>
	  <option value="December">December</option>
	  </select></td>
    </tr>
		  
	
	  <tr>
     
      <td height="37" align="justify">Last Date</td>
      <td><input name="date" type="date" id="date" /></td>
    </tr>
		  
	
    <tr>
       <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>


<marquee scrollamount="10"><h1><font color="#666666">Hostel Information Management System</h1></marquee>
  
<table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#666666" scope="col"><p> Hostel management</p>
      </th>
    </tr>
</table>

</div>
</body>
</html>