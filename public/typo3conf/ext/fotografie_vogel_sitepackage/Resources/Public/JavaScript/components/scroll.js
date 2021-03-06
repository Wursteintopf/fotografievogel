import { burgerMenuOpen } from "./hamburger.js";

const calculateScroll = () => {
  const topDist = 50;
  const header = document.getElementById('header');

  if (document.documentElement.scrollTop > topDist)
  {
    header.classList.add('header--scrolled');
  }
  else if (!burgerMenuOpen)
  {
    header.classList.remove('header--scrolled');
  }

  const parallaxElements = Array.from(document.getElementsByClassName('parallax--container'))

  parallaxElements.forEach(parent => {
    const rect = parent.getBoundingClientRect()
    const overScrolled = document.documentElement.scrollTop - rect.x
    const element = parent.children[0]

    if (overScrolled > 0) {
      const scrollPos = (overScrolled/rect.height) * (element.scrollHeight - rect.height)
      element.style.top = '-' + scrollPos + 'px'
      const scaleSize = 1 + (overScrolled/rect.height) * 0.2
      // element.style.transform = 'scale(' + scaleSize + ')'
    } else {
      element.style.top = '0'
      // element.style.transform = 'scale(1)'
    }
  })
}

export const initializeScroll = () => {
  calculateScroll()

  let scrolling = false;
  let delta = 10;

  window.onscroll = function () {
    scrolling = true;
  };
  setInterval(function () {
    if (scrolling) {
      scrolling = false;
      calculateScroll();
    }
  }, delta)
}
