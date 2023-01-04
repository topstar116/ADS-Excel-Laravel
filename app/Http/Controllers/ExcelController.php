<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use App\Models\Upload1;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Upload1Export;

class ExcelController extends Controller
{

    public function upload1(Request $request)
    {
        $click_through = $request->input('click_through');
        $sheets = (new UsersImport)->toArray($request->file);        
        
        Upload1::getQuery()->delete();

        foreach ($sheets[0] as $row) {           
            
            if(mb_substr($row[4], 0, 1, "UTF-8")=='A' && mb_substr($row[8], 0, 2, "UTF-8")!='b0' && $row[11] <= ($click_through*0.01) && $row[14] == 0){
                
                Upload1::insert(['キャンペーン'=>$row[4], '広告グループ'=>$row[5], 'キーワードまたは商品ターゲティング'=>$row[8], 'マッチタイプ'=>'Negative Exact', 'ステータス'=>'有効']);

            }

        }

        return Excel::download(new Upload1Export, '1_オート広告除外'.date('Ymdhis').'.xlsx');
    }

    public function upload2(Request $request)
    {
        $checkbox_target = $request->input('checkbox_target');
        $click_through = $request->input('click_through');
        $click_add = $request->input('click_add');
        $click_through2 = $request->input('click_through2');
        $impression = $request->input('impression');
        $conversion = $request->input('conversion');
        $click_add2 = $request->input('click_add2');


        $sheets = (new UsersImport)->toArray($request->file);        
        
        Upload1::getQuery()->delete();

        if($checkbox_target == NULL){
            
            foreach ($sheets[0] as $row) {          
                           
                if((mb_substr($row[4], 0, 1, "UTF-8")=='A' || mb_substr($row[4], 0, 1, "UTF-8")=='P') && mb_substr($row[8], 0, 2, "UTF-8")!='b0' && ($row[11] >= ($click_through*0.01) || $row[14] > 0) && !str_contains($row[12],'平均クリック単価')){
                    
                    Upload1::insert(['キャンペーン'=>'P'.substr($row[4], 1), '広告グループ'=>$row[5], '入札額上限'=>($row[12]+$click_add), 'キーワードまたは商品ターゲティング'=>$row[8], 'マッチタイプ'=>'Phrase', 'ステータス'=>'有効']);
    
                }
    
            }

        }else{

            foreach ($sheets[0] as $row) {          
                           
                if((mb_substr($row[4], 0, 1, "UTF-8")=='A' || mb_substr($row[4], 0, 1, "UTF-8")=='P') && mb_substr($row[8], 0, 2, "UTF-8")!='b0' && ($row[11] >= ($click_through*0.01) || $row[14] > 0) && !str_contains($row[12],'平均クリック単価')){
                    
                    Upload1::insert(['キャンペーン'=>'P'.substr($row[4], 1), '広告グループ'=>$row[5], '入札額上限'=>($row[12]+$click_add), 'キーワードまたは商品ターゲティング'=>$row[8], 'マッチタイプ'=>'Phrase', 'ステータス'=>'有効']);
    
                }
    
            }

            foreach ($sheets[0] as $row) {           
            
                if(mb_substr($row[4], 0, 1, "UTF-8")=='A' && mb_substr($row[8], 0, 2, "UTF-8")=='b0' && $row[9] >= $impression && $row[11] >= ($click_through2*0.01) && $row[14] > 0 && $row[19] >= ($conversion*0.01)){
                    
                    Upload1::insert(['キャンペーン'=>'G'.substr($row[4], 1), '広告グループ'=>$row[5], '入札額上限'=>($row[12]+$click_add2), 'キーワードまたは商品ターゲティング'=>$row[8], 'マッチタイプ'=>'Phrase', 'ステータス'=>'有効']);
    
                }
    
            }

        }

        

        return Excel::download(new Upload1Export, '2_キーワード仕入れ'.date('Ymdhis').'.xlsx');
    }

