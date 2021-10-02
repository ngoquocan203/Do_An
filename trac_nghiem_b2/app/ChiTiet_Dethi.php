<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTiet_Dethi extends Model
{
    //
    protected $table = "chitiet_dethi";
    protected $fillable = [
        'id_cauhoi', 'id_dethi'];
}
