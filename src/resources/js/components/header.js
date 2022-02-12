const initHeader = () => {
  const headerEl = document.querySelector(".header");
  const firstSectionEl = document.querySelector(".first-section");
  const observerOptions = {threshold: 0};
  const observer = new IntersectionObserver(intersectionCallback, observerOptions);

  function handleChangeColor(isIntersecting) {
    if (isIntersecting) {
      headerEl.classList.remove("scrolled");
    } else {
      headerEl.classList.add("scrolled");
    }
  };

  function intersectionCallback([entry]) {
    handleChangeColor(entry.isIntersecting);
  };
  observer.observe(firstSectionEl);
};

export default initHeader;
