window.addEventListener("load", function(){
let path = anime.path(".testPath path");
anime({
    targets: ".triangle",
    translateX: path("x"),
    translateY: path("y"),
    rotate: function(el, i){
        let test= path("angle");
        console.log(test);
        return test;
    },
    easing: "linear", 
    duration:2000,
})

});