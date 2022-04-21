<htm>
    <head>
        <title>afyacheckTZ</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <script>
            function printcontent(el){
                var restorepage=document.body.innerHTML;
                var printcontent=document.getElementById(el).innerHTML;
                document.body.innerHTML=printcontent;
                window.print();
                document.body.innerHTML=printcontent;
            }
            </script>
            <style>
                td{
                    text-align: center;
                    font-size: 22px;
                }
            </style>
    </head>
    <body>
        <div id="maindiv">
            <div id="menu">
                <h1>AfyacheckTZ</h1>
                <ul>
                    <li><a href="#">DASHBOARD</a></li>
                    <li><a href="covid19regions.php">COVID-19</a></li>
                    <li><a href="hivaidsregions.php">HIV/AIDS</a></li>
                    <li><a href="tbregions.php">TB</a></li>
                    <li><a href="malariaregions.php">MALARIA</a></li>
                     <li><a href="#">LOGIN</a></li>
                    
                </ul>
                
            </div>
            <div id="middlekl">
                <br/>
                <center>
                    <h2>REPORTING SUMMARY</h2>
                    <table border="1">
                        <h2>National Level</h2>
                        <tr>
                            <th>DISEASE</th>
                             <th>TOTAL CASE</th>
                              <th>ACTICE CASE</th>
                              <th>TOTAL DEATH</th>
                              <th>TOTAL RECOVERY</th>
                        </tr>
                        <tr>
                             <td>Covid-19</td>
                          <td><?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails WHERE disease='covid-19'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?></td>
                              <td><?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails where status='positive' AND disease='covid-19'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?></td>
                              <td><?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails where status='death' AND disease='covid-19'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?></td>
                              <td><?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails where status='recovered'AND disease='covid-19'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?></td>  
                        </tr>
                        <tr>
                            <td>HIV/AIDS</td>
                             <td><?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails WHERE disease='hiv/aids'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?></td>
                              <td><?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails where status='positive' AND disease='hiv/aids'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?></td>
                              <td><?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails where status='death' AND disease='hiv/aids'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?></td>
                               
                        </tr>
                        <tr>
                             <td>TB</td>
                          <td><?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails WHERE disease='tb'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?></td>
                              <td><?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails where status='positive' AND disease='tb'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?></td>
                              <td><?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails where status='death' AND disease='tb'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?></td>
                              <td><?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails where status='recovered' AND disease='tb'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?></td>  
                        </tr>
                        <tr>
                             <td>MALARIA</td>
                          <td><?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails WHERE disease='malaria'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?></td>
                              <td><?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails where status='positive' AND disease='malaria'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?></td>
                              <td><?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails where status='death' AND disease='malaria'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?></td>
                              <td> <?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails where status='recovered' AND disease='malaria'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?></td>  
                        </tr>
                        
                    </table>
                    
                    <button onclick="printcontent('middlekl')">Print Report</button>
                </center>
                
            </div>
        </div>
    </body>
        
        
</htm>