<?php
    include('dbcon.php'); 
    if(isset($_GET['uid']) && isset($_GET['sem']))
    {
	    $uid = $_GET['uid'];
        $sem = $_GET['sem'];	
	$sql ="select * from marks where uid = '$uid' and sem= '$sem'";
	$re = mysqli_query($conn, $sql);
	while($row=mysqli_fetch_array($re))
	{
        $name = $row['Name'];
        $usn = $row['USN'];
        $branch = $row['Branch'];
        $sub1 = $row['SUB1'];
        $mrk1 = $row['MRK1'];
        $sub2 = $row['SUB2'];
        $mrk2 = $row['MRK2'];
        $sub3 = $row['SUB3'];
        $mrk3 = $row['MRK3'];
        $sub4 = $row['SUB4'];
        $mrk4 = $row['MRK4'];
        $sub5 = $row['SUB5'];
        $mrk5 = $row['MRK5'];
        $sub6 = $row['SUB6'];
        $mrk6 = $row['MRK6'];
        $sub7 = $row['SUB7'];
        $mrk7 = $row['MRK7'];
        $sub8 = $row['SUB8'];
        $mrk8 = $row['MRK8'];
        $sub9 = $row['SUB9'];
        $mrk9 = $row['MRK9'];
	}
    $qry1 = "select * from users where id = '$uid'";  
    $re = mysqli_query($conn, $qry1);
      while($row=mysqli_fetch_array($re))
      {
       $username =$row['email'];
    }
    }
    else{
         echo '<script> alert("errors!")</script>';
    }

	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Marks</title>
<link rel="stylesheet" href="css/semstyle.css">
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
      <li><a href="index.php?user=<?php echo $username; ?>">Click here</a></li></p>
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
    <div class="head2">
    <img src = "css/logo.png"  width = "110px" height = "100px"/>
    <h1> Store My Results</h1>
    </div>
<div id="htmlContent">
<span>
<p id="p1">Name: <b> <?php echo $name; ?> </b> </p>  <p id="p2">Branch: <b><?php echo $branch; ?></b></p>
<p id="p1">USN: <b> <?php echo $usn; ?> </b> </p>  <p id="p2"> Semester: <b>0<?php echo $sem; ?></b></p>
</br></br></br></br>
</span>
</br></br>
<table>
            <tr>
            <th>Sl No.</td>
            <th>Subject Name</td>
            <th>Max. Marks</td>
            <th>Marks Obtained</td>
            </tr>

            <tr>
            <td>01</td>
            <td><b><?php echo $sub1; ?></b></td>
            <td>100</td>
            <td><b><?php echo $mrk1; ?></b></td>
            </tr>

            <tr>
            <td>02</td>
            <td><b><?php echo $sub2; ?></b></td>
            <td>100</td>
            <td><b><?php echo $mrk2; ?></b></td>
            </tr>

            <tr>
            <td>03</td>
            <td><b><?php echo $sub3; ?></b></td>
            <td>100</td>
            <td><b><?php echo $mrk3; ?></b></td>
            </tr>

            <tr>
            <td>04</td>
            <td><b><?php echo $sub4; ?></b></td>
            <td>100</td>
            <td><b><?php echo $mrk4; ?></b></td>
            </tr>

            <tr>
            <td>05</td>
            <td><b><?php echo $sub5; ?></b></td>
            <td>100</td>
            <td><b><?php echo $mrk5; ?></b></td>
            </tr>
           
            <?php
            if($mrk6>0)
            {
                echo "
                <tr>
                <td>06</td>
                <td><b>"  .$sub6. "</b></td>
                <td>100</td>
                <td><b>" .$mrk6. "</b></td>
                </tr>";   
            } ?>
            
            <?php
            if($mrk7>0)
            {
                echo "
                <tr>
                <td>07</td>
                <td><b>"  .$sub7. "</b></td>
                <td>100</td>
                <td><b>" .$mrk7. "</b></td>
                </tr>";   
            } ?>

            <?php
            if($mrk8>0)
            {
                echo "
                <tr>
                <td>08</td>
                <td><b>"  .$sub8. "</b></td>
                <td>100</td>
                <td><b>" .$mrk8. "</b></td>
                </tr>";   
            } ?>

            <?php
            if($mrk9>0)
            {
                echo "
                <tr>
                <td>09</td>
                <td><b>"  .$sub9. "</b></td>
                <td>100</td>
                <td><b>" .$mrk9. "</b></td>
                </tr>";   
            } ?>
           
        </table>
        <p style="margin-left: 33%;"></br>
  <a style="float:left;" href="print.php?uid=<?php echo $uid; ?>&amp;sem=<?php echo $sem; ?>"> <input type="button" value="Print"></a>
  <a style="float:left; padding-left:20px;" href="edit.php?uid=<?php echo $uid; ?>&amp;sem=<?php echo $sem; ?>"> <input type="button" value="Update"></a>
  </p>
  </article>
</section>
</body>
</html>


