<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="	#800000"  text="black"><center><form action="" method="POST">
<table>
    <tr>
    <th align="center">DETILS</th>
    </tr>
    <tr>
       <td>NAME:</td><td><input type="text"placeholder="name" name="un"></td>
    </tr>
    <tr>
        <td>AGE:</td><td><input type="number" placeholder="age" name="age"></td>
  </tr>
<tr>
    <td>ADDRESS:</td><td><textarea name="ad"placeholder="address" cols="20" rows="5"></textarea>
</td>

</tr>
<tr>
    <td>PHONE NO:</td><td><input type="number" placeholder="phone number" name="pno"><td>
</tr>
<tr>
    <td>PLACE:</td><td><input type="text" placeholder="place" name="plc"></td>
</tr>
<tr>
    <td><input type="submit" name="butt" value="click"></td>
<tr>
</center>
</form>
</body>
</html>
<?php
if(isset($_POST['butt']))
{  
    $n=$_POST['un'];
    $ag=$_POST['age'];
    $add=$_POST['ad'];
    $pn=$_POST['pno'];
    $p=$_POST['plc'];
    $conn=mysqli_connect('localhost','root','','web');
    $in="INSERT INTO  det1(name,age,address,phone,place) VALUES ('$n','$ag','$add','$pn','$p')";
    $w=mysqli_query($conn,"$in");
    $q="SELECT*FROM det1";
 $t=mysqli_query($conn,"$q");
 echo "<table border='5'>
     <tr><th>NAME</th>
     <th>AGE</th>
     <th>ADDRESS</th>
     <th>PLACE</th>
     <th>PHONE</th></tr>";
while($row=mysqli_fetch_assoc($t)){
    echo "<tr><td>".$row['name']."</td><td>".$row['age']."</td><td>".$row['address']."</td><td>".$row['place']."</td><td>".$row['phone']."</td></tr>";

}
echo "</table>";
}

?>
    

  