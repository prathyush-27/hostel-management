<?php
include("dbconnect.php");
extract($_POST);
session_start();
$reg=$_SESSION['reg'];
$month=$_REQUEST['month'];
$total=$_REQUEST['total'];
?>

<html>
<head>
  <title>Hostel</title>
  <meta name="description" content="website description" />
  <link rel="stylesheet" href="indexstyle.css">
  <link rel="stylesheet" href="font.css">
</head>
<body>
  <table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#ccffff" scope="col"><h1>Hostel Information Management System</h1>
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
  <div id="content">
   <img src="images\sh.jpg" width="1420" height="400">

	
<form name="form1" method="post" action="#">
	  <table width="41%" border="0" align="center">
        <tr>
          <td colspan="2"><span class="style1">Payment Mode.... </span></td>
        </tr>
        <tr>
          <td height="43">&nbsp;</td>
          <td width="57%"><label>
            <input type="image" name="imageField" src="imges/payment.png" />
          </label></td>
        </tr>		
       
		 <tr>
          <td width="43%" height="35">Register No</td>
          <td><?php echo $reg;?></td>
        </tr>
		
        
		<tr>
          <td width="43%" height="32">Total Fess </td>
		  <td><?php echo $total;?></td>
        </tr>
		
		
		<tr>
          <td width="43%" height="37">Total Amount</td>
		  <td><?php echo $total+$fine;?></td>
        </tr>
		
        <tr>
          <td height="33">Enter Card Number </span></td>
          <td><input name="cno" type="text" id="cno" /></td>
        </tr>
		
        
        <tr>
          <td height="43">CVV Number </td>
          <td><input name="cvv" type="password" id="cvv" /></td>
        </tr>
		
        
        <tr>
          <td height="34">Card Name </span></td>
          <td><input name="cname" type="text" id="cname" /></td>
        </tr>
		
        <tr>
          <td>&nbsp;</td>
          <td><input name="btn1" type="submit" class="btn btn-primary" id="btn1" value="Pay" /></td>
        </tr>
  </table> 
</form>
	  
	  
	  
	  
	  	  
<?php
	
	 if(isset($_POST['btn1']))
		  {
	$max_qry = mysqli_query($connect,"select max(id) from paid");
		$max_row = mysqli_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;
		$date=date('y-m-d');
		$qt=mysqli_query($connect,"insert into paid values('$id','$reg','$total','$date','$month')");
		if($qt)
		{
		
		echo "<script>alert('payment Suceess')</script>";
	}
	
	else
	{
	echo "<script>alert('payment failure')</script>";
	
	}
	}
	?>



	  
<?php
	
	 if(isset($_POST['btn1']))
		  {
	$max_qry = mysqli_query($connect,"select max(id) from paid");
		$max_row = mysqli_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;
		$date=date('y-m-d');
		$qt=mysqli_query($connect,"insert into paid values('$id','$reg','$total','$date','$month')");
		if($qt)
		{
		
		echo "<script>alert('payment Suceess')</script>";
	}
	
	else
	{
	echo "<script>alert('payment failure')</script>";
	
	}
	}
	?>
	
	
	
	
			  
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


</body>
</html>

