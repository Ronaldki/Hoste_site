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

// update messege status
$(document).ready(function () {
    $(".fa-bell").on("click", function () {
        $('#messeges_list').toggle()
        const xhrs = new XMLHttpRequest()
        console.log('hekkwjkjd');
        xhrs.open('get', 'http://localhost/HostelApp/Hoste_site/user/config/__update_mseege_status.php')
        xhrs.onload = () => {
            console.log('found///');
            console.log(xhr.responseText);
            
        }
        xhrs.send()
    });
    
})



// counting the number of messeges that belongs to the user
setInterval(auto_count, 1000)
function auto_count() {
    const xhr = new XMLHttpRequest()
    xhr.open('get', 'http://localhost/HostelApp/Hoste_site/user/config/__count_ntificatipon.php')
    xhr.onload = () => {
        let data = xhr.responseText==NaN?'': parseInt(xhr.responseText)

        if(data!=0){
            let count = data < 10?'0' + data:data
            document.getElementById('count_messe').innerHTML = count===NaN?'':count;        

        }
    }
    xhr.send()
}

//disaying the mmesseges on the popup to the user 
setInterval(auto_display, 1000)
function auto_display() {
    const xhr = new XMLHttpRequest()
    xhr.open('get', 'http://localhost/HostelApp/Hoste_site/user/config/__read_notification.php')
    xhr.onload = () => {
        let mess = '';
        let data = JSON.parse(xhr.responseText);
        for (let i = 0; i < data.length; i++) {
            mess += `<li class="list-group-item text-secondary"  >
            <div class='text_dark '> <small> 
            <i> ${data[i].fname+' '+data[i].lname}</i> |  
            <i> ${data[i].email}</i> | 
            <i> ${data[i].phone}</i> | 
            </small></div>
            <p class=' h6'> ${data[i].text}</p>
            <p class=' '><small><i> ${data[i].messege_date}</i></small></p>
         
         </li>`        }
        document.getElementById('messeges_list').innerHTML = mess
        
    }
    xhr.send()
}



//closer of the document
// send messge do databsee
document.getElementById('submit_messege').addEventListener('click', (e) => {
    e.preventDefault()
    var message_fields = document.querySelector('.message_field')
    var message_field = message_fields.value
    xhr.open('get', `http://localhost/HostelApp/Hoste_site/user/config/__send_messege.php?mess=${message_field}`)
    xhr.onload = () => {
        // console.log('found');
    }
    xhr.send()
    message_field == '';

})


// giving active color to thr active page
//  alert('working')
// const page = "<?php echo $page ?>"; 
// alert(page)


