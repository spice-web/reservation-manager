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
            <!-- 代理店コード -->
            <div class="p-reserve__wrap">
              <label for="agency_code" class="u-d-none">代理店コード</label>
              <div class="l-flex--start l-grid--gap1 u-mb1">
                <input type="text" id="agency_code" class="u-w240 u-mb0" name="agency_code" value="0000" />
                <button class="c-button--yellow">検索</button>
              </div>

              <!-- 代理店コードに該当する画像と名前を出力 -->
              <div class="l-flex--start l-grid--gap1">
                <figure class="u-w160">
                  <img src="/images/dummy/dummy_ana_card.png" width="100%" height="auto" alt="ダミー">
                </figure>
                <div>テスト代理店名</div>
              </div>
            </div>

            <!-- カレンダー選択 -->
            <div class="p-reserve__wrap">
              <p class="text-center u-mb2 u-font--medium">入庫日を指定してください</p>
              <div>
                <div class="c-title__calendar c-calendar-reserve">2021年1月</div>
              </div>
            </div>

            <div class="p-reserve__wrap">
              <p class="text-center u-mb2 u-font--medium">入庫予定時間を指定してください</p>
              <div class="c-title__calendar u-mb1">2024年2月</div>
              <div class="u-mb2 l-grid--col2 l-grid--gap1 p-reserve-selectedTime">
                <dl>
                  <dt class="c-calendar__heading">午前</dt>
                  <dd>
                    <ul class="c-calendar-available-time__wrap">
                      <li class="c-calendar-available-time">
                        <div class="p-reserve-selectedTime__bg">0:00～</div>
                        <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                      </li>
                      <li class="c-calendar-available-time">
                        <div class="p-reserve-selectedTime__bg">1:00～</div>
                        <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_some-available.svg" alt=""></div>
                      </li>
                      <li class="c-calendar-available-time">
                        <div class="p-reserve-selectedTime__bg">2:00～</div>
                        <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_reserved.svg" alt=""></div>
                      </li>
                      <li class="c-calendar-available-time">
                        <div class="p-reserve-selectedTime__bg">3:00～</div>
                        <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_none.svg" alt=""></div>
                      </li>
                      <li class="c-calendar-available-time">
                        <div class="p-reserve-selectedTime__bg">4:00～</div>
                        <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                      </li>
                      <li class="c-calendar-available-time">
                        <div class="p-reserve-selectedTime__bg">5:00～</div>
                        <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                      </li>
                      <li class="c-calendar-available-time">
                        <div class="p-reserve-selectedTime__bg">6:00～</div>
                        <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                      </li>
                      <li class="c-calendar-available-time">
                        <div class="p-reserve-selectedTime__bg">7:00～</div>
                        <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                      </li>
                      <li class="c-calendar-available-time">
                        <div class="p-reserve-selectedTime__bg">8:00～</div>
                        <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                      </li>
                      <li class="c-calendar-available-time">
                        <div class="p-reserve-selectedTime__bg">9:00～</div>
                        <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                      </li>
                      <li class="c-calendar-available-time">
                        <div class="p-reserve-selectedTime__bg">10:00～</div>
                        <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                      </li>
                      <li class="c-calendar-available-time">
                        <div class="p-reserve-selectedTime__bg">11:00～</div>
                        <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                      </li>
                    </ul>
                  </dd>
                </dl>
                <dl>
                  <dt class="c-calendar__heading">午後</dt>
                  <dd>
                    <ul class="c-calendar-available-time__wrap">
                      <li class="c-calendar-available-time">
                        <div class="p-reserve-selectedTime__bg">12:00～</div>
                        <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                      </li>
                      <li class="c-calendar-available-time">
                        <div class="p-reserve-selectedTime__bg">13:00～</div>
                        <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                      </li>
                      <li class="c-calendar-available-time">
                        <div class="p-reserve-selectedTime__bg">14:00～</div>
                        <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                      </li>
                      <li class="c-calendar-available-time">
                        <div class="p-reserve-selectedTime__bg">15:00～</div>
                        <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                      </li>
                      <li class="c-calendar-available-time">
                        <div class="p-reserve-selectedTime__bg">16:00～</div>
                        <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                      </li>
                      <li class="c-calendar-available-time">
                        <div class="p-reserve-selectedTime__bg">17:00～</div>
                        <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                      </li>
                      <li class="c-calendar-available-time">
                        <div class="p-reserve-selectedTime__bg">18:00～</div>
                        <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                      </li>
                      <li class="c-calendar-available-time">
                        <div class="p-reserve-selectedTime__bg">19:00～</div>
                        <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                      </li>
                      <li class="c-calendar-available-time">
                        <div class="p-reserve-selectedTime__bg">20:00～</div>
                        <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                      </li>
                      <li class="c-calendar-available-time">
                        <div class="p-reserve-selectedTime__bg">21:00～</div>
                        <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                      </li>
                      <li class="c-calendar-available-time">
                        <div class="p-reserve-selectedTime__bg">22:00～</div>
                        <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                      </li>
                      <li class="c-calendar-available-time">
                        <div class="p-reserve-selectedTime__bg">23:00～</div>
                        <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                      </li>
                    </ul>
                  </dd>
                </dl>
              </div>

              <!-- 時間選択 -->
              <dl class="p-reserve-selectedTime--detail">
                <dt class="c-calendar__heading">時間</dt>
                <dd>
                  <ul class="p-reserve-selectedTime--detail__wrap">
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">19:00～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">19:15～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">19:30～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                    </li>
                    <li class="c-calendar-available-time__detail">
                      <div class="p-reserve-selectedTime__bg">19:45～</div>
                      <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                    </li>
                  </ul>
                </dd>
              </dl>
            </div>

            <div class="p-reserve__wrap">
              <p class="text-center u-mb2 u-font--medium">出庫日を指定してください</p>
              <div>
                <div class="c-title__calendar">2021年1月</div>
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