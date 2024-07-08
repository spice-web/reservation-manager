<!-- L-1 入出庫グラフ -->
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
        <li class="l-breadcrumb__list">入出庫グラフ</li>
        </li>
      </ul>

      <div class="l-container__inner">
        <!-- 表示期間選択 -->
        <div class="l-flex l-flex--sb l-flex--item-end l-grid--gap2 u-mb2">
          <div>
            <div>
              <label for="start">表示期間</label>
              <input type="date" name="start" id="start" class="u-w210">
              <span>～</span>
              <input type="date" name="end" id="end" class="u-w210">
            </div>
            <!-- 比較する期間 -->
            <div>
              <label for="compare">比較する期間</label>
              <input type="date" name="compare" id="compare_start" class="u-w210">
              <span>～</span>
              <input type="date" name="compare" id="compare_end" class="u-w210">
            </div>
          </div>

          <!-- 月別 週別 時間別 任意の期間 button-->
          <div class="l-grid--col4-auto l-grid--gap05 u-mb1">
            <button class="c-button__apply u-w90">月別</button>
            <button class="c-button__apply u-w90">週別</button>
            <button class="c-button__apply u-w-auto">時間別</button>
            <button class="c-button__apply u-w-auto">任意の期間</button>
          </div>
        </div>

        <!-- グラフ -->
        <div class="c-graph__wrap">
          <div class="c-button__next"></div>
        </div>
        <!-- グラフ -->

      </div>
    </main><!-- /.l-container__main -->
  </div>

  <!-- webSplides Required -->
  <script src="/js/webslides.min.js"></script>
  <script>
    window.ws = new WebSlides();
  </script>

  <!-- OPTIONAL - svg-icons.js (fontastic.me - Font Awesome as svg icons) -->
  <script defer src="/js/svg-icons.js"></script>
</body>

</html>