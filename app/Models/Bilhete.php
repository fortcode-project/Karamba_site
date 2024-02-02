<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bilhete extends Model
{
    use HasFactory;

    protected $table = "Bilhetes";
    protected $primaryKey = "id";
    protected $fillable = [
        "title",
        "img"
    ];
    
    public function info(){
        return $this->belongsTo(InfoBilhete::class);
    }
}
