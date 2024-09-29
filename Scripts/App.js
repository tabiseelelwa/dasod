// Changer labarre de navigation au déroulement

window.addEventListener('scroll', ()=>{
    document.querySelector('nav').classList.toggle
    ('window-scroll', window.scrollY > 0)
})


// afficher/masquer les questions courantes

const faqs = document.querySelectorAll('.faq');

faqs.forEach(faq => {
    faq.addEventListener('click', ()=>{
        faq.classList.toggle('open');

        const icon = faq.querySelector('.fa__icon i');
        if(icon.className ==='fa fa-chevron-circle-down'){
            icon.className = 'fa fa-chevron-circle-right';
        }else{
            icon.className = 'fa fa-chevron-circle-down';
        }
    })
})

// Affichage menu

const menu = document.querySelector(".nav__menu");
const menuBtn = document.querySelector("#open-menu-btn");
const closeBtn = document.querySelector("#close-menu-btn");

menuBtn.addEventListener('click', ()=>{
    menu.style.display = "flex";
    closeBtn.style.display = "inline-block";
    menuBtn.style.display = "none";
})

// Fermeture du menu
const closeNav = () =>{
    menu.style.display = "none";
    closeBtn.style.display = "none";
    menuBtn.style.display = "inline-block";
}

closeBtn.addEventListener('click', closeNav)