  <?php
  include 'header.php';
  ?>
 <link rel="stylesheet" type="text/css" href="assets/style.css"/>
  <div class="container py-5" >
    <div class="row mt-4">

      <?php
       require 'assets/dbh.inc.php';
       $sql = "SELECT * FROM books;";
       $data = mysqli_query($conn,$sql);
       $check = mysqli_num_rows($data) >0;
       if ($check) {
         while ($row= mysqli_fetch_array($data)) {
           ?>
           <div class="col-md-4">
             <div class="card">

               <img src="<?php echo $row['imageURL']; ?>"  height="300px" alt="imageURL">

               <div class="card-body">
                 <h5 class="card-title"> <?php echo $row['bookName']; ?></h5>
                 <p class="card-text">
                   Authour: <?php echo $row['author']; ?>
                   <br><?php echo $row['description']; ?>
                 </p>
               </div>
             </div>
             </div>
           <?php

         }
       }
       else {
         echo "No record found";
       }
       ?>

  </div>
</div>

  <?php
  include 'footer.php';
  ?>
