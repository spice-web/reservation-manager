<!DOCTYPE html>
<html lang="ja">

<?php include_once 'include/head.php'; ?>

<body>
  <?php include_once 'include/header.php'; ?>

  <div class="l-container__admin">
    <div class="c-form__admin--title">パスワードリセット</div>
    <form action="" method="POST" class="c-form__admin">
      <div>
        <label for="user_name">新しいパスワードを設定してください</label>
        <input type="text" name="user_name" class="c-input__admin" />
      </div>
      <div>
        <label for="user_name">もう一度入力してください</label>
        <input type="text" name="user_name" class="c-input__admin" />
      </div>
      <input type="submit" value="更新する" class="c-button__submit u-horizontal-auto" />
    </form>
  </div>

</body>

</html>