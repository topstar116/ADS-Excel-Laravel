<x-app-layout>

  <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    

                <div class ="container mx-10 my-20">
                  <table border=0 >
                    <td width=500 >
                    <p class="h3" >
                    1_オート広告除外
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
                      <td align="center" >
                            <a href="https://youtu.be/p30XUIBIZ3g" target="_blank">1_オート広告除外<a/>
                      </td>
                      <tr>
                      <td align="center">
                        <img border="0"  src="http://emarc-tool.com/static/qr/1_%E3%82%AA%E3%83%BC%E3%83%88%E5%BA%83%E5%91%8A%E9%99%A4%E5%A4%96.png" width="160">
                      </td>
                      </table>

                    </td><tr height=50>

                  <td></td>

                  </table>
                  <div class="container-fluid">
                    <form action="excel/upload1" method="post" enctype="multipart/form-data">

                      @csrf  
                      <strong>
                        <table border=0 >
                          <td>
                          クリックスルー率:
                        </td>
                        <td>
                          <input type="number" name="click_through" value="0.3" placeholder="0.3" step="any" required id="id_click_through"> %未満
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

                      <font color = "red ">「スポンサープロダクト広告 検索ワード レポート60日分」ファイル選択して下さい</font><br>

                      <button type="submit" class="rounded-noneinline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">実行</button>

                    </form>

                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</x-app-layout>