    public function upload3(Request $request)
    {
        $checkbox_target = $request->input('checkbox_target');
        $impression1 = $request->input('impression1');
        $impression2 = $request->input('impression2');
        $click_through1 = $request->input('click_through1');
        $click_through2 = $request->input('click_through2');
        $click_through3 = $request->input('click_through3');
        $click_through4 = $request->input('click_through4');
        
        $sheets = (new UsersImport)->toArray($request->file);        
        
        Upload1::getQuery()->delete();

        foreach ($sheets[0] as $row) {           
            
            if(mb_substr($row[4], 0, 1, "UTF-8")=='A' && mb_substr($row[8], 0, 2, "UTF-8")!='b0' && $row[11] <= ($click_through*0.01) && $row[14] == 0){
                
                $N = '';
                if(b_substr($row[4], 0, 1, "UTF-8")=='P') $N = 'Parse';
                if(b_substr($row[4], 0, 1, "UTF-8")=='E') $N = 'Exact';

                Upload1::insert(['キャンペーン'=>$row[4], '広告グループ'=>$row[5], 'キーワードまたは商品ターゲティング'=>$row[8], 'マッチタイプ'=>$N, '広告グループステータス'=>'有効', 'ステータス'=>'有効']);

            }

        }

        return Excel::download(new Upload1Export, '3_入札額調整'.date('Ymdhis').'.xlsx');
    }

    public function upload4(Request $request)
    {
        $checkbox_target = $request->input('checkbox_target');
        $impression1 = $request->input('impression1');
        $impression2 = $request->input('impression2');
        $click_through1 = $request->input('click_through1');
        $click_through2 = $request->input('click_through2');
        $click_through3 = $request->input('click_through3');
        $click_through4 = $request->input('click_through4');
        
        $sheets = (new UsersImport)->toArray($request->file);        
        
        Upload1::getQuery()->delete();

        foreach ($sheets[0] as $row) {           
            
            if(mb_substr($row[4], 0, 1, "UTF-8")=='A' && mb_substr($row[8], 0, 2, "UTF-8")!='b0' && $row[11] <= ($click_through*0.01) && $row[14] == 0){
                
                $N = '';
                if(b_substr($row[4], 0, 1, "UTF-8")=='P') $N = 'Parse';
                if(b_substr($row[4], 0, 1, "UTF-8")=='E') $N = 'Exact';

                Upload1::insert(['キャンペーン'=>$row[4], '広告グループ'=>$row[5], 'キーワードまたは商品ターゲティング'=>$row[8], 'マッチタイプ'=>$N, '広告グループステータス'=>'有効', 'ステータス'=>'有効']);

            }

        }

        return Excel::download(new Upload1Export, '3_入札額調整'.date('Ymdhis').'.xlsx');
    }

    public function upload5(Request $request)
    {
        $checkbox_target = $request->input('checkbox_target');
        $impression1 = $request->input('impression1');
        $impression2 = $request->input('impression2');
        $click_through1 = $request->input('click_through1');
        $click_through2 = $request->input('click_through2');
        $click_through3 = $request->input('click_through3');
        $click_through4 = $request->input('click_through4');
        
        $sheets = (new UsersImport)->toArray($request->file);        
        
        Upload1::getQuery()->delete();

        foreach ($sheets[0] as $row) {           
            
            if(mb_substr($row[4], 0, 1, "UTF-8")=='A' && mb_substr($row[8], 0, 2, "UTF-8")!='b0' && $row[11] <= ($click_through*0.01) && $row[14] == 0){
                
                $N = '';
                if(b_substr($row[4], 0, 1, "UTF-8")=='P') $N = 'Parse';
                if(b_substr($row[4], 0, 1, "UTF-8")=='E') $N = 'Exact';

                Upload1::insert(['キャンペーン'=>$row[4], '広告グループ'=>$row[5], 'キーワードまたは商品ターゲティング'=>$row[8], 'マッチタイプ'=>$N, '広告グループステータス'=>'有効', 'ステータス'=>'有効']);

            }

        }

        return Excel::download(new Upload1Export, '3_入札額調整'.date('Ymdhis').'.xlsx');
    }

