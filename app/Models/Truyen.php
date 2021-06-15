<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Truyen extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
        'tentruyen', 'slug_truyen', 'tomtattruyen', 'image_truyen', 'kichhoat', 'danhmuc_id'
    ];

    protected $primaryKey = 'truyen_id';

    public function danhmuctruyen(){
        return $this->belongsTo('App\Models\Danhmuctruyen', 'danhmuc_id', 'danhmuc_id');
    }

    public function chapter(){
        return $this->hasMany('App\Models\Chapter');
    }
}
