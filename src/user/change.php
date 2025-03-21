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
      <li class="p-user-breadcrumb__list"><a href="">マイページ</a></li>
      <li class="p-user-breadcrumb__list">予約変更</li>
    </ul>
    <p>
      到着時間のみ変更できます。<br>
      それ以外の変更をご希望の方は、お手数ではございますが、<span class="note">一度予約をキャンセルし、新たにし直してください。</span>
    </p>
    <!-- 予約情報 -->
    <div class="c-title__user">予約情報</div>
    <table class="l-user-table-confirm">
      <tr>
        <th>予約コード</th>
        <td>1234567890</td>
        <th>受付コード</th>
        <td>1234567890</td>
        <th>予約日時</th>
        <td>2024/1/15(月)20:12</td>
        <th>予約経路</th>
        <td>公式HP</td>
      </tr>
      <tr>
        <th>入庫日時</th>
        <td>2024/2/1(木) 10:35</td>
        <th>出庫予定日</th>
        <td>2024/2/1(木)</td>
        <th>利用日数</th>
        <td>5日</td>
      </tr>
    </table>

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
        <th>領収書のあて名</th>
        <td>ダミーテキストダミーテキストダミーテキスト株式会社</td>
      </tr>
    </table>
    <!-- 到着予定 -->
    <div class="c-title__table">到着予定</div>
    <table class="l-user-table-confirm">
      <tr>
        <th>到着予定日</th>
        <td>2024/2/5(月)</td>
        <th>到着予定時間</th>
        <td>16：45</td>
        <th>到着便</th>
        <td>NH205</td>
        <th>航空会社</th>
        <td>ANA</td>
      </tr>
      <tr>
        <th>出発空港</th>
        <td>LAX</td>
        <th>到着空港</th>
        <td>NRT</td>
        <th>到着ターミナル</th>
        <td>2</td>
        <th></th><!-- レイアウトを合わせるため空 -->
        <td>
          <span class="c-label--lg">到着日とお迎え日が異なる</span>
        </td>
      </tr>
    </table>

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

    <!-- 料金明細 -->
    <div class="c-title__table">料金明細</div>
    <table class="l-table-charge-detail">
      <thead class="l-table-charge-detail__head">
        <tr>
          <th>項目</th>
          <th>単価</th>
          <th>数量</th>
          <th>小計</th>
          <th>消費税</th>
        </tr>
      </thead>
      <tbody class="l-table-charge-detail__body">
        <tr>
          <th>駐車料金</th>
          <td class="u-font-nowrap">1,000円</td>
          <td>1</td>
          <td class="u-font-nowrap">5,000円</td>
          <td class="--tax">(税別10%)</td>
        </tr>
        <tr>
          <th>​WAX洗車（オプション料金）</th>
          <td class="u-font-nowrap">2,500円</td>
          <td>2</td>
          <td class="u-font-nowrap">2,500円</td>
          <td class="--tax">(税別10%)</td>
        </tr>
        <tr>
          <th>​海外旅行保険（オプション料金）​</th>
          <td class="u-font-nowrap">3,800円</td>
          <td>3</td>
          <td class="u-font-nowrap">3,800円</td>
          <td class="--tax">(対象外)</td>
        </tr>
      </tbody>
    </table>

    <div class="l-table-charge-detail--second">
      <div class="l-table-charge-detail--second__column">
        <div>消費税8%</div>
        <div>0円</div>
        <div>消費税10%</div>
        <div>750円</div>
        <div colspan="2" class="text-right">合計金額</div>
        <div class="u-font--lg u-font--medium">11,300<span class="u-font--18">円</span><span class="u-font--normal">（税抜）</span></div>
        <div class="u-font--lg u-font--medium l-grid--colspan2">12,500<span class="u-font--18">円</span><span class="u-font--normal">（税込）</div>
      </div>
    </div>
    <!-- 料金明細 fin -->

    <div class="l-flex--column l-grid--rgap1 l-flex--center u-mt2">
      <a href="/user/n-21.php" class="c-button__submit">予約変更確定</a>
      <a href="/user/dashboard.php" class="c-button__submit">マイページに戻る</a>
    </div>

  </div><!-- ./p-user-input__inner -->
</body>

</html>