<?php
$host="localhost";
$user="root";
$password="#";
$db="demo";

mysql_connect($host,$user,$password);
$mysql_select_db($db);

if(isset($_POST['username'])) {
  $uname=$_POST['username'];
  $password=$_POST['password'];

  $sql="select * from loginforms where USERNAME='".$uname."' AND password='".$password."' limit 1";

  $result=mysql_query($sql);

  if(mysql_num_rows($result)==1){
      echo"YOU HAVE SUCCESSFULLY LOGGED IN";
      exit();
  }
  else{
      echo"YOU HAVE ENTERED INCORRECT PASSWORD";
      exit();
  }
}



?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="login page.css">
    <title></title>
    </head>
    <body>
        <div class="header">
            <div class="inner_header">
                <div class="logo_container">
                    <h1>HYPER RANK<span> COMPANY</span></h1>
                </div>
                <ul class="navigation">
                    <a><li>about</li></a>
                    <a><li>contact</li></a>
                </ul>
            </div>
        </div>
        <div class="container">
            <img src="a2.png">
            <div class="main">
                <form method="POST" action="#">
                    <div class="form_input">
                        <input type="text" name="username" placeholder="ENTER YOUR USERNAME"/>
                    </div>
                    <div class="form_input">
                        <input type="password" name="password" placeholder="ENTER YOUR PASSWORD"/>
                    </div>
                    <div>
                        <input type="submit" name="submit" value="LOGIN" class="btn-login"/>
                </form>
                </div>
                </div>
            </div>
        <footer>
            <div class="footer"></div>
        </footer>
    </body>
</html>