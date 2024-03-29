<!-- 予約実績グラフ　L-2 -->
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
        <li class="l-breadcrumb__list">予約実績グラフ</li>
        </li>
      </ul>

      <div class="l-container__inner">
        <!-- 表示期間選択 -->
        <div class="l-flex l-flex--sb l-flex--item-end l-grid--gap2 u-mb2">
          <div>
            <div>
              <label for="start">表示期間</label>
              <input type="date" name="start" id="start" class="u-w210">
              <span>～</span>
              <input type="date" name="end" id="end" class="u-w210">
            </div>
            <!-- 比較する期間 -->
            <div>
              <label for="compare">比較する期間</label>
              <input type="date" name="compare" id="compare_start" class="u-w210">
              <span>～</span>
              <input type="date" name="compare" id="compare_end" class="u-w210">
            </div>
          </div>

          <!-- 月別 週別 時間別 任意の期間 button-->
          <div class="l-grid--col4-auto l-grid--gap05 u-mb1">
            <button class="c-button__submit u-w90">月別</button>
            <button class="c-button__submit u-w90">週別</button>
            <button class="c-button__submit u-w-auto">時間別</button>
            <button class="c-button__submit u-w-auto">任意の期間</button>
          </div>
        </div>

        <!-- グラフ -->
        <!-- PyScriptの読み込み  -->
        <link rel="stylesheet" href="https://pyscript.net/releases/2023.11.2/core.css" />
        <script type="module" src="https://pyscript.net/releases/2023.11.2/core.js"></script>
        <py-config>packages = ["matplotlib"]</py-config>
        <script type="py">
          from pyscript import display
          import matplotlib.pyplot as plt
          import numpy as np

          x = np.linspace(0,10,100)
          y = np.sin(x)
          fig = plt.figure()
          plt.plot(x,y,c="r",label=r"sine")
          plt.grid()
          plt.legend()

          display(plt, target="mlp")
        </script>
        <div class="c-graph__wrap">
          <!-- <article id="webslides"></article>の中にグラフ挿入 -->
          <article id="webslides">
            <!-- Slide 1 -->
            <section>
              <!-- それぞれを<section>で囲む -->
            </section>
            <!-- Slide 2 -->
            <section class="bg-primary">
              <div class="wrap">
                <h2>.wrap = container (width: 90%)</h2>

                <!-- グラフの描画先を指定 --- (*2) -->
                <div id="mlp" align="center"></div>

              </div>
            </section>
          </article>


        </div>
      </div>
    </main><!-- /.l-container__main -->
  </div>

  <!-- webSplides Required -->
  <script src="/js/webslides.min.js"></script>
  <script>
    window.ws = new WebSlides();
  </script>

  <!-- OPTIONAL - svg-icons.js (fontastic.me - Font Awesome as svg icons) -->
  <script defer src="/js/svg-icons.js"></script>
</body>

</html>