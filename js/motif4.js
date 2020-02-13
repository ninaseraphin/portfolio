window.addEventListener("load", function(){
    anime({
        targets: ".n0",
        keyframes: [
            {fill: "#301f56", backgroundColor: "#301f56"},
            {fill: "#7b292d", backgroundColor: "#7b292d"},
            {fill: "#caa646", backgroundColor: "#caa646"},
        ],
        duration:5000,
        loop: true,
        direction: "alternate",
    })
    anime({
        targets: ".n1",
        keyframes: [
            {fill: "#e2a9af", backgroundColor: "#e2a9af"},
            {fill: "#fe632b", backgroundColor: "#fe632b"},
            {fill: "#0e909e", backgroundColor: "#0e909e"},
        ],
        duration:5000,
        loop: true,
        direction: "alternate",
    })
    anime({
        targets: ".n2",
        keyframes: [
            {fill: "#3b7ffe", backgroundColor: "#3b7ffe"},
            {fill: "#e95fac", backgroundColor: "#e95fac"},
            {fill: "#cedede", backgroundColor: "#cedede"},
        ],
        duration:5000,
        loop: true,
        direction: "alternate",
    })







})