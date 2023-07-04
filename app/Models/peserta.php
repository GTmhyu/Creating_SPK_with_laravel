<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peserta extends Model
{
    use HasFactory;
    protected $fillable = ['nik','nama','umur','kekuatan','ketahanan','kelenturan','prestasi'];
    protected $table = 'peserta';
    public $timestamps = false;
}
