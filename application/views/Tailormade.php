<section class="home-slider owl-carousel">
	<div class="slider-item" style="background-image: url('<?php echo base_url();?>assets/images/bg_3.jpg');"
	 data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text align-items-center">
				<div class="col-md-7 col-sm-12 ftco-animate">
					<h1 class="mb-3">Tailor Made</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END slider -->



<section class="ftco-section" style='padding-top:0 !important;'>
	<div class="container">
		<div class="row" style="margin-top:6em; margin-bottom: 2em;">

			<div class="col-md-12 col-lg-6">
				<div class="row slider-text align-items-center">
					<div class="col-md-12 col-sm-12 ftco-animate">
						<h1 class="mb-3 ">Tailor Made Tours</h1>
					</div>
				</div>
				<h4 class="tailorMadePage__para" style='padding-right:2em;'>
					Looking for something else? Feel free to tell us just how you would like your dream holiday to be. Our local experts are happy to listen to you, and with careful attention to detail design your personalized holiday. Still unsure of what you like? You can also talk to them for more information, suggestions and insider travel tips.</h4>

			</div>
			<div class="col-md-6 tailorMadePage__image">

			</div>

		</div>
	</div>
</section>

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-5">
			<div class="col-md-7 text-center heading-section ftco-animate">
				<h2>How to create my Personal Holiday</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 tailorMadePage ftco-animate">
				<div class="tailorMadePage__circle">
					<h1 class="tailorMadePage__circle--number">1</h1>
				</div>
				<div class="tailorMadePage__box">
					<svg class="tailorMadePage__box--icon">
						<use xlink:href="<?php echo base_url(); ?>assets/images/sprite.svg#icon-paper-plane"></use>
					</svg>
					<div class="tailorMadePage__box--text">Tell us about your dream holiday </div>
				</div>
			</div>
			<div class="col-md-3 tailorMadePage ftco-animate">
				<div class="tailorMadePage__circle">
					<h1 class="tailorMadePage__circle--number">2</h1>
				</div>
				<div class="tailorMadePage__box">
					<svg class="tailorMadePage__box--icon">
						<use xlink:href="<?php echo base_url(); ?>assets/images/sprite.svg#icon-phone"></use>
					</svg>
					<div class="tailorMadePage__box--text">We design your exclusive itinerary together with you.</div>
				</div>
			</div>
			<div class="col-md-3 tailorMadePage ftco-animate">
				<div class="tailorMadePage__circle">
					<h1 class="tailorMadePage__circle--number">3</h1>
				</div>
				<div class="tailorMadePage__box">
					<svg class="tailorMadePage__box--icon">
						<use xlink:href="<?php echo base_url(); ?>assets/images/sprite.svg#icon-document-checked"></use>
					</svg>
					<div class="tailorMadePage__box--text">We make all arrangements for your holiday right from arrival to departure</div>
				</div>
			</div>
			<div class="col-md-3 tailorMadePage ftco-animate">
				<div class="tailorMadePage__circle">
					<h1 class="tailorMadePage__circle--number">4</h1>
				</div>
				<div class="tailorMadePage__box">
					<svg class="tailorMadePage__box--icon">
						<use xlink:href="<?php echo base_url(); ?>assets/images/sprite.svg#icon-airplane"></use>
					</svg>
					<div class="tailorMadePage__box--text">You enjoy your DREAM HOLIDAY.</div>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				  <div class="row justify-content-center mb-2">
          <div class="col-md-7 text-center heading-section ">
            <h2>Start Design My Tour Now</h2>
          </div>
        </div>
		<div class="col-sm-4 group mb-3 justify-content-center" style="margin:auto;">
						<input type="button" class="search-submit btn btn-primary inquiry-button" value="Start Now!" style="width:100%; font-size:1.5em;"
						 onclick="window.location='<?php echo base_url(); ?>inquiry'">
					</div>

			</div>
		</div>
	</div>
</section>



<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo base_url();?>assets/js/inquiry.js"></script>

<script>
$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});


</script>
