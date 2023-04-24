<?php 

session_start();
include('../model/Biblio.php');

	if ($_SERVER['REQUEST_METHOD'] === "POST")
     {
		$bname = sanitize($_POST['bname']);
		$aname = sanitize($_POST['aname']);
		$pre = sanitize($_POST['pre']);
		$seq = sanitize($_POST['seq']);
       // $genre = sanitize($_POST['genre']);
		$rdate = sanitize($_POST['rdate']);
        $pub = sanitize($_POST['pub']);
        $des = sanitize($_POST['des']);
      

		$isValid = true;

        if (empty($bname)) {
			$_SESSION['Bname_error_msg'] = "Please fill up this segment properly";
			$isValid = false;
		}

		else{
			$_SESSION['Bname_error_msg'] = "";
		}
        
        if (empty($aname)) {
			$_SESSION['Aname_error_msg'] = "Please fill up this segment properly";
			$isValid = false;
		}
		else{
			$_SESSION['Aname_error_msg'] = "";
		}

        if (empty($pre)) {
			
			$_SESSION['pre_error_msg'] = "Please fill up this segment properly";
			$isValid = false;
		}
		else{
			$_SESSION['pre_error_msg'] = "";
		}
		
        
        // if (empty($genre)) {
			
		// 	$_SESSION['genre_error_msg'] = "Please fill up this segment properly";
		// 	$isValid = false;
		// }
		// else{
		// 	$_SESSION['genre_error_msg'] = "";
		// }
		
		if (empty($seq)) {
			$_SESSION['seq_error_msg'] = "Please fill up this segment properly";
			$isValid = false;
		}
		else{
			$_SESSION['seq_error_msg'] = "";
		}
        
		if (empty($rdate)) {
			$_SESSION['Rdate_error_msg'] = "Please fill up this segment properly";
			$isValid = false;
		}
		else{
			$_SESSION['Rdate_error_msg'] = "";
		}

        
		if (empty($pub)) {
			$_SESSION['pub_error_msg'] = "Please fill up this segment properly";
			$isValid = false;
		}
		else{
			$_SESSION['pub_error_msg'] = "";
		}


        
		if (empty($des)) {
			$_SESSION['des_error_msg'] = "Please fill up this segment properly";
			$isValid = false;
		}
		else{
			$_SESSION['des_error_msg'] = "";
		}

  
		if ($isValid === true)
		 {

			$_SESSION['Bname_error_msg'] = "";
			$_SESSION['Aname_error_msg'] = "" ;
			$_SESSION['pre_error_msg'] = "";
			$_SESSION['seq_error_msg'] = "" ;
			//$_SESSION['genre_error_msg'] = "" ;
            $_SESSION['Rdate_error_msg'] = "" ;
            $_SESSION['pub_error_msg'] = "" ;
            $_SESSION['des_error_msg'] = "" ;

			

			$sql = "INSERT INTO `books` VALUES ('$bname','$aname','$pre','$seq','$rdate','$pub','$des')";
			
			
			$result = mysqli_query($conn, $sql);

			if($result)
			{
				header("Location:../view/bookinfo.php");
			}

			else
			{
				echo "Something went wrong" . mysqli_error($conn);
			}

		
		}
		
		else
		{
			header('Location:../view/AddBook.php');
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