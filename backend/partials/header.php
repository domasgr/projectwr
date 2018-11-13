<?php
//if(iss)
session_start()
?>
<!DOCTYPE html>
<html>
<head>
    <title>Projects</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="gallery.css">
</head>
<body>
<nav id="navigation" class="navbar navbar-expand-sm navbar-dark fixed-top py-0">
    <a class="navbar-brand" href="#"><img class="nav-icon" src="../images/icon.png">   Projects gallery</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navLinks">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navLinks">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="../frontend/main.php" class="nav-link scroll">Home</a></li>
            <li class="nav-item"><a href="/backend/gallery.php" class="nav-link scroll">Gallery</a></li>
        </ul>
        <ul class="navbar-nav">
            <?php if(isset($_SESSION['id'])){
            echo '<li class="nav-item"><a href="/backend/newform.php" class="nav-link scroll">Add new</a></li>';
            }?>
            <!-- <li class="nav-item"><a href="#third" class="nav-link scroll">ABOUT</a></li>
            <li class="nav-item"><a href="#fourth" class="nav-link scroll">CONTACT</a></li> -->
        </ul>
        <ul class="navbar-nav">
            <?php if(isset($_SESSION['id'])){
                echo "<li class='nav-item'><a href='#' class='nav-link welcome' data-toggle='tooltip' data-placement='bottom' title='Admin options available'>Welcome back, Admin</a></li>";
            }?>
            <?php if(isset($_SESSION['id'])){
            echo "<li class='nav-item'><a href='/backend/logout.php' class='nav-link scroll'>Log out</a></li>";
            } else{ echo "<li class='nav-item'><a href='/backend/login.php' class='nav-link scroll'>Log in</a></li>";}?>
        </ul>
    </div>
</nav>