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
            <div id="middlee">
                <br><br/>
                <center>
                    <h1>HIV AIDS CASE IN MWANZA DISTRICT</h1>
                
                    <table>
                        <tr>
                            <th><a href="ilemelahospitalhiv.php"><button>ILEMELA</button></a></th>
                            <th><a href="kwimbahospitals"><button>KWIMBA</button></a></th>
                            <th><a href="maguhospitals.php"><button>MAGU</button></a></th>
                            <th><a href="misungwihospitals.php"><button>MISUNGWI</button></a></th>
                            <th><a href="nyamaganahospitals.php"><button>NYAMAGANA</button></a></th>
                            <th><a href="#"><button>SENGEREMA</button></a></th>
                            <th><a href="ukelewehospital.php"><button>UKEREWE</button></a></th>
                            
                           
                        </tr>
                        <tr>
                            <td>
                             T-Case:<?php
$conni= mysqli_connect("localhost", "root", "");
$dbi=mysqli_select_db($conni, "afyacheck");
$sqli="select count(disease) AS total FROM patientdetails WHERE district='ilemela' AND disease='hiv/aids'";
$resulti= mysqli_query($conni,$sqli);
 $valuei= mysqli_fetch_assoc($resulti);
 $num_rowsi=$valuei['total'];
 echo $num_rowsi;


?><br/>
 Active Case:<?php
$conni= mysqli_connect("localhost", "root", "");
$dbi=mysqli_select_db($conni, "afyacheck");
$sqli="select count(disease) AS total FROM patientdetails WHERE status='positive'  AND district='ilemela'  AND disease='hiv/aids'";
$resulti= mysqli_query($conni,$sqli);
 $valuei= mysqli_fetch_assoc($resulti);
 $num_rowsi=$valuei['total'];
 echo $num_rowsi;


?><br/>
                             T-Death:<?php
$conni= mysqli_connect("localhost", "root", "");
$dbi=mysqli_select_db($conni, "afyacheck");
$sqli="select count(disease) AS total FROM patientdetails WHERE status='death'  AND district='ilemela'  AND disease='hiv/aids'";
$resulti= mysqli_query($conni,$sqli);
 $valuei= mysqli_fetch_assoc($resulti);
 $num_rowsi=$valuei['total'];
 echo $num_rowsi;


?><br/>
                             <?php/*
$conni= mysqli_connect("localhost", "root", "");
$dbi=mysqli_select_db($conni, "afyacheck");
$sqli="select count(disease) AS total FROM patientdetails WHERE status='case on treatment' AND district='ilemela'  AND disease='hiv/aids'";
$resulti= mysqli_query($conni,$sqli);
 $valuei= mysqli_fetch_assoc($resulti);
 $num_rowsi=$valuei['total'];
 echo $num_rowsi;

*/
?>
                            </td>
                            <td> T-Case:<?php
$connk= mysqli_connect("localhost", "root", "");
$dbk=mysqli_select_db($connk, "afyacheck");
$sqlk="select count(disease) AS total FROM patientdetails WHERE district='kwimba'  AND disease='hiv/aids'";
$resultk= mysqli_query($connk,$sqlk);
 $valuek= mysqli_fetch_assoc($resultk);
 $num_rowsk=$valuek['total'];
 echo $num_rowsk;


?><br/>
Active Case:<?php
$connk= mysqli_connect("localhost", "root", "");
$dbk=mysqli_select_db($connk, "afyacheck");
$sqlk="select count(disease) AS total FROM patientdetails WHERE status='positive' AND district='kwimba'  AND disease='hiv/aids'";
$resultk= mysqli_query($connk,$sqlk);
 $valuek= mysqli_fetch_assoc($resultk);
 $num_rowsk=$valuek['total'];
 echo $num_rowsk;


?><br/>
                             T-Death:<?php
$connk= mysqli_connect("localhost", "root", "");
$dbk=mysqli_select_db($connk, "afyacheck");
$sqlk="select count(disease) AS total FROM patientdetails WHERE status='death' AND district='kwimba'  AND disease='hiv/aids'";
$resultk= mysqli_query($connk,$sqlk);
 $valuek= mysqli_fetch_assoc($resultk);
 $num_rowsk=$valuek['total'];
 echo $num_rowsk;


?><br/>
                            <?php/*
$connk= mysqli_connect("localhost", "root", "");
$dbk=mysqli_select_db($connk, "afyacheck");
$sqlk="select count(disease) AS total FROM patientdetails WHERE status='case on treatment'  AND district='kwimba'  AND disease='hiv/aids'";
$resultk= mysqli_query($connk,$sqlk);
 $valuek= mysqli_fetch_assoc($resultk);
 $num_rowsk=$valuek['total'];
 echo $num_rowsk;
*/

