const calculateScroll = () => {
  const topDist = 50;
  const header = document.getElementById('header');

  if (document.documentElement.scrollTop > topDist)
  {
    header.classList.add('header--scrolled');
  }
  else
  {
    header.classList.remove('header--scrolled');
  }

  const parallaxElements = Array.from(document.getElementsByClassName('parallax--background'))

  parallaxElements.forEach(element => {
    const rect = element.getBoundingClientRect()
    const overScrolled = document.documentElement.scrollTop - rect.x

    if (overScrolled > 0) {
      element.style.top = '-' + overScrolled * 0.3 + 'px'
    } else {
      element.style.top = '0'
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
