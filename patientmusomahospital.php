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
                    <h1>PATIENT DETAILS FOR COVID-19 AT MUSOMA HOSPITAL</h1>
                    <?php
                 $link=  mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "afyacheck");
$query="select * from patientdetails where hospital='musoma hospital'";
$result=  mysqli_query($link, $query);
echo "<table border='1'";
echo "<tr><th>FIRST NAME</th><th>MIDDLE NAME</th>"
. "<th>LAST NAME</th><th>AGE</th><th>GENDER</th><th>HOSPITAL</th><th>DISTRICT</th><th>REGION</th>"
        . "<th>STATUS</th><th>DISEASE</th><th>DATE OF BIRTH</th><th colspan='2'>ACTION</th></tr>";
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
    echo "<td>".$row['disease']."</td>";
    echo "<td>".$row['dob']."</td>";
    echo "<td><a href='deletecovid19.php?id=$row[id]'><img src='image/delete.png'width='30' heigth='10'/></a></td>";
    echo "<td><a href='updatecovid19.php?id=$row[id]'><img src='image/update.png'width='30' heigth='10'/></a></td>";
    echo "</tr>";
    
}
echo "</table>";
?>
               
                </center>
                
                
            </div>
        </div>
    </body>
        
        
</htm>