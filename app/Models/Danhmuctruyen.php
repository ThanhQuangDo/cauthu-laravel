<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Danhmuctruyen extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
        'tendanhmuc', 'slug_danhmuc', 'motadanhmuc', 'kichhoat'
    ];

    protected $primaryKey = 'danhmuc_id';

    public function truyen(){
        return $this->hasMany('App\Models\Truyen');
    }
}
