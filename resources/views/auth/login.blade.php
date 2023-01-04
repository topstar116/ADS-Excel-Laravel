
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


<div class ="container">






  <p class="h3">ログイン</p>



<form class="login" method="POST" action="/accounts/login/">

  <input type="hidden" name="csrfmiddlewaretoken" value="mvNL9sGw8CFzJntthwCJjFcsU2EZtGmeZrZxTfLSRmp7jh870wJZjSjDoNtEiqDS">
  <div class="well">

  <p><label for="id_login">ユーザー名:</label> <input type="text" name="login" placeholder="ユーザー名" autofocus="autofocus" maxlength="150" required id="id_login"></p>
<p><label for="id_password">パスワード:</label> <input type="password" name="password" placeholder="パスワード" required id="id_password"></p>
<p><label for="id_remember">ログインしたままにする:</label> <input type="checkbox" name="remember" id="id_remember"></p>
</div>


  
  <a class="button secondaryAction" href="{{ route('password.request') }}">パスワード設定はこちら</a>
  <button class="btn btn-primary" type="submit">ログイン</button>

</form>


  <!-- bootstrapのjavascrit読み込み-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>


</body>
</html>
