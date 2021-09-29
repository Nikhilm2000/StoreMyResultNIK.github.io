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
            $sql ="select * from marks where uid = '$uid' and sem= '$sem'";
	        $re = mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($re);
           
            if(isset($_POST['usn']) && isset($_POST['sub5']))
            {
                $sub1 = $_POST['sub1'];
                $mrk1 = $_POST['mrk1'];
                $sub2 = $_POST['sub2'];
                $mrk2 = $_POST['mrk2'];
                $sub3 = $_POST['sub3'];
                $mrk3 = $_POST['mrk3'];
                $sub4 = $_POST['sub4'];
                $mrk4 = $_POST['mrk4'];
                $sub5 = $_POST['sub5'];
                $mrk5 = $_POST['mrk5'];
                $sub6 = $_POST['sub6'];
                $mrk6 = $_POST['mrk6'];
                $sub7 = $_POST['sub7'];
                $mrk7 = $_POST['mrk7'];
                $sub8 = $_POST['sub8'];
                $mrk8 = $_POST['mrk8'];
                $sub9 = $_POST['sub9'];
                $mrk9 = $_POST['mrk9'];

          $sub1 = stripcslashes($sub1);
          $mrk1 = stripcslashes($mrk1);
          $sub2 = stripcslashes($sub2);
          $mrk2 = stripcslashes($mrk2);
          $sub3 = stripcslashes($sub3);
          $mrk3 = stripcslashes($mrk3);
          $sub4 = stripcslashes($sub4);
          $mrk4 = stripcslashes($mrk4);
          $sub5 = stripcslashes($sub5);
          $mrk5 = stripcslashes($mrk5);
          $sub6 = stripcslashes($sub6);
          $mrk6 = stripcslashes($mrk6);
          $sub7 = stripcslashes($sub7);
          $mrk7 = stripcslashes($mrk7);
          $sub8 = stripcslashes($sub8);
          $mrk8 = stripcslashes($mrk8);
          $sub9 = stripcslashes($sub9);
          $mrk9 = stripcslashes($mrk9);
          $sub1 = mysqli_real_escape_string($conn, $sub1);
          $mrk1 = mysqli_real_escape_string($conn, $mrk1);
          $sub2 = mysqli_real_escape_string($conn, $sub2);
          $mrk2 = mysqli_real_escape_string($conn, $mrk2);
          $sub3 = mysqli_real_escape_string($conn, $sub3);
          $mrk3 = mysqli_real_escape_string($conn, $mrk3);
          $sub4 = mysqli_real_escape_string($conn, $sub4);
          $mrk4 = mysqli_real_escape_string($conn, $mrk4);
          $sub5 = mysqli_real_escape_string($conn, $sub5);
          $mrk5 = mysqli_real_escape_string($conn, $mrk5);
          $sub6 = mysqli_real_escape_string($conn, $sub6);
          $mrk6 = mysqli_real_escape_string($conn, $mrk6);
          $sub7 = mysqli_real_escape_string($conn, $sub7);
          $mrk7 = mysqli_real_escape_string($conn, $mrk7);
          $sub8 = mysqli_real_escape_string($conn, $sub8);
          $mrk8 = mysqli_real_escape_string($conn, $mrk8);
          $sub9 = mysqli_real_escape_string($conn, $sub9);
          $mrk9 = mysqli_real_escape_string($conn, $mrk9);
          

          if($sem==1 || $sem==2 || $sem==6)
                $sql = "UPDATE MARKS SET SUB1 = '$sub1', MRK1 = '$mrk1', SUB2 = '$sub2', MRK2 = '$mrk2',  SUB3 = '$sub3', MRK3 = '$mrk3',  SUB4 = '$sub4', MRK4 = '$mrk4',  SUB5 = '$sub5', MRK5 = '$mrk5',
                    SUB6 = '$sub6', MRK6 = '$mrk6', SUB7 = '$sub7', MRK7 = '$mrk7', SUB8 = '$sub8', MRK8 = '$mrk8'
                    WHERE uid = '$uid' and sem = '$sem';";
		  
          elseif($sem==3 || $sem==4 || $sem==5)
                $sql = "UPDATE MARKS SET SUB1 = '$sub1', MRK1 = '$mrk1', SUB2 = '$sub2', MRK2 = '$mrk2',  SUB3 = '$sub3', MRK3 = '$mrk3',  SUB4 = '$sub4', MRK4 = '$mrk4',  SUB5 = '$sub5', MRK5 = '$mrk5',
                    SUB6 = '$sub6', MRK6 = '$mrk6', SUB7 = '$sub7', MRK7 = '$mrk7', SUB8 = '$sub8', MRK8 = '$mrk8', SUB9 = '$sub9', MRK9 = '$mrk9'
                    WHERE uid = '$uid' and sem = '$sem';";
		  
          elseif($sem==7)
                $sql = "UPDATE MARKS SET SUB1 = '$sub1', MRK1 = '$mrk1', SUB2 = '$sub2', MRK2 = '$mrk2',  SUB3 = '$sub3', MRK3 = '$mrk3',  SUB4 = '$sub4', MRK4 = '$mrk4',  SUB5 = '$sub5', MRK5 = '$mrk5',
                    SUB6 = '$sub6', MRK6 = '$mrk6', SUB7 = '$sub7', MRK7 = '$mrk7'
                    WHERE uid = '$uid' and sem = '$sem';";
         
         else
                $sql = "UPDATE MARKS SET SUB1 = '$sub1', MRK1 = '$mrk1', SUB2 = '$sub2', MRK2 = '$mrk2',  SUB3 = '$sub3', MRK3 = '$mrk3',  SUB4 = '$sub4', MRK4 = '$mrk4',  SUB5 = '$sub5', MRK5 = '$mrk5',
                    SUB6 = '$sub6', MRK6 = '$mrk6', SUB7 = '$sub7', MRK7 = '$mrk7', SUB8 = '$sub8', MRK8 = '$mrk8', SUB9 = '$sub9', MRK9 = '$mrk9'
                    WHERE uid = '$uid' and sem = '$sem';";

          if (mysqli_query($conn, $sql)) {
              echo '<script> alert("Marks Updated Successfully!")</script>';
              header("Refresh:0.5; url=sem1.php?uid=".$uid. "&sem=".$sem);
          } else {
              echo 'Error: '.$sql.'<br>'.$conn->error;
          }	
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Update</title>
<link rel="stylesheet" href="css/style2.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header>
<div class="head1">
  <img src = "css/logo.png"  width = "130px" height = "120px"/>
  <h1> Store My Results</h1>
  </div>
</header>

<section>
  <nav>
    <p> Add New Result:</br>
    <ul>
      <li><a href="">Click here</a></li></p>
    </ul>
    <span>Semester Results:</span>
    </br>
    <ul>
    <?php
        include('dbcon.php'); 
        if(isset($_GET['user'])){
          $username = $_GET['user'];
        }
         $qry1 = "select id from users where email = '$username'";  
          $re = mysqli_query($conn, $qry1);
	        while($row=mysqli_fetch_array($re))
	        {
             $uid =$row['id'];
          }
      ?>
      <li><a href="validate.php?uid=<?php echo $uid; ?>&amp;sem=<?php echo '1'; ?>">1st Semester</a></li>
      <li><a href="validate.php?uid=<?php echo $uid; ?>&amp;sem=<?php echo '2'; ?>">2nd Semester</a></li>
      <li><a href="validate.php?uid=<?php echo $uid; ?>&amp;sem=<?php echo '3'; ?>">3rd Semester</a></li>
      <li><a href="validate.php?uid=<?php echo $uid; ?>&amp;sem=<?php echo '4'; ?>">4th Semester</a></li>
      <li><a href="validate.php?uid=<?php echo $uid; ?>&amp;sem=<?php echo '5'; ?>">5th Semester</a></li>
      <li><a href="validate.php?uid=<?php echo $uid; ?>&amp;sem=<?php echo '6'; ?>">6th Semester</a></li>
      <li><a href="validate.php?uid=<?php echo $uid; ?>&amp;sem=<?php echo '7'; ?>">7th Semester</a></li>
      <li><a href="validate.php?uid=<?php echo $uid; ?>&amp;sem=<?php echo '8'; ?>">8th Semester</a></li>
    </ul>
  </nav>
  <article>
  <div id="login">
      <P>Enter the Details:</br>
      <span style="font-size: 20px; padding-top: 5px; padding-left: 10px">Note: Leave the extra subject fields empty!</span></p>
    <form name="f2" action="" onsubmit = "return validation()"  method="post">
        <table>
        <?php
        include('dbcon.php'); 
            $uid = 1;
            $sem = 1;
            $sql ="select * from marks where uid = '$uid' and sem= '$sem'";
	        $re = mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($re);
        ?>
            <tr>
            <td>Name:<input type="text"  id="name" name="name" value="<?php echo $row[1] ?>" readonly placeholder="Full Name" required pattern="[A-Z* 0-9*]{1,}" title="Enetr your Name"></td>
            <td> USN:<input type="text"  id="usn" name="usn" value="<?php echo $row[2] ?>" readonly placeholder="USN" required pattern="[A-Z* 0-9*]{10}" title="Invalid USN, Must be 10 characters in UpperCase"></td>
            </tr>
            <tr>
            <td>Semester: <input type="text"  id="name" name="name" value="<?php echo $row[3] ?>" readonly></td>
            <td>Branch:<input type="text"  id="branch" name="branch"  value="<?php echo $row[4] ?>" readonly placeholder="Branch" required pattern="[A-Z a-z]{1,}" title="Enter Branch"></td>
            </tr>
            <tr>
            <td>Subject 1:<input type="text"  id="sub1" name="sub1" value="<?php echo $row[5] ?>" placeholder="Subject Name" required pattern="[A-Z* a-z*]{1,20}" title="Enter Subject1, MAX 20"></td>
            <td>Marks:<input type="text"  id="mrk1" name="mrk1" value="<?php echo $row[6] ?>" placeholder="Marks Obtained" required pattern="[0-9]{1,3}" title="Enter Marks between 0-100"></td>
            </tr>
            <tr>
            <td>Subject 2:<input type="text"  id="sub2" name="sub2" value="<?php echo $row[7] ?>" placeholder="Subject Name" required pattern="[A-Z* a-z*]{1,20}" title="Enter Subject2, MAX 20"></td>
            <td>Marks:<input type="text"  id="mrk2" name="mrk2" value="<?php echo $row[8] ?>" placeholder="Marks Obtained" required pattern="[0-9]{1,3}" title="Enter Marks between 0-100"></td>
            </tr>
            <tr>
            <td>Subject 3:<input type="text"  id="sub3" name="sub3" value="<?php echo $row[9] ?>" placeholder="Subject Name" required pattern="[A-Z* a-z*]{1,20}" title="Enter Subject3, MAX 20"></td>
            <td>Marks:<input type="text"  id="mrk3" name="mrk3" value="<?php echo $row[10] ?>" placeholder="Marks Obtained" required pattern="[0-9]{1,3}" title="Enter Marks between 0-100"></td>
            </tr>
            <tr>
            <td>Subject 4:<input type="text"  id="sub4" name="sub4" value="<?php echo $row[11] ?>" placeholder="Subject Name" required pattern="[A-Z* a-z*]{1,20}" title="Enter Subject4, MAX 20"></td>
            <td>Marks:<input type="text"  id="mrk4" name="mrk4" value="<?php echo $row[12] ?>" placeholder="Marks Obtained" required pattern="[0-9]{1,3}" title="Enter Marks between 0-100"></td>
            </tr>
            <tr>
            <td>Subject 5:<input type="text"  id="sub5" name="sub5" value="<?php echo $row[13] ?>" placeholder="Subject Name" required pattern="[A-Z* a-z*]{1,20}" title="Enter Subject5, MAX 20"></td>
            <td>Marks:<input type="text"  id="mrk5" name="mrk5" value="<?php echo $row[14] ?>" placeholder="Marks Obtained" required pattern="[0-9*]{1,3}" title="Enter Marks between 0-100"></td>
            </tr>
            <tr>
            <td>Subject 6:<input type="text"  id="sub6" name="sub6" value="<?php if($row[15]!=NULL){echo $row[15];} ?>" placeholder="Subject Name"></td>
            <td>Marks:<input type="text"  id="mrk6" name="mrk6" value="<?php if($row[16]>0){echo $row[16];} ?>" placeholder="Marks Obtained" required pattern="[0-9]{0,3}" title="Enter Marks between 0-100"></td>
            </tr>
            <tr>
            <td>Subject 7:<input type="text"  id="sub7" name="sub7" value="<?php if($row[17]!=NULL){echo $row[15];} ?>" placeholder="Subject Name"></td>
            <td>Marks:<input type="text"  id="mrk7" name="mrk7" value="<?php if($row[18]>0){echo $row[18];} ?>" placeholder="Marks Obtained"></td>
            </tr>
            <tr>
            <td>Subject 8:<input type="text"  id="sub8" name="sub8" value="<?php if($row[19]!=NULL){echo $row[15];} ?>"></td>
            <td>Marks:<input type="text"  id="mrk8" name="mrk8" value="<?php if($row[20]>0){echo $row[20];} ?>" placeholder="Marks Obtained"></td>
            </tr>
            <tr>
            <td>Subject 9:<input type="text"  id="sub9" name="sub9" value="<?php if($row[21]!=NULL){echo $row[15];} ?>" placeholder="Subject Name"></td>
            <td>Marks:<input type="text"  id="mrk9" name="mrk9" value="<?php if($row[22]>0){echo $row[22];} ?>" placeholder="Marks Obtained" minlength="0" maxlength="12" title="Enter Marks between 0-100"></td>
            </tr> 
        </table>
        <p style="padding-left: 100px;"><input type="submit" name="sub"  value="Update"> </p>
    </form>
    </div>
  </article>
</section>
</body>
</html>


