<footer class="l-footer-user" id="footer">
  <div class="l-footer-user__inner">
    <div>
      <figure class="l-footer-user__logo">
        <img src="/assets/images/logo/logo.png" width="100%" alt="logo">
      </figure>
      成田空港駐車場サンパーキング<br>
      〒286-0121 千葉県成田市駒井野134<br>
      TEL : 0476-33-1155<br>
      ［営業時間］5：00～22：30<br class="br--sp" />（成田空港最終便到着まで対応）
    </div>
    <div class="l-flex l-flex--item-start l-flex--center--md l-grid--gap1 u-font--white">
      <a href="https://www.sunparking.co.jp/guide/" target="_blank" class="c-button-user__footer--access">駐車場へのアクセス</a>
      <a href="mailto:" class="c-button-user__footer--contact">お問い合わせ</a>
    </div>
  </div>
  <p class="l-footer-user__copy">© 2025 Sunparking Co., Ltd.</p>
  <button id="gototop" class="c-button__button"><img src="/assets/images/icon/chevron-up.svg" width="18px" height="10px" alt=""></button>
</footer>

<script>
  const footer = document.getElementById('footer');
  const gototopButton = document.getElementById('gototop');

  window.addEventListener('scroll', function() {
    const footerTop = footer.offsetTop;
    const scrollPosition = window.scrollY + window.innerHeight;
    if (scrollPosition >= footerTop) {
      gototopButton.classList.add('in-footer');
    } else {
      gototopButton.classList.remove('in-footer');
    }
  });

  // ボタンクリックでページトップに戻る
  gototopButton.addEventListener('click', function() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
</script>

<!-- ページが短い場合にフッターを画面下部に固定する -->
 <!-- n-20　パスワードリセット完了ページ -->
<!-- <script>
  (function() {
    var footer = document.getElementById('footer');
    function adjustFooter() {
      footer.style.position = '';
      footer.style.bottom = '';
      footer.style.left = '';
      footer.style.width = '';
      var rect = footer.getBoundingClientRect();
      if (rect.bottom < window.innerHeight) {
        footer.style.position = 'fixed';
        footer.style.bottom = '0';
        footer.style.left = '0';
        footer.style.width = '100%';
      }
    }
    adjustFooter();
    window.addEventListener('resize', adjustFooter);
  })();
</script> -->

<!-- Enterキーで「次の入力欄に移動」する（Tabキーの代わり） -->
<script>
// input, selectのみEnterで次の入力欄に移動。textareaは除外。
const inputs = document.querySelectorAll('input, select');

inputs.forEach((input, index) => {
  input.addEventListener('keydown', function(e) {
    if (e.key === 'Enter') {
      e.preventDefault(); // 改行やSubmitを防止
      // 次の要素が存在すればフォーカスを移動
      if (inputs[index + 1]) {
        inputs[index + 1].focus();
      }
    }
  });
});
</script>