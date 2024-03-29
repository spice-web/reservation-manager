<!-- 受付入力 -->
<!DOCTYPE html>
<html lang="ja">
<?php include_once '../include/head.php'; ?>

<body>
  <div class="p-user-input__head">受付入力</div>

  <!-- STEP -->
  <div class="l-breadcrumb-modal__wrap u-mb2">
    <div class="l-breadcrumb-modal__item --current">受付入力</div>
    <div class="l-breadcrumb-modal__item">予約内容確認</div>
    <div class="l-breadcrumb-modal__item">お会計</div>
  </div>

  <div class="p-user-input__inner">
    <!-- 受付入力 -->
    <form action="/admin/reservation_confirm.php" method="POST">

      <!-- 基本情報 -->
      <div class="l-flex l-grid--gap1">
        <div>
          <label for="name">氏名</label>
          <input type="text" id="name" name="name">
        </div>
        <div>
          <label for="kana">ふりがな</label>
          <input type="text" id="kana" name="kana">
        </div>
      </div>

      <div>
        <label for="tel">携帯番号</label>
        <input type="tel" id="tel" name="tel">
      </div>

      <!-- 郵便番号・メールアドレス・領収書の名前・備考 -->
      <label for="zip">郵便番号</label>
      <input type="text" id="zip" name="zip">

      <div class="l-flex l-grid--gap1">
        <div>
          <label for="email">メールアドレス</label>
          <input type="email" id="email" name="email">
        </div>
        <div>
          <label for="receipt">領収書の名前</label>
          <input type="text" id="receipt" name="receipt">
        </div>
      </div>

      <label for="note">備考</label>
      <textarea name="note" id="note" cols="50" rows="3"></textarea>


      <!-- 詳細情報入力 -->
      <div class="l-grid--col2 l-grid--gap2 l-flex--item-end">
        <div>
          <div class="l-flex l-grid--gap1">
            <div>
              <label for="maker">メーカー</label>
              <input type="text" id="maker" name="maker">
            </div>
            <div>
              <label for="car">車種</label>
              <input type="text" id="car" name="car">
            </div>
          </div>

          <div class="l-flex l-grid--gap1">
            <div>
              <label for="color">色</label>
              <input type="text" id="color" name="color">
            </div>
            <div>
              <label for="number">ナンバー（※4桁の数字）</label>
              <input type="text" id="number" name="number" maxlength="4" minlength="4">
            </div>
          </div>

          <div class="l-flex l-grid--gap1">
            <div>
              <label for="departure">出発便</label>
              <input type="text" id="departure" name="departure">
            </div>
            <div>
              <label for="arrival">到着便
                <input type="text" id="arrival" name="arrival">
              </label>
            </div>
          </div>
          <div class="l-flex l-grid--gap1">
            <div>
              <label for="people">ご利用人数</label>
              <input type="number" id="people" name="people">
            </div>
            <div>
              <label for="date">到着日</label>
              <input type="date" id="date" name="date">
            </div>
          </div>
        </div>

        <div class="u-mb1">
          <dl class="l-grid--col2 u-mb3">
            <dt>航空会社名</dt>
            <dd class="text-right">日本航空</dd>
            <!-- 福岡空港 成田空港 18:20 -->
            <dt>出発空港</dt>
            <dd class="text-right">福岡空港</dd>
            <dt>到着空港</dt>
            <dd class="text-right">成田空港</dd>
            <dt>到着予定時間</dt>
            <dd class="text-right">18:20</dd>
          </dl>
          <div>到着日がお迎え日と異なる</div>
        </div>
      </div>

      <!--  -->
      <div class="l-flex--center l-grid--gap1 u-mt3">
        <button id="returnButton" class="c-button__pagination--return">前のページに戻る</button>
        <button type="submit" class="c-button__pagination--next">内容確認へ進む</button>
      </div>
    </form>
  </div><!-- ./p-user-input__inner -->
</body>

</html>