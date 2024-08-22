<!-- B-1-0 forward calendar
<img src="../../images/svg/calendar_available.svg" alt="">         〇
<img src="../../images/svg/calendar_some-available.svg" alt="">    △
<img src="../../images/svg/calendar_reserved.svg" alt="">          ×
<img src="../../images/svg/calendar_none.svg" alt="">              -
-->

<!DOCTYPE html>
<html lang="ja">
<?php include_once '../include/head.php'; ?>

<body>
  <!-- css laravel環境では削除 -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css">
  <style>
    .calendar_section {
      position: relative;
      display: flex;
      align-items: center;
    }
    .prev_button {
      position: absolute;
      left: -30px;
    }
    .next_button {
      position: absolute;
      right: -30px;
    }
    .fc-multimonth-title {
      display: none;
    }
    div.fc-multimonth-month {
      padding: 8px 10px 8px !important;
    }
    table.fc-multimonth-daygrid-table {
      border-spacing: 4px;
      border-collapse: separate;
    }
    table.fc-multimonth-header-table  {
      border-spacing: 4px;
      border-collapse: separate;
    }
    table.fc-multimonth-header-table tr  {
      height: 25px;
    }
    .fc-day-disabled {
      border: none !important;
      background-color: #fff !important;
    }
    .fc-daygrid-day {
      background-color: #eee;
      text-align: center;
    }
    .fc-day.fc-day-today.fc-daygrid-day:not(.day_full), .fc-day.fc-day-future.fc-daygrid-day:not(.day_full) {
      cursor: pointer;
    }
    .fc-daygrid-day-events {
      margin: 5px;
    }
    .fc-col-header-cell.fc-day {
      background-color: black;
      color:#fff;
    }
    .fc-col-header-cell.fc-day.fc-day-sat {
      background-color: #1f6aaa;
    }
    .fc-col-header-cell.fc-day.fc-day-sun {
      background-color: #d82528;
    }
    a.fc-col-header-cell-cushion {
      padding: 10px !important;
    }
    a.fc-daygrid-day-number {
      display: block;
      width:100%;
    }
    .fc .fc-daygrid-day-top {
      margin-top: 5px;
    }
    .hour_label_cell, .quarter_hour_label_cell {
      cursor: pointer;
    }
  
    .day_selected, .hour_selected, .quater_hour_selected {
      border-color: rgb(167, 207, 249) !important;
      background-color: rgb(167, 207, 249) !important;
    }
  </style>
  <div class="p-user-input__inner u-mt3">
    <form action="./user_login.php" method="POST">
      <!-- 代理店コード -->
      <div class="is-block u-horizontal-auto u-mb4 u-w-half">
        <label for="agency_code" class="u-d-none">代理店コード</label>
        <input type="text" id="agency_code" class="u-w-full-wide" name="agency_code" value="0000" />
      </div>


      <!-- カレンダー選択 -->
      <div class="u-mb6">
        <p class="text-center u-mb2 u-font--medium">入庫日を指定してください</p>
        <div class="l-grid--col2 l-grid--gap2">
          <div>
            <div class="c-title__calendar">2021年1月</div>
            <div id="my-calendar"></div>
          </div>
          <div>
            <div class="c-title__calendar">2024年2月</div>
          </div>
        </div>
      </div>

      <div class="u-mb6">
        <p class="text-center u-mb2 u-font--medium">入庫予定時間を指定してください</p>
        <div class="c-title__calendar u-mb1">2024年2月</div>
        <div class="l-grid--col3-auto l-grid--gap05 l-grid--start">
          <dl class="c-calendar__wrap">
            <dt class="c-calendar__heading">午前</dt>
            <dd>
              <ul class="c-calendar-available-time__wrap">
                <li class="c-calendar-available-time">
                  <div>0:00～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                </li>
                <li class="c-calendar-available-time">
                  <div>1:00～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_some-available.svg" alt=""></div>
                </li>
                <li class="c-calendar-available-time">
                  <div>2:00～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_reserved.svg" alt=""></div>
                </li>
                <li class="c-calendar-available-time">
                  <div>3:00～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_none.svg" alt=""></div>
                </li>
                <li class="c-calendar-available-time">
                  <div>4:00～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                </li>
                <li class="c-calendar-available-time">
                  <div>5:00～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                </li>
                <li class="c-calendar-available-time">
                  <div>6:00～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                </li>
                <li class="c-calendar-available-time">
                  <div>7:00～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                </li>
                <li class="c-calendar-available-time">
                  <div>8:00～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                </li>
                <li class="c-calendar-available-time">
                  <div>9:00～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                </li>
                <li class="c-calendar-available-time">
                  <div>10:00～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                </li>
                <li class="c-calendar-available-time">
                  <div>11:00～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                </li>
              </ul>
            </dd>
          </dl>
          <dl class="c-calendar__wrap">
            <dt class="c-calendar__heading">午後</dt>
            <dd>
              <ul class="c-calendar-available-time__wrap">
                <li class="c-calendar-available-time">
                  <div>12:00～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                </li>
                <li class="c-calendar-available-time">
                  <div>13:00～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                </li>
                <li class="c-calendar-available-time">
                  <div>14:00～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                </li>
                <li class="c-calendar-available-time">
                  <div>15:00～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                </li>
                <li class="c-calendar-available-time">
                  <div>16:00～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                </li>
                <li class="c-calendar-available-time">
                  <div>17:00～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                </li>
                <li class="c-calendar-available-time">
                  <div>18:00～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                </li>
                <li class="c-calendar-available-time">
                  <div>19:00～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                </li>
                <li class="c-calendar-available-time">
                  <div>20:00～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                </li>
                <li class="c-calendar-available-time">
                  <div>21:00～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                </li>
                <li class="c-calendar-available-time">
                  <div>22:00～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                </li>
                <li class="c-calendar-available-time">
                  <div>23:00～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                </li>
              </ul>
            </dd>
          </dl>

          <!-- 時間 19:00から15分刻みの理由は不明　leftにpadding入れている理由も不明 -->
          <dl class="c-calendar__wrap u-pl4">
            <dt class="c-calendar__heading">時間</dt>
            <dd>
              <ul class="c-calendar-available-time__wrap">
                <li class="c-calendar-available-time">
                  <div>19:00～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                </li>
                <li class="c-calendar-available-time">
                  <div>19:15～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                </li>
                <li class="c-calendar-available-time">
                  <div>19:30～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                </li>
                <li class="c-calendar-available-time">
                  <div>19:45～</div>
                  <div class="c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg" alt=""></div>
                </li>
              </ul>
            </dd>
          </dl>

        </div>
      </div>

      <div class="u-mb6">
        <p class="text-center u-mb2  u-font--medium">出庫日を指定してください</p>
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
            <div class="p-input-user-total-parking-charges__detail-total">
              <div>6日間</div>
              <div>￥7,800</div>
            </div>
          </div>

          <!-- 料金明細 -->
          <div class="u-mt3 u-pt3 u-border--top p-input-user-total-parking-charges__detail-total">
            <div>消費税(10%)</div>
            <div>¥780</div>
            <div>駐車料金合計</div>
            <div>¥8,580(税込)</div>
          </div>

        </div><!-- /.p-input-user-total-parking-charges__inner -->

        <button type="submit" class="c-button__submit u-horizontal-auto">予約に進む</button>
      </div><!-- /.p-input-user-total-parking-charges -->

    </form>

  </div>
  <!-- 表示非表示ボタン -->
  <script src="../js/close_button_toggle.js"></script>

  <!-- カレンダーJS　laravelでは削除 -->
  <script src="//unpkg.com/@popperjs/core@2" defer></script>
	<script src="//unpkg.com/tippy.js@6" defer></script>
	<script src="//cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.js" defer></script>
  <script>
