<!-- G-18 入出庫上限・在庫設定 -->
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
        <li class="l-breadcrumb__list">入出庫上限・在庫設定</li>
        </li>
      </ul>

      <h2 class="c-title__lv2 u-mb2">期間一括登録</h2>
      <div class="l-flex l-grid--gap2">
        <div>
          <!-- 開始日 -->
          <div class="l-grid--col2 l-grid--gap2">
            <div class="form-item">
              <label for="start_date">開始日</label>
              <input type="date" id="start_date" name="start_date" class="c-input" required>
            </div>
            <div class="form-item">
              <label for="end_date">終了日</label>
              <input type="date" id="end_date" name="end_date" class="c-input u-w140" required>
            </div>
          </div>
          <div class="l-grid--col5 l-grid--gap1">
            <!-- MAX在庫 -->
            <div class="form-item">
              <label for="max_stock">MAX在庫</label>
              <input type="text" id="max_stock" name="max_stock" class="c-input u-w140" required>
            </div>
            <!-- 入庫上限 -->
            <div class="form-item">
              <label for="max_entry">入庫上限</label>
              <input type="text" id="max_entry" name="max_entry" class="c-input u-w140" required>
            </div>
            <!-- 出庫上限 -->
            <div class="form-item">
              <label for="max_withdrawal">出庫上限</label>
              <input type="text" id="max_withdrawal" name="max_withdrawal" class="c-input u-w140" required>
            </div>
            <div class="form-item">
              <label for="end_stock">おわり在庫</label>
              <input type="text" id="end_stock" name="end_stock" class="c-input u-w140" required>
            </div>
            <div class="form-item">
              <label for="limit_per_15min">15分あたりの上限</label>
              <input type="text" id="limit_per_15min" name="limit_per_15min" class="c-input u-w140" required>
            </div>
          </div>
        </div>
        <div class="l-flex--column">
          <!-- 一括登録 -->
          <button class="c-button__submit u-mb1">一括登録</button>
          <!-- CSVダウンロード -->
          <button class="c-button__load u-mb1">CSVダウンロード</button>
          <!-- CSVアップロード -->
          <button class="c-button__load u-mb1">CSVアップロード</button>
        </div>
      </div>
    </main>
  </div>
</body>

</html>