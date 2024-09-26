<?php
include "lib/config.php";
include "lib/header.php";

// We will receive pid and quantity in add.php page, from product_details.php page when clicked on add to cart.
?>



<!-- Breadcrumb Start -->
<!-- <div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <a class="breadcrumb-item text-dark" href="#">Shop</a>
                <span class="breadcrumb-item active">Shopping Cart</span>
            </nav>
        </div>
    </div>
</div> -->
<!-- Breadcrumb End -->

<?php
if (isset($_SESSION['mycart'])) {
    $cart = $_SESSION['mycart'];
} else {
    $cart = [];
}

if (isset($_POST['cid'])) {
    $cid = $_POST['cid'];
    $quantity = 1;
    // Check if the product ID exists in the cart array
    if (isset($cart[$cid])) {
                $cart[$cid] += $quantity;
    } else {
        // If it doesn't exist, initialize it with the given quantity
        $cart[$cid] = $quantity;
    }
}


// for updating the quantity using the update button.

if (isset($_POST['newcart'])) {
    $cart = $_POST['newcart'];
}

$_SESSION['mycart'] = $cart;
$total = 0;

if (empty($cart)) {
    echo '<center>
            <div style="position:relative ; width: 30%" align="center">
                    <h1> YOUR CART IS EMPTY </h1>
                 <a href="index.php"><button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Continue shopping</button></a> 
            </div>
          </center>';
} else {
    echo '
    <form method="post" action="">
        <!-- Cart Start -->
        <div class="container-lg medium" style="padding: 40px;">
        <div class="container-fluid">
            <div class="row px-xl-5">
                <div class="col-lg-8 table-responsive mb-5">
                    <table class="table table-light table-borderless table-hover text-center mb-0">
                        <thead class="thead-dark">
                            <tr>
                                <th>SL No.</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Remove</th>
                                <th>SubTotal</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">';

    $c = 0;

    foreach ($cart as $cid => $quantity) {
        $sql = "SELECT * FROM `courses` WHERE `cid` = '$cid'";
        $res = $db->query($sql);
        $row = $res->fetch_object();

        $sum = $row->cprice * $quantity;
        $c++;

        echo '
        <tr>
            <td class="align-middle">' . $c . '</td>
            <td class="align-middle"><img src="' . $row->images . '" alt="" style="width: 50px;"></td>
            <td class="align-middle">' . $row->cname . '</td>
            <td class="align-middle">&#8377 ' . $row->cprice . '</td>
            <td class="align-middle">
                <div class="input-group quantity mx-auto" style="width:60%">
                    
                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="' .$quantity . '" name="newcart[' . $cid . ']">
                    
                </div>
            </td>
            <td class="align-middle"><a href="removecourse.php?cid=' .$cid. '"><button style="color:red;" type="button">X<i class="fa fa-times"></i></button></a></td>
            <td class="align-middle">&#8377 ' . $sum . '</td>
            
        </tr>';

        $total += $sum;
    }

    

    echo '
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Total</th>
                            <th> &#8377 '.$total.'</th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-30" action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>
                </form>
                <br>
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>&#8377 ' . $total . '</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">&#8377 0</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>&#8377 ' . $total . '</h5>
                        </div>
                        <a href="checkout.php" class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
    <!-- Cart End -->';
}
?>

<?php
include "lib/footer.php";
?>
