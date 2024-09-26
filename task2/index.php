<?php
  include "lib/config.php";
  include "lib/header.php";

?>



  <section id="slider">
    <div class="swiper slider ">
      <div class="swiper-wrapper">
        <div class="swiper-slide d-flex jarallax position-relative"
          style="background-image: url(images/bg1.jpg); background-size: cover; background-repeat: no-repeat; height: 90vh; background-position: center; height: 90vh;">
          <div class="banner-content text-center m-auto" data-aos="zoom-out">
            <h2 class="banner-title display-2 fw-normal text-black mb-4">Beauty's Makeover <br> gives <br> Elegance and Confidence 
            </h2>
            <a href="contact.php" class="btn btn-primary mt-3">Give a Review</a>
          </div>
        </div>
        <div class="swiper-slide d-flex jarallax position-relative"
          style="background-image: url(images/bg.jpg); background-size: cover; background-repeat: no-repeat; height: 90vh; background-position: center; height: 90vh;">
          <div class="banner-content text-center m-auto" data-aos="zoom-out">
            <h2 class="banner-title display-2 fw-normal text-black mb-4">Beauty's Makeover <br> gives <br> Elegance and Confidence 
            </h2>
            <a href="contact.php" class="btn btn-primary mt-3">Give a Review</a>
          </div>
        </div>
        <div class="swiper-slide d-flex jarallax position-relative"
          style="background-image: url(images/banner-img1.png); background-size: cover; background-repeat: no-repeat; height: 90vh; background-position: center; height: 90vh;">
          <div class="banner-content text-center m-auto" data-aos="zoom-out">
            <h2 class="banner-title display-2 fw-normal text-black mb-4">Beauty's Makeover <br> gives <br> Elegance and Confidence 
            </h2>
            <a href="contact.php" class="btn btn-primary mt-3">Give a Review</a>
          </div>
        </div>


      </div>
      <div class="position-absolute top-0 bottom-0 end-0 m-auto me-0 me-md-5 main-slider-button-next">
        <svg class="arrow-right light-color" width="60" height="60">
          <use xlink:href="#arrow-right"></use>
        </svg>
      </div>
      <div class="position-absolute top-0 bottom-0 start-0 m-auto ms-0 ms-md-5 main-slider-button-prev">
        <svg class="arrow-left light-color" width="60" height="60">
          <use xlink:href="#arrow-left"></use>
        </svg>
      </div>
    </div>
  </section>

  <section id="categories">
    <div class="container-lg padding-medium">
      <div class="row g-md-5">
        <div class="col-md-3 my-3">
          <div class="text-center">
            <iconify-icon class="service-icon text-primary display-3"
              icon="solar:medal-ribbons-star-outline"></iconify-icon>
            <h3 class="py-2 ">5+ Years of Experience</h3>
            
          </div>
        </div>
        <div class="col-md-3 my-3">
          <div class="text-center">
            <iconify-icon class="service-icon text-primary display-3" icon="ph:plant"></iconify-icon>
            <h3 class="py-2 ">100% natural Products</h3>
            
          </div>
        </div>
        <div class="col-md-3 my-3">
          <div class="text-center">
            <iconify-icon class="service-icon text-primary display-3"
              icon="solar:chat-round-like-broken"></iconify-icon>
            <h3 class="py-2 ">2k+ Satisfied Clients</h3>
            <!-- <p class="blog-paragraph">Lorem ipsum dolor sit amet, consectetur adipi elit. Lorem ipsum dolor sit.</p> -->
          </div>
        </div>
        <div class="col-md-3 my-3">
          <div class="text-center">
            <iconify-icon class="service-icon text-primary display-3" icon="solar:people-nearby-outline"></iconify-icon>
            <h3 class="py-2 ">2+ Specialistis Team</h3>
            <!-- <p class="blog-paragraph">Lorem ipsum dolor sit amet, consectetur adipi elit. Lorem ipsum dolor sit.</p> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="jarallax"
    style="background-image: url(images/background-1.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div class="container-lg padding-medium">
      <div class="section-title text-center mb-5">
        <h2 class="display-4 fw-normal">Courses we Offer</h2>
      </div>

      <div class="row g-lg-5 my-0">

       <?php
        $sql = "SELECT * FROM `courses`";
        $res = $db->query($sql);
        while($row = $res->fetch_object()){

            print'<div class="col-md-6 col-lg-3 my-4">
          <div class="bg-white   p-3 text-center ">
            <a href="services-single.html">
              <div class="zoom-effect">
                <img src="'.$row->images.'" class="img-fluid " alt="image">
              </div>
            </a>
            <a href="Pdetails.php" class="hover-color">
              <h4 class="mt-3 m-0">'.$row->cname.'</h4>
               <h5 class="mt-3 m-0">Rs. '.$row->cprice.'</h5>
                <h5 class="mt-3 m-0">Days :'.$row->cdays.'</h5>
                <a href="Pdetails.php?cid='.$row->cid.'" class="btn btn-primary mt-3">See Details</a>
            </a>
          </div>
        </div>';

        }

        ?>


       

    </div>
    </div>
  </section>

  

  <section id="team">
    <div class="container-lg ">
      <h2 class="display-4 fw-normal text-center mb-5">Our Professionals</h2>
      <div class="row">
        <div class="col-md-6 col-lg-2 my-4 my-lg-0">
          <div class="team-member position-relative">
            <div class="image-holder zoom-effect">
              <img src="images/team3.jpg" alt="team member" class="img-fluid">
              <ul class="social-links list-unstyled position-absolute">
                <li>
                  <a href="#">
                    <svg class="facebook text-white ms-1 mt-1" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#facebook"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg class="twitter text-white ms-1" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#twitter"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg class="instagram text-white ms-1" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#instagram"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg class="linkedin text-white ms-1 mb-1" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#linkedin"></use>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
            <div class="member-info text-center">
              <a href="#" class="hover-color">
                <h4 class="mt-3 m-0">Sophia Anderson</h4>
              </a>
              <p class="m-0">Manager</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 my-4 my-lg-0">
          <div class="team-member position-relative">
            <div class="image-holder zoom-effect">
              <img src="images/team2.jpg" alt="team member" class="img-fluid">
              <ul class="social-links list-unstyled position-absolute">
                <li>
                  <a href="#">
                    <svg class="facebook text-white ms-1 mt-1" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#facebook"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg class="twitter text-white ms-1" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#twitter"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg class="instagram text-white ms-1" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#instagram"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg class="linkedin text-white ms-1 mb-1" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#linkedin"></use>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
            <div class="member-info text-center">

              <a href="#" class="hover-color">
                <h4 class="mt-3 m-0">Sophia Gill</h4>
              </a>
              <p class="m-0">Pedicure Expert</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 my-4 my-lg-0">
          <div class="team-member position-relative">
            <div class="image-holder zoom-effect">
              <img src="images/team6.jpg" alt="team member" class="img-fluid">
              <ul class="social-links list-unstyled position-absolute">
                <li>
                  <a href="#">
                    <svg class="facebook text-white ms-1 mt-1" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#facebook"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg class="twitter text-white ms-1" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#twitter"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg class="instagram text-white ms-1" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#instagram"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg class="linkedin text-white ms-1 mb-1" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#linkedin"></use>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
            <div class="member-info text-center ">
              <a href="#" class="hover-color">
                <h4 class="mt-3 m-0">Anna Smith</h4>
              </a>
              <p class="m-0">Manicure Expert</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 my-4 my-lg-0">
          <div class="team-member position-relative">
            <div class="image-holder zoom-effect">
              <img src="images/team1.jpg" alt="team member" class="img-fluid">
              <ul class="social-links list-unstyled position-absolute">
                <li>
                  <a href="#">
                    <svg class="facebook text-white ms-1 mt-1" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#facebook"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg class="twitter text-white ms-1" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#twitter"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg class="instagram text-white ms-1" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#instagram"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg class="linkedin text-white ms-1 mb-1" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#linkedin"></use>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
            <div class="member-info text-center ">

              <a href="#" class="hover-color">
                <h4 class="mt-3 m-0">Keth Jenner</h4>
              </a>
              <p class="m-0">Nail Artist</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 my-4 my-lg-0">
          <div class="team-member position-relative">
            <div class="image-holder zoom-effect">
              <img src="images/team5.jpg" alt="team member" class="img-fluid">
              <ul class="social-links list-unstyled position-absolute">
                <li>
                  <a href="#">
                    <svg class="facebook text-white ms-1 mt-1" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#facebook"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg class="twitter text-white ms-1" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#twitter"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg class="instagram text-white ms-1" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#instagram"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg class="linkedin text-white ms-1 mb-1" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#linkedin"></use>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
            <div class="member-info text-center">

              <a href="#" class="hover-color">
                <h4 class="mt-3 m-0">Anna Will</h4>
              </a>
              <p class="m-0">Senior Stylist</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 my-4 my-lg-0">
          <div class="team-member position-relative">
            <div class="image-holder zoom-effect">
              <img src="images/team4.jpg" alt="team member" class="img-fluid">
              <ul class="social-links list-unstyled position-absolute">
                <li>
                  <a href="#">
                    <svg class="facebook text-white ms-1 mt-1" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#facebook"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg class="twitter text-white ms-1" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#twitter"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg class="instagram text-white ms-1" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#instagram"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg class="linkedin text-white ms-1 mb-1" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#linkedin"></use>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
            <div class="member-info text-center">
              <a href="#" class="hover-color">
                <h4 class="mt-3 m-0">Jenny Tom</h4>
              </a>
              <p class="m-0">Nail Specialistis</p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  

  <section id="price" class="jarallax"
    style="background-image: url(images/background-2.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div class="container-lg padding-medium">
      <div class="section-title text-center mb-5">
        <h2 class="display-4 fw-normal">Services we Offer</h2>
      </div>
