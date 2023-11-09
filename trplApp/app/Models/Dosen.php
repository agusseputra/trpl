<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    public $primaryKey='dosen_id';
    protected $table="dosen";
    protected $fillable = [
        'dosen_code', 'name', 'gender', 'skill', 'certified', 'nip', 'photo'
    ];
}
