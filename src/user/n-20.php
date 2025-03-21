<!-- N-20 -->
<!-- 
 パスワード変更
 ログイン前のページとは異なる
 -->
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
  <?php include_once('../include/user/header.php'); ?>
  <div class="p-user-input__inner">
    <!-- パンくず -->
    <ul class="p-user-breadcrumb">
      <li class="p-user-breadcrumb__list"><a href="">マイページ</a></li>
      <li class="p-user-breadcrumb__list">パスワード再設定</li>
    </ul>
    <!-- パスワード変更 -->
    <div class="l-container__admin">
      <div class="c-form__admin--title">パスワード再設定</div>
      <form action="" method="POST" class="c-form__admin">
        <div>
          <label for="password">新しいパスワードを入力してください</label>
          <input type="text" name="password" class="c-input__admin" />
          <label for="password_confirm">もう一度入力してください</label>
          <input type="text" name="password_confirm" class="c-input__admin" />
        </div>
        <input type="submit" value="更新" class="c-button__submit u-horizontal-auto" />
      </form>
    </div>

    <div class="l-flex--center u-mt3">
      <a href="/user/dashboard.php" class="c-button__submit u-w170">マイページに戻る</a>
    </div>



  </div><!-- ./p-user-input__inner -->
</body>

</html>