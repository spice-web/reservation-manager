<!-- D-1-1 D-1-2 入出庫一覧ページ -->
<!DOCTYPE html>
<html lang="ja">
<?php include_once 'include/head.php'; ?>

<body>
  <div class="l-wrap">
    <?php include_once 'include/header.php'; ?>
    <?php include_once 'include/nav.php'; ?>

    <main class="l-wrap__main l-container__main">

      <!-- パンくず -->
      <ul class="l-breadcrumb">
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
        </div>
        <ul class="p-inventoryTransactions-table__tab">
          <li id="receipt" class="p-inventoryTransactions-table__tab-item is-active" onclick="">入庫</li>
          <li id="output" class="p-inventoryTransactions-table__tab-item" onclick="">出庫</li>
        </ul>

        <div class="p-inventoryTransactions-table__wrapper">
          <!-- 入庫一覧リスト -->
          <table class="p-inventoryTransactions-table incoming-inventory-list is-active">
            <tr>
              <th>ステータス</th>
              <th>出庫</th>
              <!-- ソートは「--desc」 と 「--asc」 で切替 -->
              <th class="c-button-sort --desc test">整理<br>番号​</th>
              <th>氏名​</th>
              <th>利用<br>回数​</th>
              <th>車番​</th>
              <th>色​</th>
              <th>駐車<br>位置</th>
              <th>T</th>
              <th>到着<br>便​</th>
              <th>出発<br>地​</th>
              <th>運航</th>
              <th>人数​</th>
              <th>洗車<br>等​</th>
              <th>顧客<br>メモ​</th>
              <th>取扱<br>注意​</th>
              <th>追/返​</th>
              <th>受付コード</th>
              <th>見出し</th>
              <th>見出し</th>
              <th>備考</th>
            </tr>
            <tr>
              <td><span class="c-label__deep-gray">入庫済</span></td>
              <td>入庫処理</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td><span class="c-label__deep-gray --status-yes">有</span></td>
            </tr>
            <tr>
              <td><span class="c-label__green">入庫処理</span></td>
              <td>入庫処理</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>見出し</td>
            </tr>
            <tr>
              <td><span class="c-label__deep-gray">入庫済</span></td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>見出し</td>
            </tr>
            <tr>
              <td>見出し</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>見出し</td>
            </tr>
            <tr>
              <td>見出し</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>aaa</td>
              <td>見出し</td>
            </tr>
          </table>

          <!-- 出庫一覧リスト -->
          <table class="p-inventoryTransactions-table outgoing-inventory-list --blue">
            <tr>
              <th>ステータス</th>
              <th>出庫</th>
              <th class="c-button-sort --active --desc test">整理<br>番号​</th>
              <th>見出し</th>
              <th>見出し</th>
              <th>見出し</th>
              <th>見出し</th>
              <th>見出し</th>
              <th>見出し</th>
              <th>見出し</th>
              <th>見出し</th>
              <th>見出し</th>
              <th>見出し</th>
              <th>見出し</th>
              <th>見出し</th>
              <th>見出し</th>
              <th>見出し</th>
              <th>見出し</th>
              <th>見出し</th>
              <th>見出し</th>
              <th>備考</th>
            </tr>
            <tr>
              <td><span class="c-label__blue">出庫処理</span></td>
              <td>入庫処理</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td><span class="c-label__deep-gray --status-yes">有</span></td>
            </tr>
            <tr>
              <td><span class="c-label__blue">出庫処理</span></td>
              <td>入庫処理</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>見出し</td>
            </tr>
            <tr>
              <td><span class="c-label__blue">出庫処理</span></td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>見出し</td>
            </tr>
            <tr>
              <td></td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>見出し</td>
            </tr>
            <tr>
              <td></td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>テキスト</td>
              <td>aaa</td>
              <td>見出し</td>
            </tr>
          </table>
        </div><!-- /.p-inventoryTransactions-table__wrapper -->
      </div>


  </div>
  </div>

  <!-- // 入庫と出庫の表示を切り替えるJS -->
  <script>
    let buttonReceipt = document.getElementById('receipt');
    let buttonOutput = document.getElementById('output');
    let receipt = document.querySelector('.incoming-inventory-list');
    let output = document.querySelector('.outgoing-inventory-list');

    buttonReceipt.addEventListener('click', function() {
      // receiptに is-active を追加
      buttonReceipt.classList.add('is-active');
      receipt.classList.add('is-active');
      output.classList.remove('is-active');
      buttonOutput.classList.remove('is-active');
    });

    buttonOutput.addEventListener('click', function() {
      // outputに is-active を追加
      buttonOutput.classList.add('is-active');
      output.classList.add('is-active');
      receipt.classList.remove('is-active');
      buttonReceipt.classList.remove('is-active');
    });
  </script>

</body>

</html>