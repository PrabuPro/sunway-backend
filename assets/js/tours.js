
// $(document).ready(function () {
//     $('.form').on('submit', function (e) {
//         e.preventDefault();
//         $('.item-card-main').hide();
//         $('.item-card').empty();
        
     
//         $.ajax({
//             type: 'GET',
//             url: 'rest_api/tours',
//             data: $('.form').serialize(),
//             datatype: "html",
//             success: function (data) {

//                 var object = data[0];
               
//                 for(let i=0; i<data.length; i++){
//                     console.log(data[i].location);
//                     // console.log(data[i]);

//                     $('.item-card').append(`
//                         <a href="tours/<?php echo $result->tour_id; ?>" class="block-5" style="background-image: url('${data[i].photo_id}');">
//                             <div class="text">
//                                 <span class="price">$ ${data[i].price}</span>
//                                 <h3 class="heading">Tour in ${data[i].location}</h3>
//                                 <div class="post-meta">
//                                 <span>${data[i].description}</span>
//                                 </div>
//                             </div>
//                         </a>
//                     `);
//                 }

                

//                 // for (var i = 0; i < data.length; i++) {


//                 //     // for (var property in object) {
//                 //     //     alert('item ' + i + ': ' + property + '=' + object[property]);
//                 //     // }

//                 // }
//             }
//         });
//     });
// });