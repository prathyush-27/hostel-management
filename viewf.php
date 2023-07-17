<?php
include("dbconnect.php");
extract($_POST);
session_start();
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
      <th height="73" bgcolor="#666666" scope="col"><h1>Hostel Information Management System</h1>
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
      <th scope="col"><a href="index.php" class="button pulse">LogOut</a></th>
    </tr>
  </table>
  



  <p>&nbsp;</p>
  <div id="content">
   <img src="images\sh.jpg" width="1420" height="200">

<br>
<br>
<br>


<table width="67%" border="0" align="center">
        <tr>
          <td width="16%"><div align="center" class="style6"><strong><strong>Reg No</strong> </div></td>
		  <td width="25%"><div align="center" class="style6"><strong>Student Name</strong> </div></td>
	      <td width="22%"><div align="center" class="style6"><strong>Subject </strong></div></td>
		  <td width="37%"><div align="center" class="style6"><strong>Complaints/suggestion </strong></div></td>
        </tr>
		
			<tr>
		<td colspa="8">&nbsp;</td>
		</tr>
		<?php
		$qry=mysqli_query($connect,"select * from suggest");
		$i=1;
		while($row=mysqli_fetch_array($qry))
		{
		$reg=$row['reg'];
		?>

        <tr>
		   <td height="20"><div align="center"><?php echo $row['reg'];?></div></td>
		   <td><div align="center"><?php echo $row['name'];?></div></td>
		   <td><div align="center"><?php echo $row['sub'];?></div></td>	
		    <td><div align="center"><?php echo $row['cmpl'];?></div></td>		
        </tr>
		<tr>
		<td height="22" colspa="8">&nbsp;</td>
		</tr>
        <?php
		$i++;
		}
		
		?>
</table>
		
		
		
		
		
		
				
<marquee scrollamount="10"><h1><font color="#666666">Hostel Information Management System</h1></marquee>
  
<table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#666666" scope="col"><p>Hostel Management</p>
      </th>
    </tr>
</table>

</div>
</body>
</html>