<div class="row g-md-5 my-0">

         <div class="col-md-6 my-4">
          <div class="bg-white p-2 p-lg-5">
            <div class="list-group rounded-0">

          <?php

              $sql = "SELECT * FROM `services` LIMIT 0,3";
              $res = $db->query($sql);
              while($row = $res->fetch_object()){

        print '
              
              <a href="#"
                class="border-0 list-group-item list-group-item-action d-lg-flex align-items-center gap-4 py-3"
                aria-current="true">
                <img src="'.$row->images.'" alt="twbs" width="100" height="100"
                  class="rounded-circle flex-shrink-0 mb-4">
                <div>
                  <div class="d-flex gap-4 w-100 justify-content-between">
                    <h4 class="fw-semibold">'.$row->sname.'</h3>
                      <h4 class="fw-semibold">Rs. '.$row->sprice.'</h4>
                  </div>
                  <p class="mb-0 opacity-75">'.$row->details.'</p>
                  <p class="mb-0 opacity-75"><b>Duration : '.$row->stime.' hours (max).</b></p>
                </div>
              </a>
              
              
            ';


}

?>

      </div>
        </div>
        </div> 



         <div class="col-md-6 my-4">
          <div class="bg-white p-2 p-md-5">
            <div class="list-group rounded-0">

