// dissplaying owners notification
setInterval(damin_notification, 1000)
function damin_notification() {
    fetch('http://localhost/HostelApp/Hoste_site/owners/partials/__owners_notification.php')
        .then(res => res.json())
        .then(data => {
            let datas = data;
            let num = datas.length
            if(parseInt(num)<10){
                num ='0'+num;
                document.getElementById("num_notification").innerHTML=num
            }
        
        })

    
    console.log('dhhddj');
}