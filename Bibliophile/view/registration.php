<?php 

    session_start();
    include('header.php');
    

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>
   
</head>
<body>
    
<form align="center" method="post" action="../controllers/registrationaction.php" onsubmit="return isValid(this);" novalidate>
<fieldset  style = "width: 50%; margin:  0px auto;">

    <legend style="color:#104e8b"   align="center"><h2>REGISTRATION PAGE</h2></legend>

        <label style="color:#104e8b"   for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" >
        <?php echo isset($_SESSION['fname_error_msg']) ? $_SESSION['fname_error_msg'] : ""; ?><br><br>
       
        
        <label style="color:#104e8b"   for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname">
        <?php echo isset($_SESSION['lname_error_msg']) ? $_SESSION['lname_error_msg'] : ""; ?><br><br>
     

        <label style="color:#104e8b"   for="emailuser">Email:</label>
        <input type="email" id="emailuser" name="emailuser">
        <?php echo isset($_SESSION['emailuser_error_msg']) ? $_SESSION['emailuser_error_msg'] : ""; ?><br><br>
       



        <label style="color:#104e8b"   for="password">Password:</label>
        <input type="password" id="password" name="password">
        <?php echo isset($_SESSION['password_error_msg']) ? $_SESSION['password_error_msg'] : ""; ?><br><br>
      


        <label style="color:#104e8b"   for="cpassword">Confirm password:</label>
        <input type="password" id="cpassword" name="cpassword">
        <?php echo isset($_SESSION['cpassword_error_msg']) ? $_SESSION['cpassword_error_msg'] : ""; ?><br><br>
      


        <input style="color:#104e8b"  type="submit" value="Submit">
     
        <a style="color:#104e8b"   href="../view/login.php">I already have an account</a> <br><br>

        <?php echo isset($_SESSION['global_error_msg']) ? $_SESSION['global_error_msg'] : ""; ?>

   
        </fieldset>

</form>




<?php 

    include('footer.php');

?>
</body>