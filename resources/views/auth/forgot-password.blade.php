
<!doctype html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- linkタグでbootstrapのcssファイルを読み込む -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

  <!-- タイトルの設定-->
  <title>広告のやつ</title>

<body>

  
<nav class="navbar navbar-expand-sm sticky-top navbar-dark bg-dark my-3">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">広告のやつ</a>
  <div class="collapse navbar-collapse">
  </div>
</nav>

<!--
<div class="content-wrapper">
<div class="container-fluid">
<div class="card mb-3">
<div class="card-header bg-primary">
<h3><b><font color="white">パスワード再設定</font></b></h3></div>
<div class="card-body">

    

    <p>パスワードをお忘れですか？パスワードをリセットするために、メールアドレスを入力してください。</p>
-->

<div class ="container">
  <p class="h3">パスワード設定メール送信</p>

    <form method="POST" action="/accounts/password/reset/" class="password_reset">
        <input type="hidden" name="csrfmiddlewaretoken" value="vyPiOo6KlCZMNLweXPrUEZNlvCL05a5UXTb9EMR5ZvNwHAhFi8C0VaGFOKAO9JWk">

        <p><label for="id_email">メールアドレス:</label> <input type="email" name="email" size="30" placeholder="メールアドレス" required id="id_email"></p>
        <input class="btn btn-primary" type="submit" value="パスワード設定メールを送る" />
    </form>

    <p>パスワードの再設定に問題がある場合はご連絡ください。</p>
    <a class="btn btn-primary" href="/accounts/login/" role="button">ログイン画面</a>
</div>
</div>
</div>
</div>
</div>



  <!-- bootstrapのjavascrit読み込み-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>


</body>
</html>
