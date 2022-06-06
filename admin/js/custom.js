// var delete_id = document.querySelectorAll('.delete_user')
// delete_id.forEach(item => {
//     var the_id = parseInt(item.textContent);
//     console.log(the_id);
//     item.addEventListener('click', ()=>{
        
       
//     })
    
// });

$(document).ready(function () {
$('.delete_user').click(function(){
    var the_id = $(this).text()
    console.log(the_id);
    console.log('kk');
    // alert('')
})  
})