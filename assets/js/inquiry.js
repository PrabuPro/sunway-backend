	$(document).ready(function(){
		$('.inquiry_form').on('submit', function (e) {
			e.preventDefault();

			$.ajax({
				type: 'POST',
				url: 'inquirycontroller/inquire',
				data: $('.inquiry_form').serialize(),
				datatype: "html",
				success: function (data) {
					console.log(data);

					if (data === "Successfull") {
						swal({
							title: "Successfully made an Inquiry",
							text: "We will contact you shortly",
							icon: "success",
							button: "ok",
						});

					} else if (data === "Data insertion faild") {
						swal({
							title: "Internal Error.",
							text: "Please try again",
							icon: "success",
							button: "ok",
						});

					} else {
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
	});


