 <?php
	include 'database.php';
	$name=$_POST['name'];
	$city=$_POST['city'];
    $occupation=$_POST['occu'];

	$sql = "INSERT INTO `formdata`(`name`, `city`, `occupation`) 
	VALUES ('$name','$city','$occupation')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>
 


