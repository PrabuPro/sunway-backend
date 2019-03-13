		//get atleaset one checkbox
		// let requiredCheckBoxes = $('.maldives');

		// requiredCheckBoxes.change(function () {
		// 	if (requiredCheckBoxes.is(':checked')) {
		// 		requiredCheckBoxes.removeAttr('required');
		// 	} else {
		// 		requiredCheckBoxes.attr('required', 'required');
		// 	}
		// });
	
	$(function () {
	    $('#datetimepicker1').datepicker({
	        format: "dd/mm/yyyy",
	        language: "es",
	        autoclose: true,
	        todayHighlight: true
	    });
	});

	let input = document.querySelector("#phone");

	window.intlTelInput(input, {
	    utilsScript: "assets2/js/utils.js",
	});

	let oneTimeFamily = 0;
	let oneTimeGroup = 0;


	$('.family').click(function () {
	    oneTimeGroup = 0;
	    $('#form-group').empty();

	    if (oneTimeFamily == 0) {
	        let html = `
					<div class="col-lg-12 col-sm-offset-1" adult>
					<div class="form-group">
						<label>Adults</label>
						<select class="form-control" name="adults">
							<option disabled="" selected=""></option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
					</div>
					</div>
					<div class="col-lg-12 col-sm-offset-1" >
					<div class="form-group">
						<label>Children under 12</label>
						<select class="form-control" name="children">
							<option selected="">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
					</div>
					</div>
				`;

	        $('#form-family').append(html);
	        oneTimeFamily++;

	    }

	});

	$('.solo').click(function () {
	    oneTimeFamily = 0;
	    oneTimeGroup = 0;
	    $('#form-family').empty();
        $('#form-group').empty();
        $(this).find('.top-section').css({backgroundColor: "yellow"});

    });
    
	$('.couple').click(function () {
	    oneTimeFamily = 0;
	    oneTimeGroup = 0;
	    $('#form-family').empty();
	    $('#form-group').empty();
    });
    
	$('.group').click(function () {
	    oneTimeFamily = 0;
	    $('#form-family').empty();

	    if (oneTimeGroup == 0) {
	        let html = `
					<div class="col-lg-12 col-sm-offset-1" adult>
					<div class="form-group">
						<label>Adults</label>
						<select class="form-control" name="children">
							<option disabled="" selected=""></option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
					</div>
					</div>
				`;

	        $('#form-group').append(html);
	        oneTimeGroup++;

	    }

    });

    let oneTimeMaldives = 0;

    $('.maldives-yes').click(function () {

        if(oneTimeMaldives == 0) {
            let html = `
					<div class="col-lg-12 col-sm-offset-1" adult>
					<div class="form-group">
						<label>How Many Nights</label>
						<select class="form-control" name="nights">
							<option disabled="" selected="">- Nights -</option>
							<option value="1" >1</option>
							<option value="2" >2</option>
							<option value="3" >3</option>
							<option value="4" >4</option>
							<option value="5" >5</option>
							<option value="6" >6</option>
							<option value="7" >7</option>
							<option value="8" >8</option>
							<option value="9" >9</option>
							<option value="10" >10</option>
						</select>
					</div>
					</div>
					<div class="col-lg-12 col-sm-offset-1" adult>
					<div class="form-group">
						<label>Hotel Category</label>
						<select class="form-control" name="hotel">
							<option disabled="" selected="">- Hotel -</option>
							<option value="3 star" >3 Star</option>
							<option value="4 star" >4 Star</option>
							<option value="5 star" >5 Star</option>
						
						</select>
					</div>
					</div>
				`;

            $('#maldives-section').append(html);
            oneTimeMaldives++
        }
    });

    $('.maldives-nop').click(function () {
        oneTimeMaldives = 0;
        $('#maldives-section').empty();
  
    });

    $('.next-btn').click(function () {
        var elmnt = document.getElementById("top-section");
        elmnt.scrollIntoView();
  
	});

	$(document).ready(function () {
		$('.inquiry_form').on('submit', function (e) {
			e.preventDefault();


			swal({
				title: "Hang on!",
				text: "Your Inquiry is sending....",
				imageUrl: "http://localhost/sunwayholidays/assets/images/rolling2.gif",
				showSpinner: true,
				button: false,
				showCancelButton: false,
				showConfirmButton: false,
				allowOutsideClick: false

			});

			$.ajax({
				type: 'POST',
				url: 'inquiryController/inquire',
				data: $('.inquiry_form').serialize(),
				datatype: "html",
				success: function (data) {

					if (data === "Successfull") {
						swal.stopLoading();
						swal({
							title: "Successfully made an Inquiry",
							text: "We will contact you shortly",
							icon: "success",
							button: "ok",
						}).then((value) => {
							location.reload();
						});



					} else if (data === "Data insertion faild") {
						swal.stopLoading();
						swal({
							title: "Internal Error.",
							text: "Please try again",
							icon: "success",
							button: "ok",
						});

					} else {
						swal.stopLoading();
						swal({
							title: "We found some errors! Please check below",
							text: (data).replace(/(<([^>]+)>)/ig, ""),
							icon: "error",
							button: "ok",
						});
					}


				}
			});
		});

		$('.payments').on('click', function () {
			swal({
				title: "Payments",
				text: "Payment procedure",
				icon: "info",
				button: "ok",

			});
		});

		$('[data-toggle="tooltip"]').tooltip();
	});



	// function colorChangeFirst() {
	// 	document.getElementById('pace-box-1').style.backgroundColor = "#7E9C9D";
	// 	document.getElementById('radio-box--text-1').style.color = "#ffffff";
	// 	document.getElementById('pace-box-2').style.backgroundColor = "#F1F2EC";
	// 	document.getElementById('radio-box--text-2').style.color = "#A9A9A5";
	// 	document.getElementById('pace-box-3').style.backgroundColor = "#F1F2EC";
	// 	document.getElementById('radio-box--text-3').style.color = "#A9A9A5";
	// }

	// function colorChangeSecound() {
	// 	document.getElementById('pace-box-2').style.backgroundColor = "#7E9C9D";
	// 	document.getElementById('radio-box--text-2').style.color = "#ffffff";
	// 	document.getElementById('pace-box-1').style.backgroundColor = "#F1F2EC";
	// 	document.getElementById('radio-box--text-1').style.color = "#A9A9A5";
	// 	document.getElementById('pace-box-3').style.backgroundColor = "#F1F2EC";
	// 	document.getElementById('radio-box--text-3').style.color = "#A9A9A5";
	// }

	// function colorChangeThird() {
	// 	document.getElementById('pace-box-3').style.backgroundColor = "#7E9C9D";
	// 	document.getElementById('radio-box--text-3').style.color = "#ffffff";
	// 	document.getElementById('pace-box-2').style.backgroundColor = "#F1F2EC";
	// 	document.getElementById('radio-box--text-2').style.color = "#A9A9A5";
	// 	document.getElementById('pace-box-1').style.backgroundColor = "#F1F2EC";
	// 	document.getElementById('radio-box--text-1').style.color = "#A9A9A5";
	// }

	// let firstBoxCheck = true;
	// let secoundBoxCheck = true;
	// let thirdBoxCheck = true;
	// let fourthBoxCheck = true;
	// let fifthBoxCheck = true;
	// let sixethBoxCheck = true;

	// // let label = document.getElementById('culture-label')

	// let firstBox = document.getElementById('checkbox-box-1');
	// let secoundBox = document.getElementById('checkbox-box-2');
	// let thirdBox = document.getElementById('checkbox-box-3');
	// let fourthBox = document.getElementById('checkbox-box-4');
	// let fifthBox = document.getElementById('checkbox-box-5');
	// let sixethBox = document.getElementById('checkbox-box-6');

	// function checkboxColorChange_1() {
	// 	if (firstBoxCheck) {
	// 		firstBox.style.backgroundColor = "#7E9C9D";
	// 		let box = firstBox.querySelector('#radio-box--text');
	// 		box.style.color = '#ffffff';
	// 		firstBoxCheck = false;
	// 	} else {
	// 		firstBox.style.backgroundColor = "#F1F2EC";
	// 		let box = firstBox.querySelector('#radio-box--text');
	// 		box.style.color = "#A9A9A5";
	// 		firstBoxCheck = true;
	// 	}
	// }

	// function checkboxColorChange_2() {
	// 	if (secoundBoxCheck) {
	// 		secoundBox.style.backgroundColor = "#7E9C9D";
	// 		let box = secoundBox.querySelector('#radio-box--text');
	// 		box.style.color = '#ffffff';
	// 		secoundBoxCheck = false;
	// 	} else {
	// 		secoundBox.style.backgroundColor = "#F1F2EC";
	// 		let box = secoundBox.querySelector('#radio-box--text');
	// 		box.style.color = "#A9A9A5";
	// 		secoundBoxCheck = true;
	// 	}
	// }

	// function checkboxColorChange_3() {
	// 	if (thirdBoxCheck) {
	// 		thirdBox.style.backgroundColor = "#7E9C9D";
	// 		let box = thirdBox.querySelector('#radio-box--text');
	// 		box.style.color = '#ffffff';
	// 		thirdBoxCheck = false;
	// 	} else {
	// 		thirdBox.style.backgroundColor = "#F1F2EC";
	// 		let box = thirdBox.querySelector('#radio-box--text');
	// 		box.style.color = "#A9A9A5";
	// 		thirdBoxCheck = true;
	// 	}
	// }

	// function checkboxColorChange_4() {
	// 	if (fourthBoxCheck) {
	// 		fourthBox.style.backgroundColor = "#7E9C9D";
	// 		let box = fourthBox.querySelector('#radio-box--text');
	// 		box.style.color = '#ffffff';
	// 		fourthBoxCheck = false;
	// 	} else {
	// 		fourthBox.style.backgroundColor = "#F1F2EC";
	// 		let box = fourthBox.querySelector('#radio-box--text');
	// 		box.style.color = "#A9A9A5";
	// 		fourthBoxCheck = true;
	// 	}
	// }

	// function checkboxColorChange_5() {
	// 	if (fifthBoxCheck) {
	// 		fifthBox.style.backgroundColor = "#7E9C9D";
	// 		let box = fifthBox.querySelector('#radio-box--text');
	// 		box.style.color = '#ffffff';
	// 		fifthBoxCheck = false;
	// 	} else {
	// 		fifthBox.style.backgroundColor = "#F1F2EC";
	// 		let box = fifthBox.querySelector('#radio-box--text');
	// 		box.style.color = "#A9A9A5";
	// 		fifthBoxCheck = true;
	// 	}
	// }

	// function checkboxColorChange_6() {
	// 	if (sixethBoxCheck) {
	// 		sixethBox.style.backgroundColor = "#7E9C9D";
	// 		let box = sixethBox.querySelector('#radio-box--text');
	// 		box.style.color = '#ffffff';
	// 		sixethBoxCheck = false;
	// 	} else {
	// 		sixethBox.style.backgroundColor = "#F1F2EC";
	// 		let box = sixethBox.querySelector('#radio-box--text');
	// 		box.style.color = "#A9A9A5";
	// 		sixethBoxCheck = true;
	// 	}
	// }





    

