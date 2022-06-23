$(document).ready(function () {
    $('.scralling_detail_image').click(function(){
        var small_image = $(this).attr('src')
        $('#large_images').attr('src', small_image)
    })
    
     
    
    // changing hostel mage details
    $('.card img').click(function(){
        var small_image = $(this).attr('src')
        $('.hostel_image img').attr('src', small_image)

    })
})