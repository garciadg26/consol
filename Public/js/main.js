$(document).ready(function() {
    scrollHeader();
    showHideMenu();
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