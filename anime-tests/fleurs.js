window.addEventListener("load", function(){
    let flower = anime.timeline({

        duration: 600,
        easing: "easeInOutQuad",
        autoplay:true,
        direction:"alternate",
        loop: true,
    });

    flower.add({
        targets: ".path8",
        d:"M27.711,22.431c0,0,0.483,2.394,2.728,2.172c1.265-0.125,2.214-1.251,1.851-2.985C31.538,18.028,28.499,17.048,27.711,22.431z",
    }).add({
            targets: ".path1",
            d:"M31.423,24.618l-2.854-4.452c0,0-2.372-9.482,6.379-13.487C38.081,10.434,42.532,16.918,31.423,24.618z",
        }, "-=450")
        .add({
            targets: ".path2",
            d:
            "M29.851,19.455c-0.25,0.785-2.955,4.052-3.57,3.801s-15.707-12.763-9.93-14.221C22.128,7.575,32.671,10.597,29.851,19.455z",
        }, "-=450")
    .add({
        targets: ".path3",
        d:"M28.276,22.642c0,0-4.384-13.275-11.686-13.607C13.299,8.886,20.208,26.748,28.276,22.642z",
    }, "-=450")
    .add({
        targets: ".path4",
        d:"M29.021,22.152c0,0-13.664,4.429-9.807,11.699c3.858,7.271,2.47-2.789,12.228-9.615L29.021,22.152z",
    }, "-=450")
    .add({
        targets: ".path5",
        d:"M29.631,24.184c-0.068-0.545-17.791,0.625-8.825,17.135C22.662,42.392,30.459,30.797,29.631,24.184z",
    }, "-=450")
    .add({
        targets: ".path6",
        d:"M23.797,38.517c2.542-1.583,6.875,1.583,6.271-5.775c-0.683-8.309,5.158-7.853,0.604-8.18S19.505,41.189,23.797,38.517z",
    }, "-=450")
    .add({
        targets: ".path7",
        d:"M30.877,30.02c0,0,12.576,4.444,15.629,2.097c1.053-0.809,0.507-4.608-0.981-6.576c-1.486-1.967-5.913-4.214-8.433-6.011C34.571,17.733,26.755,23.734,30.877,30.02z",
    }, "-=450")


});