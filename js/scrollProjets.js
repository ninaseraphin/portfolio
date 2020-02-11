// // Initial state
// var scrollPos = 0;
// // adding scroll event
// window.addEventListener('scroll', function(){
//   // detects new state and compares it with the new one
//   if ((document.body.getBoundingClientRect()).top > scrollPos)
// 		console.log("UP");
// 	else
//     console.log("DOWN");
// 	// saves the new position for iteration.
// 	scrollPos = (document.body.getBoundingClientRect()).top;
// });
var position = document.documentElement.scrollTop;

document.addEventListener('scroll', function() {
  var scroll = document.documentElement.scrollTop;

  if (scroll > position) {
    console.log('down');
  } else {
    console.log('up');
  }
  
  position = scroll;
});