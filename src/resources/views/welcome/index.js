/* import common js */
import "../../js/common";
import initHeader from "../../js/components/header";
import initBurgerMenu from "../../js/components/burgerMenu";
import initModals from "../../js/components/modal";

/* Your JS Code goes here */
window.addEventListener("DOMContentLoaded", () => {
  initHeader();
  initBurgerMenu();
  initModals();
});

window.addEventListener("load", () => {
});