    public function uploadEx1(Request $request)
    {
        $checkbox_target = $request->input('checkbox_target');
        $impression1 = $request->input('impression1');
        $impression2 = $request->input('impression2');
        $click_through1 = $request->input('click_through1');
        $click_through2 = $request->input('click_through2');
        $click_through3 = $request->input('click_through3');
        $click_through4 = $request->input('click_through4');
        
        $sheets = (new UsersImport)->toArray($request->file);        
        
        Upload1::getQuery()->delete();

        foreach ($sheets[0] as $row) {           
            
            if(mb_substr($row[4], 0, 1, "UTF-8")=='A' && mb_substr($row[8], 0, 2, "UTF-8")!='b0' && $row[11] <= ($click_through*0.01) && $row[14] == 0){
                
                $N = '';
                if(b_substr($row[4], 0, 1, "UTF-8")=='P') $N = 'Parse';
                if(b_substr($row[4], 0, 1, "UTF-8")=='E') $N = 'Exact';

                Upload1::insert(['キャンペーン'=>$row[4], '広告グループ'=>$row[5], 'キーワードまたは商品ターゲティング'=>$row[8], 'マッチタイプ'=>$N, '広告グループステータス'=>'有効', 'ステータス'=>'有効']);

            }

        }

        return Excel::download(new Upload1Export, '3_入札額調整'.date('Ymdhis').'.xlsx');
    }

