// $('.contact_submit').on('click',function(){
//     $('#contact_form').submit(function(e){
//         e.preventDefault();
//         $.ajax({
//             url : "/add_contact",
//             type : "POST",
//             data : $('#contact_form').serialize(),
//             success : function(data){
//                 // console.log(data);
//                 $('#div').removeClass("d-none");
//                 $('#message').html('<div class="alert"><span>contact add success</span><span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span></div>')
//             },
//             error : function(){
//                console.log("ajax not recived");
//             }
//         });
//     });
// });
