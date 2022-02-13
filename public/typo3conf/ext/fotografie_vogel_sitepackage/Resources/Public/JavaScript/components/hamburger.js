export let burgerMenuOpen = false;

export function initBurgerMenu() {
    const topDist = 50;
    const burgerButton = document.getElementById('hamburger');
    const header = document.getElementById('header');
    const mobileMenu = document.getElementById('mobilemenu--list');
    const notHeader = document.getElementById('not-header');

    burgerButton.addEventListener('click', (event) => {
        if (!burgerButton.classList.contains('is-active'))
        {
            burgerMenuOpen = true;
            window.scrollTo({ top: 0, behavior: 'smooth' });
            burgerButton.classList.add('is-active');
            mobileMenu.classList.add('mobilemenu--list-visible');
            header.classList.add('header--scrolled');
            // setTimeout(() => {
            //     notHeader.classList.add('not-header--blurred');
            // }, 200)
        }
        else
        {
            burgerMenuOpen = false;
            burgerButton.classList.remove('is-active');
            mobileMenu.classList.remove('mobilemenu--list-visible');
            // notHeader.classList.remove('not-header--blurred');
            if (document.documentElement.scrollTop < topDist)
            {
                header.classList.remove('header--scrolled');
            }
        }
    });
}
