<!-- N-20 パスワードを忘れた方 -->
<!DOCTYPE html>
<html lang="ja">

<?php include_once 'include/head.php'; ?>

<body>
  <?php include_once 'include/header.php'; ?>

  <div class="l-container__admin">
    <div class="c-form__admin--title">パスワードを忘れた場合</div>
    <form action="" method="POST" class="c-form__admin">
      <div>
        <label for="user_name">メールアドレスを入力してください</label>
        <input type="text" name="user_name" class="c-input__admin" />
      </div>
      <input type="submit" value="パスワード再設定用メール送信" class="c-button--yellow u-horizontal-auto" />
    </form>
    <p class="text-center">上記メールアドレスに再設定用のURLを送信します。</p>
  </div>
  <div class="text-center u-mt2">
    <a href="">ログイン画面に戻る</a>
  </div>

</body>

</html>