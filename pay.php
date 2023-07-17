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
   <img src="images\sjc.jpeg" width="1420" height="400">


 <h2 align="center">Payment</h2>
		  <form action="#" method="post">
		  
		  
		  
		 <div align="center"> <select name="month">
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
	  <option value="October">October</option>
	  <option value="November">November</option>
	  <option value="December">December</option>
	  </select>
	  <input type="submit" name="btn1"></div>
	  </form>
		  
		  <?php
		  if(isset($_POST['btn1']))
		  {
		  $qry=mysqli_query($connect,"select * from amnt where month='$month'");
		  $row=mysqli_fetch_assoc($qry);
		  $month=$row['month'];
		  $total=$row['total'];
		  $hostel=$row['hf'];
		  $mess=$row['mf'];
		 }
		 ?>
		<form name="form1" method="post" action="payment.php?month=<?php echo $month;?>&total=<?php echo $total;?>">
	  <table width="38%" height="210" border="0" align="center">
       
		 <tr>
          <td width="39%" height="44">Register No</td>
          <td width="61%"><?php echo $reg;?></td>
        </tr>
		
       
		 <tr>
          <td width="39%" height="33"> Hostel Fees </td>
		   <td><?php echo $hostel;?></td>
        </tr>
		
       
        <tr>
          <td width="39%" height="42">Mess Fees </td>
		  <td> <?php echo $mess;?></td>
        </tr>
		
        
		<tr>
          <td width="39%" height="37">Total amount </td>
		  <td><?php echo $total;?></td>
        </tr>
        <tr>
          <td height="31">&nbsp;</td>
          <td><input name="btn" type="submit" id="btn"/></td>
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


</body>
</html>
