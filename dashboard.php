<!DOCTYPE html>
<html>
<link rel="stylesheet" href="w3.css">
<!--- Responsive ---->	
<meta name="viewport" content="width=device-width, initial-scale=1">
 <style>
.content {
  max-width: 500px;
  margin: auto;
  background: white;
  padding: 10px;
}
.content2 {
  max-width: 1000px;
  margin: auto;
  background: white;
  padding: 10px;
}
</style>	
	
<body class="w3-theme-l2">
<!------------------ Background Design for the title ------------------>	
<div class="w3-container w3-2019-orange-tiger content2" style='background-color:#f2552c'>
<h2 class="w3-center w3-opacity" style="text-shadow:1px 1px 0 #444">Fully Booked Employee COVID-19 Daily Safety Checklist</h2>
<h1 class="w3-center w3-padding w3-black w3-opacity-min">REPORT</h1>
</div>
<!------------------ Design for Selecting a Specific Date ----------------------->	
<div class="w3-container content">
<p class="w3-center w3-medium w3-black w3-padding">SELECT A DATE</p>
<form name="indexForm" class="w3-container" method="post">
<input type="date" name="today">
<input class="w3-btn submit" name="submit" type="submit" value="Next" style='background-color:#f2552c'>
<p></p>
</form>	 
</div>
<p></p>

<!------------- PHP query for checking the date and displaying the result----------->
<?php

include 'db_con.php';

$conn = OpenCon();
	
if(isset($_POST['today'])) {
    $date = date('Y-m-d', strtotime($_POST['today']));
	
// Count the number of rows from the table of the employees	
$sqlcnt = "SELECT name FROM tb_emp";
$resultcnt = mysqli_query($conn, $sqlcnt);
	
// SQL for the details of the employee who submitted
$sql = "SELECT name, dept, date  FROM tb_form where date = '$date'";
$result = mysqli_query($conn, $sql);
$rownumber = mysqli_num_rows($result);
	
// SQL for the names of all employees
$sqlname = "SELECT * from tb_form INNER JOIN tb_emp ON tb_form.name = tb_emp.name AND tb_form.name=tb_emp.name where tb_form.date = '$date'";
$resultname = mysqli_query($conn, $sqlname);
$rownumber2 = mysqli_num_rows($resultcnt) - mysqli_num_rows($resultname);

// SQL for the names of employees who did not submit
$sqlnot = "SELECT name FROM tb_emp WHERE NOT EXISTS (SELECT * FROM tb_form WHERE tb_form.name = tb_emp.name AND tb_form.date = '$date')";
$resultnot = mysqli_query($conn, $sqlnot);
	

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo "<div class='w3-container content'>";
	echo "<div class='w3-center w3-medium w3-grey w3-padding'> <b>DATE SELECTED :</b> " . $date . "</div>" . "<p></p>";
	echo "<p class='w3-center'>";
    while($row = mysqli_fetch_assoc($result)) {
		
        echo "" . $row["name"]. "&nbsp;&nbsp;*&nbsp;&nbsp;" . $row["dept"] . "&nbsp;&nbsp;&nbsp;&nbsp;";

    }
	echo "</p>";
	echo "<br>"."<p class='w3-center'>";
	echo "<div class='w3-center w3-medium w3-grey w3-padding'><b> NO. OF SUBMISSIONS : </b> <u>" . $rownumber . "</u></div><br>";
	echo "</p>";
	echo "</div>";
	
}
	
else {
	echo "<div class='w3-container content'>";
	echo "<div class='w3-center w3-medium w3-grey w3-padding'> <b>DATE SELECTED :</b> " . $date . "</div>" . "<p></p>";
    echo "<br>"."<p class='w3-center'>";
	echo "<div class='w3-center w3-medium w3-grey w3-padding'><b> NO. OF SUBMISSIONS : </b> <u>" . $rownumber . "</u></div><br>";
	echo "<div class='w3-container content'>";
}
	
	
if (mysqli_num_rows($resultname) >= 0)
{

// Show the NUMBER/COUNT of all employees who did not submit

	echo "<div class='w3-container content'>";
	echo "<div class='w3-center w3-medium w3-grey w3-padding'><b> DID NOT SUBMIT YET: </b> <u>" . $rownumber2 . "</u></div><br>";
	echo "</div>";

} 

else {
	
	echo "<div class='w3-container content'>";
	echo "<div class='w3-center w3-medium w3-grey w3-padding'><b> DID NOT SUBMIT YET: </b> <u>" . $rownumber2 . "</u></div><br>";
	echo "</div>";
}
	
if (mysqli_num_rows($resultnot) > 0) {

// Show the NAME of all employees who did not submit	
	
	echo "<div class='w3-container content w3-center'>";
	echo "<table class='w3-bordered w3-container w3-table' readonly>\n" ;
	echo "<tr>";
	echo "<td class='w3-center'>";
    while($row = mysqli_fetch_assoc($resultnot)) {
		
        echo "" . $row["name"]. "<br>";

    }
	echo "</td>" ;
	echo "</tr>";
	echo "</table>";
	echo "</div>";
	

}
}
	
mysqli_close($conn);
	
?>
	
  
</body>
</html>