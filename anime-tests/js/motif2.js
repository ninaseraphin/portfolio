window.addEventListener("load", function(){
    /* Création et affichage des swatch dans les bonnes couleurs*/ 
    // let gamme= document.querySelector(".gamme-couleur");
    // let couleurs= document.querySelectorAll(".couleur"); 
    // let tabCouleurs=[];
    // for(i=0; i<couleurs.length; i++){
    //     let col = couleurs[i].getAttribute("fill");
    //     console.log(col);
    //     let ok=true;
    //     for(j=0; j<=tabCouleurs.length; j++){
    //         if( ok && tabCouleurs[j] == col){
    //             ok =false;
    //         }
    //     }
    //     if(ok){
    //         tabCouleurs.push(col);
    //         gamme.innerHTML+="<div class='swatch n"+i+"'></div>";
    //         let swatch=document.querySelector(".swatch.n"+i);
    //         swatch.style.backgroundColor=col;
    //     }
    // }
    
    let col0= document.querySelector(".couleur.n0").getAttribute("fill");
    let col1= document.querySelector(".couleur.n1").getAttribute("fill");
    let col2= document.querySelector(".couleur.n2").getAttribute("fill");
    let col3= document.querySelector(".couleur.n3").getAttribute("fill");

    let swatch0= document.querySelector(".swatch.n0");
    let swatch1= document.querySelector(".swatch.n1");
    let swatch2= document.querySelector(".swatch.n2");
    let swatch3= document.querySelector(".swatch.n3");
    swatch0.style.backgroundColor=col0;
    swatch1.style.backgroundColor=col1;
    swatch2.style.backgroundColor=col2;
    swatch3.style.backgroundColor=col3;

    // let animationCouleurs= anime.timeline({
    //     easing: "easeInQuart", 
    //     duration:6000,
    //     loop: true,
    //     direction: "alternate",
    // });

    // animationCouleurs.add({
    //     targets: ".n0",
    //     fill: ["#301f56","#7b292d", "#caa646"],
    //     backgroundColor:["#301f56","#7b292d", "#caa646"],
    // })
    // .add({
    //     targets: ".n1",
    //     fill: ["#e2a9af","#fe632b", "#0e909e"],
    //     backgroundColor:["#e2a9af","#fe632b", "#0e909e"],
    // })
    // .add({
    //     targets: ".point-orange, .n2",
    //     fill: ["#3b7ffe","#e95fac", "#cedede"],
    //     backgroundColor:["#3b7ffe","#e95fac", "#cedede"],
    // })

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