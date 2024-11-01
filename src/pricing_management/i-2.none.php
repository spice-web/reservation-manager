<!-- 入庫見込み数入力 -->
<!DOCTYPE html>
<html lang="ja">

<?php include_once '../include/head.php'; ?>

<body>
  <div class="l-wrap">
    <?php include_once '../include/header.php'; ?>

    <?php include_once '../include/nav.php'; ?>

    <main class="l-wrap__main l-container__main">
      <!-- パンくず -->
      <ul class="l-wrap__breadcrumb l-breadcrumb">
        <li class="l-breadcrumb__list">入庫見込み数入力</li>
        </li>
      </ul>

      <div class="l-container__inner c-button__csv--upload l-flex--center l-flex--item-start l-grid--gap1">
          <a href="" download="" class="c-button__load u-bg--green" style="text-decoration: none;">CSVダウンロード</a>
          <div class="l-flex--column">
            <button type="button" class="c-button__load u-bg--green upload u-mb1">CSVアップロード</button>
            <input type="file" id="csvFileInput" />
            <div id="csvFileNameDisplay" class="u-pt-1 u-w160 l-position__upload u-mb025"></div>
          </div>
          <input type="submit" value="登録" class="c-button__register fileUpload u-mb0" disabled>
      </div>


    </main><!-- /.l-container__main -->
  </div><!-- /.l-container__wrap -->

    <!-- ファイルアップロードの時スクリプト -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
          setupCsvUpload('csvFileInput', 'csvFileNameDisplay');
      });

      function setupCsvUpload(inputId, fileNameDisplayId) {
        const fileInput = document.getElementById(inputId);
        const fileNameDisplay = document.getElementById(fileNameDisplayId);
        const uploadButton = document.querySelector('.c-button__load.upload');
        const registerButton = document.querySelector('.fileUpload');

        uploadButton.addEventListener('click', function() {
            fileInput.click();
        });

        fileInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                fileNameDisplay.innerHTML = `選択されたファイル: ${file.name}`;
                addDeleteButton(fileNameDisplay, fileInput);
                registerButton.removeAttribute('disabled');
            } else {
                fileNameDisplay.textContent = 'ファイルが選択されていません';
                registerButton.setAttribute('disabled', '');
            }
        });
      }

      function addDeleteButton(container, fileInput, imageDisplay = null) {
      // 既存の削除ボタンを削除
      const existingDeleteButton = container.querySelector('.delete-button');
      if (existingDeleteButton) {
          existingDeleteButton.remove();
      }

      const deleteButton = document.createElement('img');
      deleteButton.src = '../images/icon/closeButton.svg';
      deleteButton.alt = '削除';
      deleteButton.className = 'delete-button';
      deleteButton.style.cursor = 'pointer';
      deleteButton.style.marginLeft = '10px';

      deleteButton.addEventListener('click', function() {
          fileInput.value = '';
          if (imageDisplay) {
              imageDisplay.style.display = 'none';
          } else {
              container.textContent = '';
          }
          deleteButton.remove();

          // CSVファイルが削除された場合、登録ボタンを無効化
          if (fileInput.id === 'csvFileInput') {
              const registerButton = document.querySelector('.fileUpload');
              registerButton.setAttribute('disabled', '');
          }
      });

      container.appendChild(deleteButton);
      }
    </script>
</body>

</html>