console.log("main.js!!");

const events = [
	{
		id: "a",
		start: "2022-02-02",
		end: "",
		title: "〇",
		description: "悪い鬼を追い払い福を招く",
    color: "green",
		backgroundColor: "#eee",
		borderColor: "#eee",
		editable: true
	},
	{
		id: "b",
		start: "2022-02-03",
		end: "",
		title: "立春",
		description: "二十四節気の一つ",
		backgroundColor: "green",
		borderColor: "green",
		editable: true
	},
	{
		id: "c",
		start: "2022-02-08",
		end: "",
		title: "針供養",
		description: "古くなった針などを神社に納めて供養する",
		backgroundColor: "blue",
		borderColor: "blue",
		editable: true
	},
];

window.onload = (e)=>{

	// Calendar
	const elem = document.getElementById("my-calendar");
	const calendar = new FullCalendar.Calendar(elem, {
		initialView: "dayGridMonth",
		initialDate: "2022-02-13",
		events: events,
		dateClick: (e)=>{
			console.log("dateClick:", e);
		},
		eventClick: (e)=>{
			console.log("eventClick:", e.event.title);
		},
		eventDidMount: (e)=>{
			tippy(e.el, {// Tippy
				content: e.event.extendedProps.description,
			});
		}
	});
	calendar.render();
}
  </script>
</body>

</html>