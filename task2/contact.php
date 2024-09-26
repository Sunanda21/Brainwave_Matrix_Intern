<?php
  include "lib/config.php";
  include "lib/header.php";

?>

  
  <section id="appointment" class="jarallax"
    style="background-image: url(images/background-1.jpg); background-repeat: no-repeat; background-position: center;">

    <div class="container-lg medium">

      <div class="offset-md-3 col-md-6 text-center ">

        <h2 class="display-4 fw-normal mb-3">Give a Review</h2>
        <p>Call: 867 083 XXXX or Fill in the form below</p>


        <form class="contact-form row mt-5">

          <div class="form-input col-lg-12 d-md-flex mb-3">
            <input type="text" name="name" placeholder="Write Your Name Here"
              class="form-control w-100 rounded-0 border-0 ps-4 py-3 mb-2 me-3" required >
            <input type="text" name="email" placeholder="Write Your Email Here"
              class="form-control w-100 rounded-0 border-0 ps-4 py-3 mb-2" required >
          </div>

          <div class="form-input col-lg-12 d-md-flex mb-3">
            <input type="number" name="phone" placeholder="Contact number"
              class="form-control w-100 rounded-0 border-0 ps-4 py-3 mb-2 me-3" required>
            
          </div>
         

          <div class="col-md-12 col-sm-12 mb-4">
            <textarea type="text" name="message" placeholder="Your message" rows="4"
              class="w-100 border-0 ps-4 py-2  " required></textarea>
          </div>
        </form>

        <button class="btn btn-primary mt-3" href="#">Submit Review</button>
      </div>

    </div>
    </div>
  </section>

 <?php

 include "lib/footer.php";

?>