    public function upload0(Request $request)
    {
        $checkbox_target = $request->input('checkbox_target');
        $cmp_price = $request->input('cmp_price');
        $bid = $request->input('bid');
        $cmp_sep = $request->input('cmp_sep');
        $def_keyword = $request->input('def_keyword');
        
        $sheets = (new UsersImport)->toArray($request->file);        
        
        Upload1::getQuery()->delete();

        foreach ($sheets[0] as $row) {           

            if($row[3] == '子SKU') continue;
            if($row[3] == '') break;
            
            //A
            Upload1::insert(['キャンペーン'=>'A'.$cmp_sep.$row[1].$row[2], 'キャンペーンの1日の予算'=>$cmp_price, 'キャンペーン開始日'=>date('Y/m/d'), 'キャンペーンターゲティングタイプ'=>'auto', 'キャンペーンステータス'=>'有効', '入札戦略'=>'動的な入札（ダウンのみ）']);
            Upload1::insert(['キャンペーン'=>'A'.$cmp_sep.$row[1].$row[2], '広告グループ'=>'広告グループ 1', '入札額上限'=>$bid, 'キャンペーンステータス'=>'有効', '広告グループステータス'=>'有効']);
            Upload1::insert(['キャンペーン'=>'A'.$cmp_sep.$row[1].$row[2], '広告グループ'=>'広告グループ 1', 'SKU'=>$row[3], 'キャンペーンステータス'=>'有効', '広告グループステータス'=>'有効', 'ステータス'=>'有効']);

            //P
            Upload1::insert(['キャンペーン'=>'P'.$cmp_sep.$row[1].$row[2], 'キャンペーンの1日の予算'=>$cmp_price, 'キャンペーン開始日'=>date('Y/m/d'), 'キャンペーンターゲティングタイプ'=>'manual', 'キャンペーンステータス'=>'有効', '入札戦略'=>'動的な入札（ダウンのみ）']);
            Upload1::insert(['キャンペーン'=>'P'.$cmp_sep.$row[1].$row[2], '広告グループ'=>'広告グループ 1', '入札額上限'=>$bid, 'キャンペーンステータス'=>'有効', '広告グループステータス'=>'有効']);
            Upload1::insert(['キャンペーン'=>'P'.$cmp_sep.$row[1].$row[2], '広告グループ'=>'広告グループ 1', 'SKU'=>$row[3], 'キャンペーンステータス'=>'有効', '広告グループステータス'=>'有効', 'ステータス'=>'有効']);

            if($def_keyword != ''){
                Upload1::insert(['キャンペーン'=>'P'.$cmp_sep.$row[1].$row[2], '広告グループ'=>'広告グループ 1', '入札額上限'=>$bid, 'キーワードまたは商品ターゲティング'=>$def_keyword, 'マッチタイプ'=>'Parse', 'キャンペーンステータス'=>'有効', '広告グループステータス'=>'有効', 'ステータス'=>'有効']);
            }

            //E
            Upload1::insert(['キャンペーン'=>'E'.$cmp_sep.$row[1].$row[2], 'キャンペーンの1日の予算'=>$cmp_price, 'キャンペーン開始日'=>date('Y/m/d'), 'キャンペーンターゲティングタイプ'=>'manual', 'キャンペーンステータス'=>'有効', '入札戦略'=>'動的な入札（ダウンのみ）']);
            Upload1::insert(['キャンペーン'=>'E'.$cmp_sep.$row[1].$row[2], '広告グループ'=>'広告グループ 1', '入札額上限'=>$bid, 'キャンペーンステータス'=>'有効', '広告グループステータス'=>'有効']);
            Upload1::insert(['キャンペーン'=>'E'.$cmp_sep.$row[1].$row[2], '広告グループ'=>'広告グループ 1', 'SKU'=>$row[3], 'キャンペーンステータス'=>'有効', '広告グループステータス'=>'有効', 'ステータス'=>'有効']);

            if($def_keyword != ''){
                Upload1::insert(['キャンペーン'=>'E'.$cmp_sep.$row[1].$row[2], '広告グループ'=>'広告グループ 1', '入札額上限'=>$bid, 'キーワードまたは商品ターゲティング'=>$def_keyword, 'マッチタイプ'=>'Exact', 'キャンペーンステータス'=>'有効', '広告グループステータス'=>'有効', 'ステータス'=>'有効']);
            }

            if($checkbox_target != NULL){
               
                //G
                Upload1::insert(['キャンペーン'=>'G'.$cmp_sep.$row[1].$row[2], 'キャンペーンの1日の予算'=>$cmp_price, 'キャンペーン開始日'=>date('Y/m/d'), 'キャンペーンターゲティングタイプ'=>'manual', 'キャンペーンステータス'=>'有効', '入札戦略'=>'動的な入札（ダウンのみ）']);
                Upload1::insert(['キャンペーン'=>'G'.$cmp_sep.$row[1].$row[2], '広告グループ'=>'広告グループ 1', '入札額上限'=>$bid, 'キャンペーンステータス'=>'有効', '広告グループステータス'=>'有効']);
                Upload1::insert(['キャンペーン'=>'G'.$cmp_sep.$row[1].$row[2], '広告グループ'=>'広告グループ 1', 'SKU'=>$row[3], 'キャンペーンステータス'=>'有効', '広告グループステータス'=>'有効', 'ステータス'=>'有効']);
                Upload1::insert(['キャンペーン'=>'G'.$cmp_sep.$row[1].$row[2], '広告グループ'=>'広告グループ 1', '入札額上限'=>$bid, 'キーワードまたは商品ターゲティング'=>'asin＝”'.$row[1].'）”','商品ターゲティングID'=>'asin＝”'.$row[1].'）”', 'マッチタイプ'=>'ターゲティングエクスプレッション', 'キャンペーンステータス'=>'有効', '広告グループステータス'=>'有効', 'ステータス'=>'有効']);

            }

        }

        return Excel::download(new Upload1Export, '3_入札額調整'.date('Ymdhis').'.xlsx');
    }


    
}
