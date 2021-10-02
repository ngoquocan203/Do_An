<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ChiTiet_Dethi;
use App\CauHoi;
use App\DeThi;
use App\LoaiCauHoi;
class CTDeThiController extends Controller
{
    //
    public function getCTDeThi() {
        $viewdata['viewdata'] = DB::table('loaicauhoi')
                    ->join('cauhoi', 'loaicauhoi.id', '=', 'cauhoi.idloaicauhoi')
                    ->select('cauhoi.id','loaicauhoi.loaicauhoi')
                    ->get();
        // $ct_dethi['ct_dethi1'] = DB::table('dethi')
        //             ->join('chitiet_dethi', 'dethi.id', '=', 'chitiet_dethi.id_dethi')
        //             ->join('cauhoi', 'chitiet_dethi.id_cauhoi', '=', 'cauhoi.id')
        //             ->select('chitiet_dethi.id_dethi','cauhoi.noidung','dethi.tendethi')
        //             ->get();            
    	return view('backend.ct_dethi.ct_dethi',[ 	
                'ct_dethi' => ChiTiet_Dethi::orderBy('id','desc')->paginate(8),
        				'cauhoi' => CauHoi::all(),
        				'dethi' => DeThi::all() ] ,$viewdata);

        
    }

    public function postThemCTDeThi(Request $request)
    {
    	// $this->validate($request,
     //    [
     //        'tendethi'=>'required|min:3|max:20|unique:Dethi,tendethi'
     //    ],
     //    [
     //        'tendethi.required'=>'Bận chưa nhập danh mục cần thêm',
     //        'tendethi.min'=>'Tên đề thi phải từ 3 kí tự trở lên',
     //        'tendethi.max'=>'Tên đề thi phải từ 20 kí tự trở xuống',
     //        'tendethi.unique'=>'Tên đề thi đã tồn tại'
     //    ]);

    	$ct_dethi = new ChiTiet_Dethi;
    	$ct_dethi->id_dethi = $request->iddethi;
    	$ct_dethi->id_cauhoi = $request->idcauhoi;
    	$ct_dethi->save();

    	return redirect('backend/ct_dethi')->with('thongbao','Thêm mới thành công');
    }

    public function getXoaCTDeThi($id) {
        $ct_dethi = ChiTiet_Dethi::find($id);
        $ct_dethi->delete();
        return redirect('backend/ct_dethi')->with('thongbao1','Xóa thành công !');
    }

    public function getSuaCTDeThi($id) {
        $cauhoi['cauhoi'] = DB::table('loaicauhoi')
                    ->join('cauhoi', 'loaicauhoi.id', '=', 'cauhoi.idloaicauhoi')
                    ->select('cauhoi.id','loaicauhoi.loaicauhoi')
                    ->get();
        return view('backend.ct_dethi.sua_ctdethi', [
          'ct_dethi' => ChiTiet_Dethi::find($id),
          'dethi' => DeThi::all(),
          ], $cauhoi);
    }

    public function postSuaCTDeThi(Request $request, $id) {
        $ct_dethi = ChiTiet_Dethi::find($id);
        $ct_dethi->id_dethi = $request->id_dethi;
        $ct_dethi->id_cauhoi = $request->id_cauhoi;
        $ct_dethi->save();

       return redirect('backend/ct_dethi')->with('thongbao_sua','Sửa thành công !');;
    }



    public function export_ctdt(){
        return Excel::download(new Export , 'CT_DeThi.xlsx');
    }

    public function import_ctdt(Request $request){
        $path = $request->file('file')->getRealPath();
        Excel::import(new Import, $path);
        return back();
    }
}
