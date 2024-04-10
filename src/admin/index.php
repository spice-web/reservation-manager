<!-- B-0-2 予約管理TOP-->
<!DOCTYPE html>
<html lang="ja">

<?php include_once '../include/head.php'; ?>

<body>
  <div class="l-wrap">
    <?php include_once '../include/header.php'; ?>

    <?php include_once '../include/nav.php'; ?>

    <main class="l-wrap__main">
      <!-- パンくず -->
      <ul class="l-wrap__breadcrumb l-breadcrumb">
        <li class="l-breadcrumb__list">予約管理TOP</li>
      </ul>
      <div class="l-container__inner">
        <ul class="p-index__list">
          <li class="p-index__item">
            <a href="/user_input/user_calendar_select.php" target="_blank" rel="noreferrer noopener" class="p-index__link">新規予約<br>（お客さまで入力）</a>
          </li>
          <li class="p-index__item">
            <a href="/admin/reception_staff_input.php" class="p-index__link">新規予約<br>（スタッフが入力）</a>
          </li>
          <li class="p-index__item">
            <a href="/admin/reservation_search.php" class="p-index__link">検索</a>
          </li>
        </ul>

      </div>
    </main><!-- /.l-container__main -->
  </div><!-- /.l-container__wrap -->

</body>

</html>