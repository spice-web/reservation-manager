<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
  <!-- discription -->
  <meta name="description" content="" />
  <!-- favicon -->
  <link rel="icon" href="" type="image/svg+xml">

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;600;700&display=swap" rel="preload" as="style" />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'" />
</head>

<body>
  <?php include_once 'include/header.php'; ?>

  <div class="l-container__admin">
    <figure class="u-mb1"><img src="images/svg/logo.svg" alt="ロゴ" width="255px" height="auto" class="u-horizontal-auto is-block"></figure>
    <div class="c-form__admin--title">ユーザーログイン</div>
    <form action="" class="c-form__admin">
      <div>
        <label for="user_name">ユーザーID</label>
        <input type="text" name="user_name" placeholder="ユーザーID" class="c-input__admin" />
      </div>
      <div class="u-mb2">
        <label for="password">パスワード</label>
        <input type="password" name="password" placeholder="パスワード" class="c-input__admin" />
      </div>
      <input type="submit" value="ログイン" class="c-button__submit u-horizontal-auto" />
    </form>
  </div>

  <!-- content -->
  <?php include_once 'include/footer.php'; ?>
</body>

</html>