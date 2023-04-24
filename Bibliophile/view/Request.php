<?php 
include('header.php');
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Book</title>
</head>
<body> 
    <fieldset>
      <legend style="color:#104e8b"  align="center"><h1>Request Book Information</h1></legend>
<form  align="center" action="../view/Ans.php">
      <h3 style="color:#104e8b" align="center"> Please type the name of the book u want to request Information of here</h3><br><br>

      <b><label style="color:#104e8b" for="name">Book Name:</label></b>
      <input type="text" id="name" name="name" size="50"><br><br><br><br>

      <input  style="color:#104e8b"  type="submit" value="Submit">
</form>
<button onclick="history.back()"  style="color:#104e8b" >Go Back</button>
    </fieldset>
</body>

<?php
  include('footer.php');
?>
</html>