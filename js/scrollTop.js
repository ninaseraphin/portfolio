window.addEventListener("load", function(){
    let flecheRetour= document.querySelector(".fleche-retour");

    flecheRetour.addEventListener("click", function(){
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    })


})