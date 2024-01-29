<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoBilhete extends Model
{
    use HasFactory;
    protected $table = "info_bilhetes";

    protected $casts = [
        'regalias'=>'array'
    ];
    public function bilhete(){
        return $this->hasMany(Bilhete::class);
    }
}
