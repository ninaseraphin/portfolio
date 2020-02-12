window.addEventListener("load", function(){
    let video = document.querySelector("video");
    resize();
    window.addEventListener("resize", function(){
        resize();
    })

    function resize(){
        console.log(video.src);
        console.log(window.innerWidth);
        if(window.innerWidth < 800 && video.src !== "./assets/accueil-video-phone.m4v" ){
            video.setAttribute('src', "./assets/accueil-video-phone.m4v");
        }else{
        if(window.innerWidth > 800 && video.src !== "./assets/accueil-video.mp4" ){
            console.log(video.src);
            video.setAttribute('src', "./assets/TP2.mp4");
        }
    }
    }

    
    

});