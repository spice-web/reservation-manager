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
    <main class="l-wrap__main">
      <!-- パンくず -->
      <div class="l-wrap__breadcrumb l-breadcrumb">
        <ul class="l-breadcrumb__list">
          <li class="l-breadcrumb__item">代理店 料金設定</li>
        </ul>
      </div>

      <div class="l-container__inner">
        <h2 class="c-title__lv2 l-flex--sb">料金設定登録<span class="close_button c-button__close">閉じる</span></h2>

        <div class="is-active">
          <form action="" class="l-grid__right-submitButton u-mb2">
            <div>
              <div class="l-grid--col3 l-grid--cgap1">
                <div>
                  <label for="agency_code" class="u-font--md">代理店コード</label>
                  <input type="text" id="agency_code" name="agency_code" class="u-w-full-wide">
                </div>
                <div>
                  <label for="company_name" class="u-font--md">社名</label>
                  <input type="text" id="company_name" name="company_name" class="u-w-full-wide">
                </div>
                <div>
                  <label for="tel" class="u-font--md">電話番号</label>
                  <input type="text" id="tel" name="tel" class="u-w-full-wide">
                </div>
              </div>
              <div>
                <label for="search_keywords" class="u-font--md">検索用キーワード</label>
                <input type="text" id="search_keywords" name="search_keywords" class="u-w-full-wide u-mb0">
              </div>
              <div class="u-pb2  u-border--bottom">
                <button type="submit" class="c-button__register w-160 u-mt2 u-horizontal-auto">検索</button>
              </div>
            </div>
            <div></div>

          </form>
          <form action="" method="POST" class="l-grid__right-submitButton u-mb4 is-active">
            <!-- 入力フォーム -->
            <div class="c-form__input u-font--md">
              <div class="l-grid--col2 l-grid--gap2">
                <div>
                  <label for="price_list">料金表選択</label>
                  <div class="c-form-select-color">
                    <select name="price_list" id="price_list">
                      <option value="" disabled selected>選択してください</option>
                      <option value="price_list1">新規登録</option>
                      <option value="price_list1">料金表1</option>
                      <option value="price_list2">料金表2</option>
                      <option value="price_list3">料金表3</option>
                    </select>
                  </div>
                </div>
  
                <!-- 料金の適用期間 -->
                <div>
                  <p class="u-mb025">料金の適用期間</p>
                  <div class="l-grid l-grid--col3-1fr_auto_1fr l-grid--gap1">
                    <div>
                      <input type="date" id="start_date" name="start_date" class="u-w-full-wide">
                    </div>
                    <p class="u-mb1 u-font-lh--38px">～</p>
                    <div>
                      <input type="date" id="end_date" name="end_date" class="u-w-full-wide">
                    </div>
                  </div>
                </div>
              </div>
  
              <!-- MEMO -->
              <label for="memo">メモ</label>
              <textarea name="memo" id="memo" rows="1" class="u-w-full-wide"></textarea>
  
              <!-- 1日目～15日まで料金を入力するinput -->
              <!-- max:21日まで -->
              <div class="l-grid--pricing l-grid--input">
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
                  <label for="extensionFee">延長料</label>
                  <input type="text" id="extensionFee" name="extensionFee">
                </div>
                <div class="--last">
                  <label for="basicFee">基本料金</label>
                  <input type="text" id="basicFee" name="basicFee">
                </div>
              </div>
             </div>
            <!-- button -->
            <div class="l-grid__right-submitButton--button c-button__csv--upload">
              <button type="submit" class="c-button__register u-mt0">登録</button>
            </div>
          </form>
        </div>

        <!-- 下段 -->
        <h2 class="c-title__lv2">登録済み 代理店 適用料金表一覧</h2>
        <!-- 料金一覧テーブル -->
        <div class="c-table-list--scroll__container">
          <table class="l-table-list">
            <thead>
              <tr class="l-table-list__head l-table-list--scroll__head">
                <th><div class="c-button-sort --asc">代理店</div></th>
                <th><div class="c-button-sort">料金表名称</div></th>
                <th><div class="c-button-sort">適用期間</div></th>
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
                  <button type="button" class="c-button__edit button_select">編集</button>
                </td>
              </tr>
              <tr>
                <td>代理店2</td>
                <td>料金表2</td>
                <td>2021/01/01～2021/12/31</td>
                <td>メモメモメモ</td>
                <td>
                  <button type="button" class="c-button__edit button_select">編集</button>
                </td>
              </tr>
              <tr>
                <td>代理店3</td>
                <td>料金表3</td>
                <td>2021/01/01～2021/12/31</td>
                <td>メモメモメモ</td>
                <td>
                  <button type="button" class="c-button__edit button_select">編集</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>

    </main><!-- /.l-container__main -->
  </div><!-- /.l-wrap -->

  <!-- ▼閉じるボタン -->
  <script src="../js/close_button_toggle.js"></script>

  <!-- ソート -->
  <script src="../js/tableHeaderSort.js"></script>

</body>

</html>