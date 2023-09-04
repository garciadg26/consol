$(document).ready(function() {
    scrollHeader();
    showHideMenu();
    menuActive();
});

/*=============== CHANGE BACKGROUND HEADER ===============*/
function scrollHeader(){
    const header = document.getElementById('header');
    // When the scroll is greater than 50 viewport height, add the scroll-header class to the header tag
    if(this.scrollY >= 40){
        header.classList.add('scroll-header');
        // header.classList.remove('color_white');
    } else{
        header.classList.remove('scroll-header');
        // header.classList.add('color_white');
    }
}
window.addEventListener('scroll', scrollHeader)

function showHideMenu(){
    const   navMenu = document.getElementById('nav-menu'),
            navToggle = document.getElementById('nav-toggle'),
            navClose = document.getElementById('nav-close');

    /* 01 - VALIDAMOS */
    if(navToggle){
        navToggle.addEventListener('click', () => {
            navMenu.classList.add('show-menu');
        });
    }

    if(navClose){
        navClose.addEventListener('click', () => {
            navMenu.classList.remove('show-menu');
        });
    }
    
}

function menuActive(){

    if(document.URL.includes('nosotros.php')){
        $('.nav__list > li').removeClass('active');
        $('.nav__list > li:nth-child(3)').addClass('active');
    }
    if(document.URL.includes('proyectos.php')){
        $('.nav__list > li').removeClass('active');
        $('.nav__list > li:nth-child(4)').addClass('active');
    }
    if(document.URL.includes('calentador-solar.php')){
        $('.nav__list > li').removeClass('active');
        $('.nav__list > li:nth-child(6)').addClass('active');
    }
    if(document.URL.includes('contacto.php')){
        $('.nav__list > li').removeClass('active');
        $('.nav__list > li:nth-child(7)').addClass('active');
    }
}