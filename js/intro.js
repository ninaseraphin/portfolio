// Wrap every letter in a span
window.addEventListener("load", function(){
    var textWrapper = document.querySelector(".nom-intro");
    console.log(textWrapper);
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    

    // anime.timeline({loop: false})
    //   .add({
    //     targets: '.nom-intro .letter',
    //     opacity: [0,1],
    //     easing: "easeInOutQuad",
    //     duration: 2250,
    //     delay: (el, i) => 150 * (i+1)
    //   }).add({
    //     targets: '.nom-intro, .nom-intro2',
    //     opacity: 0,
    //     duration: 1000,
    //     easing: "easeOutExpo",
    //     delay: 1000
    //   });

      anime({
          targets:".fond-colore",
          scaleX: [0,1],
          easing: 'easeOutCirc',
          direction:"alternate",
          duration:1000,
      })
    //   anime({
    //     targets:'.nom-intro, .nom-intro2',
    //     translateX: 100,
    //     easing: 'easeInQuad',
    //     // direction:"alternate",
    //     duration:550,
    // })
    //   anime({
    //     targets:'.nom-intro2',
    //     color: "#CCE5CC",
    //     easing: 'easeInQuad',
    //     duration:550,
    // })
      
})
