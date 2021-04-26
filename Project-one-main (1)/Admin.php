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
    <title>Home - Library System</title>
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
      <div class="container-fluid container-fill-height">
        <div class="container-content-middle">
          <form
            role="form"
            action="assets/admin.inc.php"
            method="post"
            class="mx-auto text-center p-5"
            style="
              background-color: rgba(47, 23, 15, 0.9);
              max-width: 400px;
              margin: 60px auto;
            "
          >
            <h3 class="text-light">Enter your admin credentials.</h3>
            <div class="form-group">
              <input
                name="login"
                type="text"
                class="form-control"
                placeholder="Admin Id"
                required
              />
            </div>

            <div class="form-group mb-3">
              <input
                name="password"
                type="password"
                class="form-control"
                placeholder="Password"
                required
              />
            </div>

            <div class="mb-5">
              <button name="loginBtn" type="submit" class="btn btn-primary">
                Log In
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>
    <?php
      include 'footer.php';
     ?>
