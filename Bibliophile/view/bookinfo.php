<?php 


    session_start();


    include('header.php');

    include('../model/Biblio.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Information</title>

    <style>
    table, th, td 
    {
        border: 2px solid black;
    }
    
    </style>
</head>
<body>
    <fieldset  style = "width: 70%; margin:  0px auto;">
   <legend style="color:#104e8b" align="center" ><h1>Book Information</h1></legend> 

          <table align="center" style="width:90%">
          
             
          <?php
                $sql = "SELECT `ID`, `BookName`, `AuthorName`, `Prequeal`, `Sequeal`, `Rdate`, `Publication`, `Description`,`image` FROM `books` WHERE 1";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) 
                {
                    while($row = mysqli_fetch_assoc($result))
                {
     
            ?>
          <tr>
             <th>Book Cover</th>
             <th colspan="2">Details</th>
          </tr>

          <tr>
               <td align="center" rowspan="7"> <img src="../model/images/<?php echo $row['image']?>" alt="profile pic" style="width:40%;height:60%;"></td>
               <th>Book id</th>
               <td align="center" ><?php echo $row["ID"]; ?></td>
          </tr>

          <tr>
          <th>Book name</th>
          <td align="center"><?php echo $row["BookName"]; ?></td>
          </tr>

          <tr>
          <th>Author name</th>
          <td align="center"><?php echo $row["AuthorName"]; ?></td>
          </tr>

          <tr>
          <th>Prequeal</th>
          <td align="center"><?php echo $row["Prequeal"]; ?></td>
          </tr>

          <tr>
          <th>Sequeal</th>
          <td align="center"><?php echo $row["Sequeal"]; ?></td>
          </tr>
                 
          <tr>
          <th>Release Date</th>
          <td align="center"><?php echo $row["Rdate"]; ?></td>
          </tr>     
                
          <tr>
          <th>Publication</th>
          <td align="center"><?php echo $row["Publication"]; ?></td>
          </tr>      
                
          <tr>
          <th colspan="3">Description</th>
          
          </tr>   
          
          <tr>
          <td align="center" colspan="3"><?php echo $row["Description"]; ?></td>
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
         <button onclick="history.back()">Go Back</button>
         </fieldset>
        
    <?php 
        include('footer.php'); 
    ?>

</body>
</html>

