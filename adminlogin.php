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
                    <li><a href="indexuser.php">LOGOUT</a></li>
                    
                </ul>
                
            </div>
            <div id="middle">
                <br/>
                <center>
               <html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
          <link rel="stylesheet" href="style2.css">
          <style type="text/css">
              body{
                  background:skyblue
              }
             
              
              .login{
                  width:360px;
                  border-radius: 10px;
                  border: 2px solid #ccc;
                  padding: 10px 40px 25px;
                  margin-top: 70px;
                      
              }
              input[type=text], input[type=password]{
                  width: 99%;
                  padding: 10px;
                  margin-top: 8px;
                  border: 1px solid #ccc;
                  padding-left: 5px;
                  font-size: 16px;
                  
                  
              }
              input[type=submit]{
                  width: 100%;
                  background-color: skyblue;
                  color: #fff;
                  border: 2px solid #0GF;
                  padding: 10px;
                  font-size: 20px;
                  cursor: pointer;
                  border-radius: 5px;
                  margin-bottom: 15px;
                  
              }
          </style>
          
    </head>
    <body>
        
      
    <center><div class="login"><h1 style="text-align: center;">Admin Login</h1>
            <form action="" method="POST" style="text-align: center;">
                
                <input type="text" name="username" placeholder="username" id="username"><br><br>
                <input type="password" name="password" placeholder="password" id="password"<br><br>
                <input type="submit" value="Login" name="submit"><br>
                
                
                
            </form></center>
    <?php
if (isset($_POST['submit'])) {
    if(empty($_POST['username']) || empty($_POST['password'])){
      
    }  else {
        
    
        $username=$_POST['username'];
        $password=$_POST['password'];
        $conn=  mysqli_connect("localhost","root","");
        mysqli_select_db($conn,"afyacheck");
        $query=  mysqli_query($conn, "SELECT * FROM admin WHERE password='$password' AND username='$username'");
        $rows= mysqli_num_rows($query);
        if($rows==1){
            header("location:adminmanagedata.php");
        }  
        mysqli_close($conn);
    }
    

}
 ?>
      
        
        </div>
        
    </body>
</html>

                </table>
                </center>
                
            </div>
        </div>
    </body>
        
        
</htm> 


















