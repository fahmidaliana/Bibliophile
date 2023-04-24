<?php 

session_start();

if(!isset($_SESSION['emailuser']))
{
    header("Location:login.php");
}

include('../model/Biblio.php');
   
    include('header.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Home Page</title>
    <style>
       table, th, td 
    {
        border: 2px solid black;
    }
.p1 {
  font-family: "Lucida Handwriting", Cursive;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #104e8b;
  text-align:center;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 197.4px;
  text-decoration: none;
}

li a:hover {
  background-color: #00bfff;
}
</style>
</head>
<body>

  
<ul>
  <li><a class="p1" href="bookinfo.php">Book Info</a></li>
  <li><a class="p1" href="Request.php">Request Book Info</a></li>
  <li><a class="p1" href="../controllers/logoutaction.php">Log out</a></li>
</ul>

<br>
<table align="center" >
          
             
          <?php
                $sql = "SELECT `ID`, `BookName`, `AuthorName`, `Prequeal`, `Sequeal`, `Rdate`, `Publication`, `Description`,`image` FROM `books` WHERE 1";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) 
                {
                    while($row = mysqli_fetch_assoc($result))
                {
     
            ?>

            
          <tr>
              <th align="center"><?php echo $row["BookName"]; ?></th>
          </tr>
           
     
          <tr>
               <td align="center" rowspan="7"> <img src="../model/images/<?php echo $row['image']?>" alt="book pic" style="width:50%;height:60%;"></td>   
          </tr>

       
          <?php 
              } 
            }
               else{
                echo "no recode found";
               }
               mysqli_close($conn);
            ?>

            
          

         </table>


</body>

<?php 

include('footer.php');

?>
</html>