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
      <!-- <div class="p-user-input-auto-output__wrap u-mb3 u-pb3 u-border--bottom-green">
        <div class="p-input-user-option__select--input">
          <div class="c-button__select button_select">洗車</div>
          <div class="c-button__select button_select">メンテナンス</div>
          <div class="c-button__select button_select">保険</div>
          <div class="c-button__select button_select">回数券</div>
          <div class="c-button__select button_select">物販</div>
          <div class="c-button__select button_select">オプション選択：100文字以上入れるとエラーになるが編集画面には残っているのは想定内の挙動でしょうか？</div>
        </div>
        <div class="p-user-input-auto-output__right u-pl1">
          <div class="c-button__remove item-container"><img src="../images/icon/removeButton.svg" width="16" height="16" class="button_remove">手洗いWAX洗車 ¥2,500</div>
          <div class="c-button__remove item-container"><img src="../images/icon/removeButton.svg" width="16" height="16" class="button_remove">iPhone充電ケーブル ¥1,200</div>
        </div>
      </div>

      <div class="p-user-input-auto-output__wrap u-mb4">
        <div class="l-flex--start l-flex--item-end l-grid--gap05">
          <div class="u-w-full-wide--md">
            <label for="coupon">割引クーポン</label>
            <input type="text" id="coupon" name="coupon" class="u-mb0 u-w-full-wide--md">
          </div>
          <button type="button" class="c-button__apply--green">適用</button>
        </div>
        <div class="p-user-input-auto-output__right u-pl1">
          <div class="c-button__remove"><img src="../images/icon/removeButton.svg" width="16" height="16" class="button_remove item-container">クーポンコード名称ダミー</div>
        </div>
      </div> -->

      <!-- お客様選択予約　ラジオボタン -->
      <!-- 旅行保険への加入を検討していますか？ -->
      <div class="p-user-input-optionSelect__wrap">
        <p class="">万が一の時にも安心、安全な<br class="is-none--md">旅行保険への加入を検討していますか？</p>
        <div class="p-user-input-optionSelect__radio">
          <label for="insurance_yes">
            <input type="radio" id="insurance_yes" name="insurance" value="yes" class="c-button__radio--input" checked>はい
          </label>
          <label for="insurance_no">
            <input type="radio" id="insurance_no" name="insurance" value="no" class="c-button__radio--input">いいえ
          </label>
        </div>
      </div>
      <div class="p-user-input-optionSelect__wrap">
        <!-- 当店自慢の洗車を希望しますか？ -->
        <p class="">当店自慢の洗車を希望しますか？</p>
        <div class="p-user-input-optionSelect__radio">
          <label for="carwash_yes">
            <input type="radio" id="carwash_yes" name="carwash" value="yes" class="c-button__radio--input" checked>はい
          </label>
          <label for="carwash_no">
            <input type="radio" id="carwash_no" name="carwash" value="no" class="c-button__radio--input">いいえ
          </label>
        </div>
      </div>
      <!-- お得な情報などが届くメルマガを希望しますか？ -->
      <div class="p-user-input-optionSelect__wrap">
        <p class="">お得な情報などが届く<br class="is-none--md">メルマガを希望しますか？</p>
        <div class="p-user-input-optionSelect__radio">
          <label for="newsletter_yes">
            <input type="radio" id="newsletter_yes" name="newsletter" value="yes" class="c-button__radio--input" checked>はい
          </label>
          <label for="newsletter_no">
            <input type="radio" id="newsletter_no" name="newsletter" value="no" class="c-button__radio--input">いいえ
          </label>
        </div>
      </div>

      <!-- pager -->
      <div class="c-button-group__form u-mt3">
        <a id="returnButton" class="c-button__pagination--return">前のページに戻る</a>
        <button type="submit" class="c-button__pagination--next">内容確認へ進む</button>
      </div>
    </form>
  </div>

  <?php include_once '../include/user/footer.php'; ?>

  <!-- オプションをクリックしたら出てくるmodal -->
  <?php include_once '../include/option/option.php'; ?>

  <script src="../js/modalOption.js"></script>
  <script src="../js/removeButton.js"></script>
</body>

</html>