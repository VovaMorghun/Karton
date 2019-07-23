var headerButton = document.querySelector('.header-contacts__button').addEventListener('click' , showPopup);
var popUp = document.querySelector('.overlay');
var close = document.querySelector('.popup-close').addEventListener('click' , hidePopup);
function showPopup(){
    popUp.style.display = 'block'
}

function hidePopup(){
    popUp.style.display = "none"
}


var sliderBig = document.getElementById('slider-big');

var sliderSm = document.getElementById('slider-sm').addEventListener('click' , changeByPhotoClick );

function changeByPhotoClick(event){
    var target = event.target;
    sliderBig.setAttribute('src' , target.getAttribute('src'))
}

