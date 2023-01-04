
<!doctype html>
<html lang="ja">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3NMFCH10DN"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-3NMFCH10DN');
    </script>
    <title>広告のやつ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    
<nav class="navbar navbar-expand-sm sticky-top navbar-dark bg-dark my-3">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="/">広告のやつ</a>
  <div class="collapse navbar-collapse">
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" href="upload1">1_オート広告除外</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="upload2">2_キーワード仕入れ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="upload3">3_入札額調整</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="upload4">4_マニュアル保留設定</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="upload5">5_完全一致移行</a>
          </li>
        <div class="dropdown">
          <!-- 切替ボタンの設定 -->
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Exツール
          </a>
          <!-- ドロップメニューの設定 -->
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenu">
              <a class="dropdown-item" href="upload0">Ex0_新規広告作成</a>
              <a class="dropdown-item" href="uploadEx1">Ex1_広告費削減施策</a>
            </div><!-- /.dropdown-menu -->
          </div><!-- /.dropdown-menu -->
        </div><!-- /.dropdown -->

  <a class="nav-link justify-content-end" > <font color ="white">tmm.family2015@gmail.com</font></a>
  <a class="nav-link justify-content-end" href="/accounts/logout/"">ログアウト</a>

</nav>

<div class ="container">
  <table border=0  >
    <td width=500 >
    <p class="h3" >
    Ex1_広告費削減施策P1
    </p>
    前回実行日時：2022/12/22 15:00:52

    </td>
    <!--
    <td width=750>
      -->


    <td width=170 rowspan=2>
      <table border=0  align=center>
        <td align="center">
          <font color =blue>
      <使い方動画>
        </font>
      </td>
        <tr>
      <td align="center">
            <a href="https://youtu.be/lBHwj5TCzWM" target="_blank">Ex1_広告費削減施策<a/>
      </td>
      <tr>
      <td align="center">
        <img border="0"  src="http://emarc-tool.com/static/qr/Ex1_%E5%BA%83%E5%91%8A%E8%B2%BB%E5%89%8A%E6%B8%9B%E6%96%BD%E7%AD%96.png" width="80">
      </td>
      </table>

    </td><tr height=50>

  <td></td>

  </table>
<div class="container-fluid">

<form action="" name="form" method="post" enctype="multipart/form-data">
    <input type="hidden" name="csrfmiddlewaretoken" value="FxODwdMmM8Lvn0fG9D22gXS2oRKPpcTS7SaumBxHq1zfhP07uWd8x8LmHZzDtLKi">


    <strong>
      <table>
            <td>
            <label for="checkbox_target_disp">
            <input type="checkbox" id='checkbox_target_disp' name ='checkbox_target_disp'  checked   ">
            <input type="hidden" name ='checkbox_target' id='checkbox_target'>
            <font size =5 color = red > 商品ターゲティング広告を利用する</font><br>
            <font size = 2.5 color = gray>
              商品ターゲティング広告を利用する場合はチェックを入れて下さい。
              </font>

            </td>
            <tr>
            <tr>
      </table>

      <table >
        <td>
        売上下位:
      </td>
      <td>
        <input type="number" name="sales_lower_rate" value="50.0" placeholder="50.0" step="any" required id="id_sales_lower_rate"> %以下
      </td>
        <tr>
          <td>
          インプレッション:
        </td>
        <td>
          <input type="number" name="impression" value="500" placeholder="500" required id="id_impression"> 以上
        </td>
          <tr>
            <td>
            売上高に占める広告費の割合 （ACoS):
          </td>
          <td>
            <input type="number" name="acos" value="50.0" placeholder="50.0" step="any" required id="id_acos"> %以上
          </td>
          <tr>

          <td>
        ファイル1:
        </td>

        <td>
        <input type="file" name="file" required id="id_file">
        </td>

      </table>

    </strong>

  <font color = "red ">「ASIN別 詳細ページ売上・トラフィック」ファイルを選択して下さい。</font><br>

  <button type="submit" class="btn btn-primary" onclick = "checkbox_value_copy()">実行</button>

  

</form>
</div>
</div>

<script type="text/javascript">

function checkbox_value_copy()
           {
document.getElementById('checkbox_target').value = checkbox_target_disp.checked;


           }
</script>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
