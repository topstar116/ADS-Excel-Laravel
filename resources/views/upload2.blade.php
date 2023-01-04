
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
        <li class="nav-item active">
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
    2_キーワード仕入れ
    </p>
    前回実行日時：2022/12/30 23:36:53

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
            <a href="https://youtu.be/BA_hm8pvRfs" target="_blank">2_キーワード仕入れ<a/>
      </td>
      <tr>
      <td align="center">
        <img border="0"  src="http://emarc-tool.com/static/qr/2_%E3%82%AD%E3%83%BC%E3%83%AF%E3%83%BC%E3%83%88%E3%82%99%E4%BB%95%E5%85%A5%E3%82%8C.png" width="80">
      </td>
      </table>

    </td><tr height=50>

  <td></td>

  </table>
<div class="container-fluid">
<form action="excel/upload2" method="post" enctype="multipart/form-data">
  @csrf
  <strong>
    <table>
          <td>
          <label for="word_checkbox">
          <input type="checkbox" id='word_checkbox' name ='checkbox_target' checked  onclick="checkdiv(this,'checkBox')">
          <font size =5 color = "red "> 商品ターゲティング広告を利用する</font><br>
          <font size = 2.5 color = gray>
            商品ターゲティング広告を利用する場合はチェックを入れて下さい。
            </font>

          </td>
          <tr>
          <tr>
          </table>




    <table border ="0">
      <td width=320>
        <キーワードターゲティング>

      </td>
      <tr>
      <td>
      クリックスルー率:
    </td>
    <td>
      <input type="number" name="click_through" value="0.3" placeholder="0.3" step="any" required id="id_click_through"> %以上
    </td>
      <tr>
        <td>
        オート広告の平均クリック単価プラスの額:
      </td>
      <td>
        <input type="number" name="click_add" value="3" placeholder="3" required id="id_click_add"> 円UP
      </td>
        <tr>
          <td>　</td>
          <td>  </td>
        <tr>

    </table>




          <div id="checkBox" style="display:block;">

          <table>

          <td width=320>
            <商品ターゲティング>

          </td>

          <tr>

          <td>
            クリックスルー率:
          </td>
          <td>
              <input type="number" name="click_through2" value="0.5" placeholder="0.5" step="any" required id="id_click_through2"> %以上
          </td>
          <tr>

            <tr>
              <td>
              インプレッション:
            </td>

              <td>
                <input type="number" name="impression" value="2000" placeholder="2000" required id="id_impression"> 以上
              </td>
            <tr>
              <tr>
                <td>
                コンバージョン率:
              </td>

                <td>
                  <input type="number" name="conversion" value="2.0" placeholder="2.0" step="any" required id="id_conversion"> %以上
                </td>
                <tr>
                  <td>
                  オート広告の平均クリック単価プラスの額:
                </td>
                <td>
                  <input type="number" name="click_add2" value="3" placeholder="3" required id="id_click_add2"> 円UP
                </td>

</table>

</div>

<table>
        <td width =320>
      ファイル:
      </td>

      <td>
      <input type="file" name="file" required id="id_file">
      </td>

    </table>

  </strong>
<table >
<td>
  <font color = "red ">「スポンサープロダクト広告 検索ワード レポート60日分」ファイル選択して下さい。</font><br>
</td>
<tr>
<td>
  <button type="submit" class="btn btn-primary">実行</button>
<td>

</form>

<script type="text/javascript">


function checkdiv( obj,id ) {
if( obj.checked ){
document.getElementById(id).style.display = "block";
}
else {

document.getElementById(id).style.display = "none";

}
}


</script>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
