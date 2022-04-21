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
                    <li><a href="#">HIV/AIDS</a></li>
                    <li><a href="#">TB</a></li>
                    <li><a href="#">MALARIA</a></li>
                     <li><a href="#">LOGIN</a></li>
                    
                </ul>
                
            </div>
            <div id="middlee">
                <br><br/>
                <center>
                    <h1>LIST OF PATIENT IN BUGANDO HOSPITAL</h1>
                    <?php
$link=  mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "afyacheck");
$query="select * from patientdetails where hospital='bugando'";
$result=  mysqli_query($link, $query);
echo "<table border='1'";
echo "<tr><th>FIRST NAME</th><th>MIDDLE NAME</th>"
. "<th>LAST NAME</th><th>AGE</th><th>GENDER</th><th>HOSPITAL</th><th>DISTRICT</th><th>REGION</th>"
        . "<th>STATUS</th><th>DATE OF BIRTH</th></tr>";
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>".$row['fname']."</td>";
    echo "<td>".$row['mnane']."</td>";
    echo "<td>".$row['lname']."</td>";
    echo "<td>".$row['age']."</td>";
    echo "<td>".$row['gender']."</td>";
    echo "<td>".$row['hospital']."</td>";
     echo "<td>".$row['district']."</td>";
    echo "<td>".$row['region']."</td>";
     echo "<td>".$row['status']."</td>";
    echo "<td>".$row['dob']."</td>";
    echo "</tr>";
}
echo "</table>";
?>
                
                 
                    
                   
                </center>
                
                
            </div>
        </div>
    </body>
        
        
</htm>