 <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url('<?php echo $results->photo_id;?>');" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center">
                    <div class="col-md-7 col-sm-12 ftco-animate">
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Tour</span></p>
                        <h1 class="mb-3"><?php echo $results->name; ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END slider -->

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row slider-text align-items-center">
                        <div class="col-md-7 col-sm-12 ftco-animate">
                            <h1 class="mb-3">Introduction</h1>
                        </div>
                    </div>
                </div>
                <h3 class="col-md-7 col-sm-12 sub--para-itenary mb-5"><?php echo $results->introduction; ?></h3><br>

                <div class="col-lg-6">
                    <div class="row slider-text align-items-center">
                        <div class="col-md-12 col-sm-12 ftco-animate">
                            <h1 class="mb-3">Things You Can Do</h1>
                            <ul class="tours-itinerary">
                            
                            <?php foreach($itineraries as $itinerary) : ?>
                                <li class="tours-itinerary-item"> <img src="<?php echo base_url(); ?>assets/images/checkmark.png" class="tours-itinerary-icon"
                                        alt="">Day <?php echo $itinerary->item_number; ?></li>
                                <li class="tours-itinerary-item-details"> <?php echo $itinerary->item_details; ?></li>
                            <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div id="map"></div>
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31659.998183437292!2d80.57900303960295!3d7.297608838410905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae366266498acd3%3A0x411a3818a1e03c35!2sKandy!5e0!3m2!1sen!2slk!4v1548053966566"
                        width="550" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                </div>


                <div class="col-lg-12">
                    <div class="row slider-text align-items-center">
                        <div class="col-md-7 col-sm-12 ftco-animate">
                            <h1 class="mb-3 mt-5">Recommended Hotels</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                            <a href="#" class="block-5" style="background-image: url('<?php echo base_url(); ?>assets/images/hotel-1.jpg');">
                                <div class="text">
                                    <span class="price">$29/night</span>
                                    <h3 class="heading">Luxe Hotel</h3>
                                    <div class="post-meta">
                                        <span>Ameeru Ahmed Magu Male’, Maldives</span>
                                    </div>
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                            class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span>
                                        <span>500 reviews</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                            <a href="#" class="block-5" style="background-image: url('<?php echo base_url(); ?>assets/images/hotel-2.jpg');">
                                <div class="text">
                                    <span class="price">$29/night</span>
                                    <h3 class="heading">Luxe Hotel</h3>
                                    <div class="post-meta">
                                        <span>Ameeru Ahmed Magu Male’, Maldives</span>
                                    </div>
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                            class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span>
                                        <span>500 reviews</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                            <a href="#" class="block-5" style="background-image: url('<?php echo base_url(); ?>assets/images/hotel-3.jpg');">
                                <div class="text">
                                    <span class="price">$29/night</span>
                                    <h3 class="heading">Luxe Hotel</h3>
                                    <div class="post-meta">
                                        <span>Ameeru Ahmed Magu Male’, Maldives</span>
                                    </div>
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                            class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span>
                                        <span>500 reviews</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                            <a href="#" class="block-5" style="background-image: url('<?php echo base_url(); ?>assets/images/hotel-4.jpg');">
                                <div class="text">
                                    <span class="price">$29/night</span>
                                    <h3 class="heading">Luxe Hotel</h3>
                                    <div class="post-meta">
                                        <span>Ameeru Ahmed Magu Male’, Maldives</span>
                                    </div>
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                            class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span>
                                        <span>500 reviews</span></p>
                                </div>
                            </a>
                        </div>


                    </div>

                </div>
                <div class="col-lg-12">
                    <div class="row slider-text align-items-center">
                        <div class="col-md-7 col-sm-12 ftco-animate">
                            <h1 class="mb-3 mt-5">Travel with Us</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-lg-4 mb-4 ftco-animate">
                            <a href="#" class="block-5" style="background-image: url('<?php echo base_url(); ?>assets/images/transport.jpeg');">
                                <div class="text">
                                    <h3 class="heading">Car</h3>
                                    <div class="post-meta">
                                        <span>Ameeru Ahmed Magu Male’, Maldives</span>
                                    </div>
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                            class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span>
                                        <span>500 reviews</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-lg-4 mb-4 ftco-animate">
                            <a href="#" class="block-5" style="background-image: url('<?php echo base_url(); ?>assets/images/transport.jpeg');">
                                <div class="text">
                                    <h3 class="heading">Van</h3>
                                    <div class="post-meta">
                                        <span>Ameeru Ahmed Magu Male’, Maldives</span>
                                    </div>
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                            class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span>
                                        <span>500 reviews</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-lg-4 mb-4 ftco-animate">
                            <a href="#" class="block-5" style="background-image: url('<?php echo base_url(); ?>assets/images/transport.jpeg');">
                                <div class="text">
                                    <h3 class="heading">Car</h3>
                                    <div class="post-meta">
                                        <span>Ameeru Ahmed Magu Male’, Maldives</span>
                                    </div>
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                            class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span>
                                        <span>500 reviews</span></p>
                                </div>
                            </a>
                        </div>

                    </div>

                </div>
                <div class="col-lg-12">
                    <div class="row slider-text align-items-center">
                        <div class="col-md-7 col-sm-12 ftco-animate">
                            <h1 class="mb-3 mt-5">Inquire Us</h1>
                        </div>
                    </div>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Your Contact no">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Your Country">
                            </div>
                        </div>
                        <div class="row">
                            <div class="select-wrap col-md-6 group mb-3">
                                <select name="" id="" class="form-control">
                                    <option value="" class="form-control-option-white-top">Number of Adults</option>
                                    <option value="" class="form-control-option-white">1</option>
                                    <option value="" class="form-control-option-white">2</option>
                                    <option value="" class="form-control-option-white">3</option>
                                    <option value="" class="form-control-option-white">4</option>
                                    <option value="" class="form-control-option-white">5</option>
                                    <option value="" class="form-control-option-white">6</option>
                                    <option value="" class="form-control-option-white">7</option>
                                    <option value="" class="form-control-option-white">8</option>
                                </select>
                            </div>
                            <div class="select-wrap col-md-6 group mb-3">
                                <select name="" id="" class="form-control">
                                    <option value="" class="form-control-option-white-top">Number of Children</option>
                                    <option value="" class="form-control-option-white">None</option>
                                    <option value="" class="form-control-option-white">1</option>
                                    <option value="" class="form-control-option-white">2</option>
                                    <option value="" class="form-control-option-white">3</option>
                                    <option value="" class="form-control-option-white">4</option>
                                    <option value="" class="form-control-option-white">5</option>
                                    <option value="" class="form-control-option-white">6</option>
                                    <option value="" class="form-control-option-white">7</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="check-in one-third mb-3"><input type="text" id="checkin_date" class="form-control" placeholder="Approx Arival Date"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="check-out one-third mb-3"><input type="text" id="checkout_date" class="form-control" placeholder="Depature Date"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="select-wrap col-md-6 group mb-3">
                                <select name="" id="" class="form-control">
                                   <option value="" class="form-control-option-white" >Hotel Type</option>
                                    <option value="" class="form-control-option-white" >Standard</option>
                                    <option value="" class="form-control-option-white" >3 Star</option>
                                    <option value="" class="form-control-option-white" >4 Star</option>
                                    <option value="" class="form-control-option-white" >5 Star</option>
                                    <option value="" class="form-control-option-white" >Bouteque Hotels</option>
                                    <option value="" class="form-control-option-white" >Villas</option>
                                    <option value="" class="form-control-option-white" >Apartments</option>
                                    <option value="" class="form-control-option-white" >Rent a House</option>
                                </select>
                            </div>
                            <div class="select-wrap col-md-6 group mb-3">
                                <select name="" id="" class="form-control">
                                    <option value="" class="form-control-option-white-top">Transportation Type</option>
                                    <option value="" class="form-control-option-white">Car</option>
                                    <option value="" class="form-control-option-white">Van</option>
                                    <option value="" class="form-control-option-white">Bus</option>

                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <textarea name="" id="" cols="120" rows="7" class="form-control" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <input type="submit" value="Submit" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-12">
                    <div class="row slider-text align-items-center">
                        <div class="col-md-7 col-sm-12 ftco-animate">
                            <h1 class="mb-3 mt-5">Tours You may also like</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-lg-4 mb-4 ftco-animate">
                            <a href="#" class="block-5" style="background-image: url('<?php echo base_url(); ?>assets/images/tour-3.jpg');">
                                <div class="text">
                                    <span class="price">$399</span>
                                    <h3 class="heading">Tour in Nilaveli beach</h3>
                                    <div class="post-meta">
                                        <span>Ameeru Ahmed Magu Male’, Maldives</span>
                                    </div>
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                            class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span>
                                        <span>500 reviews</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-lg-4 mb-4 ftco-animate">
                            <a href="#" class="block-5" style="background-image: url('<?php echo base_url(); ?>assets/images/tour-4.jpg');">
                                <div class="text">
                                    <span class="price">$399</span>
                                    <h3 class="heading">Tour in Sinharaja</h3>
                                    <div class="post-meta">
                                        <span>Ameeru Ahmed Magu Male’, Maldives</span>
                                    </div>
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                            class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span>
                                        <span>500 reviews</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-lg-4 mb-4 ftco-animate">
                            <a href="#" class="block-5" style="background-image: url('<?php echo base_url(); ?>assets/images/tour-5.jpg');">
                                <div class="text">
                                    <span class="price">$399</span>
                                    <h3 class="heading">Tour in Somewhere</h3>
                                    <div class="post-meta">
                                        <span>Ameeru Ahmed Magu Male’, Maldives</span>
                                    </div>
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                            class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span>
                                        <span>500 reviews</span></p>
                                </div>
                            </a>
                        </div>

                    </div>

                </div>
                <!-- END -->


            </div>
        </div>
    </section>
    <script>
    function initMap() {
  // The location of Uluru
  var uluru = {lat: -25.344, lng: 131.036};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    
    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/geocode/json?latlng=40.714224,-73.961452&key=YOUR_API_KEY">
    </script>