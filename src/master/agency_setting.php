<!-- 代理店設定 -->
<!-- agency-setting.php -->
<!-- G-3 -->
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
      <li class="l-breadcrumb__list">代理店設定</li>
    </ul>

    <div class="l-container__inner">
    <h2 class="c-title__lv2 l-flex--sb u-w-full-wide">料金設定登録<span class="close_button c-button__close">閉じる</span></h2>

    <form action="" method="post" enctype="multipart/form-data" class="l-grid__right-submitButton l-grid__agency u-mb3-half">
      <div>
        <div class="l-grid__agency--up u-mb2-half">

          <!-- 一段目 -->
           <div class="l-grid--col3 l-grid--cgap2-half">
             <div>
               <label for="agency_code">代理店コード</label>
               <input type="text" id="agency_code" name="agency_code">
             </div>
             <div>
               <label for="company_name">社名</label>
               <input type="text" id="company_name" name="company_name">
             </div>
             <div>
               <label for="branch_name">支店名</label>
               <input type="text" id="branch_name" name="branch_name">
             </div>
           </div>
          
          <!-- 2段目 -->
          <div class="l-grid--col3 l-grid--cgap2-half">
            <div>
              <label for="postal_code">住所 〒</label>
              <input type="text" id="postal_code" name="postal_code">
            </div>
            <div>
              <label for="address1">住所1</label>
              <input type="text" id="address1" name="address1">
            </div>
            <div>
              <label for="address2">住所2</label>
              <input type="text" id="address2" name="address2">
            </div>
          </div>
          
          <!-- 3段目 -->
          <div style="width: 33%;padding-right:1.25rem;">
            <label for="tel">電話番号</label>
            <input type="text" id="tel" name="tel">
          </div>
          
          <!-- 4段目 -->
           <div class="l-grid--col3 l-grid--cgap2-half">
             <div>
               <label for="department">担当者部署</label>
               <input type="text" id="department" name="department">
             </div>
             <div>
               <label for="position">担当者役職</label>
               <input type="text" id="position" name="position">
             </div>
             <div>
               <label for="contact_name">担当者氏名</label>
               <input type="text" id="contact_name" name="contact_name">
             </div>
           </div>
          
          <!-- 5段目 -->
          <div class="l-grid--col3 l-grid--cgap2-half">
            <div>
              <label for="email">担当者メールアドレス</label>
              <input type="text" id="email" name="email">
            </div>
            <div>
              <label for="payment_terms">支払いサイト</label>
              <input type="text" id="payment_terms" name="payment_terms">
            </div>
            <div>
              <label for="bank_info">振込先情報</label>
              <input type="text" id="bank_info" name="bank_info">
            </div>
          </div>
          
          <!-- 6段目 -->
          <div>
            <label for="memo">社内共有メモ</label>
            <input type="text" id="memo" name="memo" class="c-form-input--w100">
          </div>
          
          <!-- LAST -->
          <div>
            <label for="search_keywords">検索用キーワード</label>
            <input type="text" id="search_keywords" name="search_keywords">
          </div>
        </div>
        
        <!-- 下段 -->
         <div class="l-grid__agency--center l-grid--gap1 u-mb2-half">
            <span class="u-font--md">月額固定費用</span>
            <div class="c-button-optionSelect">
              <input type="radio" id="payment" name="paymentOption" value="" checked>
              <label for="payment" class="text-center u-lh38 c-button-optionSelect__radioLabel">支払う</label>
            </div>
            <div class="c-button-optionSelect">
              <input type="radio" id="non-payment" name="paymentOption" value="">
              <label for="non-payment" class="text-center u-lh38 c-button-optionSelect__radioLabel">支払わない</label>
            </div>
            <div>
              <input type="text" class="u-w-auto u-mr025 u-mb0"><span class="u-font--md">円</span>
            </div>

            <span class="u-font--md">インセンティブ</span>
            <div class="c-button-optionSelect">
              <input type="radio" id="incentive" name="incentiveOption" value="" checked>
              <label for="incentive" class="text-center u-lh38 u-w120 c-button-optionSelect__radioLabel">支払う</label>
            </div>
            <div class="c-button-optionSelect">
              <input type="radio" id="non-incentive" name="incentiveOption" value="">
              <label for="non-incentive" class="text-center u-lh38 u-w120 c-button-optionSelect__radioLabel">支払わない</label>
            </div>
            <div>
              <input type="text" class="u-w-auto u-mr025 u-mb0"><span class="u-font--md">%</span>
            </div>
         </div>

        <div class="l-grid__agency--bottom">
          <div>
            <label for="">バナーコメントの設定</label>         
            <input type="text" name="" id="">
            <label for="">タイトルの設定</label>
            <input type="text" name="" id="" class="u-mb0">
          </div>
          <div>
            <label for="logo">ロゴ画像の登録</label>
            <input type="file" name="logo" class="c-button-file u-font--md">
          </div>
          <div>
            <label for="campaign" class="u-font-nowrap">キャンペーン画像の登録</label>
            <input type="file" name="campaign" class="c-button-file u-font--md">
          </div>
        </div>
      </div><!-- ./left -->
      <!-- 登録ボタン -->
      <div class="l-grid__right-submitButton--button">
        <button type="submit" class="c-button__submit--yellow">登録</button>
        <button class="c-button__submit--gray">CSVダウンロード</button>
        <button class="c-button__submit--gray">CSVアップロード</button>
      </div>

    </form>

    <h2 class="c-title__lv2 l-flex--sb u-w-full-wide">登録済み 代理店設定一覧</h2>
    <form action="" class="l-flex--end l-flex--item-end l-grid--gap1 u-mb1">
          <!-- 代理店コード -->
          <div>
            <label for="price_list">代理店コード</label>
            <div class="c-form-select-wrap c-form-select-color">
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
    </div><!-- ./l-container__inner -->
  </main>

  </div>
</body>
</html>