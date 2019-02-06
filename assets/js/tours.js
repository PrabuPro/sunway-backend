
$(document).ready(function () {
    $('.form').on('submit', function (e) {
        e.preventDefault();
     
        $.ajax({
            type: 'GET',
            url: 'rest_api/tours',
            data: $('.form').serialize(),
            datatype: "html",
            success: function (data) {

                
                    var object = data[0];
                    console.log(object['lat']);

                // for (var i = 0; i < data.length; i++) {


                //     // for (var property in object) {
                //     //     alert('item ' + i + ': ' + property + '=' + object[property]);
                //     // }

                // }
            }
        });
    });
});