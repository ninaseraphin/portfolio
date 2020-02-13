window.addEventListener("load", function(){

var animation1= anime({
    targets: "#motif-ext2",
    scale:1.05,
    duration:1000,
    easing:"linear",
    loop:true,
    direction:"alternate",
});
var animation2=anime({
    targets:"#motif-central",
    rotate:"1turn",
    duration:5000,
    easing:"linear",
    loop:true,
});
var animation3=anime({
    targets:" #motif-ext",
    rotate:"-1turn",
    duration:5000,
    easing:"linear",
    loop:true,
});
var animation4=anime({
    targets:"#motif-central>g",
    rotate:"1turn",
    duration:2500,
    easing:"linear",
    loop:true,
});



document.querySelector('.button.play').addEventListener("click", function(){
    animation1.play();
    animation2.play();
    animation3.play();
    animation4.play();
});
document.querySelector('.button.pause').addEventListener("click", function(){
    animation1.pause();
    animation2.pause();
    animation3.pause();
    animation4.pause();
});


})