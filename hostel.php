<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	if(isset($_POST['btn']))
	{
	$max_qry = mysqli_query($connect,"select max(id) from hostel");
		$max_row = mysqli_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;
	$qry=mysqli_query($connect,"insert into hostel values('$id','$hname','$nor','$rm','$phone','$hfor','$hc')");
		if($qry)
		{
			echo "<script>alert('Hostel Details entered Sucessfully')</script>";
		
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
  <div id="grad3">
  <table width="100%" border="0">
      <tr>
      <th scope="col"><a href="adminhome.php" class="button pulse">Admin Home</a></th>
      <th scope="col"><a href="hostel.php" class="button pulse">Hostel</a></th>
      <th scope="col"><a href="amnt.php" class="button pulse">Monthly Amount</a></th>
      <th scope="col"><a href="viewstud.php" class="button pulse">View Students</a></th>
	  <th scope="col"><a href="viewf.php" class="button pulse">View Feedbacks</a></th>
      <th scope="col"><a href="index.php"class="button pulse" >LogOut</a></th>
    </tr>
  </table>
  



		


   <form id="f1" name="f1" method="post" action="#" onSubmit="return vali()">
  <table width="40%" border="0" align="center">
	
   <tr>
     <td colspan="2" align="center"><h3>Hostel Registration</h3></td>
        </tr>
	 <tr>
      
      <td width="45%" align="justify"><span class="style6">Hostel Name</span></td>
      <td width="55%">
       <input type="text" name="hname" /></td>
     
    </tr>
	 <tr>
     <td>&nbsp;</td>
      <td>&nbsp;</td>
	</tr>
    <tr>
     
      <td align="justify"><span class="style6">Number Of Rooms</span></td>
      <td><input name="nor" type="text" id="nor"  /></td>
     
    </tr>
	
	 <tr>
     <td>&nbsp;</td>
      <td>&nbsp;</td>
	</tr>
    <tr>
       <td align="justify"><span class="style6">Room Numbers</span></td>
      <td><input name="rm" type="text" id="rm"  /></td>
    </tr>
		  <tr>
     <td>&nbsp;</td>
      <td>&nbsp;</td>
	</tr>
	
	  <tr>
      <td align="justify"><span class="style6">Contact No</span></td>
      <td><input name="phone" type="text" id="phone"  /></td>
      </tr>
	  <tr>
     <td>&nbsp;</td>
      <td>&nbsp;</td>
	</tr>
	
		  <tr>
       <td align="justify"><span class="style6">Hostel For </span></td>
      <td><select name="hfor">
	  <option value="">Select Hostel Type</option>
	  <option value="boys">Boys</option>
	  <option value="girls">Girls</option>
	  </select></td>
       </tr>
	  <tr>
     <td>&nbsp;</td>
      <td>&nbsp;</td>
	</tr>
	 <tr>
      <td align="justify"><span class="style6">Hostel Capacity</span></td>
      <td><input name="hc" type="text" id="hc"  /></td>
    </tr>
	 <tr>
     <td>&nbsp;</td>
      <td>&nbsp;</td>
	</tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>
  
 


  
<table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#666666" scope="col"><p>Hostel Management</p>
      </th>
    </tr>
</table>

</div>
</body>
</html>
