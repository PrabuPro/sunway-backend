function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#thumbnail')
				.attr('src', e.target.result)
				.width(250)
				.height(150);
		};


		reader.readAsDataURL(input.files[0]);
	}
}

function readURLMap(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#thumbnail-map')
				.attr('src', e.target.result)
				.width(250)
				.height(150);
		};


		reader.readAsDataURL(input.files[0]);
	}
}





var count = 0;
let priceCount = 0;
let hCount = 0;
let iCount = 0;
let eCount = 0;
let oCount = 0;

$(document).ready(function () {
	$('p#add_field').click(function () {
		count += 1;
		var html = `<div class="columns is-mobile is-multiline ">
                        <div class="column is-11">
                            <strong>Itinarary Item  - ` + count + `  </strong>
                        </div>
                        <div class="column is-narrow">
                            <input class="column is-3 input is-info" name="day_new[]" type="text" placeholder="Day" >
                        </div>
                        <div class="column ">
                            <textarea class="textarea is-info is-12" name="desc_new[]" type="text" placeholder="Description"></textarea>
                        </div>
                    </div>`;
		$('#description').append(html);
		$('.itinerary-counter').text(count);

	});
	$('p#add_price').click(function () {

		var html = `<div class="columns is-mobile is-multiline">
                        <div class="column select is-info is-3">
                            <select name="hotelType_new[]" required>
                                <option value="">Hotel Type</option>
                                <option value="3">3 star</option>
                                <option value="4">4 star</option>
                                <option value="5">5 star</option>
                            </select>
                        </div>
                        
						<div class="column ">
							<input class="column is-7 input is-info" name="hotelPrice_new[]" type="text" placeholder="price" value="">
						</div>
					</div>`;

		if (priceCount < 3) {
			$('#pricetags').append(html);
		}

		priceCount++;

	});

	$('p#add_highlights').click(function () {

		hCount += 1;
		var html = `<div class="columns is-mobile is-multiline ">
                        <div class="column is-11">
                            <strong>Highlight count - ` + hCount + `  </strong>
                        </div>
                        <div class="column is-12 ">
                            <input class="column is-12 input is-info" name="highlights_new[]" type="text" placeholder="Description" value="">
                        </div>
                    </div>`;
		$('#highlights').append(html);
		$('.highlights-counter').text(hCount);


	});

	$('p#add_includes').click(function () {

		iCount += 1;
		var html = `<div class="columns is-mobile is-multiline ">
                        <div class="column is-11">
                            <strong>Includes count - ` + iCount + `  </strong>
                        </div>
                        <div class="column is-12 ">
                            <input class="column is-12 input is-info" name="includes_new[]" type="text" placeholder="Description" value="">
                        </div>
                    </div>`;
		$('#includes').append(html);
		$('.includes-counter').text(iCount);


	});

	$('p#add_excludes').click(function () {

		eCount += 1;
		var html = `<div class="columns is-mobile is-multiline ">
                        <div class="column is-11">
                            <strong>Excludes count - ` + eCount + `  </strong>
                        </div>
                        <div class="column is-12 ">
                            <input class="column is-12 input is-info" name="excludes_new[]" type="text" placeholder="Description" value="">
                        </div>
                    </div>`;
		$('#excludes').append(html);
		$('.excludes-counter').text(eCount);


	});
	$('p#add_options').click(function () {

		oCount += 1;
		var html = `<div class="columns is-mobile is-multiline ">
                        <div class="column is-11">
                            <strong>Option count - ` + oCount + `  </strong>
                        </div>
                        <div class="column is-12 ">
                            <input class="column is-12 input is-info" name="options_new[]" type="text" placeholder="Description" value="">
                        </div>
                    </div>`;
		$('#options').append(html);
		$('.options-counter').text(oCount);


	});


});