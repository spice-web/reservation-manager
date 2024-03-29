<!-- G-7 商品カテゴリ設定 -->
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once '../include/head.php'; ?>
</head>

<body>
  <div class="l-wrap">
    <?php include_once '../include/header.php'; ?>
    <?php include_once '../include/nav.php'; ?>
    <main class="l-wrap__main l-container__main">
      <!-- パンくず -->
      <ul class="l-breadcrumb">
        <li class="l-breadcrumb__list">商品カテゴリー設定</li>
        </li>
      </ul>
      <h2 class="c-title__lv2">新規登録 および 検索</h2>
      <form method="" action="/" class="l-grid--col3-auto l-grid--gap2 u-mb4 u-font--14">
        <div>
          <label for="category">商品カテゴリ名</label>
          <input type="text" id="category" name="category" class="c-form-input--w100">
          <div>
            <!-- メモ -->
            <label for="memo">メモ</label>
            <textarea name="memo" id="memo" class="" cols="40"></textarea>
          </div>
        </div>
        <div>
          <label for="division">区分</label>
          <!--  「出庫までに作業が必要」「出庫までに作業が不要」　radioボタン  -->
          <div class="c-button-optionSelect l-grid--col2 l-grid--gap1">
            <div>
              <input type="radio" name="division" value="division1" id="division1" checked>
              <label for="division1" class="u-h40">出庫までに作業が必要</label>
            </div>
            <div>
              <input type="radio" name="division" value="division2" id="division2">
              <label for="division2" class="u-h40">出庫までに作業が不要</label>
            </div>
          </div>
        </div>
        <div class="l-flex--column l-flex--self-end l-grid--gap05">
          <button type="submit" class="c-button__submit u-mt0">登録</button>
          <button class="c-button__submit--gray u-mt0 u-mb1">検索</button>
        </div>
      </form>

      <h2 class="c-title__lv2">登録済みカテゴリー一覧</h2>

      <table class="l-table-list">
        <thead class="l-table-list__head">
          <tr>
            <th>カテゴリー名</th>
            <th>区分</th>
            <th>メモ</th>
            <th> </th>
          </tr>
        </thead>

        <tbody class="l-table-list__body">
          <tr>
            <td>洗車</td>
            <td>出庫までに作業が必要</td>
            <td>MEMOメモめも</td>
            <td><button class="c-button__edit">編集</button></td>
          </tr>
          <tr>
            <td>洗車</td>
            <td>出庫までに作業が必要</td>
            <td>MEMOメモめも</td>
            <td><button class="c-button__edit">編集</button></td>
          </tr>
          <tr>
            <td>洗車</td>
            <td>出庫までに作業が必要</td>
            <td>MEMOメモめも</td>
            <td><button class="c-button__edit">編集</button></td>
          </tr>
        </tbody>
      </table>
    </main>
  </div>
</body>

</html>