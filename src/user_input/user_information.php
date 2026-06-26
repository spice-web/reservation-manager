<!-- B-1-1 受付入力 -->
<!DOCTYPE html>
<html lang="ja">
<?php include_once '../include/head.php'; ?>

<body>

  <?php
  $step = "user-info";
  include_once '../include/user_input/header_information.php';
  include_once '../include/step.php'; ?>

  <div class="p-user-input__inner--sm">
    <!-- 受付入力 -->
    <form action="/user_input/vehicle_details.php" method="POST">

      <!-- 基本情報 -->
      <div class="l-flex l-grid--gap1 l-flex--column--md l-flex--items-start--md">
        <div class="u-w-full-wide">
          <label for="name">氏名<span class="c-label--required">※必須</span><br class="is-none--md" /><span class="u-font--sm">（間にスペースを入れて下さい。例:成田　太郎）</span></label><label for="name"></label>
          <input type="text" id="name" name="name" class="u-w-full-wide" placeholder="成田　太郎">
        </div>
        <div class="u-w-full-wide">
          <label for="kana">ふりがな<span class="c-label--required">※必須</span><br class="is-none--md" /><span class="u-font--sm">（間にスペースを入れて下さい。例:なりた　たろう）</span></label>
          <input type="text" id="kana" name="kana" class="u-w-full-wide" placeholder="なりた　たろう">
        </div>
      </div>

      <div class="u-w-full-wide">
        <label for="tel">携帯番号<span class="c-label--required">※必須</span></label>
        <input type="tel" id="tel" name="tel" class="u-w-full-wide" placeholder="090-1234-5678">
      </div>

      <!-- 郵便番号・メールアドレス・領収書の宛名・備考 -->
      <label for="zip">郵便番号（ハイフンなし）</label>
      <input type="text" id="zip" name="zip" class="u-w-full-wide" placeholder="1110000" pattern="\d{7}" title="郵便番号は7桁の数字で入力してください。">

      <div class="l-grid--col2 l-grid--gap1 l-flex--column--md">
        <div>
          <label for="email">メールアドレス<span class="c-label--required">※必須</span></label>
          <input type="email" id="email" name="email" class="u-w-full-wide">
        </div>
        <div>
          <label for="receipt">領収書の宛名</label>
          <input type="text" id="receipt" name="receipt" class="u-w-full-wide">
        </div>
      </div>

      <label for="note">備考</label>
      <textarea name="note" id="note" cols="50" rows="3" class="u-w-full-wide"></textarea>

      <div class="l-flex--center l-grid--gap1 u-mt3">
        <button type="button" class="c-button__pagination--return">日付選択に戻る</button>
        <button type="submit" class="c-button__pagination--next">次へ進む</button>
      </div>
    </form>
  </div><!-- ./p-user-input__inner -->

  <?php include_once '../include/user/footer.php'; ?>
</body>

</html>