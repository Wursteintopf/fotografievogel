import {initializeScroll} from "./components/scroll.js";
import {initGallery} from "./components/gallery.js";
import {initBurgerMenu} from "./components/hamburger.js";

document.addEventListener('DOMContentLoaded', () => {
  initializeScroll();
  initBurgerMenu();
  initGallery();
});
