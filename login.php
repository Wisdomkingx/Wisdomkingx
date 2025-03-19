<?php
//post
$un=$_POST['uname'];
echo$un;echo"<br>";
$pd=$_POST['pwd'];
echo$pd;echo"<br>";

//connect to database

$con=mysqli_connect("localhost","root","","projectdb");
if(!$con){
    die("not connected");
}
else{
    echo("successful");
}

//to query
$qry=mysqli_query($con,"select matnumber,firstname,lastname,username,password from student where password='$pd' AND username='$un'");

$result=mysqli_fetch_array($qry);
$result[0];
$result[1];
$result[2];
if($result[3]==$un && $result[4]){
    header("location:dashboard.html");
}
else{
    echo("incorrect password-username");
}


?>

