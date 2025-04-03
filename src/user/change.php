<!-- 予約変更 -->

<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- head内の違いは /css/user/style.css のみ -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>予約変更</title>
  <!-- description -->
  <meta name="description" content="" />
  <!-- favicon -->
  <link rel="icon" href="" type="image/svg+xml">

  <!-- フォント設定 -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;600;700&display=swap" rel="preload" as="style" />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'" />

  <!-- css -->
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/user/style.css">
  <!-- Optional - CSS SVG Icons (Font Awesome) -->
  <link rel="stylesheet" type='text/css' media='all' href="/css/svg-icons.css">
</head>

<body>
  <?php include_once('../include/user/header.php'); ?>
  <div class="p-user-input__inner">
    <!-- パンくず -->
    <ul class="p-user-breadcrumb">
      <li class="p-user-breadcrumb__list"><a href="/user/n-5.php">マイページ</a></li>
      <li class="p-user-breadcrumb__list">フライト情報変更</li>
    </ul>
    <p>
      到着フライト情報のみ変更可能です。<br>
      それ以外の変更については、<span class="note">一度予約をキャンセルし、改めて新規予約をお願いいたします。</span>
    </p>
    <form action="">
      <!-- 到着予定 -->
      <div class="c-title__table">到着予定</div>
      <table class="l-user-table-confirm">
        <tr>
          <th>航空会社</th>
          <td><input type="text" value="ANA" class="u-w-full-wide u-max-350"></td>
          <th>到着便</th>
          <td><input type="text" value="NH205" class="u-w-full-wide u-max-350"></td>
          <th>到着予定日</th>
          <td><input type="date" value="2024-02-05"></td>
        </tr>
        <tr>
          <th>出発空港</th>
          <td>LAX</td>
          <th>到着空港</th>
          <td>NRT</td>
          <th>到着予定時間</th>
          <td>16:45</td>
          <th>到着ターミナル</th>
          <td>2</td>
          <th>ご利用人数</th>
          <td><input type="text" value="2" maxlength="2" class="u-w50 u-mr05">人</td>
          <td class="--label">
            <span class="c-label--lg">到着日とお迎え日が異なる</span>
          </td>
        </tr>
      </table>

      <div class="l-flex--column l-grid--rgap1 l-flex--center u-mt2">
        <button class="c-button--yellow u-w170" type="submit">フライト情報変更</button><!-- アラート表示させるという指示を受けています -->
        <a href="/user/n-5.php" class="c-button--yellow u-w170">マイページに戻る</a>
      </div>
    </form>

  </div><!-- ./p-user-input__inner -->
  <?php include('../include/user/footer.php'); ?>

</body>

</html>