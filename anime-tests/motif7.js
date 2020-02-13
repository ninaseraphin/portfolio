window.addEventListener("load", function(){
    let animTriangles=anime.timeline({
        duration:2000,
        direction:"reverse",
        easing:"easeInOutSine",
    })

    animTriangles  .add({
        targets: '.animTriangles #creme',
        translateY: -270,
      }, 100).add({
        targets: '.animTriangles #ciel',
        translateY: -300,
      })
  .add({
        targets: '.animTriangles #orange',
        translateY: -320,
      }, '-=100')
  .add({
        targets: '.animTriangles #vert1',
        translateY: -300,
      })
  .add({
        targets: '.animTriangles #jaune',
        translateY: -300,
      }, '-=100')
  .add({
        targets: '.animTriangles #turquoise1',
        translateY: -300,
      }, '-=100')
  .add({
        targets: '.animTriangles #moutarde',
        translateY: -250,
      }, '-=50')
  .add({
        targets: '.animTriangles #rose',
        translateY: -300,
      }, "-150")
  .add({
        targets: '.animTriangles #vert',
        translateY: -300,
      })
  .add({
        targets: '.animTriangles #violet',
        translateY: -300,
      })

})