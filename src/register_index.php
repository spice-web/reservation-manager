<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>レジTOP</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="form-container">
    <div class="form-item">
      <label for="option1">オプション1</label>
      <input type="number" id="option1" value="0">
    </div>
    <div class="form-item">
      <label for="option2">オプション2</label>
      <input type="number" id="option2" value="0">
    </div>
    <div class="form-item">
      <label for="option3">オプション3</label>
      <input type="number" id="option3" value="0">
    </div>
    <div class="form-item">
      <label>消費税</label>
      <span id="tax">0,000円</span>
    </div>
    <div class="form-item">
      <label>お支払い合計</label>
      <span id="total">00,000円</span>
    </div>
    <button onclick="printInvoice()" class="print">明細を印刷</button>
    <button onclick="proceedToPayment()">決済画面へ</button>

    <!-- 決済画面ボタンをクリックしたら画面いっぱいにモーダル表示 -->
    <div id="modal">
      
    </div>



  </div>

  <!-- オプションの金額増減 -->
  <script>
    function updateTotal() {
      const option1 = parseFloat(document.getElementById('option1').value);
      const option2 = parseFloat(document.getElementById('option2').value);
      const option3 = parseFloat(document.getElementById('option3').value);
      const subtotal = option1 + option2 + option3;
      const tax = subtotal * 0.1;
      const total = subtotal + tax;
      document.getElementById('tax').textContent = tax.toLocaleString() + '円';
      document.getElementById('total').textContent = total.toLocaleString() + '円';
    }

    function printInvoice() {
      // Implement printing logic here
      console.log('Printing invoice...');
    }

    function proceedToPayment() {
      // Implement navigation to next.php here
      console.log('Proceeding to payment...');
    }

    document.querySelectorAll('input[type="number"]').forEach(input => {
      input.addEventListener('input', updateTotal);
    });
  </script>

  <!-- モーダル -->
  <!-- 決済画面をモーダルで表示するスクリプト-->
  <script>
    function openModal() {
      document.getElementById('modal').style.display = 'block';
    }

    function closeModal() {
      document.getElementById('modal').style.display = 'none';
    }
  </script>
</body>

</html>