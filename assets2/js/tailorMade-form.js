	// $('.suitable_for').click(function () {
	// 	$('.suitable_for').not(this).prop('checked', false);
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
						<select class="form-control">
							<option disabled="" selected=""></option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
						</select>
					</div>
					</div>
					<div class="col-lg-12 col-sm-offset-1" >
					<div class="form-group">
						<label>Children under 12</label>
						<select class="form-control">
							<option selected="">0</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
						</select>
					</div>
					</div>
					<div class="col-lg-12 col-sm-offset-1" style="margin-bottom: 20px;">
					<div class="form-group">
						<label>Children over 12</label>
						<select class="form-control">
							<option selected="">0</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
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
						<select class="form-control">
							<option disabled="" selected=""></option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
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
						<select class="form-control">
							<option disabled="" selected="">- Nights -</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
						</select>
					</div>
					</div>
					<div class="col-lg-12 col-sm-offset-1" adult>
					<div class="form-group">
						<label>Hotel Category</label>
						<select class="form-control">
							<option disabled="" selected="">- Hotel -</option>
							<option>3 Star</option>
							<option>4 Star</option>
							<option>5 Star</option>
						
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


    

