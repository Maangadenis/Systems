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
                    <h1>HIV AIDS PATIENT DETAILS FORM</h1>
                    <table>
                        <form action="" method="POST">
                            <tr>
                                <td><label>FIRST NAME</label></td>
                                <td> <input type="text" name="fname"/></td>
                                <td><label>MIDDLE NAME</label></td>
                                <td> <input type="text" name="mname"/></td>
                                <td><label>LAST NAME</label></td>
                                <td> <input type="text" name="lname"/></td>
                            </tr>
                            <tr>
                                <td><label>AGE</label></td>
                                <td> <input type="text" name="age"/></td>
                                <td><label>GENDER</label></td>
                                <td> <select name="gender"/>
                                                <option>Male</option>
                                                <option>Female</option>
                                    </select></td>
                                <td><label>HOSPITAL</label></td>
                                <td> <input type="text" name="hospital"/></td>
                            </tr>
                            <tr>
                                <td><label>DISTRICT</label></td>
                                <td> <input type="text" name="district"/></td>
                                <td><label>REGION</label></td>
                                <td> <input type="text" name="region"/></td>
                                <td><label>STATUS</label></td>
                                <td> <select name="status">
                                        <option>positive</option>
                                        <option>death</option>
                                        <option>recovered</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td><label>CASE ID</label></td>
                                <td> <select name="caseid">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    </select></td>
                                <td><label>DISEASE TYPE</label></td>
                                <td> <select name="disease">
                                        <option>Covid-19</option>
                                        <option>Hiv/Aids</option>
                                        <option>TB</option>
                                        <option>Malaria</option>
                                    </select></td>
                                    <td><label>DATE OF BIRTH</label></td>
                                <td> <input type="text" name="dob"/></td>
                            </tr>
                           
                            <tr>
                                <td colspan="6" align="center"><input type="submit" name="submit" value="SAVE"/>
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
    $query="insert into patientdetails values('','$fname','$mname',"
            . "'$lname','$age','$gender','$hospital','$district','$region','$status','$caseid','$disease','$dob')";
    $result=  mysqli_query($link, $query);
    if ($result) {
        echo "Data saved successfully!";
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