$(document).ready(function (){
    animationScroll();
});

/*=============== SCROLL REVEAL ANIMATION ===============*/
function animationScroll(){
    const sr = ScrollReveal({
        distance: '60px',
        duration: 2500,
        delay: 400,
        // reset: true
    })

    sr.reveal(`.home__header, .section__title`,{delay: 400})
    sr.reveal(`.home__footer`,{delay: 700})
    sr.reveal(`.home__img`,{delay: 900, origin: 'top'})
    
    sr.reveal(`.sponsor__img, .products__card, .footer__logo, .footer__content, .footer__copy`,{origin: 'top', interval: 100})
    sr.reveal(`.specs__data, .discount__animate`,{origin: 'left', interval: 100})
    sr.reveal(`.specs__img, .discount__img`,{origin: 'right'})
    sr.reveal(`.case__img`,{origin: 'top'})
    sr.reveal(`.case__data`)
    
    sr.reveal(`.home__photo1__fade`,{distance: '60px'})
    sr.reveal(`.home__photo1`,{delay: 100})
    sr.reveal(`.home__photo2`,{delay: 200})
    sr.reveal(`.home__photo3`,{delay: 300})
    sr.reveal(`.home__photo4`,{delay: 400})
    sr.reveal(`.home__photo5`,{delay: 500})
    sr.reveal(`.home__photo6`,{delay: 600})
    sr.reveal(`.home__photo7`,{delay: 700})
    sr.reveal(`.home__photo8`,{delay: 800})
    sr.reveal(`.home__photo9`,{delay: 900})
    sr.reveal(`.home__photo10`,{delay: 1000})
    sr.reveal(`.home__photo11`,{delay: 1100})
    sr.reveal(`.home__photo12`,{delay: 1200})
    sr.reveal(`.home__photo13`,{delay: 1300})
    sr.reveal(`.home__photo14`,{delay: 1400})
    sr.reveal(`.home__photo15`,{delay: 1500})
    sr.reveal(`.home__photo16`,{delay: 1600})
    sr.reveal(`.home__photo17`,{delay: 1700})
}