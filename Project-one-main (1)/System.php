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
    <title>Admin - Library System</title>
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

  <body style="background: #5a5751">
    <!-- MODALS -->
    <!-- NEW CUSTOMER -->
    <div
      class="modal fade"
      id="userModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="userModal"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">NEW CUSTOMER</h4>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-hidden="true"
            >
              &times;
            </button>
          </div>
          <div class="modal-body">
            <div class="modal-body-scroller">
              <div class="container-content-middle">
                <form action="assets/add.inc.php" method="post" role="form" class="mx-auto text-center signup-form">
                  <div class="form-group">
                    <input
                    type="text"
                    id="firstName"
                    name= "name"
                    class="form-control"
                    placeholder="First Name"
                    required
                    />
                  </div>
                  <div class="form-group">
                    <input
                    type="text"
                    id="lastName"
                    name= "nameL"
                    class="form-control"
                    placeholder="Last Name"
                    required
                    />
                  </div>
                  <div class="form-group">
                    <input
                    type="text"
                    id="email"
                    name= "email"
                    class="form-control"
                    placeholder="Email"
                    required
                    />
                  </div>
                  <div class="form-group">
                    <input
                    type="password"
                    id="password"
                    name= "password"
                    class="form-control"
                    placeholder="Password"
                    required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <input
                    type="password"
                     id="c_password"
                    name= "passwordc"
                    class="form-control"
                    placeholder="Confirm Password"
                    required
                    />
                  </div>

                  <div class="mb-5">
                    <button
                    type="submit"
                    id="newCustomerButton"
                    name="submit"
                    class="btn btn-secondary"
                    >
                      Add Customer
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- NEW BOOK -->
    <div
      class="modal fade"
      id="bookModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="bookModal"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">NEW BOOK</h4>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-hidden="true"
            >
              &times;
            </button>
          </div>
          <div class="modal-body">
            <div class="modal-body-scroller">
              <div class="container-content-middle">
                <form action="assets/books.inc.php" method="post"role="form" class="mx-auto text-center">
                  <div class="form-group">
                    <div class="form-row">
                      <label for="inputBook">Name</label>
                      <input
                      name="nameB"
                      id="inputBook"
                      class="form-control"
                      placeholder="Book Name"
                      required
                    />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                        <label for="inputAuthor">Name</label>
                        <input
                        name="author"
                        id="inputAuthor"
                        class="form-control"
                        placeholder="Book Author"
                        required
                      />
                    </div>
					</div>
					<div class="form-group">
                    <div class="form-row">
                        <label for="inputDescribe">Book Description</label>
                        <input
                        name="description"
                        id="inputDescribe"
                        class="form-control"
                        placeholder="Book Description"
                        required
                      />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                        <label for="inputImg">Image URL</label>
                        <input
                        name="image"
                        id="inputImg"
                        class="form-control"
                        placeholder="Image URL"
                        required
                      />
                    </div>
                  </div>


                  <button
                    name="submitB"
                    id="newBookingButton"
                    type="submit"
                    class="btn btn-primary"
                  >
                    Add Book
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- RESERVATION -->
    <div
      class="modal fade"
      id="reserveModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="reserveModal"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">NEW RESERVATION</h4>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-hidden="true"
            >
              &times;
            </button>
          </div>
          <div class="modal-body">
            <div class="modal-body-scroller">
              <div class="container-content-middle">
                <form action="assets/addR.inc.php" method="post"role="form" class="mx-auto text-center signup-form">
                  <div class="form-group">
				    <div class="form-group">
                      <input
                        name="emailR"
                        class="form-control"
                        placeholder="Customer Email"
                        required
                      />
                    </div>
					<div class="form-group">
            <select id="inputBook" class="form-control font-weight-bold" name ="bookId">
              <option selected>Book Title</option>
              <?php
               require 'assets/dbh.inc.php';
               $sql = "SELECT * FROM books;";
               $data = mysqli_query($conn,$sql);
               $check = mysqli_num_rows($data) >0;
               if ($check) {
                 while ($row= mysqli_fetch_array($data)) {
                   ?>
          <option><?php echo $row['bookName'];?></option>
              <?php
            }
          }
          else {
            echo "No record found";
          }
          ?>
            </select>
                    </div>

                    <div class="form-group">
                      <input
                      type="text"
                      name= "nameR"
                      class="form-control"
                      placeholder="First Name"
                      required
                      />
                    </div>
                    <div class="form-group">
                      <input
                      type="text"
                      name= "nameLR"
                      class="form-control"
                      placeholder="Last Name"
                      required
                      />
                    </div>
					<div class="form-group">
						<div class="form-row">
						<label for="inputDate">Please select a date?</label>
					</div>
          <div class="form-row">
<input type="date" id="myDate" name="inputDate" min="2021-04-27" max="2021-05-05">
          </div>
        </div>

        <div class="form-group">
          <div class="form-row">
            <label for="inputDate">Please select a return date?</label>
          </div>
          <div class="form-row">
<input type="date" id="myDate" name="inputDateA" min="2021-04-27" max="2021-05-05">
          </div>
        </div>
                  </div>

                  <div class="mb-5">
                    <button
                    type="submit"
                    name="submitR"
                    class="btn btn-secondary"
                    >
                      Add Reservation
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="page-section clearfix">
      <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a
              class="nav-link active"
              id="books-tab"
              data-toggle="tab"
              href="#books"
              role="tab"
              aria-controls="books"
              aria-selected="true"
              >Books</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="customers-tab"
              data-toggle="tab"
              href="#customers"
              role="tab"
              aria-controls="customers"
              aria-selected="false"
              >Customers</a
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
          <?php
            if (isset($_SESSION["adminId"])) {
              echo "<li class='nav-item'><a class='nav-link' href='assets/Logout.inc.php'>Log out</a></li>";
            }

           ?>

        </ul>
        <div
          class="tab-content"
          id="myTabContent"
          style="background-color: white; padding: 20px"
        >
          <div
            class="tab-pane fade show active"
            id="books"
            role="tabpanel"
            aria-labelledby="books-tab"
          >
            <a data-toggle="modal" href="#bookModal"
              ><button
                id="newBookButton"
                type="button"
                class="btn btn-primary mb-2"
              >
                New Book
              </button></a
            >

            <?php
            include 'assets/tableBooks.inc.php';
             ?>
          </div>

          <div
            class="tab-pane fade"
            id="customers"
            role="tabpanel"
            aria-labelledby="customers-tab"
          >
            <a data-toggle="modal" href="#userModal"
              ><button type="button" class="btn btn-primary mb-2">
                New Customer
              </button></a
            >
            <?php
            include 'assets/tableCustomers.inc.php';
             ?>

          </div>
          <div
            class="tab-pane fade"
            id="reservations"
            role="tabpanel"
            aria-labelledby="reserve-tab"
          >
            <a data-toggle="modal" href="#reserveModal"
              ><button type="button" class="btn btn-primary mb-2">
                New Reservation
              </button></a
            >
            <?php
            include 'assets/tableReservations.inc.php';
             ?>

          </div>
        </div>
      </div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>
