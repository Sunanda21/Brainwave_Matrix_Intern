<?php
session_start();

if (isset($_GET['cid'])) {
    $pid = $_GET['cid'];


    //as in different page thats why taking from session array. otherwise if in same page then only unset from $cart only.

    if (isset($_SESSION['mycart'][$cid])) {
        unset($_SESSION['mycart'][$cid]);
    }
}

header('Location: add.php'); // Redirect back to the cart page
exit();
?>
