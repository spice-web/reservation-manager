<!-- D-2-2レジ点検表・D-2-3レジ売上帳 -->
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
        <li class="l-breadcrumb__list">レジ点検表</li>
      </ul>

      <div class="l-container__inner">

        <!-- 売上 成田 -->
        <div class="u-font--20 u-font--medium u-font--green u-mb05">売上 成田</div>
        <table class="l-table-list l-table-list--master text-center u-mb3">
          <thead class="l-table-list__head">
            <tr>
              <th>
                <div>id</div>
              </th>
              <th>
                <div>売上項目</div>
              </th>
              <th>
                <div>処理回数</div>
              </th>
              <th>
                <div>数量</div>
              </th>
              <th>
                <div>金額</div>
              </th>
              <th>
                <div>税抜金額</div>
              </th>
            </tr>
          </thead>
          <tbody class="l-table-list__body">
            <tr>
              <td>479</td>
              <td>駐車料金（前払い）</td>
              <td>67</td>
              <td>75</td>
              <td>428,810</td>
              <td>389,614</td>
            </tr>
            <tr>
              <td>1</td>
              <td>洗車撥水コート</td>
              <td>644</td>
              <td>2023</td>
              <td>17,940</td>
              <td>6,940</td>
            </tr>
            <tr>
              <td>11</td>
              <td>1日利用（チケット以外）</td>
              <td>1</td>
              <td>1</td>
              <td>7,700</td>
              <td>41,552</td>
            </tr>
            <tr>
              <td>11</td>
              <td>1日利用（チケット以外）</td>
              <td>1</td>
              <td>1</td>
              <td>7,700</td>
              <td>41,552</td>
            </tr>
            <tr>
              <td>11</td>
              <td>1日利用（チケット以外）</td>
              <td>1</td>
              <td>1</td>
              <td>7,700</td>
              <td>41,552</td>
            </tr>
            <!-- 最終行合計 -->
            <tr>
              <td>合計</td>
              <td></td>
              <td></td>
              <td></td>
              <td>41,552</td>
              <td></td>
            </tr>
          </tbody>
        </table>

        <!-- 売上 プレ -->
        <div class="u-font--20 u-font--medium u-font--green u-mb05">売上 プレ</div>
        <table class="l-table-list l-table-list--master text-center u-mb3">
          <thead class="l-table-list__head">
            <tr>
              <th>
                <div>id</div>
              </th>
              <th>
                <div>売上項目</div>
              </th>
              <th>
                <div>処理回数</div>
              </th>
              <th>
                <div>数量</div>
              </th>
              <th>
                <div>金額</div>
              </th>
              <th>
                <div>税抜金額</div>
              </th>
            </tr>
          </thead>
          <tbody class="l-table-list__body">
            <tr>
              <td>479</td>
              <td>駐車料金（前払い）</td>
              <td>67</td>
              <td>75</td>
              <td>428,810</td>
              <td>389,614</td>
            </tr>
            <tr>
              <td>1</td>
              <td>洗車撥水コート</td>
              <td>644</td>
              <td>2023</td>
              <td>17,940</td>
              <td>6,940</td>
            </tr>
            <tr>
              <td>11</td>
              <td>1日利用（チケット以外）</td>
              <td>1</td>
              <td>1</td>
              <td>7,700</td>
              <td>41,552</td>
            </tr>
            <tr>
              <td>11</td>
              <td>1日利用（チケット以外）</td>
              <td>1</td>
              <td>1</td>
              <td>7,700</td>
              <td>41,552</td>
            </tr>
            <tr>
              <td>11</td>
              <td>1日利用（チケット以外）</td>
              <td>1</td>
              <td>1</td>
              <td>7,700</td>
              <td>41,552</td>
            </tr>
            <!-- 最終行合計 -->
            <tr>
              <td>合計</td>
              <td></td>
              <td></td>
              <td></td>
              <td>41,552</td>
              <td></td>
            </tr>
          </tbody>
        </table>

        <!-- 売上 商品のみ -->
        <div class="u-font--20 u-font--medium u-font--green u-mb05">売上 商品のみ</div>
        <table class="l-table-list l-table-list--master text-center u-mb3">
          <thead class="l-table-list__head">
            <tr>
              <th>
                <div>id</div>
              </th>
              <th>
                <div>売上項目</div>
              </th>
              <th>
                <div>処理回数</div>
              </th>
              <th>
                <div>数量</div>
              </th>
              <th>
                <div>金額</div>
              </th>
              <th>
                <div>税抜金額</div>
              </th>
            </tr>
          </thead>
          <tbody class="l-table-list__body">
            <tr>
              <td>479</td>
              <td>駐車料金（前払い）</td>
              <td>67</td>
              <td>75</td>
              <td>428,810</td>
              <td>389,614</td>
            </tr>
            <tr>
              <td>1</td>
              <td>洗車撥水コート</td>
              <td>644</td>
              <td>2023</td>
              <td>17,940</td>
              <td>6,940</td>
            </tr>
            <tr>
              <td>11</td>
              <td>1日利用（チケット以外）</td>
              <td>1</td>
              <td>1</td>
              <td>7,700</td>
              <td>41,552</td>
            </tr>
            <tr>
              <td>11</td>
              <td>1日利用（チケット以外）</td>
              <td>1</td>
              <td>1</td>
              <td>7,700</td>
              <td>41,552</td>
            </tr>
            <tr>
              <td>11</td>
              <td>1日利用（チケット以外）</td>
              <td>1</td>
              <td>1</td>
              <td>7,700</td>
              <td>41,552</td>
            </tr>
            <!-- 最終行合計 -->
            <tr>
              <td>合計</td>
              <td></td>
              <td></td>
              <td></td>
              <td>41,552</td>
              <td></td>
            </tr>
          </tbody>
        </table>

        <!-- 売上合計 -->
        <div class="u-font--20 u-font--medium u-font--green u-mb05">売上合計</div>
        <table class="l-table-list l-table-list--master text-center u-mb3">
          <thead class="l-table-list__head">
            <tr>
              <th>
                <div>id</div>
              </th>
              <th>
                <div>売上項目</div>
              </th>
              <th>
                <div>処理回数</div>
              </th>
              <th>
                <div>数量</div>
              </th>
              <th>
                <div>金額</div>
              </th>
              <th>
                <div>税抜金額</div>
              </th>
            </tr>
          </thead>
          <tbody class="l-table-list__body">
            <tr>
              <td>479</td>
              <td>駐車料金（前払い）</td>
              <td>67</td>
              <td>75</td>
              <td>428,810</td>
              <td>389,614</td>
            </tr>
            <tr>
              <td>1</td>
              <td>洗車撥水コート</td>
              <td>644</td>
              <td>2023</td>
              <td>17,940</td>
              <td>6,940</td>
            </tr>
            <tr>
              <td>11</td>
              <td>1日利用（チケット以外）</td>
              <td>1</td>
              <td>1</td>
              <td>7,700</td>
              <td>41,552</td>
            </tr>
            <tr>
              <td>11</td>
              <td>1日利用（チケット以外）</td>
              <td>1</td>
              <td>1</td>
              <td>7,700</td>
              <td>41,552</td>
            </tr>
            <tr>
              <td>11</td>
              <td>1日利用（チケット以外）</td>
              <td>1</td>
              <td>1</td>
              <td>7,700</td>
              <td>41,552</td>
            </tr>
            <!-- 最終行合計 -->
            <tr>
              <td>合計</td>
              <td></td>
              <td></td>
              <td></td>
              <td>41,552</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div><!-- ./l-container__inner -->

    </main>
  </div><!-- l-wrap -->


</body>

</html>