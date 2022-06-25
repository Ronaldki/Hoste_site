setInterval(auto_delete_users, 1000);
function auto_delete_users() {

    fetch('http://localhost/HostelApp/Hoste_site/admin/config/__auto_delete_users.php')
        .then(res => res.json())
        .then(data => {
            let datas = data;
            console.log(datas);

            // define xhr objsct
            const xhr = new XMLHttpRequest();
            //now sending the request to deleted recod


            for (let i in datas) {
                var user_id = datas[i].user_id;
                var user_date = datas[i].date;
                var date_now = new Date().getTime();
                var database_date = new Date(user_date).getTime();
                // console.log(database_date, date_now);
                var date_diff = (date_now - database_date);
                var in_5_days = 1000 * 60 * 60 * 24 * 7 //this means delete the record in 7 days
                if (date_diff > in_5_days) {
                    let id = user_id ? user_id : '';
                    // console.log(user_id);
                    xhr.open('post', `http://localhost/HostelApp/Hoste_site/admin/config/__auto_delete_users.php?`)
                    xhr.onload = (err) => {
                        if (xhr.status == 200) {
                            // console.log(xhr.responseText);
                            // console.log(id);

                        } else {
                            console.log(err);
                        }
                    }
                    xhr.send(id)
                }

            }
        })
}

// dissplaying admin notification
setInterval(damin_notification, 1000)
function damin_notification() {
    fetch('http://localhost/HostelApp/Hoste_site/admin/config/__admin_notification.php')
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