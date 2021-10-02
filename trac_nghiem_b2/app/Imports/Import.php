<?php

namespace App\Imports;

use App\CauHoi;
use App\ChiTiet_Dethi;
use Maatwebsite\Excel\Concerns\ToModel;

class Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // return new CauHoi([
        //     'noidung' => $row[0],
        //     'idloaicauhoi' => $row[1],
        //     'dapandung' => $row[2],
            
        // ]);

        return new ChiTiet_Dethi([
            'id_cauhoi' => $row[0],
            'id_dethi' => $row[1],       
        ]);
    }

    
}