?>
                            </td>
                            <td>
                            T-Case:<?php
$connmagu= mysqli_connect("localhost", "root", "");
$dbmagu=mysqli_select_db($connmagu, "afyacheck");
$sqlmagu="select count(disease) AS total FROM patientdetails WHERE district='magu'  AND disease='hiv/aids'";
$resultmagu= mysqli_query($connmagu,$sqlmagu);
 $valuemagu= mysqli_fetch_assoc($resultmagu);
 $num_rowsmagu=$valuemagu['total'];
 echo $num_rowsmagu;


?><br/>
Active Case:<?php
$connmagu= mysqli_connect("localhost", "root", "");
$dbmagu=mysqli_select_db($connmagu, "afyacheck");
$sqlmagu="select count(disease) AS total FROM patientdetails WHERE status='positive'  AND district='magu'  AND disease='hiv/aids'";
$resultmagu= mysqli_query($connmagu,$sqlmagu);
 $valuemagu= mysqli_fetch_assoc($resultmagu);
 $num_rowsmagu=$valuemagu['total'];
 echo $num_rowsmagu;


?><br/>
                             T-Death:<?php
$connmagu= mysqli_connect("localhost", "root", "");
$dbmagu=mysqli_select_db($connmagu, "afyacheck");
$sqlmagu="select count(disease) AS total FROM patientdetails WHERE status='death'  AND district='magu'  AND disease='hiv/aids'";
$resultmagu= mysqli_query($connmagu,$sqlmagu);
 $valuemagu= mysqli_fetch_assoc($resultmagu);
 $num_rowsmagu=$valuemagu['total'];
 echo $num_rowsmagu;


?><br/>
                             <?php/*
$connmagu= mysqli_connect("localhost", "root", "");
$dbmagu=mysqli_select_db($connmagu, "afyacheck");
$sqlmagu="select count(disease) AS total FROM patientdetails WHERE status='case on treatment' AND district='magu'  AND disease='hiv/aids'";
$resultmagu= mysqli_query($connmagu,$sqlmagu);
 $valuemagu= mysqli_fetch_assoc($resultmagu);
 $num_rowsmagu=$valuemagu['total'];
 echo $num_rowsmagu;

*/
?>
                            </td>
                            <td>T-Case:<?php
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE district='misungwi'  AND disease='hiv/aids'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;


?><br/>
 Active Case:<?php
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE status='positive'  AND district='misungwi'  AND disease='hiv/aids'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;


?><br/>
                             T-Death:<?php
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE status='death'  AND district='misungwi'  AND disease='hiv/aids'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;


?><br/>
                             <?php/*
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE status='case on treatment' AND district='misungwi'  AND disease='hiv/aids'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;

*/
?></td>
                            <td>
                                T-Case:<?php
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE district='nyamagana'  AND disease='hiv/aids'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;


?><br/>       Active Case:<?php
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE status='positive' AND district='nyamagana'  AND disease='hiv/aids'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;


?><br/>
                             T-Death:<?php
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE status='death' AND district='nyamagana'  AND disease='hiv/aids'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;


?><br/>
                            <?php/*
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE status='case on treatment' AND district='nyamagana'  AND disease='hiv/aids'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;

*/
?>
                            </td>
                            <td>
                                T-Case:<?php
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE district='sengerema'  AND disease='hiv/aids'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;


?><br/>
                             Active Case:<?php
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE status='positive' AND district='sengerema'  AND disease='hiv/aids'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;


?><br/>
                             T-Death:<?php
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE status='death' AND district='sengerema'  AND disease='hiv/aids'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;


?><br/>
                            <?php/*
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE status='case on treatment'AND district='sengerema'  AND disease='hiv/aids'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;

*/
?>
                            </td>
                            <td>
                                T-Case:<?php
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE district='ukerewe'  AND disease='hiv/aids'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;


 ?><br/>
     Active Case:<?php
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE status='positive' AND district='ukerewe'  AND disease='hiv/aids'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;


?><br/>
                             T-Death:<?php
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE status='death' AND district='ukerewe'  AND disease='hiv/aids'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;


?><br/>
                           <?php/*
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE status='case on treatment' AND district='ukerewe'  AND disease='hiv/aids'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;

*/
?>
                            </td>
                        </tr>
                        
                    </table>  
                    
                 
                    
                    
                   
                </center>
                
                
            </div>
        </div>
    </body>
        
        
</htm>