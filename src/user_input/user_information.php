<!-- B-1-1 受付入力 -->
<!DOCTYPE html>
<html lang="ja">
<?php include_once '../include/head.php'; ?>

<body>

  <?php
  $step = "entry";
  include_once '../include/user_input/header_information.php';
  include_once '../include/step.php'; ?>

  <div class="p-user-input__inner--sm">
    <!-- 受付入力 -->
    <form action="/user_input/vehicle_details.php" method="POST">

      <!-- 基本情報 -->
      <div class="l-flex l-grid--gap1">
        <div>
          <label for="name">氏名※</label>
          <input type="text" id="name" name="name">
        </div>
        <div>
          <label for="kana">ふりがな※</label>
          <input type="text" id="kana" name="kana">
        </div>
      </div>

      <div>
        <label for="tel">携帯番号※</label>
        <input type="tel" id="tel" name="tel">
      </div>

      <!-- 郵便番号・メールアドレス・領収書の名前・備考 -->
      <label for="zip">郵便番号</label>
      <input type="text" id="zip" name="zip">

      <div class="l-grid--col2 l-grid--gap1">
        <div>
          <label for="email">メールアドレス※</label>
          <input type="email" id="email" name="email" class="u-w-full-wide">
        </div>
        <div>
          <label for="receipt">領収書の名前</label>
          <input type="text" id="receipt" name="receipt" class="u-w-full-wide">
        </div>
      </div>

      <label for="note">備考</label>
      <textarea name="note" id="note" cols="50" rows="3"></textarea>

      <div class="l-flex--center l-grid--gap1 u-mt3">
        <button type="submit" class="c-button__pagination--next">次へ進む</button>
      </div>
    </form>
  </div><!-- ./p-user-input__inner -->
</body>

</html>