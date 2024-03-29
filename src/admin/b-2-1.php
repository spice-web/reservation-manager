<!-- 受付入力1（受付予約・スタッフが入力） -->
<!DOCTYPE html>
<html lang="ja">
<?php include_once '../include/head.php'; ?>

<body>
  <div class="l-wrap">
    <?php include_once '../include/header.php'; ?>
    <?php include_once '../include/nav.php'; ?>


    <main class="l-wrap__main l-container__main">
      <!-- パンくず -->
      <ul class="l-breadcrumb">
        <li class="l-breadcrumb__list">予約管理TOP</li>
        <li class="l-breadcrumb__list">受付入力</li>
      </ul>
      <div class="l-container__inner">

        <form action="/admin/b-2-7.php" method="POST">
          <!-- BOX1 顧客検索 -->
          <div class="p-reception-entry__box">
            <div class="u-font--20 u-font--medium u-font--green">顧客検索</div>

            <div>
              <div class="l-grid l-grid--col3 l-grid--gap2">
                <div>
                  <label for="tel">電話番号</label>
                  <input type="tel" id="tel" name="tel" class="c-form-input--w100">
                </div>
                <div>
                  <label for="kana">ふりがな</label>
                  <input type="text" id="kana" name="kana" class="c-form-input--w100">
                </div>
                <div>
                  <label for="code">代理店コード</label>
                  <input type="text" id="code" name="code" class="c-form-input--w100">
                </div>
              </div>

              <button type="submit" class="c-button__submit--gray is-block u-horizontal-auto">検索</button>
            </div>
          </div><!-- /.l-reception-input__box -->

          <!-- BOX2 顧客情報 -->
          <div class="p-reception-entry__box--col3">
            <div class="u-font--20 u-font--medium u-font--green">顧客情報</div>

            <div>
              <div class="">
                <div>
                  <label for="name">顧客情報</label>
                  <input type="text" id="name" name="name" class="c-form-input--w100">
                </div>
                <div>
                  <label for="zip">郵便番号</label>
                  <input type="text" id="zip" name="zip">
                </div>
                <div>
                  <label for="email">メールアドレス</label>
                  <input type="text" id="email" name="email" class="c-form-input--w100">
                </div>
              </div>
            </div>

            <ul class="l-grid--col2">
              <div>顧客コード: </div>
              <div class="text-right">1234567890</div>
              <div>予約コード: </div>
              <div class="text-right">1234567890</div>
              <div>利用回数: </div>
              <div class="text-right">10</div>
              <div>会員ランク: </div>
              <div class="text-right">S</div>
              <div>トラブル: </div>
              <div class="text-right">あり</div>
              <div>ラベル3: </div>
              <div class="text-right">ラベル3</div>
              <div>ラベル4: </div>
              <div class="text-right">ラベル4</div>
            </ul>
          </div><!-- /.l-reception-input__box -->

          <!-- BOX3 車両情報 -->
          <div class="p-reception-entry__box--col3">
            <div class="u-font--20 u-font--medium u-font--green">車両情報</div>

            <div>
              <div class="">
                <div>
                  <label for="maker">メーカー</label>
                  <input type="text" id="maker" name="maker" class="c-form-input--w100">
                </div>
                <div>
                  <!-- 車種 -->
                  <label for="car">車種</label>
                  <input type="text" id="car" name="car" class="c-form-input--w100">
                </div>
                <div>
                  <!-- 色 -->
                  <label for="color">色</label>
                  <input type="text" id="color" name="color" class="c-form-input--w100">
                </div>
                <div>
                  <!-- ナンバー（※４桁の数字） -->
                  <label for="number">ナンバー</label>
                  <input type="text" id="number" name="number" class="c-form-input--w100" maxlength="4" minlength="4">
                </div>
                <div>
                  <!-- セレクト（取扱注意メモ） -->
                  <label for="memo">取扱注意メモ</label>
                  <select name="memo" id="memo" class="c-form-input--w100">
                    <option value="1">MT車</option>
                    <option value="2">取扱注意メモ2</option>
                    <option value="3">取扱注意メモ3</option>
                  </select>
                  <input type="text" placeholder="車高低、左ハンドル​">
                </div>
              </div>
            </div>

            <ul class="l-grid--col2">
              <div>車両サイズ: </div>
              <div class="text-right">1234567890</div>
              <div>予約コード: </div>
              <div class="text-right">1234567890</div>
              <div>利用回数: </div>
              <div class="text-right">10</div>
              <div>会員ランク: </div>
              <div class="text-right">S</div>
              <div>トラブル: </div>
              <div class="text-right">あり</div>
            </ul>
          </div><!-- /.l-reception-input__box -->

          <!-- BOX4 予約情報 -->
          <div class="p-reception-entry__box--col3">
            <div class="u-font--20 u-font--medium u-font--green">予約情報</div>

            <div>
              <div class="">
                <div>
                  <!-- ご利用人数（ご本人含む） -->
                  <label for="people">ご利用人数（ご本人含む）</label>
                  <input type="number" id="people" name="people" class="c-form-input--w100">
                </div>
                <div>
                  <!-- 到着便 -->
                  <label for="flight">到着便</label>
                  <input type="text" id="flight" name="flight" class="c-form-input--w100">
                </div>
                <div>
                  <!-- 到着日 -->
                  <label for="arrival">到着日</label>
                  <input type="date" id="arrival" name="arrival" class="c-form-input--w100">
                </div>
                <div>
                  <!-- チェックボックス（到着日とお迎え日が異なる） -->
                  <input type="checkbox" id="pickup" name="pickup">
                  <label for="pickup">到着日とお迎え日が異なる</label>
                </div>
              </div>
            </div>

            <ul class="l-grid--col2">
              <div>航空会社名: </div>
              <div class="text-right">1234567890</div>
              <div>出発空港: </div>
              <div class="text-right">1234567890</div>
              <div>到着空港: </div>
              <div class="text-right">10</div>
              <div>到着予定時間: </div>
              <div class="text-right">あり</div>
            </ul>
          </div><!-- /.l-reception-input__box -->

          <!-- BOX5 オプション選択 -->
          <div class="p-reception-entry__box--col3">
            <div class="u-font--20 u-font--medium u-font--green">オプション選択</div>

            <div class="p-reception-entry__optionSelect c-button_optionSelect">
              <!-- オプション選択（洗車/メンテナンス/保険/回数券/物販/その他） 複数選択可能　チェックボックス　チェックボックスは自体は見せない -->
              <div class="p-reception-entry__optionSelect--input c-button-optionSelect">
                <input type="checkbox" id="wash" name="wash">
                <label for="wash">洗車</label>

                <!-- メンテナンス -->
                <input type="checkbox" id="maintenance" name="maintenance">
                <label for="maintenance">メンテナンス</label>

                <!-- 保険 -->
                <input type="checkbox" id="insurance" name="insurance">
                <label for="insurance">保険</label>

                <!-- 回数券 -->
                <input type="checkbox" id="ticket" name="ticket">
                <label for="ticket">回数券</label>

                <!-- 物販 -->
                <input type="checkbox" id="goods" name="goods">
                <label for="goods">物販</label>

                <!-- その他 -->
                <input type="checkbox" id="other" name="other">
                <label for="other">その他</label>
              </div>
            </div>

            <ul class="l-grid--col2">
              <div>手洗いWAX洗車: </div>
              <div class="text-right">¥2,500</div>
              <div>iPhone充電ケーブル: </div>
              <div class="text-right">¥1,200</div>
            </ul>
          </div><!-- /.l-reception-input__box -->

          <!-- BOX6 予約メモ -->
          <div class="p-reception-entry__box">
            <div class="u-font--20 u-font--medium u-font--green">予約メモ</div>
            <textarea name="" id="" cols="30" rows="10"></textarea>
          </div>

          <div class="l-flex--center l-grid--gap2">
            <button type="button" class="c-button__submit--dark-gray">修正する</button>
            <button type="button" class="c-button__submit--dark-gray">予約内容確認</button>
            <button type="submit" class="c-button__submit">事前決済へ進む</button>
          </div>

        </form>

      </div><!-- /.l-container__inner -->
    </main><!-- /.l-container__main -->

  </div>
</body>

</html>