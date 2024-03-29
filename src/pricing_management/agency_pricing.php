<!-- I-4 代理店 料金設定 -->
<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include_once '../include/head.php'; ?>
</head>

<body>
  <div class="l-wrap">
    <?php include_once '../include/header.php'; ?>
    <?php include_once '../include/nav.php'; ?>
    <main class="l-wrap__main l-container__main">
      <!-- パンくず -->
      <div class="l-breadcrumb">
        <ul class="l-breadcrumb__list">
          <li class="l-breadcrumb__item">代理店 料金設定</li>
        </ul>
      </div>
      <h2 class="c-title__lv2">料金設定登録</h2>

      <form action="" method="POST" class="p-pricing_setting__registration-form u-mb4">
        <!-- 入力フォーム -->
        <div class="c-form__input">
          <label for="agency">適用する代理店</label>
          <div class="c-form-select-wrap">
            <select name="agency" id="agency">
              <!-- 選択不可 -->
              <option value="" disabled selected>選択してください</option>
              <option value="agency1">代理店1</option>
              <option value="agency2">代理店2</option>
              <option value="agency3">代理店3</option>
            </select>
          </div>

          <div class="l-grid--col2 l-grid--gap2">
            <div>
              <label for="price_list">料金表選択</label>
              <div class="c-form-select-wrap">
                <select name="price_list" id="price_list">
                  <option value="" disabled selected>選択してください</option>
                  <option value="price_list1">料金表1</option>
                  <option value="price_list2">料金表2</option>
                  <option value="price_list3">料金表3</option>
                </select>
              </div>
            </div>

            <!-- 料金の適用期間 -->
            <div>
              <p class="u-mb025">料金の適用期間</p>
              <div class="l-grid l-grid--col3 l-grid--gap2">
                <div>
                  <input type="date" id="start_date" name="start_date">
                </div>
                <p class="u-mb1">～</p>
                <div>
                  <input type="date" id="end_date" name="end_date">
                </div>
              </div>
            </div>
          </div>

          <!-- MEMO -->
          <label for="memo">メモ</label>
          <textarea name="memo" id="memo" cols="100" rows="1"></textarea>

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
          </div>

          <div class="l-grid--col2 l-grid--gap2">
            <!-- 料金表名称 -->
            <div>
              <label for="price_list_name">料金表名称</label>
              <input type="text" id="price_list_name" name="price_list_name" class="u-w100">
            </div>

            <!-- 料金の適用期間 -->
            <div>
              <div class="l-grid l-grid--col2 l-flex--item-end l-grid--gap2">
                <div>
                  <label for="start_date2">料金の適用期間</label>
                  <input type="date" id="start_date2" name="start_date2">
                </div>
                <div>
                  <input type="date" id="end_date2" name="end_date2">
                </div>
              </div>
            </div>
          </div>

          <label for="memo2">メモ</label>
          <textarea name="memo2" id="memo2" cols="100" rows="1"></textarea>
        </div>
        <!-- button -->
        <div class="p-pricing_setting__registration-form__right u-mb1">
          <button type="submit" class="c-button__submit u-mt0">登録</button>
          <button type="button" class="c-button__load u-mt0">CSVダウンロード</button>
          <button type="button" class="c-button__load u-mt0">CSVアップロード</button>
        </div>
      </form>

      <!-- 下段 -->
      <h2 class="c-title__lv2">登録済み 代理店 適用料金表一覧</h2>
      <form action="" class="l-flex--end l-flex--item-end l-grid--gap1 u-mb1">
        <!-- 代理店コード -->
        <div>
          <label for="price_list">代理店コード</label>
          <div class="c-form-select-wrap">
            <select name="price_list" id="price_list">
              <option value="" disabled selected>選択してください</option>
              <option value="price_list1">代理店コード1</option>
              <option value="price_list2">代理店コード2</option>
              <option value="price_list3">代理店コード3</option>
            </select>
          </div>
        </div>
        <!-- キーワード -->
        <div>
          <label for="keyword">キーワード</label>
          <input type="text" id="keyword" name="keyword">
        </div>

        <button type="button" class="c-button__search u-mb1">絞込</button>
      </form>

      <!-- 料金一覧テーブル -->
      <table class="l-table-list">
        <thead>
          <tr class="l-table-list__head">
            <th>代理店</th>
            <th>料金表名称</th>
            <th>適用期間</th>
            <th>メモ</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody class="l-table-list__body">
          <tr>
            <td>代理店1</td>
            <td>料金表1</td>
            <td>2021/01/01～2021/12/31</td>
            <td>メモメモメモ</td>
            <td>
              <button type="button" class="c-button__edit">編集</button>
            </td>
          </tr>
          <tr>
            <td>代理店2</td>
            <td>料金表2</td>
            <td>2021/01/01～2021/12/31</td>
            <td>メモメモメモ</td>
            <td>
              <button type="button" class="c-button__edit">編集</button>
            </td>
          </tr>
          <tr>
            <td>代理店3</td>
            <td>料金表3</td>
            <td>2021/01/01～2021/12/31</td>
            <td>メモメモメモ</td>
            <td>
              <button type="button" class="c-button__edit">編集</button>
            </td>
          </tr>
        </tbody>
      </table>
    </main><!-- /.l-container__main -->
  </div><!-- /.l-wrap -->

  <script src="../js/close_button_toggle.js"></script>

</body>

</html>