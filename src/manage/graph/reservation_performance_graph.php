<!-- 予約実績グラフ　L-2 -->
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
        <li class="l-breadcrumb__list">予約実績グラフ</li>
        </li>
      </ul>

      <div class="l-container__inner">
        <!-- 表示期間選択 -->
        <div class="l-flex l-flex--sb l-flex--item-end l-grid--gap2 u-mb2">
          <!-- 月別 週別 時間別 任意の期間 button-->
          <div class="l-grid--col4-auto l-grid--gap05 u-mb1">
            <button class="c-button__submit u-w90">月別</button>
            <button class="c-button__submit u-w90">週別</button>
            <button class="c-button__submit u-w-auto">時間別</button>
            <button class="c-button__submit u-w-auto">任意の期間</button>
          </div>
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
        </div>

        <!-- グラフ -->
        <div class="relative c-graph__wrap">
          <div class="c-graph__header">
            <div class="l-flex--sb c-graph__header-top">
              <div class="u-font--bold c-graph__selected-month">2024.01</div>
                <!-- checkedで選択・未選択の切替　デフォルトで選択した状態にしたければ"checked"つける -->
              <ul class="l-flex u-font--12 palt c-graph__select-button --performance">
                <li>
                    比較期間を表示<label class="c-button-toggle">
                    <input class="c-button-toggle__input" type="checkbox" role="switch">
                    <span class="c-button-toggle__slider"></span>
                  </label>
                </li>
                <li>入庫<label class="c-button-toggle">
                    <input class="c-button-toggle__input" type="checkbox" checked role="switch">
                    <span class="c-button-toggle__slider"></span>
                  </label></li>
                <li>出庫<label class="c-button-toggle">
                    <input class="c-button-toggle__input" type="checkbox" checked role="switch">
                    <span class="c-button-toggle__slider"></span>
                  </label></li>
                <li>MAX在庫<label class="c-button-toggle">
                    <input class="c-button-toggle__input" type="checkbox" checked role="switch">
                    <span class="c-button-toggle__slider"></span>
                  </label></li>
                <li>おわり在庫<label class="c-button-toggle">
                    <input class="c-button-toggle__input" type="checkbox" checked role="switch">
                    <span class="c-button-toggle__slider"></span>
                  </label></li>
              </ul>
            </div>
          </div>
          <img src="../images/dummy/gulp_rsv.png" width="100%" height="auto" alt="">
          <div id="prevBtn" class="c-button__prev absolute-VerticalCenter"></div>
          <div id="nextBtn" class="c-button__next absolute-VerticalCenter--right"></div>
        </div>
        <!-- グラフ -->

      </div>
    </main><!-- /.l-container__main -->
  </div>

</body>

</html>