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
                    <h1>HIV AIDS CASE IN MARA DISTRICT</h1>
                
                    <table>
                        <tr>
                            <th><a href="#"><button>BUNDA</button></a></th>
                            <th><a href="#"><button>BUTIAMA</button></a></th>
                            <th><a href="musomahospitalhivdetails.php"><button>MUSOMA</button></a></th>
                            <th><a href="#"><button>RORYA</button></a></th>
                            <th><a href="serengetihospitalhiv.php"><button>SERENGETI</button></a></th>
                            <th><a href="#"><button>TARIME</button></a></th>
                           
                            
                           
                        </tr>
                        <tr>
                            <td>
                             T-Case:<?php
$conni= mysqli_connect("localhost", "root", "");
$dbi=mysqli_select_db($conni, "afyacheck");
$sqli="select count(disease) AS total FROM patientdetails WHERE district='bunda' AND disease='hiv/aids'";
$resulti= mysqli_query($conni,$sqli);
 $valuei= mysqli_fetch_assoc($resulti);
 $num_rowsi=$valuei['total'];
 echo $num_rowsi;


?><br/>
 Active Case:<?php
$conni= mysqli_connect("localhost", "root", "");
$dbi=mysqli_select_db($conni, "afyacheck");
$sqli="select count(disease) AS total FROM patientdetails WHERE status='positive'  AND district='bunda' AND disease='hiv/aids'";
$resulti= mysqli_query($conni,$sqli);
 $valuei= mysqli_fetch_assoc($resulti);
 $num_rowsi=$valuei['total'];
 echo $num_rowsi;


?><br/>
                             T-Death:<?php
$conni= mysqli_connect("localhost", "root", "");
$dbi=mysqli_select_db($conni, "afyacheck");
$sqli="select count(disease) AS total FROM patientdetails WHERE status='death'  AND district='bunda' AND disease='hiv/aids'";
$resulti= mysqli_query($conni,$sqli);
 $valuei= mysqli_fetch_assoc($resulti);
 $num_rowsi=$valuei['total'];
 echo $num_rowsi;


?><br/>
                            <?php/*
$conni= mysqli_connect("localhost", "root", "");
$dbi=mysqli_select_db($conni, "afyacheck");
$sqli="select count(disease) AS total FROM patientdetails WHERE status='case on treatment' AND district='bunda' AND disease='hiv/aids'";
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
$sqlk="select count(disease) AS total FROM patientdetails WHERE district='butiama' AND disease='hiv/aids'";
$resultk= mysqli_query($connk,$sqlk);
 $valuek= mysqli_fetch_assoc($resultk);
 $num_rowsk=$valuek['total'];
 echo $num_rowsk;


?><br/>
                 Active Case:<?php
$connk= mysqli_connect("localhost", "root", "");
$dbk=mysqli_select_db($connk, "afyacheck");
$sqlk="select count(disease) AS total FROM patientdetails WHERE status='positive' AND district='butiama' AND disease='hiv/aids'";
$resultk= mysqli_query($connk,$sqlk);
 $valuek= mysqli_fetch_assoc($resultk);
 $num_rowsk=$valuek['total'];
 echo $num_rowsk;


?><br/>
                             T-Death:<?php
$connk= mysqli_connect("localhost", "root", "");
$dbk=mysqli_select_db($connk, "afyacheck");
$sqlk="select count(disease) AS total FROM patientdetails WHERE status='death' AND district='butiama' AND disease='hiv/aids'";
$resultk= mysqli_query($connk,$sqlk);
 $valuek= mysqli_fetch_assoc($resultk);
 $num_rowsk=$valuek['total'];
 echo $num_rowsk;


?><br/>
                             <?php/*
$connk= mysqli_connect("localhost", "root", "");
$dbk=mysqli_select_db($connk, "afyacheck");
$sqlk="select count(disease) AS total FROM patientdetails WHERE status='case on treatment'  AND district='butiama' AND disease='hiv/aids'";
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
$sqlmagu="select count(disease) AS total FROM patientdetails WHERE district='musoma' AND disease='hiv/aids'";
$resultmagu= mysqli_query($connmagu,$sqlmagu);
 $valuemagu= mysqli_fetch_assoc($resultmagu);
 $num_rowsmagu=$valuemagu['total'];
 echo $num_rowsmagu;


?><br/>
 Active Case:<?php
$connmagu= mysqli_connect("localhost", "root", "");
$dbmagu=mysqli_select_db($connmagu, "afyacheck");
$sqlmagu="select count(disease) AS total FROM patientdetails WHERE status='positive'  AND district='musoma' AND disease='hiv/aids'";
$resultmagu= mysqli_query($connmagu,$sqlmagu);
 $valuemagu= mysqli_fetch_assoc($resultmagu);
 $num_rowsmagu=$valuemagu['total'];
 echo $num_rowsmagu;


?><br/>
                             T-Death:<?php
$connmagu= mysqli_connect("localhost", "root", "");
$dbmagu=mysqli_select_db($connmagu, "afyacheck");
$sqlmagu="select count(disease) AS total FROM patientdetails WHERE status='death'  AND district='musoma' AND disease='hiv/aids'";
$resultmagu= mysqli_query($connmagu,$sqlmagu);
 $valuemagu= mysqli_fetch_assoc($resultmagu);
 $num_rowsmagu=$valuemagu['total'];
 echo $num_rowsmagu;


?><br/>
                            <?php/*
$connmagu= mysqli_connect("localhost", "root", "");
$dbmagu=mysqli_select_db($connmagu, "afyacheck");
$sqlmagu="select count(disease) AS total FROM patientdetails WHERE status='case on treatment' AND district='musoma' AND disease='hiv/aids'";
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
$sql="select count(disease) AS total FROM patientdetails WHERE district='rorya' AND disease='hiv/aids'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;


?><br/>
Active Case:<?php
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE status='positive'  AND district='rorya' AND disease='hiv/aids'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;


?><br/>
                             T-Death:<?php
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE status='death'  AND district='rorya' AND disease='hiv/aids'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;


?><br/>
 
                           <?php/*
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE status='case on treatment' AND district='rorya' AND disease='hiv/aids'";
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
$sql="select count(disease) AS total FROM patientdetails WHERE  district='serengeti' AND disease='Hiv/Aids'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;


?><br/>
 Active Case:<?php
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE status='positive' AND district='serengeti' AND disease='hiv/aids'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;


?><br/>
                             T-Death:<?php
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE status='death' AND district='serengeti' AND disease='hiv/aids'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;


?><br/>

                             <?php/*
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE status='case on treatment' AND district='serengeti' AND disease='hiv/aids'";
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
$sql="select count(disease) AS total FROM patientdetails WHERE district='tarime' AND disease='hiv/aids'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;


?><br/>
Active Case:<?php
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE status='positive' AND district='tarime' AND disease='hiv/aids'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;


?><br/>
                             T-Death:<?php
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE status='death' AND district='tarime' AND disease='hiv/aids'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;


?><br/>
                          <?php/*
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE status='case on treatment'AND district='tarime' AND disease='hiv/aids'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;

*/
?>
                            </td>
 
                            </td>
                        </tr>
                        
                    </table>  
                    
                 
                    
                    
                   
                </center>
                
                
            </div>
        </div>
    </body>
        
        
</htm>