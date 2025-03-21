<!-- N-15 -->
<!-- 顧客編集 -->

<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- head内の違いは /css/user/style.css のみ -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>顧客情報編集</title>
  <!-- description -->
  <meta name="description" content="" />
  <!-- favicon -->
  <link rel="icon" href="" type="image/svg+xml">

  <!-- フォント設定 -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;600;700&display=swap" rel="preload" as="style" />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'" />

  <!-- css -->
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/user/style.css">
  <!-- Optional - CSS SVG Icons (Font Awesome) -->
  <link rel="stylesheet" type='text/css' media='all' href="/css/svg-icons.css">
</head>

<body>
  <?php include('../include/user/header.php'); ?>
  <div class="p-user-input__inner--sm">
    <!-- パンくず -->
    <ul class="p-user-breadcrumb">
      <li class="p-user-breadcrumb__list"><a href="">マイページ</a></li>
      <li class="p-user-breadcrumb__list">顧客情報編集</li>
    </ul>
    <h2 class="c-title__user">顧客情報</h2>
    <form action="" method="POST">
      <div class="l-flex l-grid--cgap1 l-flex--column--md l-flex--items-start--md">
        <div class="u-w-full-wide">
          <label for="name">氏名※</label>
          <input type="text" id="name" name="name" class="u-w-full-wide">
        </div>
        <div class="u-w-full-wide">
          <label for="kana">ふりがな※</label>
          <input type="text" id="kana" name="kana" class="u-w-full-wide">
        </div>
      </div>

      <label for="tel">携帯番号※</label>
      <input type="tel" id="tel" name="tel" class="u-w-half u-w-full-wide--md">

      <label for="zip">郵便番号</label>
      <input type="text" id="zip" name="zip" class="u-w-half">

      <label for="email">メールアドレス※</label>
      <input type="email" id="email" name="email" class="u-w-half u-w-full-wide--md">

      <label for="email-confirm">メールアドレス※（確認用）</label>
      <input type="email" id="email-confirm" name="email-confirm" class="u-w-half u-w-full-wide--md">
      <!-- ボタン　サブミット -->
      <div class="l-flex--center u-mt3">
        <button type="submit" class="c-button__submit">更新</button>
      </div>
    </form>
  </div><!-- ./p-user-input__inner -->
</body>

</html>