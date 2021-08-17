const btnMobile = document.getElementById('btn-mobile');
const menuItems = document.getElementById('menu__items');
const menu = document.getElementById('menu');

function toogleMenu(event) {
    if (event.type === 'touchStart') event.preventDefault();
    menu.classList.toggle('active');
    const active = menu.classList.contains('active');
    event.currentTarget.setAttribute('aria-expanded', active)
    if (active) {
        event.currentTarget.setAttribute('aria-label', 'Fechar menu')
    } else {
        event.currentTarget.setAttribute('aria-label', 'Abrir menu')
    }
}

function toogleItemMenu(event) {
    if (event.type === 'touchStart') event.preventDefault();
    menu.classList.toggle('active');
}

btnMobile.addEventListener('click', toogleMenu);
btnMobile.addEventListener('touchStart', toogleMenu);
menuItems.addEventListener('click', toogleItemMenu);
menuItems.addEventListener('touchStart', toogleItemMenu);