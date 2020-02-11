window.addEventListener("load", function(){
    let containers=document.querySelectorAll(".unProjet-container");
    let nbSlides=containers.length;

    let sectionPoints=document.querySelector(".points");
    for (i=0; i<nbSlides; i++){
        sectionPoints.innerHTML+="<div class='cercle' id="+ i +"></div>"
    }
    console.log(nbSlides);
 
    let points= document.querySelector(".points");
    points.addEventListener("click", function(e){
        if(e.target.id !== ""){
            console.log(e.target.id);
            for(i=0; i< nbSlides; i++){
                if(i == e.target.id){
                    console.log(containers[i].id);
                    containers[i].classList.add("visible");
                    containers[i].classList.remove("cache");
                }else{
                    containers[i].classList.remove("visible");
                    containers[i].classList.add("cache");
                }
            }
        }
    });
})