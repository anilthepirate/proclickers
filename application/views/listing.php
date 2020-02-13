<div class="page-header" style="background: url(assets/img/banner1.jpg);"></div>
<!-- Featured Section Start -->
<section class="featured section-padding" style="padding: 0px;">
  <div class="container">
    <!-- search form -->
    <form method="post" action="search" class="needs-validation" novalidate>
      <div class="form-row" style="margin-top: 40px; margin-bottom: 30px; ">
        <div class="col-md-4 col-sm-6">
          <input type="text" style="font-size: 17px; height:50px;" value="<?php if (isset($city)) {
                                                                            echo $city;
                                                                          } else echo ''; ?>" required id="provider-json-city" name="city" style="line-height:inherit;;height: 50px;" class="form-control" placeholder="City">
          <input type="hidden" id="id-value" name="get_value">
          <div class="invalid-feedback">
            Please select a City!
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <input type="text" style="font-size: 17px; height:50px;" value="<?php if (isset($skill)) {
                                                                            echo $skill;
                                                                          } else echo ''; ?>" id="provider-json-skill" name="skill" style="line-height:inherit;;height: 50px;" class="form-control" placeholder="category">
          <div class="invalid-feedback">
            Please select a skill!
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <button type="submit" style=" font-size:large;font-weight:lighter; line-height:inherit;width:inherit;height: 50px;" class="btn btn-common log-btn"><i class="lni-search"></i> SEARCH</button>
        </div>
      </div>
    </form>
    <!-- end of search form -->
    <?php if (count($photographers) != 0) { ?>
      <h1 class="section-title" style="color:#3abcd4">We found <span style="text-decoration: underline;"> </span> <span style="text-decoration: underline;"><?php echo count($photographers); ?></span> <span style="text-decoration: underline;"><?php echo $skill; ?></span> photographers in <span style="text-decoration: underline;"><?php echo $city; ?></span> </h1>



      <div class="row">
        <?php foreach ($photographers as $photographer) { ?>
          <a href="" class="href">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
              <div class="featured-box">
                <figure>
                  <div class="icon">
                    <i class="lni-heart"></i>
                  </div>
                  <a href="<?php echo base_url(); ?>main/profile/<?php echo $photographer->id; ?>"><img class="img-fluid" src="<?php echo $photographer->profile_pic; ?>" alt=""></a>
                </figure>
                <div class="feature-content">
                  <h4><a href="ads-details.html"><?php echo $photographer->studio_name; ?></a></h4>

                  <ul class="address">
                    <li>
                      <a href="#"><i class="lni-map-marker"></i> <?php echo $photographer->city; ?></a>
                    </li>

                  </ul>
                  <div class="listing-bottom">
                    <h3 class="price float-left">start price :  ₹<?php echo $photographer->min_price; ?></h3>

                  </div>
                </div>
              </div>
            </div>

          <?php }
      } else { ?>
          <h1 class="section-title" style="color:#3abcd4">we have no photographers in the specified location </h1>
        <?php }
        ?>
      </div>
  </div>
</section>
<!-- Featured Section End -->