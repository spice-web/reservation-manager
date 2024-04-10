document.addEventListener('DOMContentLoaded', () => {
  const removeButtons = document.querySelectorAll('.button_remove');

  removeButtons.forEach(button => {
    button.addEventListener('click', () => {
      const parent = button.parentElement;
      parent.remove();
    });
  });
});