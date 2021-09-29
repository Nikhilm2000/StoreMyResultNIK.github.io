<?php
        include('dbcon.php'); 
        if(isset($_GET['user'])){
          $username = $_GET['user'];
        }
				if(isset($_POST['usn']))
				{
					$name =$_POST['name'];
					$usn = $_POST['usn'];
					$sem = $_POST['sem'];
          $branch = $_POST['branch'];
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

          $name = stripcslashes($name); 
          $usn = stripcslashes($usn);  
          $sem = stripcslashes($sem); 
          $branch = stripcslashes($branch);
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
          $name = mysqli_real_escape_string($conn, $name);
          $usn = mysqli_real_escape_string($conn, $usn);  
          $sem = mysqli_real_escape_string($conn, $sem); 
          $branch = mysqli_real_escape_string($conn, $branch);  
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

          $qry1 = "select id from users where email = '$username'";  
          $re = mysqli_query($conn, $qry1);
	        while($row=mysqli_fetch_array($re))
	        {
             $uid =$row['id'];
          }
          $uid = stripcslashes($uid); 
          $uid = mysqli_real_escape_string($conn, $uid);

          $qry = "select * from marks where usn = '$usn' and sem='$sem'";  
          $result = mysqli_query($conn, $qry);  
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
          $count = mysqli_num_rows($result);  
          if($count == 1){  
            echo '<script> alert("Marks for this Semester already Exists!")</script>';
          } else{

          if($sem==1 || $sem==2 || $sem==6)
				  	$sql = "INSERT INTO marks(uid, name, usn, sem, branch, sub1, mrk1, sub2, mrk2, sub3, mrk3, sub4, mrk4, sub5, mrk5, sub6, mrk6, sub7, mrk7, sub8, mrk8) 
                    VALUES ('$uid', '$name', '$usn', '$sem', '$branch', '$sub1', '$mrk1', '$sub2', '$mrk2', '$sub3', '$mrk3', '$sub4', '$mrk4', '$sub5', '$mrk5', '$sub6', '$mrk6', '$sub7', '$mrk7', '$sub8', '$mrk8')";
					elseif($sem==3 || $sem==4 || $sem==5)
            $sql = "INSERT INTO marks(uid, name, usn, sem, branch, sub1, mrk1, sub2, mrk2, sub3, mrk3, sub4, mrk4, sub5, mrk5, sub6, mrk6, sub7, mrk7, sub8, mrk8, sub9, mrk9) 
                    VALUES ('$uid', '$name', '$usn', '$sem', '$branch', '$sub1', '$mrk1', '$sub2', '$mrk2', '$sub3', '$mrk3', '$sub4', '$mrk4', '$sub5', '$mrk5', '$sub6', '$mrk6', '$sub7', '$mrk7', '$sub8', '$mrk8', '$sub9', '$mrk9')";
					elseif($sem==7)
            $sql = "INSERT INTO marks(uid, name, usn, sem, branch, sub1, mrk1, sub2, mrk2, sub3, mrk3, sub4, mrk4, sub5, mrk5, sub6, mrk6, sub7, mrk7) 
                    VALUES ('$uid', '$name', '$usn', '$sem', '$branch', '$sub1', '$mrk1', '$sub2', '$mrk2', '$sub3', '$mrk3', '$sub4', '$mrk4', '$sub5', '$mrk5', '$sub6', '$mrk6', '$sub7')";
          else
            $sql = "INSERT INTO marks(uid, name, usn, sem, branch, sub1, mrk1, sub2, mrk2, sub3, mrk3, sub4, mrk4, sub5, mrk5) 
                    VALUES ('$uid', '$name', '$usn', '$sem', '$branch', '$sub1', '$mrk1', '$sub2', '$mrk2', '$sub3', '$mrk3', '$sub4', '$mrk4', '$sub5', '$mrk5')";

          if (mysqli_query($conn, $sql)) {
              echo '<script> alert("Marks inserted Successfully!")</script>';
          } else {
              echo 'Error: '.$sql.'<br>'.$conn->error;
          }	
        }
				}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
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
            <tr>
            <td>Name:<input type="text"  id="name" name="name" placeholder="Full Name" required pattern="[A-Z* 0-9*]{1,}" title="Enetr your Name"></td>
            <td> USN:<input type="text"  id="usn" name="usn" placeholder="USN" required pattern="[A-Z* 0-9*]{10}" title="Invalid USN, Must be 10 characters in UpperCase"></td>
            </tr>
            <tr>
            <td>Semester:<select name="sem" id="sem">
                <option value="" disabled selected>Select Sem</option>
                <option value= 1>1</option>
                <option value= 2>2</option>
                <option value= 3>3</option>
                <option value= 4>4</option>
                <option value= 5>5</option>
                <option value= 6>6</option>
                <option value= 7>7</option>
                <option value= 8>8</option>
                </select>
            </td>
            <td>Branch:<input type="text"  id="branch" name="branch" placeholder="Branch" required pattern="[A-Z a-z]{1,}" title="Enter Branch"></td>
            </tr>
            <tr>
            <td>Subject 1:<input type="text"  id="sub1" name="sub1" placeholder="Subject Name" required pattern="[A-Z* a-z*]{1,20}" title="Enter Subject1, MAX 20"></td>
            <td>Marks:<input type="text"  id="mrk1" name="mrk1" placeholder="Marks Obtained" required pattern="[0-9]{1,3}" title="Enter Marks between 0-100"></td>
            </tr>
            <tr>
            <td>Subject 2:<input type="text"  id="sub2" name="sub2" placeholder="Subject Name" required pattern="[A-Z* a-z*]{1,20}" title="Enter Subject2, MAX 20"></td>
            <td>Marks:<input type="text"  id="mrk2" name="mrk2" placeholder="Marks Obtained" required pattern="[0-9]{1,3}" title="Enter Marks between 0-100"></td>
            </tr>
            <tr>
            <td>Subject 3:<input type="text"  id="sub3" name="sub3" placeholder="Subject Name" required pattern="[A-Z* a-z*]{1,20}" title="Enter Subject3, MAX 20"></td>
            <td>Marks:<input type="text"  id="mrk3" name="mrk3" placeholder="Marks Obtained" required pattern="[0-9]{1,3}" title="Enter Marks between 0-100"></td>
            </tr>
            <tr>
            <td>Subject 4:<input type="text"  id="sub4" name="sub4" placeholder="Subject Name" required pattern="[A-Z* a-z*]{1,20}" title="Enter Subject4, MAX 20"></td>
            <td>Marks:<input type="text"  id="mrk4" name="mrk4" placeholder="Marks Obtained" required pattern="[0-9]{1,3}" title="Enter Marks between 0-100"></td>
            </tr>
            <tr>
            <td>Subject 5:<input type="text"  id="sub5" name="sub5" placeholder="Subject Name" required pattern="[A-Z* a-z*]{1,20}" title="Enter Subject5, MAX 20"></td>
            <td>Marks:<input type="text"  id="mrk5" name="mrk5" placeholder="Marks Obtained" required pattern="[0-9*]{1,3}" title="Enter Marks between 0-100"></td>
            </tr>
            <tr>
            <td>Subject 6:<input type="text"  id="sub6" name="sub6" placeholder="Subject Name"></td>
            <td>Marks:<input type="text"  id="mrk6" name="mrk6" placeholder="Marks Obtained" required pattern="[0-9]{0,3}" title="Enter Marks between 0-100"></td>
            </tr>
            <tr>
            <td>Subject 7:<input type="text"  id="sub7" name="sub7" placeholder="Subject Name"></td>
            <td>Marks:<input type="text"  id="mrk7" name="mrk7" placeholder="Marks Obtained"></td>
            </tr>
            <tr>
            <td>Subject 8:<input type="text"  id="sub8" name="sub8" placeholder="Subject Name"></td>
            <td>Marks:<input type="text"  id="mrk8" name="mrk8" placeholder="Marks Obtained"></td>
            </tr>
            <tr>
            <td>Subject 9:<input type="text"  id="sub9" name="sub9" placeholder="Subject Name"></td>
            <td>Marks:<input type="text"  id="mrk9" name="mrk9" placeholder="Marks Obtained" minlength="0" maxlength="12" title="Enter Marks between 0-100"></td>
            </tr> 
        </table>
        <p><input type="submit" name="sub"  value="Submit"> 
        <a href="print.php?usn=<?php echo $usn; ?>&amp;sem=<?php echo $sem; ?>"> <input type="button" onclick="validation()" value="Print"></a>
      </p>
    </form>
    </div>
  </article>
