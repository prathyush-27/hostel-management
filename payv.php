<?php
include("dbconnect.php");
extract($_POST);
session_start();
?>
<html>
<head>
  <title>Hostel</title>
  <meta name="description" content="website description" />
 <link rel="stylesheet" href="indexstyle.css" >
 <link rel="stylesheet" href="font.css">
 <link rel="stylesheet" href="gradient.css">
 
</head>
<body>
  <table width="101%" border="0">
    <tr>
      <th height="73" bgcolor="#ccffff" scope="col"><h1>Hostel Information Management System</h1>
      </th>
    </tr>
  </table>
  <div id="grad5">
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
  <div id="content"/>
   <img src="images\sjc.jpeg" width="1350" height="200">

<br>
<br>
<br>

<table width="100%" border="0" align="center">
        <tr>
		  <td width="21%"><div align="center" class="style6"><strong>Reg No</strong></div></td>
		  <td width="25%"><div align="center" class="style6"><strong>Hostel Name </strong></div></td>
		   <td width="20%"><div align="center" class="style6"><strong>Month </strong></div></td>
		   <td width="19%"><div align="center" class="style6"><strong>Amount </strong></div></td>
		    <td width="15%"><div align="center" class="style6"><strong>Status</strong></div></td>
        </tr>
		
			<tr>
		<td colspa="8">&nbsp;</td>
		</tr>
		<?php
		if($_REQUEST["act"]==('update'));
		{
		$reg=$_REQUEST['reg'];
		$qry=mysqli_query($connect,"select * from paid where reg='$reg'");
		$i=1;
		while($row=mysqli_fetch_array($qry))
		{
		$reg=$row['reg'];
		?>

        <tr>
		<td><div align="center"><?php echo $reg;?></div></td>
		  
		   <?php
		   
		   $qt=mysqli_query($connect,"select * from stud where reg='$reg'");
		  $rw=mysqli_fetch_assoc($qt);
	
		   ?>
		    <td><div align="center"><?php echo $rw['hname'];?></div></td>
		  <td><div align="center"><?php echo $row['month'];?></div></td>
		    <td><div align="center"><?php echo $row['total'];?></div></td>
			  <td><div align="center"><?php echo "paid"?></div></td>
		
        </tr>
		<tr>
		<td height="22" colspa="8">&nbsp;</td>
		</tr>
        <?php
		$i++;
		}
		}
		?>
		</table>
		
		
		
		
				
		
<marquee scrollamount="10"><h1><font color="#ccffff">Hostel Information Management System</h1></marquee>
  
<table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#666666" scope="col"><p>Hostel Management</p>
      </th>
    </tr>
</table>

</div>
</body>
</html>