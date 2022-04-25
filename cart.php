<?php require 'inc/head.php'; 

    if($_SESSION['loginname'] === NULL ){
        header('location: http://localhost:8000/login.php');
        exit();
    }


?>
<section class="cookies container-fluid">
    <div class="row">
        TODO : Display shopping cart items from $_SESSION here.
    </div>
</section>
<?php require 'inc/foot.php'; ?>
