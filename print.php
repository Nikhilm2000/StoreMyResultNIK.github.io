<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Print Result</title>
		<link rel="stylesheet" href="css/printstyle.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>	
        <script type="text/javascript">
        function myfun(){
            var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};
    doc.fromHTML($('#htmlContent').html(), 15, 15, {
        'width': 800,
        'elementHandlers': specialElementHandlers
    });
    doc.save('sample_file.pdf');
        
}
    </script>	
	</head>
    <title>Print</title>
	<body>
	<?php
	ob_start();	
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
    }
    else{
         echo '<script> alert("errors!")</script>';
    }

	
?>

<header>
    <div class="head1">
    <img src = "css/logo.png"  width = "125px" height = "120px"/>
    <h1> Store My Results</h1>
    </div>
</header>
<article>
<div id="htmlContent">
<span>
<p id="p1">Name: <b> <?php echo $name; ?> </b> </p>  <p id="p2">Branch: <b><?php echo $branch; ?></b></p></br></br></br>
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
</article>
</div>
<div id="editor"></div>
<div id="btn">
<button id="generatePDF" onclick="myfun()">Save As PDF</button>
</div>
</body>
</html>