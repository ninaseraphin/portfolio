window.addEventListener("load", function(){
    let fleches =document.querySelectorAll(".navProjet");
    checkPosition();

    function checkPosition() {
        // console.log(window.scrollY);
        let windowY = window.scrollY;
        if(windowY>800){
            for(i=0; i<fleches.length; i++){
                fleches[i].classList.add("show");
            }
            
        }else{
            for(i=0; i<fleches.length; i++){
                fleches[i].classList.remove("show");
            }
        }
    }

    window.addEventListener("scroll", checkPosition)


})