<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\DeThi;
use App\CauHoi;
use App\LoaiCauHoi;
class HomeController extends Controller
{
    //
    public function getHome()
    {
    	return view('fontend.home');
    }

     public function getLienHe()
    {
        return view('fontend.lienhe');
    }

    //lý thuyết
    public function getLyThuyet()
    {
        $loaich['loaicauhoi'] = LoaiCauHoi::all();
       
    	return view('fontend.lythuyet',$loaich);
    }

    public function getCauHoi()
    {
        $cauhoi['cauhoi'] = DB::table('cauhoi')->paginate(20);
        return view('fontend.cauhoi',$cauhoi);
    }

    public function getCauHoiLiet()
    {  
        $cauhoi['cauhoi'] = CauHoi::where('idloaicauhoi','=','8')->get();
        return view('fontend.cauhoiliet',$cauhoi);
    }

    public function getLuyenTap()
    {
        return view('fontend.luyentap');
    }

     public function getLuyenTapp($id)
    {
        $cauhoi = CauHoi::where('idloaicauhoi',$id)->get()->random(5);

        echo json_encode($cauhoi);
    }

    //thi

    public function getThiThu()
    {
        $dethi['dethi'] = DeThi::all();
        return view('fontend.thithu',$dethi);
    }

     public function getBaiThi()
    {
        return view('fontend.baithi');       
    }
        
    public function getThiBT($id)
    {    
       
        $viewdata = DB::table('chitiet_dethi')
                    ->join('cauhoi', 'chitiet_dethi.id_cauhoi', '=', 'cauhoi.id')
                    ->join('dethi', 'chitiet_dethi.id_dethi', '=', 'dethi.id')
                    ->where('dethi.id','=',$id)
                    ->select('cauhoi.*')
                    ->get();
       // $cauhoi = CauHoi::where('madethi',$id)->get();
        echo json_encode($viewdata);     
    }

    public function getThiNgauNhien()
    { 
        return view('fontend.thingaunhien');
    }

    
    public function getThiRandom()
    { 
        $array = 
        [      
            'array1' =>CauHoi::where('idloaicauhoi','=','1')->get()->random(8),
            'array2' =>CauHoi::where('idloaicauhoi','=','2')->get()->random(2),
            'array3' =>CauHoi::where('idloaicauhoi','=','3')->get()->random(1),
            'array4' =>CauHoi::where('idloaicauhoi','=','4')->get()->random(2),
            'array5' =>CauHoi::where('idloaicauhoi','=','5')->get()->random(1),
            'array6' =>CauHoi::where('idloaicauhoi','=','6')->get()->random(10),
            'array7' =>CauHoi::where('idloaicauhoi','=','7')->get()->random(10),
            'array8' =>CauHoi::where('idloaicauhoi','=','8')->get()->random(1),
        ];
        echo json_encode($array);
    }

}


 

