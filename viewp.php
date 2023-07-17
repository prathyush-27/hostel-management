<?php
include("dbconnect.php");
extract($_POST);
session_start();
$reg=$_SESSION['reg'];
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
<div id="grad4">
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
   <img src="images\2.jpg" width="1350" height="400">


<table width="100%" border="0" align="center">
        <tr>
          <td width="13%"><div align="center" class="style6"><strong><strong>Reg No</strong> </div></td>
		  <td width="18%"><div align="center" class="style6"><strong>Student Name</strong> </div></td>
		  <td width="17%"><div align="center" class="style6"><strong>Department</strong> </div></td>
		   <td width="8%"><div align="center" class="style6"><strong>Class</strong></div></td>
		  <td width="17%"><div align="center" class="style6"><strong>Hostel Name </strong></div></td>
		   <td width="9%"><div align="center" class="style6"><strong>Month </strong></div></td>
		   <td width="11%"><div align="center" class="style6"><strong>Amount </strong></div></td>
		    <td width="7%"><div align="center" class="style6"><strong>Status</strong></div></td>
        </tr>
		
			<tr>
		<td colspa="8">&nbsp;</td>
		</tr>
		<?php
		$qry=mysqli_query($connect,"select * from paid where reg='$reg'");
		$i=1;
		while($row=mysqli_fetch_array($qry))
		{
		$reg=$row['reg'];
		  $qt=mysqli_query($connect,"select * from stud where reg='$reg'");
		  $rw=mysqli_fetch_assoc($qt);
		
		
		?>

        <tr>
		   <td height="20"><div align="center"><?php echo $row['reg'];?></div></td>
		   <td><div align="center"><?php echo $rw['name'];?></div></td>
		   <td><div align="center"><?php echo $rw['dept'];?></div></td>
		    <td><div align="center"><?php echo $rw['cls'];?></div></td>
		   <td><div align="center"><?php echo $rw['hname'];?></div></td>
		   <?php
		   
		 
		   ?>
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
		
		?>
		</table>
		
		
		
			  
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
