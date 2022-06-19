$(document).ready(function(){
    $('.the_four_scralling_cards').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        autoplay:true,
        autoplayTimeout:8000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            },
            1400:{
                items:3
            }
        }
    })
})
// the slider hostel details
$(document).ready(function(){
    $('.image_wrapper').owlCarousel({
        // loop:true,
        margin:0,
        // nav:true,
        autoplay:true,
        autoplayTimeout:8000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            },
            1400:{
                items:3
            }
        }
    })
})

