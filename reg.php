<?php
if(isset($_POST['submit'])){
	//echo"good to go";
//post
$mt=$_POST['matno'];
echo$mt;echo"<br>";
$dpt=$_POST['depart'];
echo$dpt;echo"<br>";
$fn=$_POST['fname'];
echo$fn;echo"<br>";
$ln=$_POST['lname'];
echo$ln;echo"<br>";
$un=$_POST['uname'];
echo$un;echo"<br>";
$dob=$_POST['date'];
echo$dob;echo"<br>";
$gen=$_POST['birth'];
echo$gen;echo"<br>";
$add=$_POST['address'];
echo$add;echo"<br>";
$cn=$_POST['country'];
echo$cn;echo"<br>";
$st=$_POST['state'];
echo$st;echo"<br>";
$ct=$_POST['city'];
echo$ct;echo"<br>";
$lg=$_POST['localg'];
echo$lg;echo"<br>";
$sqt=$_POST['secretq'];
echo$sqt;echo"<br>";
$ane=$_POST['answer'];
echo$ane;"<br>";
$ph=$_POST['phone'];
echo$ph;echo"<br>";
$em=$_POST['ema'];
echo$em;echo"<br>";
$bsc=$_POST['radio'];
echo$bsc;echo"<br>";
$bed=$_POST['radio'];
echo$bed;echo"<br>";
$bte=$_POST['radio'];
echo$bte;echo"<br>";
$reg=$_POST['checkbox'];
echo$reg;echo"<br>";
$prt=$_POST['checkbox'];
echo$prt;echo"<br>";
$pd=$_POST['pwd'];
echo$pd;echo"<br>";

//connect to database
$con=mysqli_connect("localhost","root","","projectdb");
if(!$con){
    die("error");
}
else{
    echo("connected");echo"<br>";
}

//query
$qry=mysqli_query($con,"insert into student(matnumber,department,firstname,lastname,username,dateofbirth,gender,address,country,state,city,localg,secretquestion,answerr,phone,email,bsc,bed,btech,regular,parttime,password) 
values($mt,'$dpt','$fn','$ln','$un','$dob','$gen','$add','$cn','$st','$ct','$lg','$sqt','$ane','$ph','$em','$bsc','$bed','$bte','$reg','$prt','$pd')");
if($qry){
    header("location:login.html");
}
else{
   echo("error");
}


}

?>