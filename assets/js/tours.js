
// $(document).ready(function () {
//     $('.form').on('submit', function (e) {
//         e.preventDefault();
     

//         $.ajax({
//             type: 'GET',
//             url: 'rest_api/tours',
//             data: $('.form').serialize(),
//             datatype: "html",
//             success: function (data) {

//                 let tour = data[0];
                
//                 $('.card-item-container').append(`
                
//                 <div class="col-md-6 col-lg-6 mb-4 ftco-animate card-item">
//                 <a href="tours-single.html" class="block-5" style="background-image: url('http://localhost/sunwayholidays/assets/images/tour-1.jpg');">
//                   <div class="text">
//                     <span class="price">${tour.price}</span>
//                     <h3 class="heading">Tour in Negombo</h3>
//                     <div class="post-meta">
//                       <span>${tour.discription}</span>
//                     </div>
//                     <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
//                   </div>
//                 </a>
//               </div>
                
//                 `);

//                 // if (text === "Booking Successful") {
//                 //     $('.book-table__msg--red').css('display', 'none');
//                 //     $('.book-table__msg--green').css('display', 'block');
//                 // } 
//             }
//         });
//     });
// });