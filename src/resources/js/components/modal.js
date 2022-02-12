const initModals = () => {
  const modals = document.querySelectorAll(".modal");
  const modalLinks = document.querySelectorAll("[data-modal]");

  for (const modalLink of modalLinks) {
    modalLink.addEventListener('click', (e) => {
      e.preventDefault();
      const modalId = modalLink.dataset.modal;
      if (!modalId) return;
      modals.forEach(modal => {
        console.log(modal.id)
        if (modal.id != modalId) return;
        openModal(modal);
      })
    });
  }

  function openModal(modal) {
    modal.classList.add('active');
    document.body.classList.add('no-scroll')
  }

  for (const modal of modals) {
    initModal(modal);
  }
};

const initModal = (modalEl) => {
  if (!modalEl) return;
  const closeBtn = modalEl.querySelector('.modal__close');
  const bodyEl = document.body;

  closeBtn.addEventListener('click', closeModal);
  window.addEventListener('keydown', handleEscape);

  function handleEscape(e) {
    const isOpenModal = modalEl.classList.contains('active');
    if (e.key === 'Escape' && isOpenModal) {
      e.preventDefault();
      closeModal();
    }
  }

  function closeModal() {
    const isOpenModal = modalEl.classList.contains('active');
    const isNoScroll = bodyEl.classList.contains('no-scroll');
    if (isOpenModal)
      modalEl.classList.remove('active');
    if (isNoScroll)
      bodyEl.classList.remove('no-scroll');
  }
};


export default initModals;
