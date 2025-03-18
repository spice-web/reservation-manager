<!-- N-14 -->
<!-- 顧客詳細画面 -->

<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- head内の違いは /css/user/style.css のみ -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>顧客情報編集</title>
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
  <!-- パンくず -->
  <div>
    <a href="">マイページ</a>> 顧客情報
  </div>
  <div class="p-user-input__inner--sm">
    <!-- 顧客情報 -->
    <div class="c-title__user">顧客情報</div>
    <table class="l-user-table-confirm">
      <tr>
        <th>顧客コード</th>
        <td>1234567890</td>
        <th>お客様氏名</th>
        <td>サン太郎</td>
        <th>ふりがな</th>
        <td>さんたろう</td>
        <th>利用回数</th>
        <td>8回</td>
        <th>会員ランク</th>
        <td>シルバー</td>
        <th>ラベル2</th>
        <td>ダミーダミー</td>
        <th>ラベル3</th>
        <td>ダミーダミー</td>
        <th>ラベル4</th>
        <td>ダミーダミー</td>
        <th>郵便番号</th>
        <td>111-0000</td>
        <th>電話番号</th>
        <td>090-1234-5678</td>
        <!-- 以下2つは桁数次第ではレイアウトが崩れる分けてもよいかも -->
        <th>Mail</th>
        <td>testaaatestaaaatestaaatest@test.jp</td>
        <th>LINE ID</th>
        <td>sun123</td>
      </tr>
    </table>
    <!-- 顧客情報編集ページへのリンク -->
    <div class="l-flex--center u-mt2 u-mb3">
      <a href="" class="c-button__submit">編集</a>
    </div>

    <!-- 車両情報 -->
    <div class="c-title__table">車両情報</div>
    <table class="l-user-table-confirm">
      <tr>
        <th>メーカー</th>
        <td>1234567890</td>
        <th>車種</th>
        <td>BMW5</td>
        <th>車番</th>
        <td>1234</td>
        <th>色</th>
        <td>黒</td>
      </tr>
      <tr>
        <th>区分</th>
        <td>普通</td>
        <th>人数</th>
        <td>3名</td>
        <th>車両取扱</th>
        <td colspan="3">MT車</td>
      </tr>
      <tr>
        <th>備考</th>
        <td>文字が長い場合があるので独立行にした</td>
      </tr>
    </table>
    <!-- 車両情報編集ページへのリンク -->
    <div class="l-flex--center u-mt2">
      <a href="" class="c-button__submit">編集</a>
    </div>

  </div><!-- ./p-user-input__inner -->
</body>

</html>