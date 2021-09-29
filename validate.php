<?php 
          include('dbcon.php'); 
          if(isset($_GET['uid']) && isset($_GET['sem']))
          {
            $uid = $_GET['uid'];
            $sem = $_GET['sem'];
            $qry1 = "select * from users where id = '$uid'";  
            $re = mysqli_query($conn, $qry1);
            while($row=mysqli_fetch_array($re))
            {
                $username =$row['email'];
            }
          $qry = "select * from marks where uid = '$uid' and sem='$sem'";  
          $result = mysqli_query($conn, $qry);  
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
          $count = mysqli_num_rows($result);  
          if($count == 1){  
                header('Location: sem1.php?uid='.$uid.'&sem='.$sem);
          }
          else {
                echo "<script> alert('Marks for this Semester do not Exist, Please enter Marks First!')</script>";
                header("Refresh:0.5; url=index.php?user=".$username);
          }
        }
?>
