
      <style>
      
        

      </style>

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('<?php echo base_url();?>assets/images/personalized-bg.jpg'); background-position:bottom;">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-9 col-sm-12 ftco-animate">
              <h1 class="mb-3">Exclusive Personalized Holidays</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('<?php echo base_url();?>assets/images/leopard.jpeg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Making the most out of your holiday</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('<?php echo base_url();?>assets/images/beach-4.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Beach Holidays</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    <div class="ftco-section-search">
      <div class="container">
        <div class="row">
          <div class="col-md-12 tabulation-search">
            <div class="element-animate">
              <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link p-3 active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    <svg class="nav-pills__social--icon">
                        <a href="#" class="nav-pills__social--link">
                            <use xlink:href="<?php echo base_url(); ?>assets/images/sprite2.svg#icon-thumb-tack"></use>
                        </a>
                    </svg>Tour</a>
                <!-- <a class="nav-link p-3" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span>03</span> Car Rent</a>
                <a class="nav-link p-3" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><span>04</span> Cruises</a> -->
              </div>
            </div>
              
            <div class="tab-content py-4" id="v-pills-tabContent">
              
              <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="block-17">
                  <form action="<?php echo site_url('search-tours');?>" method="post" class="d-block d-lg-flex">
                    <div class="fields d-block d-lg-flex">
                      
                    <div class="select-wrap one-third">
                        <div class="icon"></div>
                        <select name="duration" id="" class="form-control" required>
                          <option value="">Tour Duration</option>
                          <option value="7" class="form-control-option-white" >7 Days</option>
                          <option value="10-12" class="form-control-option-white"  >10 to 12 Days</option>
                          <option value="14" class="form-control-option-white">14 Days</option>
                          <option value="14+" class="form-control-option-white" >More than 14</option>
                        </select>
                      </div>

                      <div class="select-wrap one-third">
                        <div class="icon"></div>
                        <select name="mounth"  id="" class="form-control form-control-select" required>
                          <option value="" class="form-control-option-white">Month</option>
                          <option value="jan" class="form-control-option-white"  >January</option>
                          <option value="feb" class="form-control-option-white"  >February</option>
                          <option value="mar" class="form-control-option-white"  >March</option>
                          <option value="apr" class="form-control-option-white"  >April</option>
                          <option value="may" class="form-control-option-white"  >May</option>
                          <option value="june" class="form-control-option-white"  >June</option>
                          <option value="july" class="form-control-option-white"  >July</option>
                          <option value="aug" class="form-control-option-white"  >August</option>
                          <option value="sep" class="form-control-option-white"  >September</option>
                          <option value="oct" class="form-control-option-white"  >October</option>
                          <option value="nov" class="form-control-option-white"  >November</option>
                          <option value="dec" class="form-control-option-white"  >December</option>
                        </select>
                      </div>

                      <div class="select-wrap one-third">
                        <div class="icon"></div>
                        <select name="suitable_for"  id="" class="form-control form-control-select" required>
                          <option value="" class="form-control-option-white">Suitable For</option>
                          <option value="seniors" class="form-control-option-white"  >Seniors</option>
                          <option value="couples" class="form-control-option-white"  >Couples</option>
                          <option value="family" class="form-control-option-white"  >Family</option>
                          <option value="honeymooners" class="form-control-option-white"  >Honeymooners</option>
                          <option value="small gourp" class="form-control-option-white"  >Small Group </option>
                          <option value="researchers" class="form-control-option-white"  >Researchers</option>
                          <option value="singles + kids" class="form-control-option-white"  >Singles + kids</option>
                          <option value="pilgrims" class="form-control-option-white"  >Pilgrims</option>
                        </select>
                      </div>
                      <div class="select-wrap one-third">
                        <div class="icon"></div>
                        <select name="tour_type" id="" class="form-control" required>
                          <option value="">Tour Type</option>
                          <option value="common" class="form-control-option-white" >Common</option>
                          <option value="beach" class="form-control-option-white"  >Beach</option>
                          <option value="echo" class="form-control-option-white">Eco</option>
                          <option value="nature" class="form-control-option-white" >Nature</option>
                          <option value="wild life" class="form-control-option-white">Wild Life</option>
                          <option value="advanture" class="form-control-option-white">Adventure</option>
                          <option value="action" class="form-control-option-white">Action</option>
                          <option value="ayurweda" class="form-control-option-white">Ayurweda</option>
                        </select>
                      </div>
                    </div>
                    <input type="submit" class="search-submit btn btn-primary" value="Find Tours">  
                  </form>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <div class="block-17">
                  <form action="" method="post" class="d-block d-lg-flex">
                    <div class="fields d-block d-lg-flex">
                      <div class="textfield-search one-third"><input type="text" class="form-control" placeholder="Search Location"></div>

                      <div class="check-in one-third"><input type="text" id="start_date" class="form-control" placeholder="Start date"></div>

                      <div class="check-out one-third"><input type="text" id="return_date" class="form-control" placeholder="Return date"></div>
                      <div class="select-wrap one-third">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="">Guest</option>
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                    <input type="submit" class="search-submit btn btn-primary" value="Find Car">  
                  </form>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <div class="block-17">
                  <form action="" method="post" class="d-block d-lg-flex">
                    <div class="fields d-block d-lg-flex">
                      <div class="textfield-search one-third one-third-1"><input type="text" class="form-control" placeholder="Search Location"></div>

                      <div class="check-out one-third one-third-1"><input type="text" id="start_date" class="form-control" placeholder="Check-out date"></div>

                      <div class="select-wrap one-third one-third-1">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="">Categories</option>
                          <option value="">Suite</option>
                          <option value="">Super Deluxe</option>
                          <option value="">Balcony</option>
                          <option value="">Economy</option>
                          <option value="">Luxury</option>
                        </select>
                      </div>
                    </div>
                    <input type="submit" class="search-submit btn btn-primary" value="Find Cruise">  
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="ftco-section">
      <div class="container">
        <div class="row pb-5">
          <div class="col-md-12 col-lg-12 text-center heading-section ftco-animate">
            <h2>We arrange exclusive personalized holidays with attention to detail that goes the extra mile. </h2>
            <h4 class="tailorMadePage__para" style='padding:0 4em 0 4em;'>
                Based in Sri Lanka, our local experts knows just how to make your holiday unique & special. Whichever your interests are, we know how to make your dream holiday come true. Backed with first-hand local knowledge & professional experience of over 25 years, we take the time to listen to our clients first, so we how to design your vacation to be perfect each time. With local experts taking care of your holiday right here from Sri Lanka, you travel stress-free - first time, every time. 
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Our Services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center"><img src="assets/images/personalized2.png" alt=""></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">&nbsp;&nbsp;&nbsp;&nbsp;Personalized unique Holidays &nbsp;&nbsp;&nbsp;&nbsp;</h3>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center"><img src="assets/images/designer.png" alt=""></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Designed & arranged by local experts</h3>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center"><img src="assets/images/tie.png" alt=""></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Trust & expertise from over 25 yrs</h3>
              </div>
            </div>    
          </div>         
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center"><img src="assets/images/airplane.png" alt=""></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Travel with peace of mind&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center"><img src="assets/images/label.png" alt=""></span></div></div>
              <div class="media-body p-2" style="margin: auto !important;">
                <h3 class="heading" style="margin: auto !important;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Middleman free prices&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate" style="padding:auto;">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center"><img src="assets/images/give-love.png" alt=""></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading" style="margin:auto;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Responsible & Sustainable&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
              </div>
            </div>    
          </div>          
        </div>
      </div>
    </section>

   


    <section class="ftco-section">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center mb-4 pb-4 ftco-animate">
          <div class="col-md-7 text-center heading-section">
            <h2>Pick your passion</h2>
          </div>
        </div>
        <div class="row">
        <h3 class="col-md-12 sub--para mb-5 ftco-animate" style="padding:0 6em;">We design each tour with passion and attention to detail, to make them spectacular and unique. To make it easy for you to select your forte, we have embedded collections of distinctive holiday plans to most sought after holiday themes. </h3>
        <div class="col-md-9"></div>
        <div class="col-md-3 group mb-3">
						<input type="button" class="search-submit btn btn-primary" value="See All Categories" style="width:100%; font-size:1.5em;"
						 onclick="window.location='<?php echo base_url(); ?>tours-list/0'">
					</div>
        
        </div>
        <div class="row no-gutters">
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="<?php echo base_url(); ?>search-tours/common" class="block-5" style="background-image: url('<?php echo base_url();?>assets/images/trip.jpeg');">
              <div class="text">
                <h3 class="heading">Culture & Heritage</h3>
                <div class="post-meta">
                  <span style="margin-bottom:4em;">Ameeru Ahmed Magu Male’, Maldives</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="<?php echo base_url(); ?>search-tours/nature" class="block-5" style="background-image: url('<?php echo base_url();?>assets/images/nature.jpg');">
              <div class="text">
                <h3 class="heading">Romantic</h3>
                <div class="post-meta">
                    <span style="margin-bottom:4em;">Ameeru Ahmed Magu Male’, Maldives</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="<?php echo base_url(); ?>search-tours/beach" class="block-5" style="background-image: url('<?php echo base_url();?>assets/images/tour-3.jpg');">
              <div class="text">
                <h3 class="heading">Active</h3>
                <div class="post-meta">
                    <span style="margin-bottom:4em;">Ameeru Ahmed Magu Male’, Maldives</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="<?php echo base_url(); ?>search-tours/wild" class="block-5" style="background-image: url('<?php echo base_url();?>assets/images/safari.jpg');">
              <div class="text">
                <h3 class="heading">Adventure</h3>
                <div class="post-meta">
                    <span style="margin-bottom:4em;">Ameeru Ahmed Magu Male’, Maldives</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="<?php echo base_url(); ?>search-for/honeymoon" class="block-5" style="background-image: url('<?php echo base_url();?>assets/images/honeymoon.jpeg');">
              <div class="text">
                <h3 class="heading">Classical Beach Holidays</h3>
                <div class="post-meta">
                    <span style="margin-bottom:4em;">Ameeru Ahmed Magu Male’, Maldives</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="<?php echo base_url(); ?>search-for/family" class="block-5" style="background-image: url('<?php echo base_url();?>assets/images/family.jpeg');">
              <div class="text">
                <h3 class="heading">Family with Children</h3>
                <div class="post-meta">
                    <span style="margin-bottom:4em;">Ameeru Ahmed Magu Male’, Maldives</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="<?php echo base_url(); ?>search-for/small group" class="block-5" style="background-image: url('<?php echo base_url();?>assets/images/group.jpeg');">
              <div class="text">
                <h3 class="heading">Luxury</h3>
                <div class="post-meta">
                    <span style="margin-bottom:4em;">Ameeru Ahmed Magu Male’, Maldives</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="<?php echo base_url(); ?>maldives" class="block-5" style="background-image: url('<?php echo base_url();?>assets/images/tour-8.jpg');">
              <div class="text">
                <h3 class="heading">Relaxing</h3>
                <div class="post-meta">
                    <span style="margin-bottom:4em;" >Ameeru Ahmed Magu Male’, Maldives</span>
                </div>
              </div>
            </a>
          </div>
         
        </div>
      </div>
    </section>

     <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Our Famouse itinerary</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="carousel1 owl-carousel ftco-owl">
            <div class="item">
              <div class="blog-entry">
                <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo base_url();?>assets/images/image_5.jpg');">
                </a>
                <div class="text p-4">
                  <div class="meta">
                    <div><a href="#">July 7, 2018</a></div>
                    <div><a href="#">Admin</a></div>
                  </div>
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <p class="clearfix">
                    <a href="#" class="float-left">Read more</a>
                    <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-entry" data-aos-delay="100">
                <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo base_url();?>assets/images/image_6.jpg');">
                </a>
                <div class="text p-4">
                  <div class="meta">
                    <div><a href="#">July 7, 2018</a></div>
                    <div><a href="#">Admin</a></div>
                  </div>
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <p class="clearfix">
                    <a href="#" class="float-left">Read more</a>
                    <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-entry" data-aos-delay="200">
                <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo base_url();?>assets/images/image_7.jpg');">
                </a>
                <div class="text p-4">
                  <div class="meta">
                    <div><a href="#">July 7, 2018</a></div>
                    <div><a href="#">Admin</a></div>
                  </div>
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <p class="clearfix">
                    <a href="#" class="float-left">Read more</a>
                    <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-entry" data-aos-delay="200">
                <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo base_url();?>assets/images/image_8.jpg');">
                </a>
                <div class="text p-4">
                  <div class="meta">
                    <div><a href="#">July 7, 2018</a></div>
                    <div><a href="#">Admin</a></div>
                  </div>
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <p class="clearfix">
                    <a href="#" class="float-left">Read more</a>
                    <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-entry" data-aos-delay="200">
                <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo base_url();?>assets/images/image_9.jpg');">
                </a>
                <div class="text p-4">
                  <div class="meta">
                    <div><a href="#">July 7, 2018</a></div>
                    <div><a href="#">Admin</a></div>
                  </div>
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <p class="clearfix">
                    <a href="#" class="float-left">Read more</a>
                    <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

       <section class="ftco-section testimony-section" style="padding-top:0; padding-bottom:0;">
      <div class="container">
        <div class="row justify-content-center mb-1 pb-1">
          <div class="col-md-12 text-center heading-section ftco-animate">
            <h2>Process</h2>
          </div>
        </div>
                
        <div class="row ftco-animate justify-content-center">
          <div class="carousel owl-carousel ftco-owl" style="margin: 4em;">
          <a href="<?php echo base_url(); ?>search-for/group friends">
            <div class="item">
              <div class="box_card "> 
                <div class="box_card__text">
                  <div class="box_card__text--number">
                    <h3 class="box_card__text--number-text">1</h3>
                  </div>
                  <h3 class="box_card__text--heading">Lorem, ipsum dolor. Friends</h3>
                  <div class="box_card__text--post-meta">
                      <span style="margin-bottom:4em;">Lorem ipsum, dolor sit amet consectetur</span>
                  </div>
                </div>
              </div>
            </div>
            </a>
            <a href="<?php echo base_url(); ?>search-for/group family">
            <div class="item">
              <div class="box_card ">
                <div class="box_card__text">
                  <div class="box_card__text--number">
                    <h3 class="box_card__text--number-text">2</h3>
                  </div>
                  <h3 class="box_card__text--heading">Lorem, ipsum dolor. Family</h3>
                  <div class="box_card__text--post-meta">
                      <span style="margin-bottom:4em;">Lorem ipsum, dolor sit amet consectetur</span>
                  </div>
              </div>
            </div>
            </div>
            </a>
            <a href="<?php echo base_url(); ?>search-for/group lovers">
            <div class="item">
              <div class="box_card ">
                <div class="box_card__text">
                  <div class="box_card__text--number">
                    <h3 class="box_card__text--number-text">3</h3>
                  </div>
                  <h3 class="box_card__text--heading">Lorem, ipsum dolor. Lovers</h3>
                  <div class="box_card__text--post-meta">
                      <span style="margin-bottom:4em;">Lorem ipsum, dolor sit amet consectetur</span>
                  </div>
                </div>
              </div>
            </div>
            </a>
            <a href="<?php echo base_url(); ?>search-for/group singles">
            <div class="item">
              <div class="box_card ">
                <div class="box_card__text">
                  <div class="box_card__text--number">
                    <h3 class="box_card__text--number-text">4</h3>
                  </div>
                  <h3 class="box_card__text--heading">Lorem, ipsum dolor. Singles</h3>
                  <div class="box_card__text--post-meta">
                      <span style="margin-bottom:4em;">Lorem ipsum, dolor sit amet consectetur</span>
                  </div>
                </div>
              </div>
            </div>
            </a>            
          </div>
        </div>
      </div>
    </section>

 

<div class="parallax-window mb-3" data-parallax="scroll" data-image-src="<?php echo base_url(); ?>assets/images/elephant.jpeg" style="min-height: 530px; background: transparent;">
  <div class="parallax-box">
    <!-- <svg class="parallax-box--icon">  
      <use xlink:href="<?php echo base_url(); ?>assets/images/sprite.svg#icon-cloud-sun"></use>
    </svg> -->
    <h3 class="parallax-box--text">Maldives</h3>
    <h3 class="parallax-box--para">Who doesn’t love Maldives, with its sun dipping horizons, sugar soft sandy beaches and crystal clear blue water? The perfect destination to combine your Sri Lankan holiday with, Maldives is spectacular and is considered as the go to beach stay for a luxury romantic gateway. This sophisticated epicure has also become a fine destination for the watersports. The top notch luxury beach resorts are a treat to your mind, body and soul. Less than 1 hour by air, your perfect holiday in Sri Lanka, could be followed by a few days at leisure in Maldives. Simply request for the extension for any of our <strong>tours</strong> or request a <strong>tailor made</strong> holiday.</h3>
  </div>
</div>

 <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-4 pb-4">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Group Tours</h2>
          </div>
        </div>
                <h3 class="sub--para ftco-animate">Travelling solo or want to join a fixed tour? Hop on right in and join us. Select & book your favorite (details below) and you are ready to go. </h3>
        <div class="row ftco-animate">
          <div class="carousel owl-carousel ftco-owl">
          <a href="<?php echo base_url(); ?>search-for/group friends">
            <div class="item">
              <div class="card-vacations card-vacations-1"> 
                <div class="card-vacations__text">
                  <h3 class="card-vacations__text--heading">Group Tour with Friends</h3>
                  <div class="card-vacations__text--post-meta">
                      <span style="margin-bottom:4em;">Lorem ipsum, dolor sit amet consectetur</span>
                  </div>
                </div>
              </div>
            </div>
            </a>
            <a href="<?php echo base_url(); ?>search-for/group family">
            <div class="item">
              <div class="card-vacations card-vacations-2">
                <div class="card-vacations__text">
                  <h3 class="card-vacations__text--heading">Group Tour with Family</h3>
                  <div class="card-vacations__text--post-meta">
                      <span style="margin-bottom:4em;">Lorem ipsum, dolor sit amet consectetur</span>
                  </div>
              </div>
            </div>
            </div>
            </a>
            <a href="<?php echo base_url(); ?>search-for/group lovers">
            <div class="item">
              <div class="card-vacations card-vacations-3">
                <div class="card-vacations__text">
                  <h3 class="card-vacations__text--heading">Group Tour with Lovers</h3>
                  <div class="card-vacations__text--post-meta">
                      <span style="margin-bottom:4em;">Lorem ipsum, dolor sit amet consectetur</span>
                  </div>
                </div>
              </div>
            </div>
            </a>
            <a href="<?php echo base_url(); ?>search-for/group singles">
            <div class="item">
              <div class="card-vacations card-vacations-4">
                <div class="card-vacations__text">
                  <h3 class="card-vacations__text--heading">Group Tour with Singles</h3>
                  <div class="card-vacations__text--post-meta">
                      <span style="margin-bottom:4em;">Lorem ipsum, dolor sit amet consectetur</span>
                  </div>
                </div>
              </div>
            </div>
            </a>            
          </div>
        </div>
      </div>
    </section>


    <section class="tailorMade-section">
      <div class="bg-video">
        <video class="bg-video__content" autoplay muted loop>
          <source src="<?php echo base_url(); ?>assets/images/beach.mp4" type="video/mp4">
            <source src="<?php echo base_url(); ?>assets/images/beach.webm" type="video/webm">
            </video>
          </div>
      <div class="tailorMade">
        <div class="tailorMade__container">
          <h1 class="tailorMade__container--heading ftco-animate">Tailor Made</h1>    
          <h1 class="tailorMade__container--sub ftco-animate">You design your tour, We help you to make it awesome</h1>    
          <div class="col-sm-12 group " style="margin-left:auto; margin-right:auto;">
            <a href="<?php echo site_url(); ?>tailormade" class="search-submit btn btn-primary-white bt-4 ftco-animate" style="width:220px; font-size:1.5em; margin: auto;">Learn More</a>
          </div>
        </div>
      </div>
    </section>

    <!-- <div class="ftco-section">
      <div class="container-flex">
        <div class="row">
            
        </div>
      </div>
    </div> -->

    




      
