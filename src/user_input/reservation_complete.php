<!DOCTYPE html>
<html lang="ja">

<?php include_once '../include/head.php'; ?>

<body>
  <header class="l-header-user">
    <div class="l-header-user__left">
      <img src="/assets/images/logo/logo.png" width="100%" alt="logo">
      <p class="is-none--sm u-font--medium u-font--14 text-center">サンパーキング成田店</p>
    </div>

  <!-- 予約情報 -->
    <h1 class="l-header-userReservation__title">受付終了</h1>
    <div class="l-header-userReservation__info">
      <div>利用日：2024/2/1(木)〜2024/2/4(日)</div>
      <div>利用料金：4,500円</div>
    </div>
  </header>
  
  <div class="l-user-input__inner">
    <p class="p-user-input-complete__text u-font--green u-font--bold ">
      予約が完了しました。<br>
    </p>
    <p class="text-center u-mb2">入力いただいたメールアドレスへ<br class="br--sp" />予約内容を送信いたしました。<br>お客様のお越しをスタッフ一同、<br class="br--sp" />心よりお待ちしております。</p>

    <div class="p-user-input-complete__message u-horizontal-auto ">
      <p class="text-center u-font--bold u-font--18 u-mb1">ご予約の変更やご不明な点がありましたら、お気軽にお問い合わせください。</p>
      <p class="text-center u-font--bold u-mb2 u-font--18">サン予約センター<br>TEL.0476-33-1123<br>［受付時間］9:00〜18:00</p>
      <!-- 画面を閉じる -->
      <button class="c-button__select button_select c-button" onclick="closeOrRedirect()">画面を閉じる</button>
      <img class="p-user-input-complete__image" src="../assets/images/reserve/airplane_thankspage.png" width="100%" height="auto" alt="空港の画像" class="is-block u-horizontal-auto">
      <div class="p-user-input-complete__after"></div>
    </div>

  </div>
    <?php include_once '../include/user/footer.php'; ?>
    <script>
      function closeOrRedirect() {
        window.close(); // 画面を閉じる
        // もし画面が閉じられない場合は、トップページにリダイレクトする
        setTimeout(function() {
          location.href = '/';
        }, 100);
      }
    </script>
</body>

</html>