<?php
if(isset($_POST['submit'])){
//echo"good to go kings!";
$cud=$_POST['cursd'];
echo$cud;
$cos1=$_POST['cors1'];
echo$cos1;"<br>";
$cos2=$_POST['cors2'];
echo$cos2;"<br>";
$cos3=$_POST['cors3'];
echo$cos3;"<br>";
$cos4=$_POST['cors4'];
echo$cos4;"<br>";
$cos5=$_POST['cors5'];
echo$cos5;"<br>";
$cos6=$_POST['cors6'];
echo$cos6;"<br>";
$cos7=$_POST['cors7'];
echo$cos7;"<br>";
$cos8=$_POST['cors8'];
echo$cos8;"<br>";
$cos9=$_POST['cors9'];
echo$cos9;"<br>";
$cos10=$_POST['cors10'];
echo$cos10;"<br>";
$cos11=$_POST['cors11'];
echo$cos11;"<br>";
$cos12=$_POST['cors12'];
echo$cos12;"<br>";
$cos13=$_POST['cors13'];
echo$cos13;"<br>";
$cos14=$_POST['cors14'];
echo$cos14;"<br>";
$cos15=$_POST['cors15'];
echo$cos15;"<br>";
$cos16=$_POST['cors16'];
echo$cos16;"<br>";
$cos17=$_POST['cors17'];
echo$cos17;"<br>";
$cos18=$_POST['cors18'];
echo$cos18;"<br>";
$cst1=$_POST['corst1'];
echo$cst1;"<br>";
$cst2=$_POST['corst2'];
echo$cst2;"<br>";
$cst3=$_POST['corst3'];
echo$cst3;"<br>";
$cst4=$_POST['corst4'];
echo$cst4;"<br>";
$cst5=$_POST['corst5'];
echo$cst5;"<br>";
$cst6=$_POST['corst6'];
echo$cst6;"<br>";
$cst7=$_POST['corst7'];
echo$cst7;"<br>";
$cst8=$_POST['corst8'];
echo$cst8;"<br>";
$cst9=$_POST['corst9'];
echo$cst9;"<br>";
$cst10=$_POST['corst10'];
echo$cst10;"<br>";
$cst11=$_POST['corst11'];
echo$cst11;"<br>";
$cst12=$_POST['corst12'];
echo$cst12;"<br>";
$cst13=$_POST['corst13'];
echo$cst13;"<br>";
$cst14=$_POST['corst14'];
echo$cst14;"<br>";
$cst15=$_POST['corst15'];
echo$cst15;"<br>";
$cst16=$_POST['corst16'];
echo$cst16;"<br>";
$cst17=$_POST['corst17'];
echo$cst17;"<br>";
$cst18=$_POST['corst18'];
echo$cst18;"<br>";
$ced1=$_POST['cre1'];
echo$ced1;
$ced2=$_POST['cre2'];
echo$ced2;
$ced3=$_POST['cre3'];
echo$ced3;
$ced4=$_POST['cre4'];
echo$ced4;
$ced5=$_POST['cre5'];
echo$ced5;
$ced6=$_POST['cre6'];
echo$ced6;
$ced7=$_POST['cre7'];
echo$ced7;
$ced8=$_POST['cre8'];
echo$ced8;
$ced9=$_POST['cre9'];
echo$ced9;
$ced10=$_POST['cre10'];
echo$ced10;
$ced11=$_POST['cre11'];
echo$ced11;
$ced12=$_POST['cre12'];
echo$ced12;
$ced13=$_POST['cre13'];
echo$ced13;
$ced14=$_POST['cre14'];
echo$ced14;
$ced15=$_POST['cre15'];
echo$ced15;
$ced16=$_POST['cre16'];
echo$ced16;
$ced17=$_POST['cre17'];
echo$ced17;
$ced18=$_POST['cre18'];
echo$ced18;

//connect to database
$con=mysqli_connect("localhost","root","","projectdb");
if(!$con){
	die("could not connect to server");
}	
else{
	echo"server connected";echo"<br>";
}
$qry=mysqli_query($con,"insert into courses(cursid,course1,course2,course3,course4,course5,course6,course7,course8,course9,course10,course11,course12,course13,course14,course15,course16,course17,course18,
costi1,costi2,costi3,costi4,costi5,costi6,costi7,costi8,costi9,costi10,costi11,costi12,costi13,costi14,costi15,costi16,costi17,costi18,
cred1,cred2,cred3,cred4,cred5,cred6,cred7,cred8,cred9,cred10,cred11,cred12,cred13,cred14,cred15,cred16,cred17,cred18)
 values($cud,'$cos1','$cos2','$cos3','$cos4','$cos5','$cos6','$cos7','$cos8','$cos9','$cos10','$cos11','$cos12','$cos13','$cos14','$cos15','$cos16','$cos17','$cos18',
 '$cst1','$cst2','$cst3','$cst4','$cst5','$cst6','$cst7','$cst8','$cst9','$cst10','$cst11','$cst12','$cst13','$cst14','$cst15','$cst16','$cst17','$cst18',
 '$ced1','$ced2','$ced3','$ced4','$ced5','$ced6','$ced7','$ced8','$ced9','$ced10','$ced11','$ced12','$ced13','$ced14','$ced15','$ced16','$ced17','$ced18')");
if(!$qry){
	die("error encounter");
}
else{
	echo("welcome kings");
}
$result=mysqli_fetch_array($qry);
echo$result[0];
$result[1];
$result[2];




}
?>