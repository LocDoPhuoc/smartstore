<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuangCao extends Model
{
    protected $table = 'quang_caos';
    protected $fillable = ['id','id_dt','img','trang_thai'];

    public function getImgAttribute($url){
        if (strpos($url, 'public/') !== false) {
            return str_replace("public", "", $url);
        }
    }
}
