<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
        'truyen_id', 'tieude', 'tomtatchapter', 'noidung', 'kichhoat', 'slug_chapter'
    ];

    protected $primaryKey = 'chapter_id';

    public function truyen(){
        return $this->belongsTo('App\Models\Truyen', 'truyen_id', 'truyen_id');
    }
}
