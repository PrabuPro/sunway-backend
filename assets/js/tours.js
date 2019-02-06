
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
                console.log(object['location']);

                for(let i=0; i<data.length; i++){
                    var object = data[0];
                    console.log(object['location']);
                
                    $('.item-card').append(`
                    
                     <a href="tours/<?php echo $result->tour_id; ?>" class="block-5" style="background-image: url('${object['photo_id']}');">
                        <div class="text">
                            <span class="price">$ object['price']</span>
                            <h3 class="heading">Tour in <?php echo $result->location; ?></h3>
                            <div class="post-meta">
                            <span><?php echo $result->description; ?></span>
                            </div>
                        </div>
                    </a>

                    `);

                }

                

                // for (var i = 0; i < data.length; i++) {


                //     // for (var property in object) {
                //     //     alert('item ' + i + ': ' + property + '=' + object[property]);
                //     // }

                // }
            }
        });
    });
});