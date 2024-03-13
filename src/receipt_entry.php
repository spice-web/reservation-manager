<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <!--氏名・フリガナ・英字・住所・住所2・電話番号・メールアドレスのフォーム -->
  <form action="receipt.php" method="post">
    <div>
      <label for="name">氏名</label>
      <input type="text" id="name" name="name">
    </div>
    <div>
      <label for="kana">フリガナ</label>
      <input type="text" id="kana" name="kana">
    </div>
    <div>
      <label for="alphabet">英字</label>
      <input type="text" id="alphabet" name="alphabet">
    </div>
    <div>
      <label for="address">住所</label>
      <input type="text" id="address" name="address">
    </div>
    <div>
      <label for="address2">住所2</label>
      <input type="text" id="address2" name="address2">
    </div>
    <div>
      <label for="tel">電話番号</label>
      <input type="text" id="tel" name="tel">
    </div>
    <div>
      <label for="email">メールアドレス</label>
      <input type="text" id="email" name="email">
    </div>
    <div>
      <input type="submit" value="送信">
    </div>
  </form>
</body>
</html>

