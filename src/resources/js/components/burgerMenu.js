const initBurgerMenu = () => {
  const burgerBtn = document.querySelector(".burger-button");
  const burgerMenu = document.querySelector(".burger-menu");
  const headerEl = document.querySelector(".header");
  const bodyEl = document.body;
  let isOpen = false;

  burgerBtn.addEventListener('click', toggleMenu);
  window.addEventListener('keydown', handleEscape);

  function handleEscape(e) {
    if (!isOpen) return;
    if (e.key === 'Escape') {
      e.preventDefault();
      closeMenu();
    }
  }

  function toggleMenu() {
    if (isOpen) {
      closeMenu();
    } else {
      openMenu();
    }
  }

  function openMenu() {
    burgerBtn.classList.toggle("active");
    burgerMenu.classList.toggle("active");
    headerEl.classList.add("open-menu");
    bodyEl.classList.add("no-scroll");
    isOpen = true;
  }

  function closeMenu() {
    const hasActiveBurgerBtn = burgerMenu.classList.contains('active');
    const hasActiveBurgerMenu = burgerMenu.classList.contains('active');
    const hasActiveHeader = headerEl.classList.contains('open-menu');
    const hasActiveBody = bodyEl.classList.contains('no-scroll');

    if (hasActiveBurgerBtn) burgerBtn.classList.remove("active");
    if (hasActiveBurgerMenu) burgerMenu.classList.remove("active");
    if (hasActiveHeader) headerEl.classList.remove("open-menu");
    if (hasActiveBody) bodyEl.classList.remove("no-scroll");

    isOpen = false;
  }
};

export default initBurgerMenu;
