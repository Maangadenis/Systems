<?php
$link=  mysqli_connect("localhost", "root", "", "afyacheck");
$id=$_GET['id'];
$query="select * from patientdetails where id='$id'";
$result=  mysqli_query($link, $query);
$row=  mysqli_fetch_array($result);
?>
<htm>
    <head>
        <title>afyacheckTZ</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <div id="maindiv">
            <div id="menu">
                <h1>AfyacheckTZ</h1>
                <ul>
                    <li><a href="index.php">DASHBOARD</a></li>
                    <li><a href="covid19regions.php">COVID-19</a></li>
                    <li><a href="hivaidsregions.php">HIV/AIDS</a></li>
                    <li><a href="tbregions.php">TB</a></li>
                    <li><a href="malariaregions.php">MALARIA</a></li>
                     <li><a href="#">LOGIN</a></li>
                    
                </ul>
                
            </div>
            <div id="middleeT">
                <br><br/>
                <center>
                    <h1>PATIENT DETAILS FORM</h1>
                    <table>
                        <form action="" method="POST">
                            <tr>
                                <td><label>FIRST NAME</label></td>
                                <td> <input type="text" name="fname" value="<?php echo $row['fname'];?>"/></td>
                                <td><label>MIDDLE NAME</label></td>
                                <td> <input type="text" name="mname" value="<?php echo $row['mnane'];?>"/></td>
                                <td><label>LAST NAME</label></td>
                                <td> <input type="text" name="lname" value="<?php echo $row['lname'];?>"/></td>
                            </tr>
                            <tr>
                                <td><label>AGE</label></td>
                                <td> <input type="text" name="age" value="<?php echo $row['age'];?>"/></td>
                                <td><label>GENDER</label></td>
                                <td> <select name="gender" value="<?php echo $row['gender'];?>"/>
                                                <option>Male</option>
                                                <option>Female</option>
                                    </select></td>
                                <td><label>HOSPITAL</label></td>
                                <td> <input type="text" name="hospital" value="<?php echo $row['hospital'];?>"/></td>
                            </tr>
                            <tr>
                                <td><label>DISTRICT</label></td>
                                <td>  <input type="text" name="district" value="<?php echo $row['district'];?>"/> 
                                        </td>
                                <td><label>REGION</label></td>
                                <td> <input type="text" name="region" value="<?php echo $row['region'];?>"/></td>
                                <td><label>STATUS</label></td>
                                <td> <select name="status" value="<?php echo $row['status'];?>">
                                        <option>positive</option>
                                        <option>death</option>
                                        <option>recovered</option>
                                      
                                    </select></td>
                            </tr>
                            <tr>
                                <td><label>CASE ID</label></td>
                                <td> <select name="caseid" value="<?php echo $row['caseid'];?>">
                                    <option>1</option>
                                    
                                    </select></td>
                                <td><label>DISEASE TYPE</label></td>
                                <td> <select name="disease" value="<?php echo $row['disease'];?>">
                                        <option>Covid-19</option>
                                        <option>Hiv/Aids</option>
                                        <option>TB</option>
                                        <option>Malaria</option>
                                    </select></td>
                                    <td><label>DATE OF BIRTH</label></td>
                                <td> <input type="text" name="dob" value="<?php echo $row['dob'];?>"/></td>
                            </tr>
                           
                            <tr>
                                <td colspan="6" align="center"><input type="submit" name="submit" value="UPDATE"/>
                                <input type="reset" name="reset" value="CANCEL"/></td>
                            </tr>
                        </form>
                       
                    </table>
                
                   <?php
if (isset($_POST['submit'])) {
    $link=  mysqli_connect("localhost", "root", "", "afyacheck");
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$hospital=$_POST['hospital'];
$district=$_POST['district'];
$region=$_POST['region'];
$status=$_POST['status'];
$caseid=$_POST['caseid'];
$disease=$_POST['disease'];
$dob=$_POST['dob'];
if($fname!="" && $mname!="" && $lname!="" && $age!="" && $gender!="" && $hospital!=""&& $district!=""&& $region!=""&& $status!="" && $caseid!="" && $disease!="" && $dob!=""){
    $query="update patientdetails set fname='$fname',mnane='$mname',"
            . "lname='$lname',age='$age',"
            . "gender='$gender',hospital='$hospital',district='$district',region='$region' ,status='$status'"
            . ",caseid='$caseid',disease='$disease',dob='$dob' where id='$id'";
    $result=  mysqli_query($link, $query);
    if ($result) {
        echo "Data Updated successfully!";
    }  else {
        echo mysqli_error($link);
    }
}  else {
    echo "Please fill in all fields";
}
}
 ?>                
                </center>
                
                
            </div>
        </div>
    </body>
        
        
</htm>