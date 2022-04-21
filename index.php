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
                    <li><a href="#">DASHBOARD</a></li>
                    <li><a href="covid19regions.php">COVID-19</a></li>
                    <li><a href="hivaidsregions.php">HIV/AIDS</a></li>
                    <li><a href="tbregions.php">TB</a></li>
                    <li><a href="malariaregions.php">MALARIA</a></li>
                    <li><a href="adminlogin.php">LOGIN</a></li>
                    
                </ul>
                
            </div>
            <div id="middle">
                <br/>
                <center>
                <table>
                    <tr>
                        <th colspan="3">DISEASES DATA UPDATE SUMMARY TILL TO DATE</th>
                    </tr>
                    <tr>
                        <th>COVID-19</th>
                        <td>Total Case:<br/>
                         Active Case:<br/>
                            Total Death:<br/>
                         Total Recovered:
                        </td>
                       
                        <th><?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails WHERE disease='covid-19'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?><br/>
<?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails where status='positive' AND disease='covid-19'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?><br/>

<?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails where status='death' AND disease='covid-19'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?><br/>

<?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails where status='recovered'AND disease='covid-19'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?></th>
                        
                        
                    </tr>
                    <tr>
                        <th>HIV/AIDS</th>
                        <td>Total Case:<br/>
                            Active Case:<br/>
                         Total Death:<br/>
                      
                        </td>
                       
                        <th><?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails WHERE disease='hiv/aids'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?>
<br/>
<?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails where status='positive' AND disease='hiv/aids'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?>
<br/>
<?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails where status='death' AND disease='hiv/aids'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?>
<br/>
<?php/*
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails where status='case on treatment' AND disease='hiv/aids'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  */
?></th>
                        
                    </tr>
                    <tr>
                        <th>TB</th>
                        <td>Total Case:<br/>
                            Active Case:<br/>
                         Total Death:<br/>
                     Total Recovered:
                        </td>
                       
                       <th><?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails WHERE disease='tb'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?>
<br/>
    <?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails where status='positive' AND disease='tb'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?><br/>
    <?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails where status='death' AND disease='tb'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?><br/>
<?php/*
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails where status='case on treatment' AND disease='tb'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  */
?><?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails where status='recovered' AND disease='tb'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?></th>
                        
                        
                    </tr><br/>
                    <tr>
                        <th>MALARIA</th>
                        <td>Total Case :<br/>
                            Active Case:<br/> 
                            Total Death:<br/> 
                            
                            Total Recovered:
                        </td><br/>
                   
                        <th><?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails WHERE disease='malaria'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?><br/>
<?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails where status='positive' AND disease='malaria'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?><br/>
    <?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails where status='death' AND disease='malaria'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?><br/>
                        <?php/*
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails where status='case on treatment' AND disease='malaria'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  */
?>
                        
                        <?php
$connc= mysqli_connect("localhost", "root", "");
$dbc=mysqli_select_db($connc, "afyacheck");

$queryc="select SUM(caseid) as 'sumcaseid' from patientdetails where status='recovered' AND disease='malaria'";
$resc=  mysqli_query($connc, $queryc);
$datac=  mysqli_fetch_array($resc);
echo $datac['sumcaseid'];  
?></th>
                        
                    </tr>
                </table>
                </center>
                
            </div>
        </div>
    </body>
        
        
</htm>