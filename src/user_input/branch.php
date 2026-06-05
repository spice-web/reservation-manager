<!DOCTYPE html>
<html lang="ja">
<?php include_once '../include/head.php'; ?>
<body>
  <?php include_once '../include/user_input/header_information.php'; ?>
  <div class="p-user-input__inner u-mt4 u-mb4">
    <!-- 2026/6/30まで入庫の方 -->
    <div class="u-mb3 text-center u-mb4">
      <p class="u-mb1">2026/6/30まで入庫の方は</p>
      <div class="u-font--white ">
        <a href="#" class="u-horizontal-auto c-button--green u-w210">こちらをクリック</a>
      </div>
    </div>

    <!-- 2026/7/1〜入庫の方 -->
    <div class="text-center">
      <p class="u-mb1">2026/7/1〜入庫の方は</p>
      <a href="#" class="u-font--white u-horizontal-auto c-button--yellow u-w210">こちらをクリック</a>
    </div>
  </div>

  <?php include_once '../include/user/footer.php'; ?>

  <!-- このページにのみ適用することは可能でしょうか？ -->
  <!-- ページが短い場合にフッターを画面下部に固定する -->
  <script>
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
  </script>

</body>
</html>