// fetchin Notification
const xhr = new XMLHttpRequest()
$('.the_four_scralling_cards').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    autoplay: true,
    autoplayTimeout: 8000,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        },
        1400: {
            items: 4
        }
    }
})
// the slider hostel details
// $(document).ready(function(){
$('.image_wrapper').owlCarousel({
    loop: true,
    margin: 0,
    // nav:true,
    autoplay: true,
    autoplayTimeout: 8000,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        },
        1400: {
            items: 3
        }
    }
})


$(document).ready(function () {
    $(".fa-bell").on("click", function () {
        $('#messeges_list').toggle()
        const xhr = new XMLHttpRequest()
        // console.log('hekkwjkjd');
        xhr.open('get', 'http://localhost/HostelApp/Hoste_site/include/read_message.php')
        xhr.onload = () => {
            // console.log('found///');
            // console.log(xhr.responseText);
            
        }
        xhr.send()
    });
    
})

// function toggle_bell() {
//     $('.popup_content').toggle();
    
// }


// selectiong aand displaying th mmesseg3r
setInterval(auto_display, 4000)
function auto_display() {
    const xhr = new XMLHttpRequest()
    xhr.open('get', 'http://localhost/HostelApp/Hoste_site/user/config/__read_ntificatipon.php')
    xhr.onload = () => {
        let mess = '';
        let data = JSON.parse(xhr.responseText);
        // console.log(data);
        document.getElementById('count_messe').innerHTML = data.length;
        for (let i = 0; i < data.length; i++) {
            mess += `<li class="list-group-item"  >${data[i].text}</li>`
        }
        document.getElementById('messeges_list').innerHTML = mess
        
    }
    xhr.send()
}



//closer of the document
// send messge do databsee
document.getElementById('submit_messege').addEventListener('click', (e) => {
    e.preventDefault()
    var message_field = document.querySelector('.message_field').value
    xhr.open('get', `http://localhost/HostelApp/Hoste_site/user/config/__send_messege.php?mess=${message_field}`)
    xhr.onload = () => {
        // console.log('found');
    }
    xhr.send()
    message_field == '';

})
// document.querySelector('.message_field').
// 




