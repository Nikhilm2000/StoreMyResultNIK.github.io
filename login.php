<?php      
    include('dbcon.php'); 
    session_start(); 
    if (isset($_POST['user']) && isset($_POST['pass'])) {
    $username = $_POST['user'];  
    $password = $_POST['pass'];    
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * from users where email = '$username' and pass = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
          $_COOKIE['user'] = $username;  
          header('Location: index.php?user='.$username);
        }  
        else{  
            echo '<script> alert("Login failed. Invalid username or password.")</script>';  
        } 
      }    
?>  

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
      <link rel="stylesheet" href="css/styles.css">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<title>Login</title>
<body>
  <div id="clouds">
  <div class="head1">
  <img src = "css/logo.png"  width = "130px" height = "120px"/>
  <h1> Store My Results</h1>
  </div>
</div>

 <div class="container">

 </br></br>
      <div id="login">

        <form name="f1" action="" onsubmit = "return validation()"  method="post">

          <fieldset class="clearfix">

            <p><span class="fontawesome-user"></span><input type="text"  id="user" name="user" placeholder="Username">
            <p><span class="fontawesome-lock"></span><input type="password" id="pass" name="pass"  placeholder="Password">
            <p><input type="submit" name="sub"  value="Login"></p>

          </fieldset>

        </form>

       

      </div> <!-- end login -->
      <div> <p style="color: #b7c4d1; font-size: 19px"> If you dont have an account <a style="font-weight: bold" href ="signup.php"> SignUp </a> </div>

    </div>
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
    </script>  
  
</body>
</html>


