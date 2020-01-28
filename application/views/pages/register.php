  <!-- Page Header Start -->
  <div class="page-header" style="background: url(assets/img/banner1.jpg);">
      <!--       <div class="container">
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
                  <div class="register-form login-area">
                      <h3>
                          Register
                      </h3>
                      <div class="ajax_response_result" style="margin-top: 10px;"> </div>
                      <form class="login-form needs-validation" id="reg_form" method="POST" action="<?php echo base_url(); ?>main/register" novalidate>
                          <?php if (isset($error_message)) { ?>

                              <div class="alert alert-danger alert-dismissible fade show">
                              <?php echo "<p>$error_message </p><p></p></div>";
                            } ?>
                              <?php if (isset($success_message)) { ?>

                                  <div class="alert alert-success alert-dismissible fade show">
                                  <?php echo "<p>$success_message $link</p></div>";
                                } ?>
                                  <div class="form-group">
                                      <div class="input-icon">
                                          <!-- <i class="lni-user"></i> -->
                                          <input type="text" id="name" class="form-control" name="name" placeholder="name" required>
                                          <div class="valid-feedback">
                                              Name looks good!
                                          </div>
                                          <div class="invalid-feedback">
                                              Name can't be empty!
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="input-icon">
                                          <!-- <i class="lni-envelope"></i> -->
                                          <input type="email" id="email" class="form-control" name="email" placeholder="Email Address" required>
                                          <div class="valid-feedback">
                                              Email looks good!
                                          </div>
                                          <div class="invalid-feedback">
                                              Enter valid email id!
                                          </div>

                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="input-icon">
                                          <!-- <i class="lni-lock"></i> -->
                                          <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
                                          <div class="valid-feedback">
                                              looks good!
                                          </div>
                                          <div class="invalid-feedback">
                                              Password can't be empty!
                                          </div>

                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="input-icon">
                                          <!-- <i class="lni-lock"></i> -->
                                          <input type="password" id="rpassword" class="form-control" placeholder="Retype Password" name="rpassword" required>
                                          <div class="valid-feedback">
                                              looks good!
                                          </div>
                                          <div class="invalid-feedback">
                                              Password can't be empty!
                                          </div>

                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                          <label class="form-check-label" for="invalidCheck">
                                              Agree to terms and conditions
                                          </label>
                                          <div class="invalid-feedback">
                                              You must agree before submitting.
                                          </div>
                                      </div>
                                  </div>
                                  <!--   <div class="form-group mb-3">
                                      <div class="checkbox">
                                          <input type="checkbox" name="check" required>
                                          <label>By registering, you accept our Terms & Conditions</label>
                                          <div class="valid-feedback">
                                              Looks good!
                                          </div>
                                          <div class="invalid-feedback">
                                              Please agree terms and condtions!
                                          </div>

                                      </div>
                                  </div> -->
                                  <div class="text-center">
                                      <button id="click_form_ccc" type="submit" class="btn btn-common">Register</button>
                                  </div>

                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Content section End -->