// triggering click events on the image
var images = document.getElementsByClassName('scralling_detail_image')
var large_image = document.getElementById('large_images').src
console.log(large_image.indexOf('uploads'))
var larg = large_image.slice(large_image.indexOf('IMG-'));
for(let i in images){
    images[i].addEventListener('click', ()=>{
        var child_img = images[i].src.slice(large_image.indexOf('IMG-'));
        console.log(child_img);
        large_image = 'hello image...'
        larg = child_img
        // console.log(large_image);
    })

}

