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
    <main class="l-wrap__main">
      <!-- パンくず -->
      <ul class="l-wrap__breadcrumb l-breadcrumb">
        <li class="l-breadcrumb__list">商品カテゴリー設定</li>
        </li>
      </ul>

      <div class="l-container__inner">
        <h2 class="c-title__lv2">新規登録 および 検索</h2>
        <form method="" action="/" class="u-mb4 u-font--md">
          <div class="l-grid--col2-auto l-grid--gap2">
            <div>
              <label for="category">商品カテゴリ名</label>
              <input type="text" id="category" name="category" class="c-form-input--w100 u-mb0 u-h38">
            </div>
            <div class="u-font--normal">
              <label for="division" class="u-font--md">区分</label>
              <!--  「出庫までに作業が必要」「出庫までに作業が不要」　radioボタン  -->
              <div class="c-button-optionSelect l-grid--col3 l-grid--gap1">
                <div>
                  <input type="radio" name="division" value="division1" id="division1" checked>
                  <label for="division1" class="u-h38 u-mb0">出庫までに作業が必要</label>
                </div>
                <div>
                  <input type="radio" name="division" value="division2" id="division2">
                  <label for="division2" class="u-h38 u-mb0">出庫までに作業が不要</label>
                </div>
                <button class="c-button__submit--gray u-mt0 u-mb0 u-h38">検索</button>
              </div>
            </div>
          </div>

          <button type="submit" class="c-button__submit is-block u-horizontal-auto u-mt2 u-font--normal">登録</button>
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
              <td><button class="c-button__edit button_select">編集</button></td>
            </tr>
            <tr>
              <td>洗車</td>
              <td>出庫までに作業が必要</td>
              <td>MEMOメモめも</td>
              <td><button class="c-button__edit button_select">編集</button></td>
            </tr>
            <tr>
              <td>洗車</td>
              <td>出庫までに作業が必要</td>
              <td>MEMOメモめも</td>
              <td><button class="c-button__edit button_select">編集</button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>

  </div>
  <!-- オプションをクリックしたら出てくるmodal -->
  <div id="modalAreaOption" class="l-modal">
    <!-- モーダルのinnerを記述   -->
    <div class="l-modal__inner l-modal--trash">
      <div class="l-modal__head">編集</div>
      <!-- close button -->
      <div class="l-modal__close modal_optionClose">×</div>
      <div class="l-modal__content">
        <form class="l-flex--column l-flex--column l-flex--sb u-w-full">
          <div class="u-w-full-wide">
            <div class="c-title__modal--lv3">商品カテゴリー編集</div>
            <div class="l-modal--productCategory-edit">
              <!-- 1列目 -->
              <dl>
                <dt>商品名</dt>
                <dd>
                  <input type="text" class="u-w-full-wide">
                </dd>          
              </dl>
              <div class="l-grid--col2 l-grid--gap1">
                <dl>
                  <dt>
                    カテゴリー
                  </dt>
                  <dd>
                    <select name="" id="">
                      <option value="">洗車</option>
                      <option value="">オプション</option>
                    </select>
                  </dd>
                </dl>
                <dl>
                  <dt>
                    税区分
                  </dt>
                  <dd>
                    <select name="" id="">
                      <option value="">10%</option>
                      <option value="">8%</option>
                    </select>
                  </dd>
                </dl>
              </div>
  
              <!-- 2列目 -->
              <dl>
                <dt>略称</dt>
                <dd>
                  <input type="text" class="u-w-full-wide">
                </dd>          
              </dl>
              <dl>
                <dt>金額（税抜）</dt>
                <dd>
                  <input type="text" class="u-w-full-wide">
                </dd>
              </dl>
  
              <!-- 3列目 -->
              <dl>
                <dt>説明</dt>
                <dd>
                  <input type="text" class="u-w-full-wide">
                </dd>          
              </dl>
              <div class="l-modal--productCategory-edit-price">
                <div class="l-modal--productCategory-edit-price__wrap">
                  <span class="l-modal--productCategory-edit-price__head">
                    税込価格
                  </span>
                  <span class="u-font--24">1,100</span>円
                </div>
              </div>
            </div>
          </div>

          <div class="l-flex--center l-grid--gap1 u-mt2 u-mb2">
            <button type="button" class="c-button__submit--dark-gray">新規保存</button>
            <button type="button" id="modal_add" class="c-button__submit">上書き保存</button>
          </div>
        </form>
      </div><!-- ./l-modal__content -->

      <!-- データ削除ボタン -->
      <div class="l-modal__trashButton">
        <img src="../images/svg/trash.svg" alt="ゴミ箱" width="100%" class="l-modal--trashButton">
      </div>
    </div><!-- ./l-modal inner -->
    <!-- 閉じる・追加ボタン -->
  </div>
  <script src="../js/modalOption.js"></script>
</body>

</html>