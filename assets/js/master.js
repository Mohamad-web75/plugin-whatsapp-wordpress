jQuery(document).ready(function($){
    // whats app opener
// detect how long

let timeOfHover = 0;
let myInterval
function itsTime(){
    timeOfHover += 1;
    if(timeOfHover=>2)
        {
            $('.onclick-pop-wa').addClass('onclick-pop-wa-clicked');
            $('.onclick-pop-wa').removeClass('onclick-pop-wa-closed');
        }
}
$(".w-oppener").hover(function(){
    $('.on-hover-show-wa').addClass('on-hover-show-wa-animation');
    $('.on-hover-show-wa').removeClass('out-hover-show-wa');
    myInterval = setInterval(function(){itsTime()},1000)
},function(){
    $('.on-hover-show-wa').addClass('out-hover-show-wa');
    $('.on-hover-show-wa').removeClass('on-hover-show-wa-animation');
    clearInterval(myInterval)
    timeOfHover = 0;
})
$(".w-oppener").click(function(){
    $('.onclick-pop-wa').addClass('onclick-pop-wa-clicked');
    $('.onclick-pop-wa').removeClass('onclick-pop-wa-closed');
})
$('.close-wa').click(function(){
    $('.onclick-pop-wa').addClass('onclick-pop-wa-closed');
    $('.onclick-pop-wa').removeClass('onclick-pop-wa-clicked');
})
});