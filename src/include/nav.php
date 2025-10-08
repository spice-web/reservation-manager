<!-- ナビゲーション -->
<nav class="l-wrap__nav c-nav__wrap">
  <ul class="c-nav__list">
    <li class="c-nav__item">
      <a href="/admin/index.php" class="c-nav__link --reserve">予約管理</a>
    </li>
    <li class="c-nav__item c-nav__item--current">
      <a href="/inventory_transaction.php" class="c-nav__link --list --current">入出庫一覧</a>
    </li>
    <li class="c-nav__item">
      <a href="/register/register_index.php" class="c-nav__link --en">レジ</a>
    </li>
    <li class="c-nav__item">
      <a href="/pricing_management/basic_pricing.php" class="c-nav__link --setting">設定</a>
    </li>
    <li class="c-nav__item">
      <a href="[リンク]" class="c-nav__link --support">営業支援</a>
    </li>
    <li class="c-nav__item">
      <a href="[リンク]" class="c-nav__link --print">帳票印刷</a>
    </li>
  </ul>

  <figure class="c-nav__qr">
    <img src="/assets/images/dummy/dummy_qr.jpg" alt="" width="100%" height="auto">
    <figcaption>予約QR読込</figcaption>
  </figure>
</nav>

<script>
  // // 100pxスクロールしたら発火
  // window.addEventListener('DOMContentLoaded', function() {
  //   window.addEventListener('scroll', function() {
  //     if (window.scrollY > 100) {
  //       document.querySelector('.c-nav__qr').classList.add('--fixed');
  //     } else {
  //       document.querySelector('.c-nav__qr').classList.remove('--fixed');
  //     }
  //   })
  // })
</script>