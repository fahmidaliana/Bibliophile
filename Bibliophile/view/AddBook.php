<?php
    session_start();
include('header.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
</head>
<body>
<form  align="center" action="../controllers/add.php" method="post" enctype="multipart/form-data" novalidate>
    <fieldset align="center" style = "width: 50%; margin:  0px auto;">
        <legend style="color:#104e8b" ><h2>AddBook </h2></legend>

        <label style="color:#104e8b"  for="bname">Book Name:</label>
        <input type="text" id="bname" name="bname"><br><br>

        <label style="color:#104e8b"  for="aname">Author Name:</label>
        <input  type="text" id="aname" name="aname"><br><br>

        <label style="color:#104e8b" for="pre">Prequeal:</label>
        <input  type="text" id="pre" name="pre"><br><br>

        <label style="color:#104e8b"  for="seq">Sequeal:</label>
        <input type="text" id="seq" name="seq"><br><br>

        <!-- <label  style="color:f4a460" for="genre">Genre:</label><br><br>
        <input type="checkbox" id="Fiction" name="genre" value="Fiction">
        <label for="Fiction">Fiction</label>

        <input type="checkbox" id="Non-fiction" name="genre" value="Non-fiction">
        <label for="Non-fiction">Non-fiction</label>

        <input type="checkbox" id="Poetry" name="genre" value="Poetry">
        <label for="Poetry">Poetry</label>

        <input type="checkbox" id="Drama" name="genre" value="Drama">
        <label for="Drama">Drama</label>

        <input type="checkbox" id="HistoricalFiction" name="genre" value="HistoricalFiction">
        <label for="HistoricalFiction">Historical Fiction</label><br><br>

        <input type="checkbox" id="ScienceFiction" name="genre" value="ScienceFiction">
        <label for="ScienceFiction">Science Fiction</label>

        <input type="checkbox" id="Fantasy" name="genre" value="Fantasy">
        <label for="Fantasy">Fantasy</label>

        <input type="checkbox" id="Romance" name="genre" value="Romance">
        <label for="Romance">Romance</label>

        <input type="checkbox" id="Mystery/Thriller" name="genre" value="Mystery/Thriller">
        <label for="Mystery/Thriller">Mystery/Thriller</label>

        <input type="checkbox" id="Horror" name="genre" value="Horror">
        <label for="Horror">Horror</label><br><br>

        <input type="checkbox" id="Fiction" name="genre" value="Fiction">
        <label for="Fiction">Fiction</label>

        <input type="checkbox" id="Western" name="genre" value="Western">
        <label for="Western">Western</label>

        <input type="checkbox" id="Adventure" name="genre" value="Adventure">
        <label for="Adventure">Adventure</label>

        <input type="checkbox" id="YoungAdult" name="genre" value="YoungAdult">
        <label for="YoungAdult">Young Adult</label>

        <input type="checkbox" id="Children's" name="genre" value="Children's">
        <label for="Children's">Children's</label><br><br>

        <input type="checkbox" id="Humor" name="Humor" value="Humor">
        <label for="Humor">Humor/Satire</label>

        <input type="checkbox" id="Memoir" name="genre" value="Memoir">
        <label for="Memoir/Biography">Memoir/Biography</label>

        <input type="checkbox" id="Essay/Article" name="genre" value="Essay/Article">
        <label for="Essay/Article">Essay/Article</label><br><br>

        <input type="checkbox" id="Self-help" name="genre" value="Self-help">
        <label for="Self-help">Self-help/Personal Development</label>

        <input type="checkbox" id="Business" name="genre" value="Business">
        <label for="Business">Business/Finance</label>

        <input type="checkbox" id="Travelogue" name="genre" value="Travelogue">
        <label for="Travelogue">Travelogue</label><br><br> -->

        <label style="color:#104e8b"  for="rdate">Release Date:</label>
        <input type="date" id="rdate" name="rdate"><br><br>

        <label  style="color:#104e8b" for="pub">Publication:</label>
        <input type="text" id="pub" name="pub"><br><br>

        <label style="color:#104e8b" for="des">Description:</label><br>
        <textarea id="des" name="des" style="width:300px; height:100px;"></textarea><br><br>

        <!-- <label  style="color:f4a460" for="image">Book Cover:</label>
        <input type="file" name="image" id="image"><br> -->
        <!-- <?php echo isset($_SESSION['size_error_msg']) ? $_SESSION['size_error_msg'] : ""; ?><br>
        <?php echo isset($_SESSION['type_error_msg']) ? $_SESSION['type_error_msg'] : ""; ?><br><br> -->

        <input style="color:#104e8b"  type="submit" value="Submit">
</form>
<button  onclick="history.back()"  style="color:#104e8b">Go Back</button>
    </fieldset>
</body>

<?php
include('footer.php');
?>

</html>