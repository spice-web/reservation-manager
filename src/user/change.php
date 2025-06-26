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
      &#9312;到着時間&#9313;車両&#9314;ご利用人数のみ変更可能です。<br>
      それ以外の変更については、<span class="note">一度予約をキャンセルし、改めて新規予約をお願いいたします。</span>
    </p>
    <form action="">
      <!-- 到着予定 -->
      <div class="c-title__table">到着予定</div>
      <table class="l-user-table-confirm">
        <tr>
          <th>航空会社</th>
          <td>ANA</td>
          <th>到着便</th>
          <td>NH205</td>
          <th>到着予定日</th>
          <td>2024/02/05</td>
          <th>到着予定時間</th>
          <td><input type="time" value="16:45"></td>
        </tr>
        <tr>
          <th>出発空港</th>
          <td>LAX</td>
          <th>到着空港</th>
          <td>NRT</td>
          <th>到着ターミナル</th>
          <td>2</td>
          <th>ご利用人数</th>
          <td><input type="text" value="2" maxlength="2" class="u-w50 u-mr05">人</td>
          <td class="--label">
            <span class="c-label--lg">到着日とお迎え日が異なる</span>
          </td>
        </tr>
      </table>
      <!-- 車両予定 -->
      <div class="c-title__table">車両情報変更</div>
      <div class="c-user-modal__form u-max-350">
        <div>
          <label for="maker">メーカー</label>
          <div class="c-form-select-color">
            <select name="maker" id="maker">
              <option value="三菱ふそうトラック・バス株式会社">三菱ふそうトラック・バス株式会社</option>
              <option value="日産">日産</option>
              <option value="フォルクスワーゲン">フォルクスワーゲン</option>
              <option value="アウディ">メルセデス・ベンツ</option>
            </select>
          </div>
        </div>

        <div>
          <label for="car">車種</label>
          <div class="c-form-select-color">
            <select id="car" name="car">
              <option value="選択してください" selected disabled>選択してください</option>
              <option value="ダミーダミー">ランチア デルタ アッカエッフェ インテグラーレ エボルツィオーネ ドゥエ コレツィオーネ エディツィオーネ フィナーレ</option>
            </select>
          </div>
        </div>
        <div>
          <label for="color">色</label>
          <div class="c-form-select-color">
            <select id="color" name="color">
              <option value="選択してください" selected disabled>選択してください</option>
              <option value="ダミーダミー">ダミーダミー</option>
            </select>
          </div>
        </div>
        <div>
          <label for="number">ナンバー（※4桁の数字）</label>
          <input type="text" id="number" name="number" maxlength="4" minlength="4" class="u-w-full-wide">
        </div>
        <div>
          <!-- 備考 -->
          <label for="remarks">備考</label>
          <textarea id="remarks" name="remarks" rows="4" class="u-w-full-wide u-max-350"></textarea>
        </div>
      </div>

      <!-- ボタン -->
      <div class="l-flex--column l-grid--rgap1 l-flex--center u-mt2">
        <button class="c-button--yellow u-w170" type="submit">フライト情報変更</button><!-- アラート表示させるという指示を受けています -->
        <a href="/user/n-5.php" class="c-button--yellow u-w170">マイページに戻る</a>
      </div>
    </form>

  </div><!-- ./p-user-input__inner -->
  <?php include('../include/user/footer.php'); ?>

</body>

</html>