$(document).ready(function(){
    $('.mail-form').on('submit', function(e){
        e.preventDefault();
        console.log('submited');
        
        	

        	swal({
        		title: "Hang on!",
        		text: "Your Inquiry is sending....",
        		imageUrl: "http://sunwayholidays.lk/assets/images/rolling2.gif",
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
                url:  'http://sunwayholidays.lk/MailController/mail',
                data: $('.mail-form').serialize(),
                datatype: 'html',
                success: function (data){

                    if (data === "Successfull") {
                    	swal.stopLoading();
                    	swal({
                    		title: "Successfully send the mail",
                    		text: "We really appreciate your mail. Thank you!",
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