<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Signup</title>
      <link rel="stylesheet" href="css/styles.css">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <div id="clouds" style="padding-top:14px;">
    <div class="head1" style="padding-top: 0px; padding-bottom: 200px;">
    <img src = "css/logo.png"  width = "130px" height = "120px"/>
    <h1> Store My Results</h1>
    </div>
</div>

 <div class="container">
 <h2>SignUp</h2>
 </br></br>
      <div id="login">

        <form name="f2" action="" onsubmit = "return validation()"  method="post">

          <fieldset class="clearfix">
            <p><span class="fontawesome-user"></span><input type="text"  id="name" name="name" placeholder="Full Name">
            <p><span class="fontawesome-user"></span><input type="text"  id="user" name="user" placeholder="Email/Username">
            <p><span class="fontawesome-lock"></span><input type="password" id="pass" name="pass"  placeholder="Password">
            <p><span class="fontawesome-lock"></span><input type="password" id="pass2" name="pass2"  placeholder="Re-Enter Password">
            <p><input type="submit" name="sub"  value="SignUp"></p>

          </fieldset>

        </form>
      </div> <!-- end login -->
      <div> <p style="color: #b7c4d1; font-size: 19px"> Already have an account? <a style="font-weight: bold" href ="login.php"> Login </a> </div>

    </div>
    <script>  
            function validation()  
            {  
                var id=document.f2.user.value;  
                var ps=document.f2.pass.value;  
                var ps2=document.f2.pass2.value;
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

                    if (ps.length < 8) {  
                    alert("Password must be atleast 8 character long");  
                    return false;  
                    }

                    if (ps!=ps2) {  
                    alert("Passwords entered do not Match");  
                    return false;  
                    }  
                }                             
            }  
    </script>  
  
</body>
</html>

<?php      
    include('dbcon.php'); 
    session_start(); 
    if (isset($_POST['user']) && isset($_POST['pass'])) {
    $name = $_POST['name'];
    $usrname = $_POST['user'];  
    $password = $_POST['pass']; 
      
        //to prevent from mysqli injection 
        $name = stripcslashes($name); 
        $usrname = stripcslashes($usrname);  
        $password = stripcslashes($password);  
        $name = mysqli_real_escape_string($conn, $name);
        $usrname = mysqli_real_escape_string($conn, $usrname);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * from users where email = '$usrname'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo '<script> alert("User Already Exists")</script>';  
        }  
        else{  
            $sql = "INSERT INTO users(name, email, pass) 
            VALUES ('$name', '$usrname' , '$password')";

         if ($conn->query($sql)) {
             echo '<script> alert("SignUp Successful, Click OK to Login")</script>';
             header("Refresh:0.5; url=login.php");
        } else {
            echo 'Error: '.$sql.'<br>'.$conn->error;
        }
        exit; 
        } 
      }    
?>  

