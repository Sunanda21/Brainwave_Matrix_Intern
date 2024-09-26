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

              		$pid = $_GET['cid'];
			        $sql = "SELECT * FROM `courses` WHERE `cid` = '$pid'";
			        $res = $db->query($sql);
			        while($row = $res->fetch_object()){

            		print '	 <form method ="post" action ="add.php">

                    <input type="hidden" name ="cid" value="'.$row->cid.'">
                    <h2 class="display-4 fw-normal mb-3 text-capitalize">'.$row->cname.'</h2>
			          </div>
			          <p>'.$row->details.'.</p>
			          <ul>
			            <li>PRICE : Rs. '.$row->cprice.'</li>
			            <hr>
			            <li>Duration : '.$row->cdays.' Days</li>
			            <hr>
			            <li>You will get CERTIFICATES after completion of the '.$row->cname.'.</li>
			          </ul>
			          <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To
                            Cart</button>
			        </div>

			        </form>
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