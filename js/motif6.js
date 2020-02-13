window.addEventListener("load", function(){
    anime({
        targets: '.stagger g',
        rotate: anime.stagger([-360, 360]),
        easing: 'easeInOutQuad',
        direction:"alternate",
        loop: true,
        delay: anime.stagger(100, {start: 500}),
      });
})