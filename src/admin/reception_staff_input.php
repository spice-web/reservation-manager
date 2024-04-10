<!-- B-2-0 受付入力1（受付予約・スタッフが入力） -->
<!DOCTYPE html>
<html lang="en">
<?php include_once '../include/head.php'; ?>

<body>
  <div class="l-wrap">
    <?php include_once '../include/header.php'; ?>

    <?php include_once '../include/nav.php'; ?>
    <main class="l-wrap__main l-container__main">
      <div class="l-container__main">
        <!-- パンくず -->
        <ul class="l-wrap__breadcrumb l-breadcrumb">
          <li class="l-breadcrumb__list">受付入力1</li>
        </ul>
        <div class="l-container__inner">

          <form action="/admin/b-2-1.php" method="POST">
            <div class="l-grid--col2-auto l-grid--gap2 u-mb4">
              <div>
                <!-- 代理店コード -->
                <label for="agency_code" class="u-d-none">代理店コード</label>
                <input type="text" id="agency_code" class="u-w-full-wide" name="agency_code" value="0000" />
              </div>
              <div>
                <!-- 割引クーポン　セレクト -->
                <div class="l-grid--col2 l-grid--gap1 l-flex--item-end">
                  <div>
                    <label for="coupon" class="u-d-none">割引クーポン</label>
                    <div class="c-form-select-color">
                      <select id="coupon" name="coupon" class="u-w-full-wide">
                        <option value="0">割引クーポン</option>
                        <option value="1">クーポンコード1</option>
                        <option value="2">クーポンコード2</option>
                        <option value="3">クーポンコード3</option>
                      </select>
                    </div>
                  </div>
                  <button type="button" class="c-button__apply u-mb1">適用</button>
                </div>
              </div>
            </div>


            <!-- カレンダー選択 -->
            <div class="u-mb6">
              <p class="text-center u-mb2 u-font--medium">入庫日を指定してください</p>
              <div class="l-grid--col2 l-grid--gap2">
                <div>
                  <div class="c-title__calendar">2021年1月</div>
                </div>
                <div>
                  <div class="c-title__calendar">2024年2月</div>
                </div>
              </div>
            </div>

            <div class="u-mb6">
              <p class="text-center u-mb2 u-font--medium">入庫予定時間を指定してください</p>
              <div class="c-title__calendar">2024年2月</div>
            </div>

            <div class="u-mb6">
              <p class="text-center u-mb2 u-font--medium">出庫日を指定してください</p>
              <div class="l-grid--col2 l-grid--gap2">
                <div>
                  <div class="c-title__calendar">2021年1月</div>
                </div>
                <div>
                  <div class="c-title__calendar">2024年2月</div>
                </div>
              </div>
            </div>

            <!-- 駐車料金合計 -->
            <div class="u-border--all u-border--radius p-input-user-total-parking-charges">
              <p class="u-font--24 text-center">駐車料金合計</p>
              <div class="p-input-user-total-parking-charges__inner">
                <div class="p-input-user-total-parking-charges__head">
                  <div>入庫日</div>
                  <div>:</div>
                  <div>10/10(水)</div>
                  <div>出庫日</div>
                  <div>:</div>
                  <div>10/10(水)</div>
                  <div>利用日数</div>
                  <div>:</div>
                  <div>6日間</div>
                </div>

                <button type="button" id="open_button" class="c-label__light-deep-gray--lg is-block u-horizontal-auto u-mb1">内訳を表示</button>

                <div class="is-none p-input-user-total-parking-charges__detail" id="toggle_element">
                  <div class="p-input-user-total-parking-charges__detail-title">
                    <div>駐車料金明細（税込）</div>
                    <div type="button" class="p-input-user-total-parking-charges__detail-close-button" id="close_button"><img src="../images/icon/closeButton.svg" width="15" height="15" /></div>
                  </div>
                  <div class="p-input-user-total-parking-charges__detail-list">
                    <div>10/10(水)</div>
                    <div>¥1,000-</div>
                    <div>10/11(木)</div>
                    <div>¥1,000-</div>
                    <div>10/12(金)</div>
                    <div>¥1,500-</div>
                    <div>10/13(土)</div>
                    <div>¥2,000-</div>
                    <div>10/14(日)</div>
                    <div>¥2,000-</div>
                    <div>10/15(月)</div>
                    <div>¥300-</div>
                  </div>
                  <div class="p-input-user-total-parking-charges__detail-total">
                    <div>6日間</div>
                    <div>￥7,800-</div>
                  </div>
                </div>

                <!-- 料金明細 -->
                <div class="u-mt3 u-pt3 u-border--top p-input-user-total-parking-charges__detail-total">
                  <div>消費税(10%)</div>
                  <div>¥780-</div>
                  <div>駐車料金合計</div>
                  <div>¥8,580(税込)</div>
                </div>

              </div><!-- /.p-input-user-total-parking-charges__inner -->

              <button type="submit" class="c-button__submit u-horizontal-auto">予約に進む</button>
            </div><!-- /.p-input-user-total-parking-charges -->

          </form>

        </div><!-- /.l-container__inner -->
      </div>
    </main>

    <script src="../js/close_button_toggle.js"></script>
</body>

</html>