</section>
<script>  
            function validation()  
            {  
                var usn=document.f2.usn.value;
                var sem=document.f2.sem.value; 
                var sub5=document.f2.sub5.value;  
                var sub7=document.f2.sub7.value;  
                var sub8=document.f2.sub8.value;
                var sub9=document.f2.sub9.value;
                if(usn.length<1){
                    alert("Enter the Details!"); 
                    return false;   
                }
                if(sem==0){
                    alert("Select Semester"); 
                    return false;   
                }
                if((sem==1 || sem==2 || sem==6) && (sub8.length<1)) {  
                    alert("Semester: "+sem+" has 8 subjects, Fill all the required feilds");  
                    return false;  
                }  
                else if((sem==3 || sem==4 || sem==5) && (sub9.length<1))  
                {  
                    alert("Semester: "+sem+" has 9 subjects, Fill all the required feilds");  
                    return false;  
                }  
                else if((sem==7) && (sub7.length<1))  
                {  
                    alert("Semester: "+sem+" has 7 subjects, Fill all the required feilds");  
                    return false;  
                } 
                else if((sem==8) && (sub5.length<1))
                {  
                    alert("Semester: "+sem+" has 5 subjects, Fill all the required feilds");  
                    return false;  
                }                              
            }  
    </script>  
</body>
</html>


