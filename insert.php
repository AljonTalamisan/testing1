<?php

include 'db_con.php';

$conn = OpenCon();

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$email = $_POST['email'];
$date = $_POST['date'];
$name = $_POST['name'];
$dept = $_POST['dept'];
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];
$option3 = $_POST['option3'];
$option4 = $_POST['option4'];
$option5 = $_POST['option5'];
$option6 = $_POST['option6'];
$option7 = $_POST['option7'];
$option8 = $_POST['option8'];
$option9 = $_POST['option9'];
$acknowledge = $_POST['acknowlegde'];
    
if($name ==''||$email =='' ||$date =='' ||$dept =='' ||$option1 =='' ||$option2 =='' ||$option3 =='' ||$option4 =='' ||$option5 =='' ||$option6 =='' ||$option6 =='' ||$option7 =='' ||$option8 =='' ||$option9 ==''|| !isset($_POST['acknowledge']) ){
	
echo "<script>
alert('Some Fields are Missing');
window.history.back();  
</script>";
//Insert Query of SQL
}
	
else
{
$sql = "insert into tb_form(email, date, name, dept, option1, option2, option3, option4, option5, option6, option7, option8, option9) values ('$email', '$date', '$name', '$dept', '$option1', '$option2', '$option3', '$option4', '$option5', '$option6', '$option7', '$option8', '$option9')";


if (mysqli_query($conn, $sql))
{	
header("Location: finish.html");
exit();
} 
	
else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
}

?>