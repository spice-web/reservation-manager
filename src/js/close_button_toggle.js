    const closeButtons = document.querySelectorAll('.close_button');
    const toggleArea = document.querySelectorAll('.is-active');

    // close_buttonをクリックしたらis-activeをremoveしてis-noneをaddする

    closeButtons.forEach((closeButton, index) => {
      closeButton.addEventListener('click', () => {
        toggleArea[index].classList.toggle('is-none');
        closeButton.textContent = closeButton.textContent === '閉じる' ? '開く' : '閉じる';
        closeButton.classList.toggle('c-button__open');
        closeButton.classList.toggle('c-button__close');
      });
    });