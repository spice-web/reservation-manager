<!-- N-15-2 -->
<!-- 車両情報編集 -->

<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- head内の違いは /css/user/style.css のみ -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>車両情報編集</title>
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
  <?php include_once '../include/user/header.php'; ?>
  <div class="p-user-input__inner--sm">
    <!-- パンくず -->
    <ul class="p-user-breadcrumb">
      <li class="p-user-breadcrumb__list"><a href="/user/dashboard.php">マイページ</a></li>
      <li class="p-user-breadcrumb__list">車両情報編集</li>
    </ul>
    <h2 class="c-title__table">車両情報</h2>
    <form action="" method="POST">
      <div class="l-grid--col2-auto l-grid--cgap2 l-flex--column--md l-grid--cgap-md">
        <div>
          <label for="maker">メーカー</label>
          <!-- 車メーカーのselect -->
          <div class="c-form-select-color">
            <select name="maker" id="maker">
              <option value="トヨタ">トヨタ</option>
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
              <option value="ダミーダミー">ダミーダミー</option>
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
          <label for="memo">取扱注意メモ</label>
          <div class="c-form-select-color">
            <select id="memo" name="memo">
              <option value="選択してください" selected disabled>選択してください</option>
              <option value="ダミーダミー">MT車</option>
            </select>
          </div>
        </div>
      </div>


      <!-- ボタン　サブミット -->
      <div class="l-flex--center u-mt3">
        <button type="submit" class="c-button__submit">更新</button>
      </div>
    </form>
  </div><!-- ./p-user-input__inner -->
</body>

</html>