/*! =========================================================
 *
 Paper Bootstrap Wizard - V1.0.1
*
* =========================================================
*
* Copyright 2016 Creative Tim (http://www.creative-tim.com/product/paper-bootstrap-wizard)
 *
 *                       _oo0oo_
 *                      o8888888o
 *                      88" . "88
 *                      (| -_- |)
 *                      0\  =  /0
 *                    ___/`---'\___
 *                  .' \|     |// '.
 *                 / \|||  :  |||// \
 *                / _||||| -:- |||||- \
 *               |   | \\  -  /// |   |
 *               | \_|  ''\---/''  |_/ |
 *               \  .-\__  '-'  ___/-. /
 *             ___'. .'  /--.--\  `. .'___
 *          ."" '<  `.___\_<|>_/___.' >' "".
 *         | | :  `- \`.;`\ _ /`;.`/ - ` : | |
 *         \  \ `_.   \_ __\ /__ _/   .-` /  /
 *     =====`-.____`.___ \_____/___.-`___.-'=====
 *                       `=---='
 *
 *     ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 *
 *               Buddha Bless:  "No Bugs"
 *
 * ========================================================= */

// Paper Bootstrap Wizard Functions

searchVisible = 0;
transparent = true;

        $(document).ready(function(){

            /*  Activate the tooltips      */
            $('[rel="tooltip"]').tooltip();

            // Code for the Validator
            var $validator = $('.wizard-card form').validate({
        		  rules: {
        		    firstname: {
        		      required: true,
        		      minlength: 3
        		    },
        		    lastname: {
        		      required: true,
        		      minlength: 3
        		    },
        		    email: {
        		      required: true
        		    }
                },
        	});

            // Wizard Initialization
          	$('.wizard-card').bootstrapWizard({
                'tabClass': 'nav nav-pills',
                'nextSelector': '.btn-next',
                'previousSelector': '.btn-previous',

                onNext: function(tab, navigation, index) {
                	var $valid = $('.wizard-card form').valid();
                	if(!$valid) {
                		$validator.focusInvalid();
                		return false;
                	}
                },

                onInit : function(tab, navigation, index){

                  //check number of tabs and fill the entire row
                  var $total = navigation.find('li').length;
                  $width = 100/$total;

                  navigation.find('li').css('width',$width + '%');

                },

                onTabClick : function(tab, navigation, index){

                    var $valid = $('.wizard-card form').valid();

                    if(!$valid){
                        return false;
                    } else{
                        return true;
                    }

                },

                onTabShow: function(tab, navigation, index) {
                    var $total = navigation.find('li').length;
                    var $current = index+1;

                    var $wizard = navigation.closest('.wizard-card');

                    // If it's the last tab then hide the last button and show the finish instead
                    if($current >= $total) {
                        $($wizard).find('.btn-next').hide();
                        $($wizard).find('.btn-finish').show();
                    } else {
                        $($wizard).find('.btn-next').show();
                        $($wizard).find('.btn-finish').hide();
                    }

                    //update progress
                    var move_distance = 100 / $total;
                    move_distance = move_distance * (index) + move_distance / 2;

                    $wizard.find($('.progress-bar')).css({width: move_distance + '%'});
                    //e.relatedTarget // previous tab

                    $wizard.find($('.wizard-card .nav-pills li.active a .icon-circle')).addClass('checked');

                }
	        });


                // Prepare the preview for profile picture
                $("#wizard-picture").change(function(){
                    readURL(this);
                });

                // $('[data-toggle="wizard-radio"]').click(function(){
                //     wizard = $(this).closest('.wizard-card');
                //     wizard.find('[data-toggle="wizard-radio"]').removeClass('active');
                //     $(this).addClass('active');
                //     $(wizard).find('[type="checkbox"]').removeAttr('checked');
                //     $(this).find('[type="checkbox"]').attr('checked','true');
                // });

                $('[data-toggle="wizard-radio-pace"]').click(function () {
                    wizard = $(this).closest('.wizard-card');
                    wizard.find('[data-toggle="wizard-radio-pace"]').removeClass('active');
                    $(this).addClass('active');
                    $(wizard).find('.pace').removeAttr('checked');
                    $(this).find('.pace').attr('checked','true');
                });

                $('[data-toggle="wizard-radio-people"]').click(function () {
                    wizard = $(this).closest('.wizard-card');
                    wizard.find('[data-toggle="wizard-radio-people"]').removeClass('active');
                    $(this).addClass('active');
                    $(wizard).find('.people').removeAttr('checked');
                    $(this).find('.people').attr('checked','true');
                });

                $('[data-toggle="wizard-radio-hotel"]').click(function () {
                    wizard = $(this).closest('.wizard-card');
                    wizard.find('[data-toggle="wizard-radio-hotel"]').removeClass('active');
                    $(this).addClass('active');
                    $(wizard).find('.accomadation').removeAttr('checked');
                    $(this).find('.accomadation').attr('checked','true');
                });

                $('[data-toggle="wizard-radio-maldives"]').click(function () {
                    wizard = $(this).closest('.wizard-card');
                    wizard.find('[data-toggle="wizard-radio-maldives"]').removeClass('active');
                    $(this).addClass('active');
                    $(wizard).find('.maldives').removeAttr('checked');
                    $(this).find('.maldives').attr('checked','true');
                });

                $('[data-toggle="wizard-checkbox-experience"]').click(function(){
                    if( $(this).hasClass('active')){
                        $(this).removeClass('active');
                        // $(this).find('.card-checkboxes').css('background-color', 'rgb(187, 186, 181)');
                        // $(this).find('.card-checkboxes').css('background-color', '#000000');
                        $(this).find('[type="checkbox"]').removeAttr('checked');
                    } else {
                        $(this).addClass('active');
                        $(this).find('[type="checkbox"]').attr('checked','true');
                        // $(this).find('.card-checkboxes').css('background-color', '#F3F2EE');

                    }
                });
         

                $('.set-full-height').css('height', 'auto');

            });

            // var click = 1;
            // $('.choice').click(function () {
            //     if(click){
            //         $(this).find('.card-checkboxes').css('background-color', 'rgb(187, 186, 181)');
            //         click = 0;
            //     } else {
            //         $(this).find('.card-checkboxes').css('background-color', '#F3F2EE');
            //         click = 1;
                    
            //     }
            // });



         //Function to show image before upload

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }


        function debounce(func, wait, immediate) {
        	var timeout;
        	return function() {
        		var context = this, args = arguments;
        		clearTimeout(timeout);
        		timeout = setTimeout(function() {
        			timeout = null;
        			if (!immediate) func.apply(context, args);
        		}, wait);
        		if (immediate && !timeout) func.apply(context, args);
        	};
        };


(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-46172202-1', 'auto');
ga('send', 'pageview');
