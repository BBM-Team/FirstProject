<?php
  include 'header.php';
  include 'signup.php';
 ?>

    <section class="page-section clearfix">
      <div class="container-fluid container-fill-height">
        <div class="container-content-middle">
          <form
            action="assets/login.inc.php"
            method="post"
            role="form"
            class="mx-auto text-center p-5"
            style="
              background-color: rgba(47, 23, 15, 0.9);
              max-width: 400px;
              margin: 60px auto;
            "
          >
            <div class="form-group">
              <input
                name="email"
                type="text"
                class="form-control"
                placeholder="Email"
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
              <button name="submit" type="submit" class="btn btn-primary">
                Log In
              </button>
              <a data-toggle="modal" href="#signupModal"
                ><button class="btn btn-light">Sign up</button></a
              >
            </div>
            <?php
              if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                  echo "<p>Fill in all fields!</p>";
                }
                elseif ($_GET["error"] == "invalidemail") {
                echo "<p> <font color ='red'> Enter proper email!</p>";
                }
                elseif ($_GET["error"] == "pwddontmatch") {
                echo "<p> <font color ='red'> Password does not match!</p>";
                }
                elseif ($_GET["error"] == "stmtfailed") {
                echo "<p> <font color ='red'> Something went wrong try again!</p>";
                }
                elseif ($_GET["error"] == "emailtaken") {
                echo "<p> <font color ='red'> Email Taken!</p>";
                }
                elseif ($_GET["error"] == "wrongemail") {
                echo "<p><font color ='red'> Invalid Login!</p>";
                }
                elseif ($_GET["error"] == "wrongpwd") {
                echo "<p> <font color ='red'> Invalid Login!</p>";
                }
                elseif ($_GET["error"] == "none") {
                echo "<p>Sign up Successful!</p>";
                }
              }
             ?>
          </form>
        </div>
      </div>
    </section>

    <?php
      include 'footer.php';
     ?>
