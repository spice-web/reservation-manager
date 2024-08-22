<!-- G-15 割引クーポン設定 -->
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
        <li class="l-breadcrumb__list">割引クーポン設定</li>
      </ul>

      <div class="l-container__inner">
        <h2 class="c-title__lv2">新規登録 および 検索</h2>
        <form method="POST" action="" class="l-grid--col2-auto l-grid--gap2 u-mb3">
          <div>

            <div class="l-grid--col4-auto l-grid--gap1">
              <div>
                <!-- 割引クーポン名 -->
                <label for="coupon_name">割引クーポン名</label>
                <input type="text" name="coupon_name" id="coupon_name" class="u-w100">
              </div>
              <div>
                <!-- 割引クーポンコード -->
                <label for="coupon_code">割引クーポンコード</label>
                <input type="text" name="coupon_code" id="coupon_code" class="u-w100">
              </div>
              <div>
                <!-- 割引クーポンコード2 -->
                <label for="coupon_code2">割引クーポンコード2</label>
                <input type="text" name="coupon_code2" id="coupon_code2" class="u-w100">
              </div>
              <div class="l-flex--self-end">
                <!-- 「可」「不可」ラジオボタン -->
                <div class="l-grid__radio">
                  <div class="c-button-optionSelect">
                    <input type="radio" name="code_select" value="0" id="possible" checked>
                    <label for="possible" class="u-w80 u-h40 u-mb1">可</label>
                  </div>
                  <div class="c-button-optionSelect">
                    <input type="radio" name="code_select" value="1" id="percent">
                    <label for="percent" class="u-w80 u-h40 u-mb1">%</label>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="l-grid--col4-auto l-grid--gap1">
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
                <!-- 利用回数制限 -->
                <div>
                  <label for="use_limit">利用回数制限</label>
                  <!-- 「1回」「複数回」ラジオボタン -->
                  <div class="l-grid__radio">
                    <div class="c-button-optionSelect">
                      <input type="radio" name="use_limit" value="1回" id="use_limit_once" checked>
                      <label for="use_limit_once" class="u-w80 u-h40 u-mb1">1回</label>
                    </div>
                    <div class="c-button-optionSelect">
                      <input type="radio" name="use_limit" value="複数回" id="use_limit_multiple">
                      <label for="use_limit_multiple" class="u-w80 u-h40 u-mb1">複数回</label>
                    </div>
                  </div>
                </div>

                <!-- 併用 -->
                <div>
                  <label for="allow_combine">併用</label>
                  <!-- 「可」「不可」ラジオボタン -->
                  <div class="l-grid__radio">
                    <div class="c-button-optionSelect">
                      <input type="radio" name="allow_combine" value="可" id="allow_combine_yes" checked>
                      <label for="allow_combine_yes" class="u-w80 u-h40 u-mb1">可</label>
                    </div>
                    <div class="c-button-optionSelect">
                      <input type="radio" name="allow_combine" value="不可" id="allow_combine_no">
                      <label for="allow_combine_no" class="u-w80 u-h40 u-mb1">不可</label>
                    </div>
                  </div>
                </div>

                <!-- メモ -->
                <div>
                  <label for="memo">メモ</label>
                  <textarea name="memo" id="memo" cols="40" rows="1"></textarea>
                </div>
              </div>
            </div>

            <div class="l-flex l-grid--gap1">
              <div>
                <!-- 割引対象となる入庫日 -->
                <label for="storage_date">割引対象となる入庫日</label>
                <input type="date" name="storage_date" id="storage_date">
                <!-- 時間 -->
                <input type="time" name="storage_time" id="storage_time">
              </div>
              <span>～</span>
              <div>
                <!-- 終了日 -->
                <label for="end_date">終了日</label>
                <input type="date" name="end_date" id="end_date">
                <!-- 時間 -->
                <input type="time" name="end_time" id="end_time">
              </div>
            </div>

          </div>

          <div class="l-flex--column l-flex--self-end">
            <button type="submit" class="c-button__submit u-mb1">登録</button>
            <button class="c-button__submit--gray u-mb1"">検索</button>
          </div>
        </form>

        <h2 class=" c-title__lv2">登録済み割引クーポン一覧</h2>
              <table class="l-table-list">
                <thead class="l-table-list__head">
                  <tr>
                    <th>割引クーポンコード</th>
                    <th>割引クーポン名</th>
                    <th>割引</th>
                    <th>併用</th>
                    <th>対象カテゴリ</th>
                    <th>割引対象となる入庫日時</th>
                    <th>メモ</th>
                    <th></th>
                  </tr>
                </thead>

                <tbody class="l-table-list__body">
                  <tr>
                    <td>2023thankyou</td>
                    <td>2023年感謝割引クーポン</td>
                    <td>5%</td>
                    <td>不可</td>
                    <td>駐車料金</td>
                    <td>2023/12/1（木）00:00 ～2024/1/31（木）23:59</td>
                    <td class="c-balloon-memo">
                      <button type="button" class="button_open c-button__memo">メモ</button>
                      <!-- 吹き出し -->
                      <div class="c-balloon-memo__box">
                        <div class="c-balloon-memo__text">メモ内容が入ります。メモ内容が入ります。
                          <div class="button_close c-balloon-memo__close"></div>
                        </div>
                      </div>
                    </td>
                    <td><button class="c-button__edit">編集</button></td>
                  </tr>
                  <tr>
                    <td>2023thankyou</td>
                    <td>2023年感謝割引クーポン</td>
                    <td>5%</td>
                    <td>不可</td>
                    <td>洗車</td>
                    <td>2023/12/1（木）00:00 ～2024/1/31（木）23:59</td>
                    <td class="c-balloon-memo">
                      <button type="button" class="button_open c-button__memo">メモ</button>
                      <!-- 吹き出し -->
                      <div class="c-balloon-memo__box">
                        <div class="c-balloon-memo__text">メモ内容が入ります。メモ内容が入ります。
                          <div class="button_close c-balloon-memo__close"></div>
                        </div>
                      </div>
                    </td>
                    <td><button class="c-button__edit">編集</button></td>
                  </tr>
                  <tr>
                    <td>2023thankyou</td>
                    <td>2023年感謝割引クーポン</td>
                    <td>1000円</td>
                    <td>不可</td>
                    <td>駐車料金</td>
                    <td>2023/12/1（木）00:00 ～2024/1/31（木）23:59</td>
                    <td class="c-balloon-memo">
                      <button type="button" class="button_open c-button__memo">メモ</button>
                      <!-- 吹き出し -->
                      <div class="c-balloon-memo__box">
                        <div class="c-balloon-memo__text">メモ内容が入ります。メモ内容が入ります。
                          <div class="button_close c-balloon-memo__close"></div>
                        </div>
                      </div>
                    </td>
                    <td><button class="c-button__edit">編集</button></td>
                  </tr>
                </tbody>
              </table>
          </div>

          <!--　モーダル -->
          <div id="modalArea" class="l-modal">
            <!-- モーダルのinnerを記述   -->
            <div class="l-modal__inner">
              <div id="modal_close" class="l-modal__close"></div>
              <div id="modal_content" class="l-modal__content">

              </div>
            </div>
          </div>
    </main><!-- /.l-container__main -->
  </div><!-- /.l-container__wrap -->

  <!-- button_openを押したらbutton_closeにis-blockを付与 -->
  <script src="../js/memo_open.js"></script>
  <!-- 計算 -->
  <!-- button_calculatorをクリックしたらtax_division × price してtotalに値を入れる  -->
  <script src="../js/calculator.js"></script>

  <script src="../js/modal.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const editButtons = document.querySelectorAll('.c-button__edit');
      const modalArea = document.getElementById('modalArea');
      const modalClose = document.getElementById('modal_close');
      const modalContent = document.getElementById('modal_content');

      editButtons.forEach(function(editButton) {
        editButton.addEventListener('click', function() {
          const row = editButton.closest('tr');
          const couponCode = row.querySelector('td:nth-child(1)').textContent;
          const couponName = row.querySelector('td:nth-child(2)').textContent;
          const discount = row.querySelector('td:nth-child(3)').textContent;
          const allowCombine = row.querySelector('td:nth-child(4)').textContent;
          const targetCategory = row.querySelector('td:nth-child(5)').textContent;
          const effectiveDate = row.querySelector('td:nth-child(6)').textContent;
          const memo = row.querySelector('.c-balloon-memo__text').textContent;

          // モーダルに値を表示する
          modalContent.innerHTML = `
          <form method="POST" action="">
            <p>割引クーポンコード: ${couponCode}</p>
            <p>割引クーポン名: ${couponName}</p>
            <p>割引: ${discount}</p>
            <p>併用: ${allowCombine}</p>
            <p>対象カテゴリ: ${targetCategory}</p>
            <p>割引対象となる入庫日時: ${effectiveDate}</p>
            <p>メモ: ${memo}</p>
            <button type="submit" name="action" value="new">新規登録</button>
            <button type="submit" name="action" value="overwrite">上書き保存</button>
          </form>
        `;
          // モーダルを表示する
          modalArea.classList.add('is-active');
        });
      });
    });

    modalClose.addEventListener('click', function() {
      modalArea.classList.remove('is-active');
    });
  </script>

</body>

</html>