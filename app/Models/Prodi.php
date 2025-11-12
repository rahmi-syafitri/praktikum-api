<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Function_;

class Prodi extends Model
{
    use HasFactory;
    protected $fillable = ['nama_prodi', 'kode_prodi', 'fakultas_id'];


    public Function fakultas(){
        return $this->belongsTo(Fakultas::class, 'fakultas_id');
    }
}
