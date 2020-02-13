window.addEventListener("load", function(){
    let containers=document.querySelectorAll(".unProjet-container");
    let cercles=document.querySelectorAll(".cercle");
    let nbSlides=containers.length;
    cercles[0].classList.add("vert");

    let sectionPoints=document.querySelector(".points");
 
    let points= document.querySelector(".points");
    points.addEventListener("click", function(e){
        console.log(e.target);
        if(e.target.dataset.id !== "" && e.target.dataset.id !== undefined){
            console.log(e.target.dataset.id);
            for(i=1; i<=nbSlides; i++){
                if(i == e.target.dataset.id){
                    let couleur = containers[i-1].childNodes[1].childNodes[1].classList[1];
                    console.log(couleur);
                    // console.log(containers[i-1].id);
                    containers[i-1].classList.add("visible");
                    containers[i-1].classList.remove("cache");
                    cercles[i-1].classList.add(couleur);
                }else{
                    let couleur=cercles[i-1].classList[1];
                    containers[i-1].classList.remove("visible");
                    containers[i-1].classList.add("cache");
                    cercles[i-1].classList.remove(couleur);
                }
            }
        }
    });
})