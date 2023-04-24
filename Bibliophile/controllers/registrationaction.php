<?php 

session_start();
include('../model/biblio.php');

	if ($_SERVER['REQUEST_METHOD'] === "POST")
     {
		$fname = sanitize($_POST['fname']);
		$lname = sanitize($_POST['lname']);
		$emailuser = sanitize($_POST['emailuser']);
		$password = sanitize($_POST['password']);
		$cpassword = sanitize($_POST['cpassword']);


		$isValid = true;

        if (empty($fname)) {
			$_SESSION['fname_error_msg'] = "Please fill up this segment properly";
			$isValid = false;
		}

		else{
			$_SESSION['fname_error_msg'] = "";
		}
        
        if (empty($lname)) {
			$_SESSION['lname_error_msg'] = "Please fill up this segment properly";
			$isValid = false;
		}
		else{
			$_SESSION['lname_error_msg'] = "";
		}

        if (empty($emailuser)) {
			
			$_SESSION['emailuser_error_msg'] = "Please fill up this segment properly";
			$isValid = false;
		}
		else{
			$_SESSION['emailuser_error_msg'] = "";
		}
		
		if (empty($password)) {
			$_SESSION['password_error_msg'] = "Please fill up this segment properly";
			$isValid = false;
		}
		else{
			$_SESSION['password_error_msg'] = "";
		}
        if (empty($cpassword)) {
			$_SESSION['cpassword_error_msg'] = "Please fill up this segment properly";
			$isValid = false;
			
		}
		else{
			$_SESSION['cpassword_error_msg'] = "";
		}

        if($password != $cpassword){
			$_SESSION['global_error_msg'] = "Password and re-typed password does not match";	
			$isValid = false;
        }
		if ($isValid === true) {

			$_SESSION['fname_error_msg'] = "";
			$_SESSION['lname_error_msg'] = "" ;
			$_SESSION['emailuser_error_msg'] = "";
			$_SESSION['password_error_msg'] = "" ;
			$_SESSION['cpassword_error_msg'] = "" ;
			

			$sql = "INSERT INTO `users`(`FirstName`, `LastName`, `Emailuser`, `Password`) VALUES ('$fname','$lname','$emailuser','$password')";
			
			$result = mysqli_query($conn, $sql);

			if($result)
			{
				header("Location:../view/login.php");
			}

			else
			{
				echo "Something went wrong" . mysqli_error($conn);
			}

		
		}
		
		else
		{
			header('Location:../view/registration.php');
		}
		mysqli_close($conn);
    }

	function sanitize($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
?>