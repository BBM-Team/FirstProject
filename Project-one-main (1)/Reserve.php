<?php
include 'header.php';
?>
    <section class="page-section clearfix">
      <div class="container">
        <form
          style="
            padding: 50px;
            background-color: bisque;
            background-color: rgba(47, 23, 15, 0.9);
            color: navajowhite;
          "
          action="assets/reserve.inc.php" method="post"
        >
        <div class="form-group">
          <div class="form-row">
            <label for="inputFname">Please enter your First Name</label>
          </div>
          <div class="form-row">
            <input type="text"  name="name" placeholder="First Name" required/>
          </div>
        </div>
        <div class="form-group">
          <div class="form-row">
            <label for="inputLname">Please enter your Last Name</label>
          </div>
          <div class="form-row">
            <input type="text"  name="nameL" placeholder="Last Name" required/>
          </div>
        </div>
        <div class="form-group">
          <div class="form-row">
            <label for="inputemail">Please enter your Email</label>
          </div>
          <div class="form-row">
            <input type="text"  name="email" placeholder="Email" required/>
          </div>
        </div>
          <div class="form-group">
            <div class="form-row">
              <label for="inputBook">What do you want to read?</label>
              <select id="inputBook" class="form-control font-weight-bold" name ="bookId">
                <option selected>Choose...</option>
                <?php
                 require 'assets/dbh.inc.php';
                 $sql = "SELECT * FROM books;";
                 $data = mysqli_query($conn,$sql);
                 $check = mysqli_num_rows($data) >0;
                 if ($check) {
                   while ($row= mysqli_fetch_array($data)) {
                     ?>
  <option><?php echo $row['bookName'];?> Authour: <?php echo $row['author'];?></option>
                <?php
              }
            }
            else {
              echo "No record found";
            }
            ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <label for="inputDate">Please select a date</label>
            </div>
            <div class="form-row">
<input type="date" id="myDate" name="inputDate" min="2021-04-27" max="2021-05-05" required>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <label for="inputDate">Please select a return date?</label>
            </div>
            <div class="form-row">
<input type="date" id="myDate" name="inputDateA" min="2021-04-27" max="2021-05-05" required>


            </div>
          </div>
          <div class="mb-5">
            <button name="submit" type="submit" class="btn btn-primary">
              Reserve
            </button>
          </div>

        </form>
      </div>
    </section>
    <?php
      include 'footer.php';
     ?>
