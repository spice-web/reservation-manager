<!-- ダイナミックプライシング設定 -->
<!DOCTYPE html>
<html lang="ja">

<?php include_once '../include/head.php'; ?>

<body>
  <div class="l-wrap">
    <?php include_once '../include/header.php'; ?>

    <?php include_once '../include/nav.php'; ?>

    <main class="l-wrap__main l-container__main">
      <!-- パンくず -->
      <ul class="l-breadcrumb">
        <li class="l-breadcrumb__list">予約管理TOP</li>
        </li>
      </ul>

      <h2 class="c-title__lv2">ダイナミックプライシング設定</h2>
      <form action="" method="POST" class="l-grid--col5 l-flex--item-end">
        <div>
          <!-- 設定範囲 -->
          <label for="option">設定範囲</label>
          <input type="text" name="" id="">%以上
        </div>

        <div>
          <input type="text" name="" id="">%未満
        </div>

        <div>
          <!-- 変動金額 -->
          <label for="option">変動金額</label>
          <input type="text" name="" id="option">円
        </div>

        <div class="l-grid--col2">
          <div class="c-button-optionSelect">
            <input type="radio" name="option" value="option1" id="option1" checked>
            <label for="option1" class="u-w80 u-h40 u-mb1">割引</label>
          </div>
          <div class="c-button-optionSelect">
            <input type="radio" name="option" value="option2" id="option2">
            <label for="option2" class="u-w80 u-h40 u-mb1">割増</label>
          </div>
        </div>

        <button type="submit" class="c-button__submit u-mb1">登録</button>
      </form>

      <div class="l-grid--col2 l-grid--gap2">
        <div>
          <h2 class="c-title__lv2">ダイナミックプライシング設定一覧</h2>
          <table class="l-table-list">
            <thead class="l-table-list__head">
              <tr>
                <th>設定範囲</th>
                <th>変動金額</th>
                <th></th>
              </tr>
            </thead>

            <tbody class="l-table-list__body">
              <tr>
                <td>0％以上～2％未満</td>
                <td>500円割引</td>
                <td><button class="c-button__edit">編集</button></td>
              </tr>
              <tr>
                <td>2％以上～20%未満</td>
                <td>400円割引</td>
                <td><button class="c-button__edit">編集</button></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td><button type="button" class="c-button__add">割引を追加</button></td>
              </tr>
              <tr>
                <td>20％以上～80％未満</td>
                <td>基本料金</td>
                <td><button class="c-button__edit">編集</button></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td><button type="button" class="c-button__add">割増を追加</button></td>
              </tr>
              <tr>
                <td>90％以上～95％未満</td>
                <td>200円割増</td>
                <td><button class="c-button__edit">編集</button></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div>
          <h2 class="c-title__lv2">シュミレーション結果</h2>
          <table class="l-table-result u-mb2">
            <thead class="l-table-result__head">
              <tr>
                <th>入庫見込み数に対して</th>
                <th>基本料金時の売上見込</th>
                <th>DP時の予測売上見込</th>
              </tr>
            </thead>

            <tbody class="l-table-result__body">
              <tr>
                <td>80%の場合</td>
                <td>80%</td>
                <td>85%</td>
              </tr>
              <tr>
                <td>90%の場合</td>
                <td>80%</td>
                <td>85%</td>
              </tr>
              <tr>
                <td>100%の場合</td>
                <td>80%</td>
                <td>85%</td>
              </tr>
            </tbody>
          </table>
          <!-- 注意　吹き出し -->
          <div class="c-balloon-caution">
            <div class="c-balloon-caution__icon"></div>
            <p class="c-balloon-caution__text">入庫見込み数100%時の売上見込が、100%より低くなっています。</p>
          </div>
        </div>
      </div>


    </main><!-- /.l-container__main -->
  </div><!-- /.l-container__wrap -->

</body>

</html>