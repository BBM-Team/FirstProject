<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>Library System</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i"
    />
  </head>

  <body
    style="
      background: linear-gradient(
          rgba(47, 23, 15, 0.65),
          rgba(47, 23, 15, 0.65)
        ),
        url('assets/img/pexels-skitterphoto-442420.jpg') center / cover no-repeat;
    "
  >
    <h1 class="text-center text-white d-none d-lg-block site-heading">
      <span class="text-primary site-heading-upper mb-3"
        >BBM Library</span
      ><span class="site-heading-lower">Library System</span>
    </h1>
    <nav
      class="navbar navbar-light navbar-expand-lg bg-dark py-lg-4"
      id="mainNav"
    >
      <div class="container">
        <a class="navbar-brand text-uppercase d-lg-none text-expanded" href="#"
          >Library System</a
        ><button
          data-toggle="collapse"
          data-target="#navbarResponsive"
          class="navbar-toggler"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" >
          <ul class="nav navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="Home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Availiable.php">Availiable Books</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Reserve.php">Reserve a Book</a>
            </li>
            <?php
              if (isset($_SESSION["email"])) {
                echo "<li class='nav-item'><a class='nav-link' href='profile.php'>Profile</a></li>";
                echo "<li class='nav-item'><a class='nav-link' href='assets/Logout.inc.php'>Log out</a></li>";
              }
              else {
                echo "<li class='nav-item'><a class='nav-link' href='Login.php'>Login</a></li>";
                echo "<li class='nav-item'><a class='nav-link' href='Admin.php'>Admin</a></li>";
              }
             ?>

          </ul>
        </div>
      </div>
  </nav>
