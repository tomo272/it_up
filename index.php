<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <?php include('higAndLowS07.php') ?>

  <div id="content">
    <p>ページの本体</p>
  </div>

  <?php include('higAndLowS03.php') ?>
</body>
</html>

// ------------------------


// header.php ------------

  <div id="header">
    <h1>ロゴとか</h1>
    <p>ヘッダーの内容</p>
  </div>

// ------------------------


// footer.php------------

  <div id="footer">
    <p>フッターの内容</p>
    <p>copyrightとか</p>
  </div>

// ------------------------


// ページ(index.php)を表示した際には、以下のようなソースになる
// (要はincludeで指定したファイルの中身が読み込まれる)
// (ページ本体の部分もheader.phpとかのように外部ファイル化してしまって読み込む形式にすれば、全ページ対応ok)

<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <div id="header">
    <h1>ロゴとか</h1>
    <p>ヘッダーの内容</p>
  </div>

  <div id="content">
    <p>ページの本体</p>
  </div>

  <div id="footer">
    <p>フッターの内容</p>
    <p>copyrightとか</p>
  </div>
</body>
</html>
