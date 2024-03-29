<!-- 入力確認画面 -->
<!-- 受付入力 -->
<!DOCTYPE html>
<html lang="ja">
<?php include_once '../include/head.php'; ?>

<body>
  <div class="p-user-input__head">予約内容確認</div>

  <!-- STEP -->
  <div class="l-breadcrumb-modal__wrap u-mb2">
    <div class="l-breadcrumb-modal__item">受付入力</div>
    <div class="l-breadcrumb-modal__item --current">予約内容確認</div>
    <div class="l-breadcrumb-modal__item">お会計</div>
  </div>

  <div class="p-user-input__inner">
    <!-- 受付入力 -->
    <form action="/admin/reservation_complete.php" method="POST">

      <div class="p-user-input--confirm">
        <dl class="p-user-input--confirm__wrap u-border--radius">
          <dt>氏名</dt>
          <dd id="name_confirm"></dd>
          <dt>ふりがな</dt>
          <dd id="kana_confirm"></dd>
          <dt>携帯番号</dt>
          <dd id="tel_confirm"></dd>
          <dt>郵便番号</dt>
          <dd id="zip_confirm"></dd>
          <dt>メールアドレス</dt>
          <dd id="email_confirm"></dd>
          <dt>領収書の名前</dt>
          <dd id="receipt_confirm"></dd>
          <dt>備考</dt>
          <dd id="note_confirm" class="l-grid--colspan3"></dd>
          <dt>メーカー</dt>
          <dd id="maker_confirm"></dd>
          <dt>車種</dt>
          <dd id="car_confirm"></dd>
          <dt>色</dt>
          <dd id="color_confirm"></dd>
          <dt>ナンバー</dt>
          <dd id="number_confirm"></dd>
          <dt>出発便</dt>
          <dd id="departure_confirm"></dd>
          <dt>到着便</dt>
          <dd id="arrival_confirm"></dd>
          <dt>ご利用人数</dt>
          <dd id="people_confirm"></dd>
          <dt>到着日</dt>
          <dd id="date_confirm"></dd>
        </dl>
      </div>

      <!--  -->
      <div class="l-flex--center l-grid--gap1 u-mt3">
        <button id="returnButton" class="c-button__pagination--return">前のページに戻る</button>
        <button type="submit" class="c-button__pagination--next">お会計へ</button>
      </div>
    </form>
  </div><!-- ./p-user-input__inner -->
</body>

</html>