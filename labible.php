<?php 
//Test si connecté
session_start();
$is_in=false;
if (isset($_SESSION['connected']) && $_SESSION['connected'] === true) {
    $is_in = true;
}

//IMPORTS
include_once('../rehoboth/class/database.class.php');
include_once('../rehoboth/INC/constants.inc.php');
include_once('../rehoboth/INC/db.php');
// include_once('../rehoboth/INC/dbconnect.inc.php');
// include_once('../rehoboth/INC/global.php');
$db = new Database('MY', HOST, PORT, DATA, USER, PASS);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>rehoboth</title>

    <!-- JQUERY and AJAX -->
    <script src="../rehoboth/JS/jquery-3.5.1.min.js"></script>
    <script src="js/biblechapter.js"></script>
    <script src="js/bibleverses.js"></script>

    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  
    <!--MY CSS-->
    <link rel="stylesheet" href="style.css">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    
    


</head>

<body class="container" style="background-color:#557174">


<div class="nav justify-content-end">
    <nav class="navbar navbar-expand-md">
        <a href="https://www.facebook.com/rehobothgp" class="navbar-brand">
            <img src="images/face.jpeg" height="35" alt="avatar" class="avatar">
        </a>
        <a href="https://www.instagram.com/rehobothgp/" class="navbar-brand">
            <img src="images/insta.jpeg" height="35" alt="avatar" class="avatar">
        </a>
        <a href="https://twitter.com/rehobothgp" class="navbar-brand">
            <img src="images/tweet.png" height="35" alt="avatar" class="avatar">
        </a>
        <a href="seconnecter.php" class="navbar-brand">
            <img src="images/person.png" height="35" alt="avatar" class="avatar">
        </a>
        
        <a href="#" class="navbar-brand">
            <img src="images/online.jpg" height="35" alt="avatar" class="avatar">
        </a>
        <form class="d-flex">
            <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </nav>
</div>

<div class="bs-example" style="background-color:#9DAD74">
    <nav class="nav">
            <li class="nav-item"><a href="accueil.php"><img class="logo-img" src="images/logobar.jpeg" alt="logo" width="50" height="60" alt="Rehoboth"></a></li>
            <li class="nav-item"><a href="accueil.php" class="nav-link" style="color: white; text-align: right; font-size: 25px">HOME</a></li>
            <li class="nav-item"><a href="labible.php" class="nav-link" style="color:white; text-align:right; font-size:25px"><b>BIBLE</b></a></li>
            <li class="nav-item"><a href="boutiques.php" class="nav-link" style="color:white; text-align:right; font-size:25px">SHOP</a></li>
            <li class="nav-item"><a href="team.php" class="nav-link" style="color:white; text-align:right; font-size:25px">OUR TEAM</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link" style="color:white; text-align:right; font-size:25px">CONTACT</a></li>
            <span style="display:<?php echo ($is_in ? 'none' : ''); ?>">
                <li data-target="#register" class="nav-item">
                    <a href="seconnecter.php" class="nav-link" style="color:white; text-align:right; font-size:25px">SE CONNECTER</a>
                </li>
            </span>
            <li class="nav-item"><a href="logout.php" class="btn btn-warning" style="display:<?php echo (!$is_in?'none':''); ?>">Déconnexion</a></li>
            
    </nav>
</div>

<aside>
    <br><br>
        <a href="dd.php" class="nav-link" style="color:white; text-align:center; font-size:25px">DAILY DECLARATIONS</a>
        <img src="images/dd.jpeg" width="80%" height="100%" alt="logo" class="center">
    <br>
        <a href="newspaper.php" class="nav-link" style="color:white; text-align:center; font-size:25px">OUR NEWSPAPER</a>
        <img src="images/news.jpeg" width="80%" height="100%" alt="logo" class="center">
    <br>
        <a href="contact.php" class="nav-link" style="color:white; text-align:center; font-size:25px">CONTACT US</a>
        <img src="images/visiting.jpeg" width="80%" height="100%" alt="logo" class="center">
</aside>

<div class="bs-example" style="background-color:#9DAD74">
    <a href="#" class="nav-link active" style="color:white; text-align:center; font-size:35px">WORD OF THE DAY</a>
</div>
<br><br>
<div style="background:#C7CFB7 !important" class="jumbotron">
    <p style="text-align:center; font-size:30px">I can do all things through him who gives me strength</p>
    <p style="text-align:center; font-size:20px">Philippians 4 : 13</p>
</div>

<br><br>

<div class="bs-example" style="background-color:#9DAD74">
    <a href="#" class="nav-link active" style="color:white; text-align:center; font-size:35px">The BIBLE</a>
</div>
<br>
<form>

<br>

<div class="form-row">
    <div class="form-group col-md-12">
        <label for='rehoboth.r_booknames' style="text-align:center; font-size:30px; background:#C7CFB7 !important" id="inputState" class="form-control">Please select a bookname</label>
            <select class="form-control" id="booknames" name="booknames">
                <option selected="" disabled="">Select bookname</option>
                    <?php
                        require 'data.php';
                        $books = loadbooks();
                        foreach($books as $books) {
                            echo "<option id='".$books['id_booknames']."' value='".$books['id_booknames']."'>".$books['bookname']."</option>";
                        }
                    ?>
            </select>
    
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">   
        <label for="chapter_pkey" style="text-align:center; font-size:20px; background:#C7CFB7 !important" id="inputState" class="form-control">Please select the chapter</label>
            <select class="form-control" id="r_chapter" name="r_chapter">
                <option selected="" disabled="">Select chapter</option>
                    <?php
                        require 'data.php';
                        $r_chapter = loadchapter();
                        foreach($r_chapter as $r_chapter) {
                            echo "<option id='".$r_chapter['chapter_pkey']."' value='".$r_chapter['chapter_pkey']."'>".$r_chapter['chaptername']."</option>";
                        }
                    ?>
            </select>
    </div>                
</div>

<div class="form-row">
    <div class="form-group col-md-12">   
        <label for="verses_pkey" style="text-align:center; font-size:20px; background:#C7CFB7 !important" id="inputState" class="form-control">Please select the verses</label>
            <select class="form-control" id="r_verses" name="r_verses">
                <option selected="" disabled="">Select Verses</option>
                    <?php
                        require 'data.php';
                        $r_verses = loadverses();
                        foreach($r_verses as $r_verses) {
                            echo "<option id='".$r_verses['verses_pkey']."' value='".$r_verses['verses_pkey']."'>".$r_verses['id_verses']."</option>";
                                            }
                    ?>
                            
            </select>
    </div>
</div>


    
  
  <div class="form-group row">
    <input type="submit" value="SEARCH" style="width: 60%; margin-left:25%; margin-right:25%;" class="btn btn-success btn-lg btn-block">

    </div>

  <br>

  <div style="background:#C7CFB7 !important" class="jumbotron">
    <p style="text-align:center; font-size:30px">I can do all things through him who gives me strength</p>
</div>
</form>






<!-- code bootstrap js -->

<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> -->
<!-- <script src="js/bible.js"></script> -->
</body>

</html>
