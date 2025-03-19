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
<html lang="en">
    <head>
        <title>Course Registration</title>
        <link rel="stylesheet" href="cosreg.css">
    </head>
    <body>
    <h1 style="text-align:center; color:white">WISDOM CHIMEZIE UNIVERSITY AREA F ,NYANYA ABUJA,NIGERIA</h1>
        <form method="POST" action="cosreg.php">
            
            
<table>

<caption style="color:white"><h1>COURSE FORM</h1></caption>
<caption style=""><input type="text"name="cursd" placeholder="ENTER MAT.NO" style="padding:9px; margin-left:;margin-top:-10px; width:150px; border:2px solid black; background-color:black; color:white;"></caption>
<tr><th>S/N</th> <th>COURSE CODE</th> <th>COURSE TITLE</th> <th>CREDITUNIT(S)</th></tr>
<tr><td>1</td><td><input id="mid" type="text" name="cors1" required></td> <td><input type="text" name="corst1" required></td> <td><input class="puy" type="text" name="cre1" required></td></tr>
<tr><td>2</td><td><input id="mid" type="text" name="cors2" required></td> <td><input type="text"  name="corst2" required></td> <td><input class="puy" type="text"  name="cre2" required></td></tr>
<tr><td>3</td><td><input id="mid" type="text" name="cors3" required></td> <td><input type="text"  name="corst3" required></td> <td><input class="puy" type="text"  name="cre3" required></td></tr>
<tr><td>4</td><td><input id="mid" type="text" name="cors4" required></td> <td><input type="text"  name="corst4" required></td> <td><input class="puy" type="text"  name="cre4" required></td></tr>
<tr><td>5</td><td><input id="mid" type="text" name="cors5" required></td> <td><input type="text"  name="corst5" required></td> <td><input class="puy" type="text"  name="cre5" required></td></tr>
<tr><td>6</td><td><input id="mid" type="text" name="cors6" required></td> <td><input type="text"  name="corst6" required></td> <td><input class="puy" type="text"  name="cre6" required></td></tr>
<tr><td>7</td><td><input id="mid" type="text" name="cors7" required></td> <td><input type="text"  name="corst7" required></td> <td><input class="puy" type="text"  name="cre7" required></td></tr>
<tr><td>8</td><td><input id="mid" type="text" name="cors8" required></td> <td><input type="text"  name="corst8" required></td> <td><input class="puy" type="text"  name="cre8" required></td></tr>
<tr><td>9</td><td><input id="mid" type="text" name="cors9" required></td> <td><input type="text"  name="corst9" required></td> <td><input class="puy" type="text"  name="cre9" required></td></tr>
<tr><td>10</td><td><input id="mid" type="text" name="cors10" required></td> <td><input type="text"  name="corst10" required></td> <td><input class="puy" type="text"  name="cre10" required></td></tr>
<tr><td>11</td><td><input id="mid" type="text" name="cors11" required></td> <td><input type="text"  name="corst11" required></td> <td><input class="puy" type="text"  name="cre11" required></td></tr>
<tr><td>12</td><td><input id="mid" type="text" name="cors12" required></td> <td><input type="text"  name="corst12" required></td> <td><input class="puy" type="text"  name="cre12" required></td></tr>
<tr><td>13</td><td><input id="mid" type="text" name="cors13" required></td> <td><input type="text"  name="corst13" required></td> <td><input class="puy" type="text"  name="cre13" required></td></tr>
<tr><td>14</td><td><input id="mid" type="text" name="cors14" required></td> <td><input type="text"  name="corst14" required></td> <td><input class="puy" type="text"  name="cre14" required></td></tr>
<tr><td>15</td><td><input id="mid" type="text" name="cors15" required></td> <td><input type="text"  name="corst15" required></td> <td><input class="puy" type="text"  name="cre15" required></td></tr>
<tr><td>16</td><td><input id="mid" type="text" name="cors16" required></td> <td><input type="text"  name="corst16" required></td> <td><input class="puy" type="text"   name="cre16" required></td></tr>
<tr><td>17</td><td><input id="mid" type="text" name="cors17" required></td> <td><input type="text"  name="corst17" required></td> <td><input class="puy" type="text"  name="cre17" required></td></tr>
<tr><td>18</td><td><input id="mid" type="text" name="cors18" required></td> <td><input type="text"  name="corst18" required></td> <td><input class="puy" type="text"  name="cre18" required></td></tr>
</table>
<input type="submit" name="submit" value="Register">
</form>

        </body>
</html>   