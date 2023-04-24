<?php 

    session_start();
    include('header.php');
    

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <style>
         div{
         
            text-align: center;
            text-decoration: center;
            
            padding:40px 10px 10px 70px;
        }

    </style>
</head>
<body>
    <form  align="center" action="../controllers/hp1.php" method="post" enctype="multipart/form-data" novalidate>
    <fieldset  style = "width: 50%; margin:  0px auto;" class="a">

        <legend align="center"><h2>Update Profile Picture</h2></legend>


     <div><input type="file" name="image" id="image"><br>
        <?php echo isset($_SESSION['size_error_msg']) ? $_SESSION['size_error_msg'] : ""; ?><br>
        <?php echo isset($_SESSION['type_error_msg']) ? $_SESSION['type_error_msg'] : ""; ?><br><br>
        
    </div>
        
    <input type="submit" name="submit" value="Upload"><br>
        <?php echo isset($_SESSION['global_error_msg']) ? $_SESSION['global_error_msg'] : ""; ?>
      
 
    </fieldset>
    </form>

</body>
</html>