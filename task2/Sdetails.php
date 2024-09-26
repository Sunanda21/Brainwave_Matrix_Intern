<?php
	include "lib/config.php";
	include "lib/header.php";
?>


<section id="about-us">
    <div class="container-lg medium">
      <div class="row flex-row-reverse align-items-center g-md-5">
      	 <div class="col-md-6 mt-5 mt-md-0">
          <div class="section-title">
          	<?php

              		$sid = $_GET['sid'];
			        $sql = "SELECT * FROM `services` WHERE `sid` = '$sid'";
			        $res = $db->query($sql);
			        while($row = $res->fetch_object()){

            		print '	<h2 class="display-4 fw-normal mb-3 text-capitalize">'.$row->sname.'</h2>
			          </div>
			          <p>'.$row->details.'.</p>
			          <ul>
			            <li>PRICE : Rs. '.$row->sprice.'</li>
			            <hr>
			            <li>Duration : '.$row->stime.' hours</li>
			            <hr>
			            <li>100% satisfaction of the customer is provided.</li>
			          </ul>
			          <a class="btn btn-primary mt-3" href="checkout.php">Book Now</a>
			        </div>
			        <div class="col-md-6">
			          <div class="video my-5">
			            <div class="video-content position-relative open-up">
			              <div class="video-bg "> ';
              	

			        	print' <img src="'.$row->images.'" alt="video" class="video-image img-fluid">';

			        }


			        ?>

               
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


<?php

	include "lib/footer.php";

?>