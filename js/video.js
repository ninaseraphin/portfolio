window.addEventListener("load", function(){
    let video = document.querySelector("video");
    resize();
    window.addEventListener("resize", function(){
        resize();
    })

    function resize(){
        console.log(video.src);
        console.log(window.innerWidth);
        if(window.innerWidth < 800 && video.src !== "./assets/accueil-video-phone2.m4v" ){
            video.setAttribute('src', "./assets/accueil-video-phone2.m4v");
        }else{
        if(window.innerWidth > 800 && video.src !== "./assets/accueil-video2.mp4" ){
            console.log(video.src);
            video.setAttribute('src', "./assets/accueil-video2.mp4");
        }
    }
    }

    
    

});