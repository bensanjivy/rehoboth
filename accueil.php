<?php 
//Test si connecté
session_start();
$is_in=false;
if (isset($_SESSION['connected']) && $_SESSION['connected'] === true) {
    $is_in = true;
}

//IMPORTS
include_once('inc/constants.inc.php');
include_once('inc/team.inc.php');
include_once('inc/dbconnect.inc.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>rehoboth</title>

    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
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
            <li class="nav-item"><a href="accueil.php"><img class="logo-img" src="images/logobar.jpeg" alt="logo" width="60" height="70" alt="Rehoboth"></a></li>
            <li class="nav-item"><a href="accueil.php" class="nav-link" style="color: white; text-align: right; font-size: 25px"><b>HOME</b></a></li>
            <li class="nav-item"><a href="labible.php" class="nav-link" style="color:white; text-align:right; font-size:25px">BIBLE</a></li>
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
    <br>
        <a href="dd.php" class="nav-link" style="color:white; text-align:center; font-size:25px">DAILY DECLARATIONS</a>
        <img src="images/dd.jpeg" width="80%" height="100%" alt="logo" class="center">
    <br><br>

    <a href="#" class="nav-link" style="color:white; text-align:center; font-size:25px">FIND US IN</a>
        <img src="images/find.jpeg" width="80%" height="100%" alt="logo" class="center">
        <br>
        <ul class="social-menu">
                <a href="https://www.facebook.com/rehobothgp" class="navbar-brand">
                <img src="images/face.jpeg" height="30" alt="avatar" class="avatar">
                </a>
            
                <a href="https://www.instagram.com/rehobothgp/" class="navbar-brand">
                <img src="images/insta.jpeg" height="30" alt="avatar" class="avatar">
                </a>
            
                <a href="https://twitter.com/rehobothgp" class="navbar-brand">
                <img src="images/tweet.png" height="30" alt="avatar" class="avatar">
                </a>
           
                <a href="https://www.linkedin.com/in/rehoboth-gp-162a461b3/" class="navbar-brand">
                <img src="images/linkedin.png" height="30" alt="avatar" class="avatar">
                </a>
            
                <a href="https://www.tumblr.com/blog/rehobothpromise" class="navbar-brand">
                <img src="images/tumblr.png" height="30" alt="avatar" class="avatar">
                </a>
        </ul>
    <br>
        <a href="newspaper.php" class="nav-link" style="color:white; text-align:center; font-size:25px">OUR NEWSPAPER</a>
        <img src="images/news.jpeg" width="80%" height="100%" alt="logo" class="center">
    <br><br>
        <a href="contact.php" class="nav-link" style="color:white; text-align:center; font-size:25px">CONTACT US</a>
        <img src="images/visiting.jpeg" width="80%" height="100%" alt="logo" class="center">
    <br><br>
        
</aside>

<div class="hero-image">
  <div class="hero-text">
    <h1 class="p1" style="font-size:70px">REHOBOTH</h1>
    <p class="p2" style="font-size:25px">Be FRUITFUL in the Land</p>
  </div>
</div>




<div style="background:#C7CFB7 !important" class="jumbotron" width="70" height="200">
  <h1 class="display-5" style="text-align:center">WELCOME to our internet site!</h1>
  <p class="lead" style="text-align:center; font-size:30px">REHOBOTH [Rechobowth en hébreu (rekh-o-both)]</p>
  <hr class="my-4">
  <p style="text-align:center; font-size:24px">When people quarreled and unjustly took away the wells that Isaac dug, he never quarreled back. 
                                               He continued to dig the wells and GOD blessed him with a well of fresh water and he named it  </p>
  <p class="display-4" style="text-align:center">REHOBOTH</p>
  <p style="text-align:center; font-size:24px">and he said,<br> "The LORD has given us room and we will flourish in the land."</p>

</div>

<div class="bs-example" style="background-color:#9DAD74">
    <a href="#" class="nav-link active" style="color:white; text-align:center; font-size:25px">ABOUT US</a>
</div>

    <div style="background:#C7CFB7 !important" class="jumbotron">
        <p style="text-align:center; font-size:22px">Rehoboth is all about a group of believers, believing and spreading God’s love and promises. 
                                                    A group of simple promises from the eternal love. Daily declarations, quotes and many more to spread his love through his grace. 
                                                    It is a group effort to sharpen one another, as iron sharpens iron, so one person sharpens another and not an individual effort.
                                                    We also sell Bibles, Bible books and Bible accessories. </p>

        <!-- <div class="form-group row">
        <button type="button" style="width: 60%; margin-left:25%; margin-right:25%;" class="btn btn-success btn-lg btn-block">
            <a href="learnmore.php" class="nav-link" style="color:white; text-align:right; font-size:25px"></a>LEARN MORE ABOUT US
        </button>                                           
        </div> -->
        <div class="form-group row">
        <div class="alert alert-success" role="alert" style="width: 20%; margin-left:40%; margin-right:40%;">
        <a href="learnmore.php" class="alert-link" style="color:black; text-align:center; font-size:15px">LEARN MORE</a>
        </div>
        </div>

    </div>

<br>




<!-- code bootstrap js -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> -->

</body>

</html>
