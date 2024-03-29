<!-- G-2 到着便マスタ -->
<!DOCTYPE html>
<html lang="en">
<?php include_once '../include/head.php'; ?>

<body>
  <div class="l-wrap">
    <?php include_once '../include/header.php'; ?>

    <?php include_once '../include/nav.php'; ?>

    <main class="l-wrap__main l-container__main">
      <!-- パンくず -->
      <ul class="l-breadcrumb">
        <li class="l-breadcrumb__list">到着便マスタ</li>
        </li>
      </ul>

      <table class="l-table-list l-table-list--master">
        <!-- 空港 T 便名 到着日 時刻 出発地 会社名 出発地-->
        <thead class="l-table-list__head">
          <tr>
            <th>空港</th>
            <th>便名</th>
            <th>到着日</th>
            <th>時刻</th>
            <th>出発地</th>
            <th>会社名</th>
            <th>出発地</th>
            <th>ソート</th>
          </tr>
        </thead>
        <tbody class="l-table-list__body">
          <tr>
            <td>成田</td>
            <td>T1</td>
            <td>2023/11/15</td>
            <td>09:00</td>
            <td>TPE</td>
            <td>アメリカン航空</td>
            <td>ロサンゼルス</td>
            <td>1</td>
          </tr>
          <tr>
            <td>成田</td>
            <td>T1</td>
            <td>2023/11/15</td>
            <td>09:00</td>
            <td>TPE</td>
            <td>アメリカン航空</td>
            <td>ロサンゼルス</td>
            <td>1</td>
          </tr>
        </tbody>
      </table>

      <a href="" class="c-button__green">マスタ登録</a>
    </main>
  </div>
</body>

</html>