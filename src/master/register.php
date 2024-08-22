<!-- マスタ登録 -->
<!-- register.php -->
<!-- G-0 -->
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
      <li class="l-breadcrumb__list">マスタ登録</li>
    </ul>

    <div class="l-container__inner">

      <div class="l-flex--center text-center p-master-register">
        <div class="p-master-register__item">
          <form action="" enctype="multipart/form-data">
            <div class="p-master-register__title">航空会社マスタ</div>
            <input type="file">csvアップロード</input>
            <input type="file">csvダウンロード</input>
          </form>
        </div>
        <div class="p-master-register__item">
          <div class="p-master-register__title">空港マスタ</div>
          <button class="c-button__csv">csvアップロード</button>
          <button class="c-button__csv--download">csvダウンロード</button>
        </div>
        <div class="p-master-register__item">
          <div class="p-master-register__title">フライトマスタ</div>
          <button class="c-button__csv">csvアップロード</button>
          <button class="c-button__csv--download">csvダウンロード</button>
        </div>
      </div>

    </div>
  </main>

  </div>
</body>
</html>