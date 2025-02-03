<!-- B-1-0 ログイン -->
<!DOCTYPE html>
<html lang="ja">
<?php include_once '../include/head.php'; ?>

<body>
  <div class="l-container__user-login">
    <form action="user_information.php" method="POST">
      <div>
        <label for="user_name">メールアドレスまたは携帯電話番号</label>
        <input type="text" name="user_name" class="u-w-full-wide" />
      </div>
      <div class="u-mb2">
        <label for="password">パスワード</label>
        <input type="password" name="password" class="u-w-full-wide" />
      </div>
      <p class="text-center u-font--14 u-mb3">パスワードを忘れた方は<a href="/" class="c-link-text">こちら</a>をクリック​</p>
      <input type="submit" value="ログイン" class="c-button__submit--yellow u-w240 u-mb2 u-horizontal-auto" />
      <input type="submit" value="お得な新規会員登録​" class="c-button__submit--yellow u-w240 u-horizontal-auto" />
      <input type="submit" value="会員登録なしで予約する​" class="c-button__submit--green u-w240 u-horizontal-auto" />
    </form>
  </div>
</body>

</html>