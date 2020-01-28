<?php
if (isset($this->session->userdata['logged_in'])) {
    $username = ($this->session->userdata['logged_in']['name']);
    $email = ($this->session->userdata['logged_in']['email']);
} else {
    header("location: login");
}
?>
<!-- Page Header Start -->
<div class="page-header" style="background: url(assets/img/banner1.jpg);">
<!--     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <h2 class="product-title">Join Us</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">Home /</a></li>
                        <li class="current">Register</li>
                    </ol>
                </div>
            </div>
        </div>
    </div> -->
</div>
<!-- Page Header End -->

<!-- Content section Start -->
<section class="register section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-12 col-xs-12 card">
                <h3>Dashboard</h3>
                <?php
                echo "Hello <b id='welcome'><i>" . $username . "</i> !</b>";
                echo "<br/>";
                echo "<br/>";
                echo "Welcome to Dashboard Page";
                echo "<br/>";
                echo "<br/>";
                echo "Your Username is " . $username;
                echo "<br/>";
                echo "Your Email is " . $email;
                echo "<br/>";
                ?>
            </div>
        </div>
    </div>
</section>
<!-- Content section End -->