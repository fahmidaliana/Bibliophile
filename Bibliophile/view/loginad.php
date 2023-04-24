<?php 

    session_start();
    if(isset($_SESSION['emailad']))
    {
        header("Location:homead.php");
    }
    include('header.php');
   
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login page</title>
    <script src="JS/login.js"></script>
</head>
<body>

    <form align="center" method="post" action="../controllers/loginactionad.php" onsubmit="return isValid(this);" novalidate>
       
    <fieldset  style = "width: 50%; margin:  0px auto;">

        <legend align="center" style="color:#104e8b"><h2>LOGIN PAGE</h2></legend>


        <label  for="emailad" style="color:#104e8b" >Email:</label>     
        <input type="email" id="emailad" name="emailad">
        <?php echo isset($_SESSION['emailad_error_msg']) ? $_SESSION['emailad_error_msg'] : ""; ?>
        <span id="emailad_error_msg" style="color:red"></span><br><br>


        <label for="password" style="color:#104e8b"  >Password:</label>
        <input type="password" id="password" name="password">
        <?php echo isset($_SESSION['password_error_msg']) ? $_SESSION['password_error_msg'] : ""; ?>
        <span id="password_error_msg" style="color:red"></span><br><br>

      <!--   <input type="checkbox" name="remember" id="remember"><label for="remember">Remember me</label><br><br> -->
        

        <input  style="color:#104e8b"  type="submit" value="Submit"><br><br>

        

    

        <?php echo isset($_SESSION['global_error_msg']) ? $_SESSION['global_error_msg'] : ""; ?>

    </fieldset>

    </form>

 
 

    <?php 

        include('footer.php');

    ?>
</body>
</html>