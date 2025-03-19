<?php
//post
$un=$_POST['uname'];
$pd=$_POST['pwd'];

//connect to database

$con=mysqli_connect("localhost","root","","projectdb");

//to query
$qry=mysqli_query($con,"select matnumber,department,firstname,lastname,username,address,phone,email,password,dateofbirth from student where password='$pd' AND username='$un'");
$result=mysqli_fetch_array($qry);
$result[0];
$result[1];
$result[2];
$result[3];
if($result[4]==$un && $result[8])/*{
    header("location:update.html");
}
else{
    echo("incorrect password-username");
}
*/

?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, scale=1.0">
    <title>UPdate</title>
<link rel="stylesheet" href="reg.css">
</head>
<body>
    <div id="gh" style="height:770px";><br>
    <form action="update.php" method="POST" style="height:660px";>
        <p>Welcome <?php echo$result[2]; ?><br>
		Profile update</p>
        <label class="mot">Matricualtion Number</label>                                 <label>Department</lable><br>
        <input type="text" name="matno" placeholder="Matric number" value="<?php echo$result[0];?>" readonly><input type="text" name="depart" placeholder="Department" value="<?php echo$result[1];?>"><br>
       Name <br>
        <input type="text" name="fname" placeholder="First name" value="<?php echo$result[2];?>"><input type="text" name="lname" placeholder="Last name" value="<?php echo$result[3];?>"> <br> 
        <label class="mot">Username</label>        <label>Password</label><br>
        <input type="text" name="uname" placeholder="Username" value="<?php echo$result[4];?>"><input type="password" name="pwd" placeholder="password" value="<?php echo$result[8];?>"><br>
        <label class="mot"> Birth Date</label >           <label>Gender</label><br>
        <input type="date" name="date" ><select name="birth" value="<?php echo$result[9];?>">
            <option>Please Select</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
        </select><br>
        Address<br>
        <input type="text" name="address" placeholder="Address" style="width: 500px;" value="<?php echo$result[5];?>"><br>
         <label class="mot">Nationality</label>  <label>State of origin</label><br>
        <select name="country">
            <option>Please Select</option>
            <option>Australia</option>
            <option>Austra</option>
            <option>Argentina</option>
            <option>Algeria</option>
            <option>Belgiun</option>
            <option>Brazil</option>
            <option>Bulgeria</option>
            <option>Benin Republic</option>
            <option>Canada</option>
            <option>Cameroon</option>
            <option>China</option>
            <option>Czech Republic</option>
            <option>Denmark</option>
            <option>Egypt</option>
            <option>England</option>
            <option>Ecuador</option>
            <option>France</option>
            <option>Finland</option>
            <option>Germany</option>
            <option>Greece</option>
            <option>Hungary</option>
            <option>Holland</option>
            <option>Ice land</option>
            <option>Isreal</option>
            <option>Iraq</option>
            <option>Jamaica</option>
            <option>Japan</option>
            <option>Liberia</option>
            <option>Libya</option>
            <option>Lesotho</option>
            <option>Mali</option>
            <option>Malaysia</option>
            <option>Madagascar</option>
            <option>Morocco</option>
            <option>Malta</option>
            <option>Netherland</option>
            <option>Niger Republic</option>
            <option>Nigeria</option>
            <option>Norway</option>
            <option>Peruguay</option>
            <option>Poland</option>
            <option>Portugal</option>
            <option>Philipeen</option>
            <option>Quatar</option>
            <option>Russia</option>
            <option>Rwanda</option>
            <option>Spain</option>
            <option>swiszerland</option>
            <option>South Africa</option>
            <option>Senegal</option>
            <option>Thailand</option>
            <option>Togo</option>
            <option>Tanzania</option>
            <option>Turkey</option>
            <option>Ukraine</option>
            <option>Uganda</option>
            <option>Venezuela</option>
            <option>Zambia</option>
            <option>Zimbabwe</option>
        </select>
    
       <select name="state">
        <option>Please Select</option>
           <option>Imo</option>
           <option>Abia</option>
           <option>Adamawa</option>
           <option>Kaduna</option>
           <option>Kano</option>
           <option>Katsina</option>
           <option>Kogi</option>
           <option>Plateau</option>
           <option>Rivers</option>
           <option>Sokoto</option>
           <option>Zamfara</option>
           <option>Kebbi</option>
           <option>Gombe</option>
           <option>Bauchi</option>
           <option>Yobe</option>
           <option>Benue</option>
           <option>Anambra</option>
           <option>Delta</option>
           <option>Ebonyi</option>
           <option>Edo</option>
           <option>Borno</option>
           <option>Ekiti</option>
           <option>Kwara</option>
           <option>Ogun</option>
           <option>Lagos</option>
           <option>Osun</option>
           <option>Ondo</option>
           <option>Ibadan</option>
           <option>Cross River</option>
           <option>Niger</option>
           <option>Nasarawa</option>
       </select><br>
       <label class="mot">City</label> <label>LGA</label><br>
       <select name="city">
        <option>Please select</option>
           <option>Abuja</option>
           <option>Yola</option>
           <option>Awka</option>
           <option>Lafia</option>
           <option>Wuse</option>
           <option>Maitama</option>
           <option>Royce</option>
           <option>Garden city</option>
           <option>Owerri</option>
           <option>Onitsha</option>
           <option>Nyanya</option>
           <option>Jalingo</option>
           <option>Lokoja</option>
           <option>Minna</option>
           <option>Kaduna</option>
           <option>Asaba</option>
       </select>
       <select name="localg">
           <option>Please select</option>
           <option>Amac</option>
           <option>Mbaitoli</option>
           <option>Lapai</option>
       </select><br>
       <label class="mot">Phone Number</label>    <label>Email</label><br>
       <input type="text" name="phone" placeholder="enter phone number" value="<?php echo$result[6];?>"><input type="email" name="ema" placeholder="enter email" value="<?php echo$result[7];?>">
        <br>
        Programme:<input type="radio" name="radio" checked="checked">B.Sc
       <input type="radio" name="radio">B.Ed
      <input type="radio" name="radio">B.Tech <br>
      Type:<input type="checkbox" name="checkbox"> Regular
      <input type="checkbox" name="checkbox"> Part Time<br>
       <input type="submit" name="submit" value="Update" style="margin-bottom:-30px;"><br>
       <a class="huz" href="dashboard.html" style="text-decoration: none; font-size: 30px;">&#8592</a>
    </form>
    </div>
    
</body>
</html>


