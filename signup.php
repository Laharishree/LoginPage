<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$conn = mysqli_connect("localhost", "root", "", "login");

if(isset($_POST['submit'])){
    
    $v_name  		            = $_POST['name'];
    $v_pass  		            = $_POST['password'];
        var_dump($_POST);


  // ** #insert query value into the tm_category table **
	$sql = " INSERT INTO 'user_name'('USER_NAME', 'pass') VALUES ('$v_name','$v_pass')";


	// check the table value created or not
	if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        header('Location: register.html?message=added');

    } else {
        echo "Error: " . $sql_product . "<br>" . mysqli_error();
        header('Location: register.html?message=notadded');
    }
    
} 

?>