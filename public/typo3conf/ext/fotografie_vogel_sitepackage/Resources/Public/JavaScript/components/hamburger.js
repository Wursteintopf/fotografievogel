export function initBurgerMenu() {
    let burgerButton = document.getElementById('hamburger');

    console.log('test');

    burgerButton.addEventListener('click', (event) => {
        if (!burgerButton.classList.contains('is-active'))
        {
            burgerButton.classList.add('is-active');
        }
        else
        {
            burgerButton.classList.remove('is-active');
        }
    });
}
