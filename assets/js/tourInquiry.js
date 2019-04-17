$(document).ready(function(){
	$('.tourInquiry_form').on('submit', function (e) {
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

        let getUrl = window.location;
        let baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
        
     
		$.ajax({
			type: 'POST',
			url:  baseUrl +'/InquiryController/tourInquire',
			data: $('.tourInquiry_form').serialize(),
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
					}) ;
					
					

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
    
     $('.mail-form').on('submit', function (e) {
     	e.preventDefault();
     	console.log('submited');

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

     	let getUrl = window.location;
     	let baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

     	$.ajax({
     		type: 'POST',
     		url: baseUrl + '/mailController/tourMail',
     		data: $('.mail-form').serialize(),
     		datatype: 'html',
     		success: function (data) {

     			if (data === "Successfull") {
     				swal.stopLoading();
     				swal({
     					title: "Successfully send the mail",
     					text: "We really appreciate your mail. We will answer for you question asap",
     					icon: "success",
     					button: "ok",
     				}).then((value) => {
     					location.reload();
     				});



     			} else if (data === "Data insertion faild") {
     				swal.stopLoading();
     				swal({
     					title: "Something went wrong!",
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

});


