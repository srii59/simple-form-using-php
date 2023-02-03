<?php
	require_once 'connection.php';
 
	if(ISSET($_POST['insert'])){
		try{
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$username = $_POST['username'];
			$phone = $_POST['phone'];
			$password = $_POST['password'];
			$gender = $_POST['gender'];
		 $lan = "";
			 $language = $_POST['language'];
		 $lan = implode(",", $language);
		 
		 $Subjects = $_POST['Subjects'];

		 
		 
		 

	
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO `user` (`firstname`, `lastname`, `username`,`phone`,`password`,`gender`,`language`,`Subjects`) VALUES ('$firstname', '$lastname', '$username','$phone','$password','$gender','$lan','$Subjects')";
			
			$conn->exec($sql);



			
		}catch(PDOException $e){
			echo $e->getMessage();
		}
 
		$conn = null;
 
		echo "<script>alert('Successfully inserted data!')</script>";
		echo "<script>window.location='index.php'</script>";
	}
?>