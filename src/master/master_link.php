<!-- マスタ登録 -->
<!-- register.php -->
<!-- G-0 -->
<!DOCTYPE html>
<html lang="ja">
<?php include_once '../include/head.php'; ?>

<body>
  <div class="l-wrap">
    <?php include_once '../include/header.php'; ?>

    <?php include_once '../include/nav.php'; ?>

    <main class="l-wrap__main">
      <!-- パンくず -->
      <ul class="l-wrap__breadcrumb l-breadcrumb">
        <li class="l-breadcrumb__list">マスタ設定一覧</li>
      </ul>

      <div class="l-container__inner">

      <!-- 文字数多い場合、レイアウト崩れ修正のためCSSを変更 -->
        <div class="l-grid--col5-1fr l-grid--rgap2 l-grid--cgap1 u-font--white">
          <a href="" class="c-button--yellow c-link-no-border">商品カテゴリーマスタ</a>
          <a href="" class="c-button--yellow c-link-no-border">航空会社マスタ</a>
        </div>

      </div><!-- ./l-container__inner -->
    </main>

  </div>
</body>

</html>