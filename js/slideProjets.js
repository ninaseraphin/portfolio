window.addEventListener("load", function(){
    let containers=document.querySelectorAll(".unProjet-container");
    let nbSlides=containers.length;

    let sectionPoints=document.querySelector(".points");
 
    let points= document.querySelector(".points");
    points.addEventListener("click", function(e){
        console.log(e.target);
        if(e.target.dataset.id !== "" && e.target.dataset.id !== undefined){
            console.log(e.target.dataset.id);
            for(i=1; i<=nbSlides; i++){
                if(i == e.target.dataset.id){
                    console.log(containers[i-1].id);
                    containers[i-1].classList.add("visible");
                    containers[i-1].classList.remove("cache");
                }else{
                    containers[i-1].classList.remove("visible");
                    containers[i-1].classList.add("cache");
                }
            }
        }
    });
})