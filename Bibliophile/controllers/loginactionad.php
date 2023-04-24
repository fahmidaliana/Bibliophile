<?php 

session_start();
include('../model/biblio.php');

	
	if ($_SERVER['REQUEST_METHOD'] == "POST")
     {
        
		$emailad = sanitize($_POST['emailad']);
		$password = sanitize($_POST['password']);
		/* $remember = sanitize($_POST['remember']); */

		$isValid = true;

		if(empty($emailad))
		{
			$_SESSION['emailad_error_msg'] = "Email can not be empty";
			$isValid = false;
		}
		else
		{
			$_SESSION['emailad_error_msg'] = "";
		}
		if(empty($password))
		{
			$_SESSION['password_error_msg'] = "Password can not be empty";
			$isValid = false;
		}
		else
		{
			$_SESSION['password_error_msg'] = "";
		}
		/* if(empty($remember))
		{
			setcookie('remember','remember',time() + 5,'/');
		}
		else
		{
			setcookie('remember','remember',0,'/');
		} */

		if($isValid === true) 
		{
			$_SESSION['emailad_error_msg'] = "";
			$_SESSION['password_error_msg'] = "" ;
			
			$sql = "SELECT `EmailAD`, `Password` FROM `employee` WHERE 1 ";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) 
			{
				while($row = mysqli_fetch_assoc($result))
				{
					if($row["EmailAD"] === $emailad and $row["Password"] === $password)
					{
						$_SESSION['emailad'] = $emailad;
						
						header("Location:../view/homead.php");
						$_SESSION['global_error_msg'] = "" ;
						break;
					}
					else
				 {
					$_SESSION['global_error_msg'] = "Email or password does not match";		
					header("Location:../view/loginad.php");	
				 }
				}
			}
			else
			{
				$_SESSION['global_error_msg'] = "Something went wrong";
			   header("Location:../view/loginad.php");
			}

		mysqli_close($conn);
	
			
		}

		else
		{
			
			header("Location:../view/loginad.php");
		}

		
    }

	function sanitize($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>