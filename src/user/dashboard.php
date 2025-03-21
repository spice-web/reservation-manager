<!-- マイページ  -->
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>マイページ</title>
  <!-- description -->
  <meta name="description" content="" />
  <!-- favicon -->
  <link rel="icon" href="" type="image/svg+xml">

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
  <main class="p-user__inner">
    <div class="p-user__container">
      <div class="">
        <h2 class="c-title__user--lv2">マイページ</h2>
        <div class="p-user-head__wrap">
          <a href="" class="p-user-head__item--reserve">新規予約はこちら</a>
          <a href="" class="p-user-head__item--access">駐車場へのアクセス</a>
          <a href="" class="p-user-head__item--contact">お問い合わせ</a>
        </div>

        <h2 class="c-title__user--lv2">予約情報</h2>
        <div class="p-user-top__tab">
          <button id="buttonOne" class="p-user-top__tab-item is-active">予約一覧</button>
          <button id="buttonTwo" class="p-user-top__tab-item">過去の予約</button>
        </div>
        <div class="l-user__content p-user-top__tab-inner contentOne is-active">
          <!-- 予約一覧のコンテンツ -->
          <div>
            <div class="l-user-reserve__wrap">
              <a href="/user/n-13.php" class="l-user-reserve__item"><!-- 各々の予約情報詳細（N-13） -->
                <div class="l-user-reserve__label">予約コード:01234567898</div>
                <div class="l-user-reserve__date">
                  <div>入庫日時</div>
                  <div>2025年2月1日</div>
                </div>
                <div class="l-user-reserve__date">
                  <div>出庫予定日</div>
                  <div>2025年2月1日</div>
                </div>
              </a>
              <div class="l-user-reserve__button u-font--white l-flex--column l-grid--gap05">
                <a href="/user/change.php" class="c-button-user">予約内容の変更</a>
                <a href="/user/cancel.php" class="c-button-user">予約のキャンセル</a>
              </div>
            </div>
            <div class="l-user-reserve__wrap">
              <a href="/user/n-13.php" class="l-user-reserve__item"><!-- 各々の予約情報詳細（N-13） -->
                <div class="l-user-reserve__label">予約コード:01234567898</div>
                <div class="l-user-reserve__date">
                  <div>入庫日時</div>
                  <div>2025年2月1日</div>
                </div>
                <div class="l-user-reserve__date">
                  <div>出庫予定日</div>
                  <div>2025年2月1日</div>
                </div>
              </a>
              <div class="l-user-reserve__button u-font--white l-flex--column l-grid--gap05">
                <a href="/user/change.php" class="c-button-user">予約内容の変更</a>
                <a href="/user/cancel.php" class="c-button-user">予約のキャンセル</a>
              </div>
            </div>
          </div>
          <!-- ページャー -->
          <div class="l-user-pager">
            <a class="l-user-pager__item --current">1</a>
            <a href="/" class="l-user-pager__item">2</a>
            <a href="/" class="l-user-pager__item">3</a>
            <a href="/" class="l-user-pager__item">4</a>
            <a href="/" class="l-user-pager__item">5</a>
          </div>
        </div>

        <div class="l-user__content p-user-top__tab-inner contentTwo is-none">
          <!-- 過去の予約のコンテンツ -->
          <div>
            <div class="l-user-reserve__wrap--old">
              <a href="/user/n-13.php" class="l-user-reserve__item"><!-- 各々の予約情報詳細（N-13） -->
                <div class="l-user-reserve__label">予約コード:01234567898</div>
                <div class="l-user-reserve__date">
                  <div>入庫日時</div>
                  <div>2025年2月1日</div>
                </div>
                <div class="l-user-reserve__date">
                  <div>出庫日</div>
                  <div>2025年2月1日</div>
                </div>
              </a>
            </div>
            <div class="l-user-reserve__wrap--old">
              <a href="/user/n-13.php" class="l-user-reserve__item"><!-- 各々の予約情報詳細（N-13） -->
                <div class="l-user-reserve__label">予約コード:01234567898</div>
                <div class="l-user-reserve__date">
                  <div>入庫日時</div>
                  <div>2025年2月1日</div>
                </div>
                <div class="l-user-reserve__date">
                  <div>出庫日</div>
                  <div>2025年2月1日</div>
                </div>
              </a>
            </div>
          </div>
          <!-- ページャー -->
          <div class="l-user-pager">
            <a class="l-user-pager__item --current">1</a>
            <a href="/" class="l-user-pager__item">2</a>
            <a href="/" class="l-user-pager__item">3</a>
            <a href="/" class="l-user-pager__item">4</a>
            <a href="/" class="l-user-pager__item">5</a>
          </div>
        </div>

        <!-- 顧客情報　start -->
        <h2 class="c-title__user--lv2">顧客情報</h2>
        <div class="l-user__content">
          <a href="/user/n-14.php">顧客情報詳細（N-14）</a>
          <a href="/user/n-13.php">予約情報詳細（N-13）</a>
        </div>

      </div>
    </div>
  </main>

  <?php include_once('../include/user/footer.php'); ?>

  <script src="../js/toggle_display.js"></script>
</body>

</html>