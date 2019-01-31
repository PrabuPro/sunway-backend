    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('<?php echo base_url();?>assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Tour</span></p>
              <h1 class="mb-3">Tours Destination</h1>
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
            <div class="row ">
              <?php foreach($results as $result) : ?>
              <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                <a href="tours-single.html" class="block-5" style="background-image: url('<?php echo base_url();?>assets/images/tours/<?php echo $result->photo_id ?>.jpg');">
                  <div class="text">
                    <span class="price">$ <?php echo $result->price; ?></span>
                    <h3 class="heading">Tour in <?php echo $result->location; ?></h3>
                    <div class="post-meta">
                      <span><?php echo $result->discription; ?></span>
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
                <h3>Find your tour</h3>
                <form action="tourcontroller/gettours" method="get" class="form">
                  <div class="fields">
                    <div class="row flex-column">


                      <div class="check-in col-sm-12 group mb-3"><input type="text" id="checkin_date" class="form-control" placeholder="Check-in date"></div>

                      <div class="check-out col-sm-12 group mb-3"><input type="text" id="checkout_date" class="form-control" placeholder="Check-out date"></div>
                      <div class="select-wrap col-sm-12 group mb-3">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="" class="form-control-option-white">Suitable for</option>
                          <option value="" class="form-control-option-white">Seniors</option>
                          <option value="" class="form-control-option-white">Couples</option>
                          <option value="" class="form-control-option-white">Family</option>
                          <option value="" class="form-control-option-white">Honeymooners</option>
                          <option value="" class="form-control-option-white">Smalll Group </option>
                          <option value="" class="form-control-option-white">Resurchers</option>
                          <option value="" class="form-control-option-white">Singles + kids</option>
                          <option value="" class="form-control-option-white">Pilgrims</option>
                        </select>
                      </div>
                      <div class="select-wrap col-sm-12 group mb-3">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="" class="form-control-option-white" >Tour Type</option>
                          <option value="" class="form-control-option-white" >Common</option>
                          <option value="" class="form-control-option-white" >Beach</option>
                          <option value="" class="form-control-option-white" >Eco</option>
                          <option value="" class="form-control-option-white" >Nature</option>
                          <option value="" class="form-control-option-white" >Wild Life</option>
                          <option value="" class="form-control-option-white" >Adventure</option>
                          <option value="" class="form-control-option-white" >Action</option>
                          <option value="" class="form-control-option-white" >Ayurweda</option>
                        </select>
                      </div>
                      <div class="col-sm-12 group mb-3">
                        <input type="submit" class="search-submit btn btn-primary" value="Find Tours">
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
                <a href="#" class="tag-cloud-link">Common</a>
                <a href="#" class="tag-cloud-link">Beach</a>
                <a href="#" class="tag-cloud-link">Eco</a>
                <a href="#" class="tag-cloud-link">Nature</a>
                <a href="#" class="tag-cloud-link">Wild Life</a>
                <a href="#" class="tag-cloud-link">Adventure</a>
                <a href="#" class="tag-cloud-link">Action</a>
                <a href="#" class="tag-cloud-link">Ayurweda</a>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>