<!-- D-1-1 D-1-2 入出庫一覧ページ -->
<!DOCTYPE html>
<html lang="ja">
<?php include_once 'include/head.php'; ?>

<body>
  <div class="l-wrap">
    <?php include_once 'include/header.php'; ?>
    <?php include_once 'include/nav.php'; ?>

    <main class="l-wrap__main">

      <!-- パンくず -->
      <ul class="l-wrap__breadcrumb l-breadcrumb">
        <li class="l-breadcrumb__list">入出庫一覧</li>
      </ul>

      <div class="l-container__inner" style="position: relative;">
        <!-- トグルボタン -->
        <div class="p-inventoryTransactions-toggle">
          入出庫済を表示
          <label class="c-button-toggle">
            <input class="c-button-toggle__input" type="checkbox" checked role="switch">
            <span class="c-button-toggle__slider"></span>
          </label>
          <!-- 日付選択・デフォルトは本日 -->
          <div class="p-inventoryTransactions-date">
            <div class="c-button__prev--small"></div>
            <!-- Calendar -->
            <div class="p-inventoryTransactions-calendar__wrap">
              <div class="p-inventoryTransactions-date__text">2023年12月25日(火)</div><!-- 本日の日付 -->
              <!-- setting: calendar_inventory.js -->
              <div class="p-inventoryTransactions-calendar">
                <div id="calendar_dateSelect"></div>
              </div>
            </div>
            <div class="c-button__next--small"></div>

          </div>
        </div>

        <ul class="l-table-list--scroll__tab">
          <li id="buttonOne" class="l-table-list--scroll__tab-item is-active" onclick="">入庫</li>
          <li id="buttonTwo" class="l-table-list--scroll__tab-item" onclick="">出庫</li>
        </ul>

        <!-- 入庫一覧リスト -->
        <div class="l-table-list--scroll__wrapper">
          <table class="l-table-list--scroll --in contentOne is-active">
            <tr>
              <th>清算状況</th>
              <th>ステータス</th>
              <th>予約ID</th>
              <!-- ソートは「--desc」 と 「--asc」 で切替 -->
              <th class="c-button-sort --desc">顧客ID</th>
              <th>氏名​</th>
              <th>来場日​</th>
              <th>時間</th>
              <th>入庫日</th>
              <th>出庫日</th>
              <th>日</th>
              <th>到着便​</th>
              <th>時間</th>
              <th>出発地​</th>
              <th>車種</th>
              <th>車番​</th>
              <th>色</th>
              <th>顧客</th>
              <th>率</th>
              <th>支</th>
              <th>IE</th>
              <th>利用</th>
              <th>予約引継</th>
            </tr>
            <tr>
              <td><span class="c-label__deep-gray">清算済</span></td>
              <td>入庫済</td>
              <td>011545127</td>
              <td>1580217</td>
              <td>b9581c2</td>
              <td>2023-02-24</td>
              <td>00:00</td>
              <td></td>
              <td>02-26</td>
              <td>3</td>
              <td>-</td>
              <td>00:00</td>
              <td></td>
              <td>ジムニー</td>
              <td>3572</td>
              <td></td>
              <td>新規</td>
              <td>100</td>
              <td></td>
              <td></td>
              <td>1</td>
              <td>akippa</td>
            </tr>
            <tr>
              <td><span class="c-label__green">未清算</span></td>
              <td>入庫処理</td>
              <td>011545110</td>
              <td>1580204</td>
              <td>島田 光明</td>
              <td>2023-02-24</td>
              <td>00:00</td>
              <td></td>
              <td>02-26</td>
              <td>13</td>
              <td>GK-102</td>
              <td>11:30</td>
              <td>CTD</td>
              <td>ムーヴキャンパス</td>
              <td>1016</td>
              <td>青</td>
              <td>メンバー</td>
              <td>1000</td>
              <td></td>
              <td></td>
              <td>8</td>
              <td></td>
            </tr>
            <tr data-href="/">
              <td><span class="c-label__deep-gray">清算済</span></td>
              <td>出庫済み</td>
              <td>011545147</td>
              <td>1580217</td>
              <td>吉井 博</td>
              <td>2023-02-22</td>
              <td>05:30</td>
              <td> </td>
              <td>02-27</td>
              <td>12</td>
              <td>GL-742</td>
              <td>20:14</td>
              <td>KIX</td>
              <td>ボルボ</td>
              <td>77</td>
              <td>茶</td>
              <td>新規</td>
              <td>0</td>
              <td></td>
              <td></td>
              <td>1</td>
              <td></td>
            </tr>
          </table>
        </div><!-- /.l-table-list--scroll__wrapper -->
        <!-- 出庫一覧リスト -->
        <!-- 基本テキストは左揃え -->
        <form action="" class="contentTwo is-none">
          <div class="l-table-list--scroll__wrapper u-mb3">
            <table class="l-table-list--scroll --out --blue --sticky-second">
              <thead>
                <tr>
                  <th>
                    <label class="u-mb0 l-flex--center l-grid--gap025 process_all"><input type="checkbox" name="all" class="u-mb0" />一括<br>処理</label>
                  </th>
                  <th>清算状況</th>
                  <th>ステータス</th>
                  <th>出庫</th>
                  <th>事</th>
                  <th class="c-button-sort --active --desc test">SEQ​</th>
                  <th>氏名</th>
                  <th>利</th>
                  <th>車番</th>
                  <th>車種</th>
                  <th>色</th>
                  <th>夕</th>
                  <th>帰国便</th>
                  <th>時間</th>
                  <th></th>
                  <th>出</th>
                  <th>人</th>
                  <th>洗車</th>
                  <th>雨</th>
                  <th>IE</th>
                  <th>注意事項</th>
                  <th>預り物</th>
                  <th>取扱</th>
                  <th>追/返</th>
                  <th>pt</th>
                  <th>受付ID</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center"><input type="checkbox" id="" name="" class="u-mb0 process" /></td>
                  <td><span class="c-label__blue">清算済み</span></td>
                  <td class="text-center">出庫済</td>
                  <td class="u-font--white"><a href="/hoge" class="c-label__green">処理</a></td>
                  <td>成</td>
                  <td class="text-center">1</td>
                  <td>中島 栄一</td>
                  <td>15</td>
                  <td>8828</td>
                  <td>クラウン</td>
                  <td>黒</td>
                  <td>1</td>
                  <td>ZG-52</td>
                  <td>07:30</td>
                  <td></td>
                  <td>BKK</td>
                  <td class="text-center">1</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>01231100709</td>
                </tr>
                <tr>
                  <td class="text-center"><input type="checkbox" id="" name="" class="u-mb0 process" /></td>
                  <td class="text-center"><span class="c-label__deep-gray">未清算</span></td>
                  <td class="text-center">未出庫</td>
                  <td class="u-font--white"><a href="/hoge" class="c-label__green">処理</a></td>
                  <td>成</td>
                  <td class="text-center">2</td>
                  <td>竹林 篤史</td>
                  <td class="text-center">1</td>
                  <td>2125</td>
                  <td>レガシィツーリングワゴン</td>
                  <td>二</td>
                  <td>1</td>
                  <td>VZ-52</td>
                  <td>07:30</td>
                  <td></td>
                  <td>DAD</td>
                  <td class="text-center">10</td>
                  <td>◎洗車機シャンプー</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>01231100709</td>
                </tr>
                <tr>
                  <td class="text-center"><input type="checkbox" id="" name="" class="u-mb0 process" /></td>
                  <td class="text-center"><span class="c-label__deep-gray">未清算</span></td>
                  <td class="text-center">未出庫</td>
                  <td class="u-font--white"><a href="/hoge" class="c-label__green">処理</a></td>
                  <td>成</td>
                  <td class="text-center">2</td>
                  <td>ダニエル・マイケル・アレン</td>
                  <td class="text-center">1</td>
                  <td>2125</td>
                  <td>テリオスキッド</td>
                  <td>二</td>
                  <td>1</td>
                  <td>VZ-52</td>
                  <td>07:30</td>
                  <td></td>
                  <td>DAD</td>
                  <td class="text-center">10</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>01231100709</td>
                </tr>
              </tbody>
            </table>
          </div><!-- /.l-table-list--scroll__wrapper -->
          <button class="c-button__submit u-horizontal-auto">一括出庫処理</button>
        </form>

      </div><!-- ./l-container__inner -->

    </main>
  </div>

  <!-- FullCalendar JavaScript -->
  <script src="//unpkg.com/@popperjs/core@2" defer></script>
  <script src="//unpkg.com/tippy.js@6" defer></script>
  <script src="//cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.js" defer></script>
  <script src="./js/calendar_inventory.js" defer></script>


  <!-- // 入庫と出庫の表示を切り替えるJS -->
  <script src="./js/toggle_display.js"></script>

  <!-- // 出庫処理のすべてをチェックする処理 -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // 「一括処理」チェックボックスを取得
      const allCheckbox = document.querySelector('input[name="all"]');
      // テーブル内のすべてのチェックボックスを取得
      const checkboxes = document.querySelectorAll('.process');

      // 「一括処理」チェックボックスにイベントリスナーを追加
      allCheckbox.addEventListener('click', function() {
        checkboxes.forEach(function(checkbox) {
          checkbox.checked = allCheckbox.checked;
        });
      });
    });
  </script>
</body>

</html>