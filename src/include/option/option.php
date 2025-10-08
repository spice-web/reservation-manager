  <!-- オプションをクリックしたら出てくるmodal -->
  <div id="modalAreaOption" class="l-modal l-modal--option">
    <!-- モーダルのinnerを記述   -->
    <div class="l-modal__inner l-modal__inner--option">
      <div class="l-modal__head l-modal__head--option">
        <div class="l-modal__head--option__name">
          オプション選択：洗車
        </div>
        <!-- 合計金額を表示 -->
        <div class="l-modal__head--option__total">
          合計金額 : <span id="total-amount">0</span>円
        </div>
      </div>
      <div class="l-modal__close modal_optionClose">×</div>
      <div class="l-modal__content l-modal__content--option">
        <div class="l-modal-option__items">
          <!-- 例）洗車を押したら表示 -->
          <div class="c-button-optionSelect">
            <div class="c-button-optionSelect__head">
              手洗いWAX洗車<br>2,000円
            </div>
            <div class="c-button-optionQuantity__wrap">

              <!-- 合計金額をdata-priceの値から計算 -->
              <input type="text" id="car_wash" class="c-buttonQuantity__input"
                name="car_wash" value="0" readonly data-price="2000">
              <button class="c-button-optionQuantity c-button-optionQuantity--up"
                onclick="changeQuantity('car_wash', 1)">＋</button>
              <button class="c-button-optionQuantity c-button-optionQuantity--down"
                onclick="changeQuantity('car_wash', -1)">－</button>
            </div>
          </div>

          <div class="c-button-optionSelect">
            <div class="c-button-optionSelect__head">
              WAX<br>2,500円
            </div>
            <div class="c-button-optionQuantity__wrap">
              <input type="text" id="wax-quantity" class="c-buttonQuantity__input"
                name="wax-quantity" value="0" readonly data-price="2500">
              <button class="c-button-optionQuantity c-button-optionQuantity--up"
                onclick="changeQuantity('wax-quantity', 1)">＋</button>
              <button class="c-button-optionQuantity c-button-optionQuantity--down"
                onclick="changeQuantity('wax-quantity', -1)">－</button>
            </div>
          </div>

          <div class="c-button-optionSelect">
            <div class="c-button-optionSelect__head">
              dummy1<br>1,500円
            </div>
            <div class="c-button-optionQuantity__wrap">
              <input type="text" id="dummy1-quantity" class="c-buttonQuantity__input"
                name="dummy1-quantity" value="0" readonly data-price="1500">
              <button class="c-button-optionQuantity c-button-optionQuantity--up"
                onclick="changeQuantity('dummy1-quantity', 1)">＋</button>
              <button class="c-button-optionQuantity c-button-optionQuantity--down"
                onclick="changeQuantity('dummy1-quantity', -1)">－</button>
            </div>
          </div>

          <div class="c-button-optionSelect">
            <div class="c-button-optionSelect__head">
              dummy2<br>1,500円
            </div>
            <div class="c-button-optionQuantity__wrap">
              <input type="text" id="dummy2-quantity" class="c-buttonQuantity__input"
                name="dummy2-quantity" value="0" readonly data-price="1500">
              <button class="c-button-optionQuantity c-button-optionQuantity--up"
                onclick="changeQuantity('dummy2-quantity', 1)">＋</button>
              <button class="c-button-optionQuantity c-button-optionQuantity--down"
                onclick="changeQuantity('dummy2-quantity', -1)">－</button>
            </div>
          </div>

          <div class="c-button-optionSelect">
            <div class="c-button-optionSelect__head">
              dummy3<br>1,000円
            </div>
            <div class="c-button-optionQuantity__wrap">
              <input type="text" id="dummy3-quantity" class="c-buttonQuantity__input"
                name="dummy3-quantity" value="0" readonly data-price="1000">
              <button class="c-button-optionQuantity c-button-optionQuantity--up"
                onclick="changeQuantity('dummy3-quantity', 1)">＋</button>
              <button class="c-button-optionQuantity c-button-optionQuantity--down"
                onclick="changeQuantity('dummy3-quantity', -1)">－</button>
            </div>
          </div>

          <div class="c-button-optionSelect">
            <div class="c-button-optionSelect__head">
              dummy4<br>1,500円
            </div>
            <div class="c-button-optionQuantity__wrap">
              <input type="text" id="dummy4-quantity" class="c-buttonQuantity__input"
                name="dummy4-quantity" value="0" readonly data-price="1500">
              <button class="c-button-optionQuantity c-button-optionQuantity--up"
                onclick="changeQuantity('dummy4-quantity', 1)">＋</button>
              <button class="c-button-optionQuantity c-button-optionQuantity--down"
                onclick="changeQuantity('dummy4-quantity', -1)">－</button>
            </div>
          </div>

          <div class="c-button-optionSelect">
            <div class="c-button-optionSelect__head">
              dummy5<br>1,500円
            </div>
            <div class="c-button-optionQuantity__wrap">
              <input type="text" id="dummy5-quantity" class="c-buttonQuantity__input"
                name="dummy5-quantity" value="0" readonly data-price="1500">
              <button class="c-button-optionQuantity c-button-optionQuantity--up"
                onclick="changeQuantity('dummy5-quantity', 1)">＋</button>
              <button class="c-button-optionQuantity c-button-optionQuantity--down"
                onclick="changeQuantity('dummy5-quantity', -1)">－</button>
            </div>
          </div>

          <div class="c-button-optionSelect">
            <div class="c-button-optionSelect__head">
              dummy6<br>1,000円
            </div>
            <div class="c-button-optionQuantity__wrap">
              <input type="text" id="dummy6-quantity" class="c-buttonQuantity__input"
                name="dummy6-quantity" value="0" readonly data-price="1000">
              <button class="c-button-optionQuantity c-button-optionQuantity--up"
                onclick="changeQuantity('dummy6-quantity', 1)">＋</button>
              <button class="c-button-optionQuantity c-button-optionQuantity--down"
                onclick="changeQuantity('dummy6-quantity', -1)">－</button>
            </div>
          </div>

          <div class="c-button-optionSelect">
            <div class="c-button-optionSelect__head">
              dummy7<br>1,500円
            </div>
            <div class="c-button-optionQuantity__wrap">
              <input type="text" id="dummy7-quantity" class="c-buttonQuantity__input"
                name="dummy7-quantity" value="0" readonly data-price="1500">
              <button class="c-button-optionQuantity c-button-optionQuantity--up"
                onclick="changeQuantity('dummy7-quantity', 1)">＋</button>
              <button class="c-button-optionQuantity c-button-optionQuantity--down"
                onclick="changeQuantity('dummy7-quantity', -1)">－</button>
            </div>
          </div>
          <div class="c-button-optionSelect">
            <div class="c-button-optionSelect__head">
              dummy8<br>1,500円
            </div>
            <div class="c-button-optionQuantity__wrap">
              <input type="text" id="dummy8-quantity" class="c-buttonQuantity__input"
                name="dummy8-quantity" value="0" readonly data-price="1500">
              <button class="c-button-optionQuantity c-button-optionQuantity--up"
                onclick="changeQuantity('dummy8-quantity', 1)">＋</button>
              <button class="c-button-optionQuantity c-button-optionQuantity--down"
                onclick="changeQuantity('dummy8-quantity', -1)">－</button>
            </div>
          </div>

          <div class="c-button-optionSelect">
            <div class="c-button-optionSelect__head">
              dummy9<br>1,000円
            </div>
            <div class="c-button-optionQuantity__wrap">
              <input type="text" id="dummy9-quantity" class="c-buttonQuantity__input"
                name="dummy9-quantity" value="0" readonly data-price="1000">
              <button class="c-button-optionQuantity c-button-optionQuantity--up"
                onclick="changeQuantity('dummy9-quantity', 1)">＋</button>
              <button class="c-button-optionQuantity c-button-optionQuantity--down"
                onclick="changeQuantity('dummy9-quantity', -1)">－</button>
            </div>
          </div>

          <div class="c-button-optionSelect">
            <div class="c-button-optionSelect__head">
              dummy10<br>1,500円
            </div>
            <div class="c-button-optionQuantity__wrap">
              <input type="text" id="dummy10-quantity" class="c-buttonQuantity__input"
                name="dummy10-quantity" value="0" readonly data-price="1500">
              <button class="c-button-optionQuantity c-button-optionQuantity--up"
                onclick="changeQuantity('dummy10-quantity', 1)">＋</button>
              <button class="c-button-optionQuantity c-button-optionQuantity--down"
                onclick="changeQuantity('dummy10-quantity', -1)">－</button>
            </div>
          </div>

          <div class="c-button-optionSelect">
            <div class="c-button-optionSelect__head">
              dummy11<br>1,500円
            </div>
            <div class="c-button-optionQuantity__wrap">
              <input type="text" id="dummy11-quantity" class="c-buttonQuantity__input"
                name="dummy11-quantity" value="0" readonly data-price="1500">
              <button class="c-button-optionQuantity c-button-optionQuantity--up"
                onclick="changeQuantity('dummy11-quantity', 1)">＋</button>
              <button class="c-button-optionQuantity c-button-optionQuantity--down"
                onclick="changeQuantity('dummy11-quantity', -1)">－</button>
            </div>
          </div>

          <div class="c-button-optionSelect">
            <div class="c-button-optionSelect__head">
              dummy12<br>1,000円
            </div>
            <div class="c-button-optionQuantity__wrap">
              <input type="text" id="dummy12-quantity" class="c-buttonQuantity__input"
                name="dummy12-quantity" value="0" readonly data-price="1000">
              <button class="c-button-optionQuantity c-button-optionQuantity--up"
                onclick="changeQuantity('dummy12-quantity', 1)">＋</button>
              <button class="c-button-optionQuantity c-button-optionQuantity--down"
                onclick="changeQuantity('dummy12-quantity', -1)">－</button>
            </div>
          </div>

          <div class="c-button-optionSelect">
            <div class="c-button-optionSelect__head">
              dummy13<br>1,500円
            </div>
            <div class="c-button-optionQuantity__wrap">
              <input type="text" id="dummy13-quantity" class="c-buttonQuantity__input"
                name="dummy13-quantity" value="0" readonly data-price="1500">
              <button class="c-button-optionQuantity c-button-optionQuantity--up"
                onclick="changeQuantity('dummy13-quantity', 1)">＋</button>
              <button class="c-button-optionQuantity c-button-optionQuantity--down"
                onclick="changeQuantity('dummy13-quantity', -1)">－</button>
            </div>
          </div>
        </div>
      </div><!-- ./l-modal__content -->
    </div><!-- ./l-modal inner -->
    <!-- 閉じる・追加ボタン -->
    <div class="l-flex--center l-grid--gap1 u-mt2">
      <button type="button" class="c-button__submit--gray modal_optionClose">閉じる</button>
      <button type="button" id="modal_add" class="c-button__submit--green">追加</button>
    </div>
  </div>

  <script>
    function changeQuantity(inputId, change) {
      // 数量を変更
      const input = document.getElementById(inputId);
      let currentValue = parseInt(input.value, 10);
      currentValue += change;
      if (currentValue < 0) {
        currentValue = 0;
      }
      input.value = currentValue;

      // 1以上の場合は背景色を変更
      const headElement = input.closest('.c-button-optionSelect').querySelector('.c-button-optionSelect__head');
      if (currentValue >= 1) {
        headElement.classList.add('background-green');
      } else {
        headElement.classList.remove('background-green');
      }

      updateTotalAmount();
    }

    // 合計金額を更新
    function updateTotalAmount() {
      const inputs = document.querySelectorAll('.c-buttonQuantity__input');
      let totalAmount = 0;

      inputs.forEach(input => {
        const quantity = parseInt(input.value, 10);
        const price = parseInt(input.getAttribute('data-price'), 10);
        totalAmount += quantity * price;
      });

      document.getElementById('total-amount').textContent = totalAmount;
    }
  </script>