<!-- B-1-3 オプション選択 -->
<!DOCTYPE html>
<html lang="ja">

<?php include_once '../include/head.php'; ?>

<body>
  <?php
  $step = "option";
  include_once '../include/user_input/header_information.php';
  include_once '../include/step.php'; ?>

  <div class="p-user-input__inner--sm">
    <form action="reservation_confirm.php" method="POST">
      <div class="p-user-input-auto-output__wrap u-mb3 u-pb3 u-border--bottom-green">
        <!-- select ボタン -->
        <div class="p-input-user-option__select--input">
          <div class="c-button__select button_select">洗車</div>
          <div class="c-button__select button_select">メンテナンス</div>
          <div class="c-button__select button_select">保険</div>
          <div class="c-button__select button_select">回数券</div>
          <div class="c-button__select button_select">物販</div>
          <div class="c-button__select button_select">その他</div>
        </div>

        <!-- オプション選択項目自動出力 -->
        <div class="p-user-input-auto-output__right u-pl1">
          <div class="c-button__remove item-container"><img src="../images/icon/removeButton.svg" width="16" height="16" class="button_remove">手洗いWAX洗車 ¥2,500</div>
          <div class="c-button__remove item-container"><img src="../images/icon/removeButton.svg" width="16" height="16" class="button_remove">iPhone充電ケーブル ¥1,200</div>
        </div>
      </div>

      <div class="p-user-input-auto-output__wrap u-mb4">
        <div class="l-flex--start l-flex--item-end l-grid--gap05">
          <div>
            <label for="coupon">割引クーポン</label>
            <!-- クーポン -->
            <input type="text" id="coupon" name="coupon" class="u-mb0">
          </div>
          <button type="button" class="c-button__apply--green">適用</button>
        </div>
        <!-- オプション選択項目自動出力 -->
        <div class="p-user-input-auto-output__right u-pl1">
          <div class="c-button__remove"><img src="../images/icon/removeButton.svg" width="16" height="16" class="button_remove item-container">クーポンコード名称ダミー</div>
        </div>
      </div>

      <!-- pager -->
      <div class="c-button-group__form u-mt3">
        <a id="returnButton" class="c-button__pagination--return">前のページに戻る</a>
        <button type="submit" class="c-button__pagination--next">内容確認へ進む</button>
      </div>
    </form>
  </div>

  <!-- オプションをクリックしたら出てくるmodal -->
  <?php include_once '../include/option/option.php'; ?>

  <script src="../js/modalOption.js"></script>
  <script src="../js/removeButton.js"></script>
</body>

</html>