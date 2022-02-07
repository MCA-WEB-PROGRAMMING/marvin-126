<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee details</title>
</head>
<body >
    <style>
        .hreg {
            text-align-last: center;
            text-decoration: underline;

        }

        .tblk {
            margin-left: 25%;
        }

        .from_cmn {
            border-radius: 15px;
            width: 95%;
            height: 20px;
            margin-top: 5px;
        }

        .sub {
            position: absolute;
            left: 30%;
            top: 85%;
            border-radius: 15px;
            height: 30px;
            width: 20%;

        }

        .rest {
            position: absolute;
            left: 55%;
            top: 85%;
            border-radius: 15px;
            height: 30px;
            width: 15%;

        }

        .prnt {
            position: absolute;
            left: 50%;
            top: 55px;
            height: 25px;
            width: 150px;
            border-radius: 15px;
            cursor: pointer;
        }
        .tbl_clz{
            position: absolute;
            left: 50%;
            top:50px;
            font-size: 20px;
            width: 40%;
        }
       
        
    </style>
    <div style="background-color: gray;height:50vh;width:30%;border-radius: 15px;position: absolute;left: 10%;top:5%;">
        <h1 class="hreg">Employee Details</h1>
        <form action="" method="POST">
            <table class="tblk">
                <tr>
                    <td> <label for="f1">Employee id</label></td>
                    <td><input name="emp_id" id="f1" type="text" placeholder="enter Emp_id" class="from_cmn "></td>
                </tr>
                <tr>
                    <td><label for="f2">employee name</label></td>
                    <td><input name="emp_name" type="text" id="f2" placeholder="enter name" class="from_cmn"><br></td>
                </tr>
                <tr>
                    <td> <label for="f4">Job Name</label></td>
                    <td><input name="job_n" id="f4" type="text" placeholder="enter ur Job Name" class="from_cmn"></td>
                </tr>
                <tr>
                    <td> <label for="f5">Manager Id</label></td>
                    <td><input name="mn_id" id="f5" type="text" placeholder="enter manager Id" class="from_cmn"></td>
                </tr>
                <tr>
                    <td> <label for="f5">Salary</label></td>
                    <td><input name="salary" id="f5" type="number" placeholder="enter ur Salary" class="from_cmn"></td>
                </tr>
            </table>
            <input type="submit" value="SUBMIT" name="subr" class="sub"><input type="reset" value="Clear" class="rest">
            </from>
    </div>

</body>
<?php
$conn = mysqli_connect("localhost", "root", "", "trial");
hlo($conn);
if (isset($_POST['subr'])) {
    $eid = $_POST['emp_id'];
    $ename = $_POST['emp_name'];
    $ejob = $_POST['job_n'];
    $mid = $_POST['mn_id'];
    $sal = $_POST['salary'];
    $sql = "INSERT INTO emp_details VALUES ('$eid', '$ename', '$ejob','$mid',$sal)";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('SUccess');</script>";
       
    } else {
        echo "<script>alert('error');</script>";
    }
}
 function hlo($con)
{
    $VAL="SELECT * FROM emp_details where salary>35000;";
    $res=mysqli_query($con,$VAL);
    echo "<h2 style='color:black;margin-left:50%;'>Details of employees where salary graiter than 35000</h2><table border='1px solid black' class='tbl_clz'><tr><th>emp_name</th><th>salary</th></tr>";
    while($row=mysqli_fetch_assoc($res)){
echo "<td>".$row['emp_name']."</td>";
echo "<td>".$row['salary']."</td></tr>";
    }
    echo "</table>";

} 

?>

</html>