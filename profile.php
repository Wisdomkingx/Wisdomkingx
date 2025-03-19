<?php
if(isset($_POST['submit'])){
//echo"goo";	
    $un=$_POST['uname'];
	//echo$un;echo"<br>";
	$pd=$_POST['pwd'];
	//echo$pd;echo"<br>";

//to connect to database
$con=mysqli_connect("localhost","root","","projectdb");
/*if(!$con){
	die("could not connect to server");
}	
else{
	echo"server connected";echo"<br>";
}*/

//query
$qry=mysqli_query($con,"select * from student where username='$un' AND password='$pd'");
/*if(!$qry){
	die("record not fetched");
}	
else{
	echo"record fetched";echo"<br>";
}*/
//to fetch result
$result=mysqli_fetch_array($qry);
/*echo$result[0];
echo$result[1];
echo$result[2];
echo$result[3];
echo$result[4];
echo$result[4];*/

if($un==$result[4] && $pd==$result[19]){
	//header("Location:pverify.html");
	//echo"successful";
}
/*else{
	echo"incorrect userName-password";
	
}*/


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>myprofile</title>
<link rel="stylesheet" href="ta.css">
<link rel="stylesheet" href="animate/animate.min.css">
<link rel="stylesheet" href="font/css/all.css">
</head>
<body>
	<div id="gh">
<form action="" method="post">
 <h1>Welcome <?php echo strtoupper($result[2]);?> From <?php echo ucfirst($result[10]);?>
 </h1>
<table class="trr">
	<caption>Personal Details</caption>
<tr><th>Matric Number</th><td><?php echo$result[0];?></td>
</tr>
<tr><th>First Name</th><td><?php echo$result[2];?></td>
</tr>
<tr><th>Last name</th><td><?php echo$result[3];?></td>
</tr>
<tr><th>Gender</th><td><?php echo$result[6];?></td>
</tr>
<tr><th>Date Of Birth</th><td><?php echo$result[5];?></td>
</tr>
<tr><th>State Of Origin</th><td><?php echo$result[9];?></td>
</tr>
</table>
<br>
<table class="trr">
	<caption>Contact Information</caption>
<tr><th>Country</th><td><?php echo$result[8];?></td>
</tr>
<tr><th>Address</th><td><?php echo$result[7];?></td>
</tr>
<tr><th>City</th><td><?php echo$result[10];?></td>
</tr>
<tr><th>Email</th><td><?php echo$result[15];?></td>
</tr>
<tr><th>Mobile number</th><td><?php echo$result[14];?></td>
</tr>
</table>
<br>
<table class="trr">
	<caption>Course Of Study</caption>
<tr><th>Department</th><td><?php echo$result[1];?></td>
</tr>
<tr><th>Programme:Bsc</th><td><?php echo$result[16];?></td>
</tr>
<tr><th>Type:Regular</th><td><?php echo$result[17];?></td>
</tr>
</tr>
</table>
</form>
</div><br>
<a class="huz" href="dashboard.html" style="text-decoration: none; font-size: 30px; margin-left: 400px; font-weight:bolder; color:#297994">&#8592Dashboard</a><br>
<a class="huz" href="home.html" style="text-decoration: none; font-size: 30px; margin-left: 400px; font-weight:bolder; color:#223559">&#8592<i class="fa fa-home"></i></a><br>
</body>
</html>