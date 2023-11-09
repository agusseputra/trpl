<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    use HasFactory;
    public $primaryKey='mk_id';
    protected $table="matakuliah";
    protected $fillable = [
     'mk_kode', 'mk_nama', 'semester', 'sks', 'type'
    ];
}
