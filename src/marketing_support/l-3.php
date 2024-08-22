<!-- L-3 売上目標設定と実績​ -->
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
        <li class="l-breadcrumb__list">売上目標設定と実績​</li>
      </ul>

      <div class="l-container__inner">
        <form action="" class="u-mb2">
          <div class="l-flex--end l-grid--gap1">
            <button class="c-button__submit--yellow u-h38">設定</button>
            <button class="c-button__submit--gray u-h38">CSVダウンロード</button>
            <button class="c-button__submit--gray u-h38">CSVアップロード</button>
          </div>
        </form>

        <!-- ページネーション -->
        <div class="c-pager__pagination-container u-mb2">
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

        <div class="p-salesTarget__wrap">
          <!-- 左側 項目-->
          <dl class="p-salesTarget__def">
            <dt class="p-salesTarget__dttl">月間総売上​</dt>
            <dd>
              <div>１）売上目標​</div>
              <div>２）売上実績​</div>
              <div>３）目標と実績の差額​</div>
              <div>４）売上目標に対する達成率​</div>
              <div>５）前年同月の売上実績</div>
              <div>６）前年同月比と同月の売上差額</div>
              <div>７）前年同月比に対する達成率</div>
            </dd>
          </dl>

          <!-- 右側 テーブル -->
           <div class="p-salesTarget__table"></div>

        </div>

      </div><!-- ./l-container__inner -->
    </main>
  </div>

  <script src="../js/yearList.js"></script>
</body>

</html>