<?php

              $sql = "SELECT * FROM `services` LIMIT 3,3";
              $res = $db->query($sql);
              while($row = $res->fetch_object()){

        print' 
              
              
              
              <a href="#"
                class="border-0 list-group-item list-group-item-action d-lg-flex align-items-center gap-4 py-3"
                aria-current="true">
                <img src="'.$row->images.'" alt="twbs" width="100" height="100"
                  class="rounded-circle flex-shrink-0 mb-4">
                <div>
                  <div class="d-flex gap-4 w-100 justify-content-between">
                    <h4 class="fw-semibold">'.$row->sname.'</h3>
                      <h4 class="fw-semibold">Rs. '.$row->sprice.'</h4>
                  </div>
                  <p class="mb-0 opacity-75">'.$row->details.'</p>
                  <p class="mb-0 opacity-75"><b>Duration : '.$row->stime.' hours (max).</b></p>

                                   </div>
              </a>
            ' ;

}

?>

 </div>
          </div>
        </div>


      </div>
    </div>
    </div>
  </section>



  <section id="testimonial" class="jarallax"
    style="background-image: url(images/testimonial-bg.jpg); background-repeat: no-repeat; background-position: center;">
    <div class="container-lg padding-medium">
       <div class="section-title text-center mb-5">
        <h2 class="display-4 fw-normal">Client Reviews</h2>
      </div>
      <div class="offset-md-2 col-md-8 ">
        <div class="swiper testimonial-swiper py-3 py-md-5 bg-white   shadow-sm">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="review px-md-5">
                <div class="review-content px-5 d-lg-flex align-items-center ">
                  <img src="images/reviewer3.jpg" alt="reviewer" class="img-fluid rounded-circle">
                  <div class="ms-md-4 mt-3 mt-lg-0">
                    <p>“Pretium turpis faucibus adipiscing duis. Id quis tristique mi vitae nec. In et in praesent
                      pellentesque. Porta sit porta ridiculus faucibus. Curabitur lacus pretium pellentesque interdum
                      urna blandit.”</p>
                    <h2 class="name m-0 lh-sm">Jenny Will</h3>
                      <p class="m-0">Hanay mom</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="review px-md-5">
                <div class="review-content px-5 d-lg-flex align-items-center ">
                  <img src="images/reviewer1.jpg" alt="reviewer" class="img-fluid rounded-circle">
                  <div class="ms-md-4 mt-3 mt-lg-0">
                    <p>“Pretium turpis faucibus adipiscing duis. Id quis tristique mi vitae nec. In et in praesent
                      pellentesque. Porta sit porta ridiculus faucibus. Curabitur lacus pretium pellentesque interdum
                      urna blandit.”</p>
                    <h2 class="name m-0 lh-sm">Emily Smith</h3>
                      <p class="m-0">Serene mom</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="review px-md-5">
                <div class="review-content px-5 d-lg-flex align-items-center ">
                  <img src="images/reviewer2.jpg" alt="reviewer" class="img-fluid rounded-circle">
                  <div class="ms-md-4 mt-3 mt-lg-0">
                    <p>“Pretium turpis faucibus adipiscing duis. Id quis tristique mi vitae nec. In et in praesent
                      pellentesque. Porta sit porta ridiculus faucibus. Curabitur lacus pretium pellentesque interdum
                      urna blandit.”</p>
                    <h2 class="name m-0 lh-sm">Noran Shara</h3>
                      <p class="m-0">Sam mom</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination position-relative pt-4 pt-md-5"></div>
        </div>
      </div>

    </div>
    </div>
  </section>



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