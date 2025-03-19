<?php
$em=$_POST['ema'];
//echo$em;echo"<br>";
$que=$_POST['secretq'];
//echo$que;echo"<br>";
$ane=$_POST['answer'];
//echo$ane;echo"<br>";
$npd=$_POST['npd'];
//echo$npd;echo"<br>";

//to connect to database
$con=mysqli_connect("localhost","root","","projectdb");
/*if(!$con){
	die("could not connect to server");
}	
else{
	echo"server connected";
}*/
$qry=mysqli_query($con,"update student SET password='$npd' where email='$em' AND secretquestion='$que' AND answerr='$ane'");
if(!$qry){
	die("could not update record");
}	
else{
	echo"<a href='login.html'>Your password has been changed. click here to login with your new password</a>";
}











?>