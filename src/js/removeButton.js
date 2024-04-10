//　選択済みの要素を削除するボタンの処理を記述

document.addEventListener('DOMContentLoaded', () => {
  const removeButtons = document.querySelectorAll('.button_remove');

  removeButtons.forEach(button => {
    button.addEventListener('click', () => {
      const parent = button.parentElement;
      parent.remove();
    });
  });
});