<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    use HasFactory;
    protected $table ='hasil';
    protected $guarded =['id'];

    public function peserta(){
        return $this->belongsTo(peserta::class,'id');
    }
}
