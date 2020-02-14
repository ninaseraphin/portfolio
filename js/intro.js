// Wrap every letter in a span
window.addEventListener("load", function(){
    var textWrapper = document.querySelector(".nom-intro");
    console.log(textWrapper);
    // textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    let intro=document.querySelector(".intro");

      anime({
          targets:".fond-colore",
          scaleX: [0,1],
          easing: 'easeOutCirc',
          direction:"alternate",
          duration:1000,
          complete: function() {
            console.log("fini");
            intro.style.display="none";
            video.play();
          }
      });

      let video= anime({
          targets:"video",
          opacity: [0,1],
          easing: 'easeOutCirc',
          duration:800,
          autoplay:false,
      });
    
})
