<!DOCTYPE html>
<html lang="ja">

<?php include_once 'include/head.php'; ?>

<body>
  <?php include_once 'include/header.php'; ?>

  <div class="l-container__admin">
    <figure class="u-mb1"><img src="images/svg/logo.svg" alt="ロゴ" width="255px" height="auto" class="u-horizontal-auto is-block"></figure>
    <div class="c-form__admin--title">ユーザーログイン</div>
    <form action="" method="POST" class="c-form__admin">
      <div>
        <label for="user_name">ユーザーID</label>
        <input type="text" name="user_name" class="c-input__admin" />
      </div>
      <div class="u-mb2">
        <label for="password">パスワード</label>
        <input type="password" name="password" class="c-input__admin" />
      </div>
      <input type="submit" value="ログイン" class="c-button__submit u-horizontal-auto" />
    </form>
  </div>

  <!-- content -->
  <?php include_once 'include/footer.php'; ?>
</body>

</html>