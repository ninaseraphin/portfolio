window.addEventListener("load", function(){
    let video = document.querySelector("video");
    resize();
    window.addEventListener("resize", function(){
        resize();
    })

    function resize(){
        console.log(video.src);
        console.log(window.innerWidth);
        if(window.innerWidth < 800 && video.src !== "file:///C:/Program%20Files%20(x86)/EasyPHP-Devserver-17/eds-www/portfolio/assets/boomerangIlluSalade.mp4" ){
            video.setAttribute('src', "assets/boomerangIlluSalade.mp4");
        }else{
        if(window.innerWidth > 800 && video.src !== "file:///C:/Program%20Files%20(x86)/EasyPHP-Devserver-17/eds-www/portfolio/assets/TP2.mp4" ){
            console.log(video.src);
            video.setAttribute('src', "assets/TP2.mp4");
        }
    }
    }

    
    

});