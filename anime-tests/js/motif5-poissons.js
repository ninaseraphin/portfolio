window.addEventListener("load", function(){
    let path1=anime.path(".st5");

    const animation = anime({
        targets: ".poisson",
        translateX: path1('x'),
        translateY: path1('y'),
        rotate: path1('angle'),
        easing: 'linear',
        duration: 2000,
        loop: false,
    })

   





})