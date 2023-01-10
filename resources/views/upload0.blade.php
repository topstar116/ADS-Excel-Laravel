<x-app-layout>

  <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">                    

                <div class ="container mx-10">
                  <div class="container-fluid mx-10  my-10">
                    <td width=170 rowspan=2>
                      <table border=0  align=right>
                        <td align="center">
                          <font color =blue>
                            <使い方動画>
                          </font>
                        </td>
                      <tr>
                        <td align="center">
                              <a href="https://youtu.be/I6jm5p4TRdE" target="_blank">Ex0_新規広告作成<a/>
                        </td>
                        <tr>
                        <td align="center">
                          <img border="0"  src="http://emarc-tool.com/static/qr/Ex0_%E6%96%B0%E8%A6%8F%E5%BA%83%E5%91%8A%E4%BD%9C%E6%88%90.png" width="160">
                        </td>
                        <tr>
                        <td>
                          <a> 新規広告作成用テンプレートは</a>
                          <a style="color:blue" href="http://emarc-tool.com/static/0_%E6%96%B0%E8%A6%8F%E5%BA%83%E5%91%8A%E4%BD%9C%E6%88%90%E3%83%86%E3%83%B3%E3%83%95%E3%82%9A%E3%83%AC%E3%83%BC%E3%83%88.xlsx">  こちら</a>
                        </td>
                      </table>
                    </td>
                  </div>

                <div class="container-fluid">
                  <font size =6 color = "black "> 
                    Ex0_新規広告作成
                  </font>
                  
                  <form action="excel/upload0" name="form" method="post" enctype="multipart/form-data" class="my-10">
                      
                      @csrf
                      <strong>
                        <table>
                              <td>
                              <label for="word_checkbox">
                              <input type="checkbox" id='word_checkbox' name ='checkbox_target' checked  >
                              <font size =5 color = "red "> 商品ターゲティング広告を利用する</font><br>
                              <font size = 2.5 color = gray>
                                商品ターゲティング広告を利用する場合はチェックを入れて下さい。
                                </font>

                              </td>
                              <tr>
                              <tr>
                        </table>

                        <table >
                          <td>
                          キャンペーンの1日当たりの予算:
                        </td>
                        <td>
                          <input type="number" name="cmp_price" value="2000" placeholder="2000" required id="id_cmp_price"> 円
                        </td>
                          <tr>
                            <td>
                            入札額:
                          </td>
                          <td>
                            <input type="number" name="bid" value="16" placeholder="16" required id="id_bid"> 円
                          </td>
                            <tr>
                              <td>
                              キャンペーン名の2文字目の記号:
                            </td>
                            <td>
                              <input type="text" name="cmp_sep" value="_" placeholder="_" maxlength="1" required id="id_cmp_sep">
                            </td>
                              <tr>
                                <td>
                                初期キーワード:
                              </td>
                              <td>
                                <input type="text" name="def_keyword" value="keyword" maxlength="20" id="id_def_keyword">
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

                    <font color = "red ">新規広告作成用のファイルを選択して下さい。</font><br>

                    <button type="submit" class="rounded-noneinline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">実行</button>


                  </form>
                </div>
            </div>

          </div>
        </div>
    </div>
</x-app-layout>