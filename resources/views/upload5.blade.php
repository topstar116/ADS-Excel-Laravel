<x-app-layout>

  <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    

                <div class ="container mx-10 my-20">
  <table border=0  >
    <td width=500 >
    <p class="h3" >
    5_完全一致移行
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
            <a href="https://youtu.be/pjNnx7-JSHM" target="_blank">5_完全一致移行<a/>
      </td>
      <tr>
      <td align="center">
        <img border="0"  src="http://emarc-tool.com/static/qr/5_%E5%AE%8C%E5%85%A8%E4%B8%80%E8%87%B4%E7%A7%BB%E8%A1%8C.png" width="160">
      </td>
      </table>

    </td><tr height=50>

  <td></td>

  </table>

<div class="container-fluid">
<form action="excel/upload5" method="post" enctype="multipart/form-data">
  @csrf
  <strong>
    <table >
      <td>
      クリックスルー率:
    </td>
    <td>
      <input type="number" name="click_through" value="0.5" placeholder="0.5" step="any" required id="id_click_through"> %以上
    </td>
      <tr>
        <td>
        インプレッション:
      </td>
      <td>
        <input type="number" name="impression" value="2000" placeholder="2000" required id="id_impression"> 以上
      </td>
        <tr>
          <td>
          コンバージョン率:
        </td>
        <td>
          <input type="number" name="conversion" value="2.0" placeholder="2.0" step="any" required id="id_conversion"> %以上
        </td>
          <tr>
            <td>
            プラスアルファ入札額:
          </td>
          <td>
            <input type="number" name="bid_add" value="3" placeholder="3" required id="id_bid_add"> 円UP
          </td>
            <tr>

        <td>
      ファイル:
      </td>

      <td>
      <input type="file" name="file" required id="id_file">
      </td>

    </table>

  </strong>
    <font color = "red ">「バルク操作ファイル６０日分」ファイル選択して下さい。</font><br>

    <button type="submit" class="rounded-noneinline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">実行</button>

</form>

</div>
                </div>
              </div>
            </div>
        </div>
    </div>
</x-app-layout>