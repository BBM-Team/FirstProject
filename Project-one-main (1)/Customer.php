<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>Customer - Library System</title>
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
  <section class="page-section clearfix">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a
        class="nav-link active"
        id="info-tab"
        data-toggle="tab"
        href="#info"
        role="tab"
        aria-controls="info"
        aria-selected="true"
        >Your Information</a
      >
    </li>

    <li class="nav-item">
      <a
        class="nav-link"
        id="reservations-tab"
        data-toggle="tab"
        href="#reservations"
        role="tab"
        aria-controls="reservations"
        aria-selected="false"
        >Reservations</a
      >
    </li>
  </ul>
  <div class="mb-5">
    <button id="loginButton" type="submit" class="btn btn-primary">
      Log Out
    </button>
  </div>
</section>
<?php
  include 'footer.php';
 ?>
