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

            <!-- カレンダー選択 -->
            <div class="p-reserve__wrap">
              <p class="text-center u-mb2 u-font--medium">入庫日を指定してください</p>
              <div>
                <div class="c-title__calendar c-calendar-reserve">2021年1月</div>
              </div>
            </div>

            <!-- 出庫日 -->
            <div class="p-reserve__wrap">
              <p class="text-center u-mb2 u-font--medium">出庫日を指定してください</p>
              <div>
                <div class="c-title__calendar">2021年1月</div>
              </div>
            </div>

            <!-- src\user_input\user_calendar_select.phpを参照してください -->
            <div class="p-reserve__wrap">
              <p class="text-center u-mb2 u-font--medium">
                入庫予定時間を指定してください
              </p>
              <div class="c-title__calendar u-mb1">2024年2月</div>

              <!-- 時間選択 -->
              <dl class="p-reserve-selectedTime--detail">
                <dt class="c-calendar__heading">時間</dt>
                <dd>
                  <ul class="p-reserve-selectedTime--detail__wrap">
                    <!-- ここから -->

                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">5:00～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon">
                        <img src="../../images/svg/calendar_available.svg">
                      </div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">5:15～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">5:30～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">5:45～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">6:00～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">6:15～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">6:30～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">6:45～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">7:00～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">7:15～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">7:30～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">7:45～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">8:00～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">8:15～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">8:30～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">8:45～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">9:00～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">9:15～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">9:30～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">9:45～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">10:00～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">10:15～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">10:30～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">10:45～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">11:00～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">11:15～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">11:30～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">11:45～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">12:00～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">12:15～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">12:30～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">12:45～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">13:00～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">13:15～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">13:30～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">13:45～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">14:00～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">14:15～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">14:30～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">14:45～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">15:00～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">15:15～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">15:30～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">15:45～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">16:00～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">16:15～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">16:30～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">16:45～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">17:00～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">17:15～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">17:30～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">17:45～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">18:00～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">18:15～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">18:30～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">18:45～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">19:00～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">19:15～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">19:30～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">19:45～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">20:00～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">20:15～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">20:30～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">20:45～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">21:00～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">21:15～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">21:30～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">21:45～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">22:00～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">22:15～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">22:30～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
                    </li>
                  </ul>
                </dd>
              </dl>
            </div>

            <div class="p-input-user-total-parking-charges">
              <!-- 代理店コード -->
              <div class=" u-mb4">
                <p class="text-center u-mb2 u-font--medium">代理店コードをお持ちの方は入力してください。</p>
                <div class="p-input-user-agency-code">
                  <label for="agency-code01">代理店A</label>
                  <input type="radio" id="agency-code01" name="agency_code_radio" value="代理店A" checked>
                  <label for="agency-code02">代理店B</label>
                  <input type="radio" id="agency-code02" name="agency_code_radio" value="代理店B">
                  <label for="agency-code03">代理店C</label>
                  <input type="radio" id="agency-code03" name="agency_code_radio" value="代理店C">
                </div>
                <div class="l-flex l-flex--wrap l-flex--item-end l-grid--gap05 u-horizontal-auto">
                  <div class="u-w-half">
                    <label for="agency_code" class="u-d-none">代理店コード</label>
                    <input type="text" id="agency_code" class="u-mb0 u-w-full-wide" name="agency_code" value="0000" />
                  </div>
                  <button class="c-button__apply">検索</button>
                </div>
                <div class="note u-font--sm u-mb1">※クーポンコードとは異なります。</div>
                <!-- 代理店コードを送信後、該当するものがあれば表示 -->
                <div>代理店名: HIS</div>
              </div>

              <!-- 202/09/22追加 -->
              <button type="submit" class="c-button--green u-horizontal-auto u-mb2">
                駐車料金を確認する
              </button>

              <!-- 駐車料金合計 -->
              <div class="u-border--all u-border--radius u-pt2 u-pb2">
                <p class="u-font--24 text-center u-font--medium">駐車料金合計</p>
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
                      <div>¥1,000</div>
                      <div>10/11(木)</div>
                      <div>¥1,000</div>
                      <div>10/12(金)</div>
                      <div>¥1,500</div>
                      <div>10/13(土)</div>
                      <div>¥2,000</div>
                      <div>10/14(日)</div>
                      <div>¥2,000</div>
                      <div>10/15(月)</div>
                      <div>¥300</div>
                    </div>
                    <div class="p-input-user-total-parking-charges__detail-list-total">
                      <div>6日間</div>
                      <div>￥7,800</div>
                    </div>
                  </div>

                  <!-- 料金明細 -->
                  <div class="u-mt3 u-pt3 u-border--top p-input-user-total-parking-charges__detail-total">
                    <div>消費税(10%)</div>
                    <div>¥1,780</div>
                    <!-- 駐車料金（[区分]）合計 -->
                    <!-- まだここでは車両区分を選択していないので「普通」と表示 -->
                    <div>駐車料金(普通)合計</div>
                    <div>¥9999,999<br>(税込)</div>
                  </div>

                </div><!-- /.p-input-user-total-parking-charges__inner -->

                <button type="submit" class="c-button__submit u-horizontal-auto">予約に進む</button>
              </div><!-- /.u-border--radius -->
            </div><!-- /.p-input-user-total-parking-charges -->
          </form>

        </div><!-- /.l-container__inner -->
      </div>
    </main>

    <script src="../js/close_button_toggle.js"></script>
</body>

</html>