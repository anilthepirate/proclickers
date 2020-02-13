<?php
if (isset($this->session->userdata['logged_in'])) {
  redirect('/', 'refresh');
} ?>
<!-- Page Header Start -->
<div class="page-header" style="background: url(assets/img/banner1.jpg);">
  <!--           <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                  <h2 class="product-title">Login</h2>
                  <ol class="breadcrumb">
                    <li><a href="index.html">Home /</a></li>
                    <li class="current">Login</li>
                    <li class="current"></li>
                  </ol>
                </div>
              </div>
            </div>
          </div> -->
</div>
<!-- Page Header End -->
<!-- Content section Start -->
<section class="login section-padding">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-12 col-xs-12 card">
        <div class="login-form login-area">
          <h3>
            Login Now
          </h3>
          <form role="form" class="login-form needs-validation" action="<?php echo base_url(); ?>main/login" method="POST" novalidate>
            <?php if (isset($error_message)) { ?>

              <div class="alert alert-danger alert-dismissible fade show">
              <?php echo "<p>$error_message </p><p></p></div>";
            } ?>
              <div class="form-group">
                <div class="input-icon">
                  <!-- <i class="lni-user"></i> -->
                  <input type="email" id="validationCustom01" class="form-control " name="email" placeholder="Email" required>
                  <div class="valid-feedback">
                    Email looks good!
                  </div>
                  <div class="invalid-feedback">
                    Email Doesn't look good!
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="input-icon">
                  <!-- <i class="lni-lock"></i> -->
                  <input type="password" class="form-control " name="password" placeholder="Password" required>

                  <div class="valid-feedback">
                    Looks good!
                  </div>
                  <div class="invalid-feedback">
                    Password can't be empty!
                  </div>
                </div>
              </div>
              <div class="form-group ">
                <div class="checkbox">
                  <input type="checkbox" name="rememberme" value="rememberme">
                  <label>Keep me logged in</label>
                </div>
                <a class="forgetpassword" href="<?php echo base_url(); ?>forgotpassword">Forgot Password?</a>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-common log-btn">Submit</button>
              </div>


          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Content section End -->