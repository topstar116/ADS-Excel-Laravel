<x-app-layout>

  <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    

                <div class ="container mx-10 my-20">  <table border=0  >
    <td width=500 >
    <p class="h3" >
    2_キーワード仕入れ
    </p>
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
        <img border="0"  src="http://emarc-tool.com/static/qr/2_%E3%82%AD%E3%83%BC%E3%83%AF%E3%83%BC%E3%83%88%E3%82%99%E4%BB%95%E5%85%A5%E3%82%8C.png" width="160">
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
<button type="submit" class="rounded-noneinline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">実行</button>
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


</div>
                </div>















                </div>
            </div>
        </div>
    </div>
</x-app-layout>


