<!-- B-1-0 forward calendar
<img src="../../images/svg/calendar_available.svg">         〇
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
  <div class="p-user-input__inner u-mt3">
    <form action="./user_login.php" method="POST">
      <!-- 代理店コード -->
      <div class="is-block u-horizontal-auto u-mb4 u-w-half">
        <label for="agency_code" class="u-d-none">代理店コード</label>
        <input type="text" id="agency_code" class="u-w-full-wide" name="agency_code" value="0000" />
      </div>
      <!-- カレンダー選択 -->
      <div class="p-reserve__wrap">
        <p class="text-center u-mb2 u-font--medium">入庫日を指定してください</p>
        <div>
          <div class="c-title__calendar c-calendar-reserve">2021年1月</div>
        </div>
        <div>
          <div id="my-calendar"></div>
        </div>
      </div>

      <div class="p-reserve__wrap">
        <p class="text-center u-mb2 u-font--medium">入庫予定時間を指定してください</p>
        <div class="c-title__calendar u-mb1">2024年2月</div>

        <!--
          変更ここから 2025/6/23
        -->
        <!-- 
          1時間おきの時間選択削除
        -->
        <dl class="p-reserve-selectedTime--detail">
          <dt class="c-calendar__heading">時間</dt>
          <dd>
            <ul class="p-reserve-selectedTime--detail__wrap">
              <!-- ここから -->
              <li class="c-calendar-available-time__detail">
                <div class="p-reserve-selectedTime__bg">0:00～</div>
                <div class="p-reserve-selectedTime__bg c-calendar__available-icon">
                  <img src="../../images/svg/calendar_available.svg">
                </div>
              </li>
              <li class="c-calendar-available-time__detail">
                <div class="p-reserve-selectedTime__bg">0:15～</div>
                <div class="p-reserve-selectedTime__bg c-calendar__available-icon">
                  <img src="../../images/svg/calendar_some-available.svg"><!-- 残数小画像（▲） -->
                </div>
              </li>
              <li class="c-calendar-available-time__detail">
                <div class="p-reserve-selectedTime__bg">0:30～</div>
                <div class="p-reserve-selectedTime__bg c-calendar__available-icon">
                  <img src="../../images/svg/calendar_none.svg"><!-- 予約不可画像 -->
                </div>
              </li>
              <li class="c-calendar-available-time__detail">
                <div class="p-reserve-selectedTime__bg">0:45～</div>
                <div class="p-reserve-selectedTime__bg c-calendar__available-icon">
                  <img src="../../images/svg/calendar_available.svg">
                </div>
              </li>
              <li class="c-calendar-available-time__detail">
                <div class="p-reserve-selectedTime__bg">1:00～</div>
                <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
              </li>
              <li class="c-calendar-available-time__detail">
                <div class="p-reserve-selectedTime__bg">1:15～</div>
                <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
              </li>
              <li class="c-calendar-available-time__detail">
                <div class="p-reserve-selectedTime__bg">1:30～</div>
                <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
              </li>
              <li class="c-calendar-available-time__detail">
                <div class="p-reserve-selectedTime__bg">1:45～</div>
                <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
              </li>
              <li class="c-calendar-available-time__detail">
                <div class="p-reserve-selectedTime__bg">2:00～</div>
                <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
              </li>
              <li class="c-calendar-available-time__detail">
                <div class="p-reserve-selectedTime__bg">2:15～</div>
                <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
              </li>
              <li class="c-calendar-available-time__detail">
                <div class="p-reserve-selectedTime__bg">2:30～</div>
                <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
              </li>
              <li class="c-calendar-available-time__detail">
                <div class="p-reserve-selectedTime__bg">2:45～</div>
                <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
              </li>
              <li class="c-calendar-available-time__detail">
                <div class="p-reserve-selectedTime__bg">3:00～</div>
                <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
              </li>
              <li class="c-calendar-available-time__detail">
                <div class="p-reserve-selectedTime__bg">3:15～</div>
                <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
              </li>
              <li class="c-calendar-available-time__detail">
                <div class="p-reserve-selectedTime__bg">3:30～</div>
                <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
              </li>
              <li class="c-calendar-available-time__detail">
                <div class="p-reserve-selectedTime__bg">3:45～</div>
                <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
              </li>
              <li class="c-calendar-available-time__detail">
                <div class="p-reserve-selectedTime__bg">4:00～</div>
                <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
              </li>
              <li class="c-calendar-available-time__detail">
                <div class="p-reserve-selectedTime__bg">4:15～</div>
                <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
              </li>
              <li class="c-calendar-available-time__detail">
                <div class="p-reserve-selectedTime__bg">4:30～</div>
                <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
              </li>
              <li class="c-calendar-available-time__detail">
                <div class="p-reserve-selectedTime__bg">4:45～</div>
                <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
              </li>
              <li class="c-calendar-available-time__detail">
                <div class="p-reserve-selectedTime__bg">5:00～</div>
                <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
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
              <li class="c-calendar-available-time__detail">
                <div class="p-reserve-selectedTime__bg">22:45～</div>
                <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
              </li>
              <li class="c-calendar-available-time__detail">
                <div class="p-reserve-selectedTime__bg">23:00～</div>
                <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
              </li>
              <li class="c-calendar-available-time__detail">
                <div class="p-reserve-selectedTime__bg">23:15～</div>
                <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
              </li>


              <li class="c-calendar-available-time__detail">
                <div class="p-reserve-selectedTime__bg">23:30～</div>
                <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
              </li>
              <li class="c-calendar-available-time__detail">
                <div class="p-reserve-selectedTime__bg">23:45～</div>
                <div class="p-reserve-selectedTime__bg c-calendar__available-icon"><img src="../../images/svg/calendar_available.svg"></div>
              </li>
            </ul>
          </dd>
        </dl>
        <!-- 変更ここまで 2025/6/23 -->
      </div>

      <div class="u-mb6">
        <p class="text-center u-mb2  u-font--medium">出庫日を指定してください</p>
        <div>
          <div class="c-title__calendar c-calendar-reserve">2021年1月</div>
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
    const events = [{
        id: "a",
        start: "2022-02-02",
        title: "〇",
      },
      {
        id: "b",
        start: "2022-02-03",
        title: "×",
      },
      {
        id: "c",
        start: "2022-02-08",
        title: "針供養",
      },
    ];

    window.onload = (e) => {

      // Calendar
      const elem = document.getElementById("my-calendar");
      const calendar = new FullCalendar.Calendar(elem, {
        initialView: "dayGridMonth",
        initialDate: "2022-02-13",
        events: events,
        dateClick: (e) => {
          console.log("dateClick:", e);
        },
        eventClick: (e) => {
          console.log("eventClick:", e.event.title);
        },
        eventDidMount: (e) => {
          tippy(e.el, { // Tippy
            content: e.event.extendedProps.description,
          });
        }
      });
      calendar.render();
    }
  </script>
</body>

</html>