<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cauthu extends Model
{
    //
    
    protected $fillable = [
        'tencauthu', 'tuoi', 'quoctich', 'vitri', 'luong'
    ];

    protected $primaryKey = 'cauthu_id';
    
}
