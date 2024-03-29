<!-- B-2-0 受付入力1（受付予約・スタッフが入力） -->
<!DOCTYPE html>
<html lang="en">
<?php include_once '../include/head.php'; ?>

<body>
  <div class="l-wrap">
    <?php include_once '../include/header.php'; ?>

    <?php include_once '../include/nav.php'; ?>
    <main class="l-wrap__main l-container__main">
      <div class="l-container__main">
        <!-- パンくず -->
        <ul class="l-breadcrumb">
          <li class="l-breadcrumb__list">受付入力</li>
        </ul>
        <div class="l-container__inner">

          <form action="/admin/b-2-1.php" method="POST">
            <div class="p-reception-entry__box u-border--none">
              <div class="u-font--20 u-font--medium u-font--green">入出庫日確認</div>

              <div>
                <div class="l-grid l-grid--col2 l-grid--gap2 u-mb3">
                  <div>
                    <label for="date">入庫日</label>
                    <input type="date" id="date" name="date" class="c-form-input--w100">
                  </div>
                  <div>
                    <label for="time">入庫時間</label>
                    <input type="time" id="time" name="time" class="c-form-input--w100">
                  </div>
                  <div>
                    <label for="date">出庫日</label>
                    <input type="date" id="date" name="date" class="c-form-input--w100">
                  </div>
                  <div>
                    <label for="time">代理店コード</label>
                    <input type="text" id="code" name="code" class="c-form-input--w100">
                  </div>
                </div>

                <button type="button" value="" class="c-button__submit--gray is-block u-horizontal-auto">料金を確認</button>

                <!-- 駐車場利用料金 -->
                <div class="p-reception-entry-fee u-border--bottom u-horizontal-auto  u-mb4">
                  <p class="u-font-medium">駐車場利用料金</p>
                  <div class="p-reception-entry-fee__item l-grid l-grid--col2 u-border--top u-border--bottom">
                    <div>10月10日（水）</div>
                    <div>1,000<span>円</span></div>
                    <div>10月11日（木）</div>
                    <div>1,000<span>円</span></div>
                    <div>10月12日（金）</div>
                    <div>1,500<span>円</span></div>
                    <div>10月13日（土）</div>
                    <div>2,000<span>円</span></div>
                    <div>10月14日（日）</div>
                    <div>2,000<span>円</span></div>
                    <div>10月15日（月）</div>
                    <div>300<span>円</span></div>
                  </div>
                  <!-- 合計 -->
                  <div class="p-reception-entry-fee__sum l-grid l-grid--col2">
                    <div>6日間 合計</div>
                    <div>7,800<span>円</span></div>
                  </div>
                </div>
                <!-- 駐車場利用料金 -->

                <button type="submit" value="" class="c-button__submit u-horizontal-auto is-block">受付入力へ進む</button>
              </div>
            </div><!-- /.l-reception-input__box -->
          </form>

        </div><!-- /.l-container__inner -->
      </div>
    </main>
</body>

</html>