<!-- B-2-7 予約管理TOP > 受付入力 > 予約内容確認 -->
<!DOCTYPE html>
<html lang="ja">
<?php include_once '../include/head.php'; ?>

<body>
  <div class="l-wrap">
    <?php include_once '../include/header.php'; ?>
    <?php include_once '../include/nav.php'; ?>
    
    <main class="l-wrap__main l-container__main">
      <div class="l-container__main">
        <!-- パンくず -->
        <ul class="l-breadcrumb">
          <li class="l-breadcrumb__list">予約管理TOP</li>
          <li class="l-breadcrumb__list">受付入力</li>
          <li class="l-breadcrumb__list">予約内容確認</li>
        </ul>

        <div class="l-container__inner">

          <div class="p-reception-entry__box u-border--none">
            <div class="u-font--20 u-font--medium u-font--green">予約内容確認</div>
            <div>
              <div class="p-reception-entry__confirm u-mb3">
                <div class="p-reception-entry__confirm--head l-grid--rowspan1 l-grid--colspan1 u-border--radius-tl"></div>
                <div class="u-bg--off-white l-grid--rowspan1 l-grid--colspan1">予約コード</div>
                <div class="l-grid--rowspan1 l-grid--colspan1"></div>
                <div class="u-bg--off-white l-grid--rowspan1 l-grid--colspan1">代理店コード</div>
                <div class="l-grid--rowspan1 l-grid--colspan1 u-border--radius-tr""></div>
                <div class=" p-reception-entry__confirm--head l-grid--rowspan2 l-grid--colspan1">顧客情報</div>
                <div class="u-bg--off-white l-grid--rowspan1 l-grid--colspan1">氏名</div>
                <div class="l-grid--rowspan1 l-grid--colspan1"></div>
                <div class="u-bg--off-white l-grid--rowspan1 l-grid--colspan1">ふりがな</div>
                <div class="l-grid--rowspan1 l-grid--colspan1"></div>
                <div class="u-bg--off-white l-grid--rowspan1 l-grid--colspan1">郵便番号</div>
                <div class="l-grid--rowspan1 l-grid--colspan1"></div>
                <div class="u-bg--off-white l-grid--rowspan1 l-grid--colspan1">メールアドレス</div>
                <div class="l-grid--rowspan1 l-grid--colspan1"></div>
                <div class="p-reception-entry__confirm--head l-grid--rowspan3 l-grid--colspan1">車両情報</div>
                <div class="u-bg--off-white l-grid--rowspan1 l-grid--colspan1">メーカー</div>
                <div class="l-grid--rowspan1 l-grid--colspan1"></div>
                <div class="u-bg--off-white l-grid--rowspan1 l-grid--colspan1">車種</div>
                <div class="l-grid--rowspan1 l-grid--colspan1"></div>
                <div class="u-bg--off-white l-grid--rowspan1 l-grid--colspan1">色</div>
                <div class="l-grid--rowspan1 l-grid--colspan1"></div>
                <div class="u-bg--off-white l-grid--rowspan1 l-grid--colspan1">ナンバー</div>
                <div class="l-grid--rowspan1 l-grid--colspan1"></div>
                <div class="u-bg--off-white l-grid--rowspan1 l-grid--colspan1">取扱注意メモ</div>
                <div class="l-grid--rowspan1 l-grid--colspan3"></div>
                <div class="p-reception-entry__confirm--head l-grid--rowspan2 l-grid--colspan1">予約情報</div>
                <div class="u-bg--off-white l-grid--rowspan1 l-grid--colspan1">ご利用人数</div>
                <div class="l-grid--rowspan1 l-grid--colspan3"></div>
                <div class="u-bg--off-white l-grid--rowspan1 l-grid--colspan1">到着便</div>
                <div class="l-grid--rowspan1 l-grid--colspan1"></div>
                <div class="u-bg--off-white l-grid--rowspan1 l-grid--colspan1">到着日</div>
                <div class="l-grid--rowspan1 l-grid--colspan1"></div>
                <div class="p-reception-entry__confirm--head l-grid--rowspan1 l-grid--colspan1">オプション</div>
                <div class="l-grid--rowspan1 l-grid--colspan4"></div>
                <div class="p-reception-entry__confirm--head l-grid--rowspan1 l-grid--colspan1 u-border--radius-bl"">予約メモ</div>
                <div class=" l-grid--rowspan1 l-grid--colspan4 u-border--radius-br"></div>
              </div>

              <div class="l-flex--center l-grid--gap2">
                <button type="submit" class="c-button__submit--dark-gray">修正する</button>
                <button type="submit" class="c-button__submit">予約を完了する</button>
              </div>
            </div>

          </div>
        </div><!-- /.l-container__inner -->

      </div><!-- /.l-container__main -->
    </main><!-- /.l-container__wrap -->
  </div>
</body>

</html>