  <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('<?php echo base_url();?>assets/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Accomadations</span></p>
              <h1 class="mb-3">Accomadations</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h2 class="mb-5 pb-3" style="font-size:24px; font-weight:600; text-transform:capitalize;"><?php if(isset($hotel_type)){ echo $hotel_type. ' for ' . $suitable; } else { echo "All Types"; } ?></h2>
            <div class="row">
              <?php foreach($results as $result) : ?>
              <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                <a href="hotels/<?php echo $result->hotel_id; ?>" class="block-5" style="background-image: url('<?php echo $result->photo_id; ?>');">
                  <div class="text">
                    <span class="price">$<?php echo $result->price; ?></span>
                    <h3 class="heading"><?php echo ucfirst($result->name); ?></h3>
                    <div class="post-meta">
                      <span><?php echo $result->description; ?></span>
                    <h3 class="heading" style="font-size:14px;"><?php echo ucfirst($result->name); ?></h3>
                    </div>
                  </div>
                </a>
              </div>
              <?php endforeach; ?>
            </div>
            <div class="row mt-5">
              <div class="col text-center">
                <div class="block-27">
                  <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- END -->

          <div class="col-lg-4 sidebar">
            <div class="sidebar-box ftco-animate">
              <div class="search-tours bg-light p-4">
                <h3>Find your Hotel</h3>
                <form action="<?php echo site_url('search-accomadations');?>" method="post">
                  <div class="fields">
                    <div class="row flex-column">

                      <div class="select-wrap col-sm-12 group mb-3">
                        <div class="icon"></div>
                        <select name="country" class="form-control">
                          <option value="" class="form-control-option-white">Country</option>
                          <option value="sri lanka" class="form-control-option-white" <?php if(isset($country)){ if($country == 'sri lanka') echo 'selected'; } ?> >Sri Lanka</option>
                          <option value="maldives" class="form-control-option-white" <?php if(isset($country)){ if($country == 'maldives') echo 'selected'; } ?> >Maldives</option>
                        </select>
                      </div>

                      <div class="check-in col-sm-12 group mb-3"><input type="text" id="checkin_date" class="form-control" name="check-in-date"  placeholder="Check-in date" <?php if(isset($check_in_date)) echo 'value='. $check_in_date; ?> ></div>
                        

                      <div class="check-out col-sm-12 group mb-3"><input type="text" id="checkout_date" class="form-control" name="check-out-date" placeholder="Check-out date"  <?php if(isset($check_out_date)) echo 'value='. $check_out_date; ?> ></div>

                      <div class="select-wrap col-sm-12 group mb-3">
                        <div class="icon"></div>
                        <select name="suitable_for" class="form-control">
                          <option value="" class="form-control-option-white">Suitable for</option>
                          <option value="seniors" class="form-control-option-white" <?php if(isset($suitable)){ if($suitable == 'seniors') echo 'selected'; } ?> >Seniors</option>
                          <option value="couples" class="form-control-option-white" <?php if(isset($suitable)){ if($suitable == 'couples') echo 'selected'; } ?> >Couples</option>
                          <option value="family" class="form-control-option-white" <?php if(isset($suitable)){ if($suitable == 'family') echo 'selected'; } ?> >Family</option>
                          <option value="honeymooners" class="form-control-option-white" <?php if(isset($suitable)){ if($suitable == 'honeymooners') echo 'selected'; } ?> >Honeymooners</option>
                          <option value="small gourp" class="form-control-option-white" <?php if(isset($suitable)){ if($suitable == 'small gourp') echo 'selected'; } ?> >Small Group </option>
                          <option value="researchers" class="form-control-option-white" <?php if(isset($suitable)){ if($suitable == 'researchers') echo 'selected'; } ?> >Researchers</option>
                          <option value="singles + kids" class="form-control-option-white" <?php if(isset($suitable)){ if($suitable == 'singles + kids') echo 'selected'; } ?> >Singles + kids</option>
                          <option value="pilgrims" class="form-control-option-white" <?php if(isset($suitable)){ if($suitable == 'pilgrims') echo 'selected'; } ?> >Pilgrims</option>
                        </select>
                      </div>
                      <div class="select-wrap col-sm-12 group mb-3">
                        <div class="icon"></div>
                        <select name="hotel_type" class="form-control">
                          <option value="" class="form-control-option-white" >Hotel Type</option>
                          <option value="standard" class="form-control-option-white" <?php if(isset($hotel_type)){ if($hotel_type == 'standard') echo 'selected'; } ?> >Standard</option>
                          <option value="3 star" class="form-control-option-white" <?php if(isset($hotel_type)){ if($hotel_type == '3 star') echo 'selected'; } ?> >3 Star</option>
                          <option value="4 star" class="form-control-option-white" <?php if(isset($hotel_type)){ if($hotel_type == '4 star') echo 'selected'; } ?> >4 Star</option>
                          <option value="5 star" class="form-control-option-white" <?php if(isset($hotel_type)){ if($hotel_type == '5 star') echo 'selected'; } ?> >5 Star</option>
                          <option value="bouteque hotels" class="form-control-option-white" <?php if(isset($hotel_type)){ if($hotel_type == 'bouteque hotels') echo 'selected'; } ?> >Bouteque Hotels</option>
                          <option value="villas" class="form-control-option-white" <?php if(isset($hotel_type)){ if($hotel_type == 'villas') echo 'selected'; } ?> >Villas</option>
                          <option value="apartments" class="form-control-option-white" <?php if(isset($hotel_type)){ if($hotel_type == 'apartments') echo 'selected'; } ?> >Apartments</option>
                          <option value="rent a house" class="form-control-option-white" <?php if(isset($hotel_type)){ if($hotel_type == 'rent a house') echo 'selected'; } ?> >Rent a House</option>
                        </select>
                      </div>
                      <div class="col-sm-12 group mb-3">
                        <input type="submit" class="search-submit btn btn-primary" value="Find Hotels">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Standard</a>
                <a href="#" class="tag-cloud-link">3 Star</a>
                <a href="#" class="tag-cloud-link">4 Star</a>
                <a href="#" class="tag-cloud-link">5 Star</a>
                <a href="#" class="tag-cloud-link">Boutque Hotels</a>
                <a href="#" class="tag-cloud-link">Villas</a>
                <a href="#" class="tag-cloud-link">Apartments</a>
                <a href="#" class="tag-cloud-link">Rent a House</a>
                <a href="#" class="tag-cloud-link">Sri Lanka</a>
                <a href="#" class="tag-cloud-link">Maldives</a>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
