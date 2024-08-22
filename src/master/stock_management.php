<!-- G-18 入出庫上限・在庫設定 -->
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
        <li class="l-breadcrumb__list">入出庫上限・在庫設定</li>
      </ul>

      <div class="l-container__inner">

        <h2 class="c-title__lv2 u-mb2">期間一括登録</h2>
        <div class="l-grid__right-submitButton u-font--md">
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
          <div class="l-grid__right-submitButton--button u-mb1">
            <!-- 一括登録 -->
            <button class="c-button__submit">一括登録</button>
            <!-- CSVダウンロード -->
            <button class="c-button__load">CSVダウンロード</button>
            <!-- CSVアップロード -->
            <button class="c-button__load">CSVアップロード</button>
          </div>
        </div>

        <!-- カレンダー -->
        <!-- ページネーション -->
        <div class="c-pager__pagination-container">
          <button class="c-pager__button c-button__prev" id="prevButton" onclick="prevPage()"></button>
          <div class="c-pager__year-list-wrapper">
              <div class="c-pager__year-list" id="yearList">
                  <div class="c-pager__year-item">2015</div>
                  <div class="c-pager__year-item">2016</div>
                  <div class="c-pager__year-item">2017</div>
                  <div class="c-pager__year-item">2018</div>
                  <div class="c-pager__year-item">2019</div>
                  <div class="c-pager__year-item">2020</div>
                  <div class="c-pager__year-item">2021</div>
                  <div class="c-pager__year-item">2022</div>
                  <div class="c-pager__year-item">2023</div>
                  <div class="c-pager__year-item --selected">2024</div>
              </div>
          </div>
          <button class="c-pager__button c-button__next" id="nextButton" onclick="nextPage()"></button>
        </div>
      </div><!-- ./l-container__inner -->
    </main>
  </div>
<script src="../js/yearList.js"></script>
</body>

</html>