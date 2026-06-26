<!-- B-1-1 受付入力 -->
<!DOCTYPE html>
<html lang="ja">
<?php include_once '../include/head.php'; ?>

<body>

  <?php
  $step = "vehicle-info";
  include_once '../include/user_input/header_information.php';
  include_once '../include/step.php'; ?>

  <div class="p-user-input__inner--sm">
    <!-- 受付入力 -->
    <form action="option_user_select.php" method="POST">

      <!-- 詳細情報入力 -->
      <div class="p-user-input-auto-output__wrap l-flex--item-end">

        <!-- 9/22 MTG修正 過去に利用した車両を参照する -->
        <!-- 入力エリア -->
        <div class="l-grid--col2-auto l-grid--gap2 l-flex--column--md">
          <!-- 過去に利用した車両を参照する -->
          <!-- 一旦非表示
          <div>
            <label for="past_vehicle">過去に利用した車両を参照する</label>
            <div class="c-form-select-color">
              <select name="past_vehicle" id="past_vehicle">
                <optgroup>
                  <option value="トヨタ　クラウン　1234　黒">
                    トヨタトヨタトヨタ　クラウンクラウンクラウンクラウンクラウンクラウン　1234　黒
                  </option>
                  <option value="">
                    新規入力
                  </option>
                </optgroup>
              </select>
            </div>
          </div>
          -->
          <div class="l-grid--col2-auto l-grid--gap2 l-flex--column--md">
            <!-- 車種 -->
            <div>
              <label for="car">車種<span class="c-label--required">※必須</span></label>
              <div class="c-form-select-color">
                <select id="car" name="car">
                  <option value="" selected disabled>選択してください</option>
                  <option value="未定">未定</option>
                  <option value="ダミーダミー">ダミーダミー</option>
                </select>
              </div>
            </div>
            <!-- メーカー -->
            <div>
              <label for="maker">メーカー</label>
              <!-- 車メーカーのselect -->
              <div class="c-form-select-color" data-select2-id="5">
                <select name="car_maker_id" id="car_maker_id" data-select2-id="car_maker_id" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">            
                </select>
              </div>
            </div>

            <!-- 色 -->
            <div>
              <label for="color">色<span class="c-label--required">※必須</span></label>
              <div class="c-form-select-color">
                <select id="color" name="color">
                  <option value="" selected disabled>選択してください</option>
                  <option value="未定">未定</option>
                  <option value="ダミーダミー">ダミーダミー</option>
                </select>
              </div>
            </div>

            <div>
              <label for="number">ナンバー（※4桁の数字）<span class="c-label--required">※必須</span></label>
              <input type="text" id="number" name="number" maxlength="4" minlength="4" class="u-w-full-wide">
            </div>

            <!-- 到着便航空会社 -->
            <div>
              <label for="car_color_id">到着便航空会社</label>
              <div class="c-form-select-color">
                <select id="airline_id" name="airline_id">
                  <option value="選択してください" disabled>選択してください</option>
                    <option value="">
                    </option>
                </select>
              </div>
            </div>

            <div>
              <label for="arrival">到着便名（例：200,300）</label>
              <input type="text" id="arrival" name="arrival" class="u-w-full-wide">
            </div>

            <!-- 到着日 -->
            <div>
              <label for="date">到着日</label>
              <input type="date" id="date" name="date" class="u-w-full-wide u-mb025">
              <!-- NOT FOUNDの場合下記のクラスを付与してください。 -->
              <!--
                <p id="flight_no_not_found"
                class="note text-left u-font--sm">
                指定の到着便名が見つかりません。</p>
              -->
              <p class="c-label--lg">到着日がお迎え日と異なる</p><!-- 9/22MTG クラス追加 -->
            </div>

            <!-- ご利用人数 -->
            <div>
              <label for="num_members">ご利用人数</label>
              <div class="c-form-select-number">
                <select name="" id="">
                  <option value="" selected disabled>選択してください</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <!-- 25まで -->
                  <option value="25">25</option>
                </select>
              </div>
            </div>
          </div>
          <!-- 9/22 MTG修正 過去に利用した車両を参照する ここまで-->

        </div><!-- 入力エリア -->

        <!-- 自動出力 -->
        <div class="p-user-input-auto-output__right u-mb1">
          <dl class="l-grid--col2 u-mb3 u-mb1--md">
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
          <div class="c-label--lg">到着日がお迎え日と異なる</div><!-- 9/22MTG クラス追加 -->
        </div>
      </div>

      <!--  -->
      <div class="c-button-group__form u-mt3">
        <a id="returnButton" class="c-button__pagination--return">前のページに戻る</a>
        <button type="submit" class="c-button__pagination--next">次へ進む</button>
      </div>
    </form>
  </div><!-- ./p-user-input__inner -->

  <?php include_once '../include/user/footer.php'; ?>
</body>

</html>