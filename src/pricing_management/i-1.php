<!-- I-1 基本料金設定 -->
<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include_once '../include/head.php'; ?>
</head>

<body>
  <div class="l-wrap">
    <?php include_once '../include/header.php'; ?>
    <?php include_once '../include/nav.php'; ?>
    <main class="l-wrap__main">
      <!-- パンくず -->
      <ul class="l-wrap__breadcrumb l-breadcrumb">
        <li class="l-breadcrumb__list">設定</li>
        <li class="l-breadcrumb__list">基本料金設定</li>
        </li>
      </ul>

      <div class="l-container__inner">
        <form action="" method="POST" class="l-grid__right-submitButton u-mb4">
          <!-- 入力フォーム -->
          <div class="c-form__input">
            <h2 class="c-title__lv2 l-flex--sb u-w-full-wide">料金設定登録<span class="close_button c-button__close">閉じる</span></h2>

            <div class="is-active">
              <div class="l-grid--col2 l-grid--gap2">
                <div>
                  <label for="price_list" class="u-font--md">料金表選択</label>
                  <div class="c-form-select-wrap">
                    <select name="price_list" id="price_list">
                      <option value="" disabled selected>選択してください</option>
                      <option value="price_list_New">新規登録</option>
                      <option value="price_list1">2024年1月1日～2024年3月31日</option>
                      <option value="price_list2">2024年4月28日～2024年5月8日</option>
                    </select>
                  </div>
                </div>

                <!-- 料金の適用期間 -->
                <div>
                  <p class="u-mb025 u-font--md">料金の適用期間</p>
                  <div class="l-flex l-grid--gap05">
                    <input type="date" id="start_date" name="start_date" class="u-w-full-wide">
                    <p class="u-mb1">～</p>
                    <input type="date" id="end_date" name="end_date" class="u-w-full-wide">
                  </div>
                </div>
              </div>

              <!-- MEMO -->
              <label for="memo" class="u-font--md">メモ</label>
              <textarea name="memo" id="memo" rows="1" class="u-w-full-wide"></textarea>

              <!-- 1日目～15日まで料金を入力するinput -->
              <div class="l-grid--pricing l-grid--input u-mb2 u-pb2 u-border--bottom">
                <div>
                  <label for="day1">1日目</label>
                  <input type="text" id="day1" name="day1">
                </div>
                <div>
                  <label for="day2">2日目</label>
                  <input type="text" id="day2" name="day2">
                </div>
                <div>
                  <label for="day3">3日目</label>
                  <input type="text" id="day3" name="day3">
                </div>
                <div>
                  <label for="day4">4日目</label>
                  <input type="text" id="day4" name="day4">
                </div>
                <div>
                  <label for="day5">5日目</label>
                  <input type="text" id="day5" name="day5">
                </div>
                <div>
                  <label for="day6">6日目</label>
                  <input type="text" id="day6" name="day6">
                </div>
                <div>
                  <label for="day7">7日目</label>
                  <input type="text" id="day7" name="day7">
                </div>
                <div>
                  <label for="day8">8日目</label>
                  <input type="text" id="day8" name="day8">
                </div>
                <div>
                  <label for="day9">9日目</label>
                  <input type="text" id="day9" name="day9">
                </div>
                <div>
                  <label for="day10">10日目</label>
                  <input type="text" id="day10" name="day10">
                </div>
                <div>
                  <label for="day11">11日目</label>
                  <input type="text" id="day11" name="day11">
                </div>
                <div>
                  <label for="day12">12日目</label>
                  <input type="text" id="day12" name="day12">
                </div>
                <div>
                  <label for="day13">13日目</label>
                  <input type="text" id="day13" name="day13">
                </div>
                <div>
                  <label for="day14">14日目</label>
                  <input type="text" id="day14" name="day14">
                </div>
                <div>
                  <label for="day15">15日目</label>
                  <input type="text" id="day15" name="day15">
                </div>
                <div>
                  <label for="day16">16日目以降</label>
                  <input type="text" id="day16" name="day16">
                </div>
                <div>
                  <label for="extensionFee">延長料</label>
                  <input type="text" id="extensionFee" name="extensionFee">
                </div>
                <div class="--last">
                  <label for="basicFee">基本料金</label>
                  <input type="text" id="basicFee" name="basicFee">
                </div>
              </div>
            </div>

            <!-- 下段 -->
            <div class="l-grid__basicPricing--bottom">
              <h2 class="c-title__lv2 l-flex--sb">車両サイズによる割引・割増設定<span class="close_button c-button__close">閉じる</span></h2>
              <div class="l-grid--col2 is-active">
                <div class="l-grid__basicPricing--bottom__item l-grid__basicPricing--bottom--left">
                  <!-- 二輪 -->
                  <label for="two_wheeler">二輪</label>
                  <input type="text" id="two_wheeler" name="two_wheeler">
                  <!-- 大型 -->
                  <label for="large_size">大型</label>
                  <input type="text" id="large_size" name="large_size">
                </div>
                <div class="l-grid__basicPricing--bottom__item l-grid__basicPricing--bottom--right">
                  <!-- マイクロバス -->
                  <label for="micro_bus">マイクロバス</label>
                  <input type="text" id="micro_bus" name="micro_bus">
                  <!-- キャンピングカー -->
                  <label for="camping_car">キャンピングカー</label>
                  <input type="text" id="camping_car" name="camping_car">
                </div>
              </div>
            </div>


          </div>
          <!-- button -->
          <div class="l-grid__right-submitButton--button c-button__csv--upload u-mb1">
            <button type="submit" class="c-button__register u-mt0">登録</button>
          </div>
        </form>
      </div>
    </main><!-- /.l-container__main -->
  </div><!-- /.l-wrap -->

  <!-- 閉じる・開く切替 -->
  <script src="../js/close_button_toggle.js"></script>
</body>

</html>