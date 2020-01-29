window.addEventListener("load", function(){
    let menuBurger= document.querySelector(".burger");
    let navMenu=document.querySelector(".nav-list-phone");
    let closeMenu=document.querySelector(".close");
    menuBurger.addEventListener("click", ()=> {
        console.log(navMenu);
        navMenu.classList.toggle("hide");
        menuBurger.classList.toggle("hide");
        closeMenu.classList.toggle("hide");
    });
    closeMenu.addEventListener("click", ()=> {
        console.log(navMenu);
        navMenu.classList.toggle("hide");
        menuBurger.classList.toggle("hide");
        closeMenu.classList.toggle("hide");
    });

});