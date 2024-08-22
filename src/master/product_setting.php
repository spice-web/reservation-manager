<!-- G-8 商品設定 -->
<!DOCTYPE html>
<html lang="ja">
<?php include_once '../include/head.php'; ?>

<body>
  <div class="l-wrap">
    <?php include_once '../include/header.php'; ?>

    <?php include_once '../include/nav.php'; ?>

    <main class="l-wrap__main l-container__main">
      <!-- パンくず -->
      <ul class="l-wrap__breadcrumb l-breadcrumb">
        <li class="l-breadcrumb__list">商品設定</li>
      </ul>

      <div class="l-container__inner">
        <h2 class="c-title__lv2">新規登録 および 検索</h2>
        <form method="POST" action="" class="l-grid--col3-auto l-grid--start l-grid--gap2 u-mb3">
          <div>
            <div>
              <!-- 商品名 -->
              <label for="product_name">商品名</label>
              <input type="text" name="product_name" id="product_name" class="u-w-full-wide">
            </div>
            <div>
              <!-- 略称 -->
              <label for="abbreviation">略称</label>
              <input type="text" name="abbreviation" id="abbreviation" class="u-w-full-wide">
            </div>
            <div>
              <!-- メモ -->
              <label for="memo">メモ</label>
              <textarea name="memo" id="memo" cols="40"></textarea>
            </div>
          </div>
          <div>
            <div class="l-grid--col2 l-grid--gap1">
              <div>
                <!-- カテゴリーselect -->
                <label for="category">カテゴリー</label>
                <div class="c-form-select-wrap">
                  <select name="category" id="category">
                    <option value="" disabled selected>選択してください</option>
                    <option value="category1">カテゴリ1</option>
                    <option value="category2">カテゴリ2</option>
                    <option value="category3">カテゴリ3</option>
                  </select>
                </div>
              </div>
              <!-- 税区分 -->
              <div>
                <label for="tax_division">税区分</label>
                <div class="c-form-select-wrap">
                  <select name="tax_division" id="tax_division">
                    <option value="1.1" selected>10%</option>
                    <option value="1.08">8%</option>
                    <option value="1">対象外</option>
                  </select>
                </div>
              </div>
            </div>

            <!-- 金額（税抜） -->
            <div>
              <label for="price">金額（税抜）</label>
              <input type="text" name="price" id="price">
            </div>

            <!-- 計算するボタン -->
            <div class="l-grid--col3 u-border--bottom u-pb05">
              <button type="button" class="c-button__calculate" id="button_calculator">計算</button>
              <label for="total">税込価格</label>
              <span id="total" class="u-font--24">0円</span>
            </div>
          </div>

          <div class="l-flex--column l-flex--self-end">
            <button type="submit" class="c-button__submit u-mb1">登録</button>
            <button class="c-button__submit--gray u-mb1"">検索</button>
          </div>
        </form>

        <h2 class=" c-title__lv2">登録済み商品一覧</h2>
              <table class="l-table-list">
                <thead class="l-table-list__head">
                  <tr>
                    <th>商品名</th>
                    <th>略称</th>
                    <th>商品カテゴリ</th>
                    <th>税区分</th>
                    <th>金額（税抜）</th>
                    <th>メモ</th>
                    <th></th>
                  </tr>
                </thead>

                <tbody class="l-table-list__body">
                  <tr>
                    <td>洗車</td>
                    <td>S洗</td>
                    <td>洗車</td>
                    <td class="text-right">10%</td>
                    <td class="text-right">00,000円</td>
                    <td class="c-balloon-memo">
                      <button type="button" class="button_open c-button__memo">メモ</button>
                      <!-- 吹き出し -->
                      <div class="c-balloon-memo__box">
                        <div class="c-balloon-memo__text">メモ内容が入ります。メモ内容が入ります。
                          <div class="button_close c-balloon-memo__close">閉じる</div>
                        </div>
                      </div>
                    </td>
                    <td><button class="c-button__edit">編集</button></td>
                  </tr>
                  <tr>
                    <td>洗車</td>
                    <td>S洗</td>
                    <td>洗車</td>
                    <td class="text-right">10%</td>
                    <td class="text-right">00,000円</td>
                    <td class="c-balloon-memo">
                      <button type="button" class="button_open c-button__memo">メモ</button>
                      <!-- 吹き出し -->
                      <div class="c-balloon-memo__box">
                        <div class="c-balloon-memo__text">メモ内容が入ります。メモ内容が入ります。
                          <div class="button_close c-balloon-memo__close">閉じる</div>
                        </div>
                      </div>
                    </td>
                    <td><button class="c-button__edit">編集</button></td>
                  </tr>
                  <tr>
                    <td>洗車</td>
                    <td>S洗</td>
                    <td>洗車</td>
                    <td class="text-right">10%</td>
                    <td class="text-right">00,000円</td>
                    <td class="c-balloon-memo">
                      <button type="button" class="button_open c-button__memo">メモ</button>
                      <!-- 吹き出し -->
                      <div class="c-balloon-memo__box">
                        <div class="c-balloon-memo__text">メモ内容が入ります。メモ内容が入ります。
                          <div class="button_close c-balloon-memo__close">閉じる</div>
                        </div>
                      </div>
                    </td>
                    <td><button class="c-button__edit">編集</button></td>
                  </tr>
                </tbody>
              </table>
          </div>
    </main><!-- /.l-container__main -->
  </div><!-- /.l-container__wrap -->

  <!-- button_openを押したらbutton_closeにis-blockを付与 -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const buttonOpenList = document.querySelectorAll('.button_open');
      const buttonCloseList = document.querySelectorAll('.button_close');
      const balloonBoxList = document.querySelectorAll('.c-balloon-memo__box');

      buttonOpenList.forEach(function(buttonOpen, index) {
        buttonOpen.addEventListener('click', function() {
          // 対応する吹き出しの表示
          balloonBoxList[index].classList.add('is-inline-block');
        });
      });

      buttonCloseList.forEach(function(buttonClose, index) {
        buttonClose.addEventListener('click', function() {
          // 吹き出しを閉じる
          balloonBoxList[index].classList.remove('is-inline-block');
        });
      });
    });
  </script>

  <!-- 計算 -->
  <!-- button_calculatorをクリックしたらtax_division × price してtotalに値を入れる  -->
  <script src="../js/calculator.js">

  </script>
</body>

</html>