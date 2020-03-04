<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HinhAnhDienThoai extends Model
{
    protected $table = 'hinh_anh_dien_thoais';
    protected $fillable = ['id','loai_hinh','hinh_dt','url'];

    public function getUrlAttribute($url){
        if (strpos($url, 'public/') !== false) {
            return str_replace("public", "", $url);
        }
    }
}
