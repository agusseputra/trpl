<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Berita extends Model
{
    use HasFactory;
    public $primaryKey='berita_id';
    protected $table="berita";
    protected $fillable = [
        'title', 'slug', 'kategori_id', 'description', 'photo','user_id'
    ];
    static function getBerita(){
        return DB::table('berita')
        ->select('berita.*','kategori.kategori')
        ->join('kategori','berita.kategori_id','=','kategori.kategori_id');
    }
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'kategori_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $slug = Str::slug($model->title);

            $originalSlug = $slug;
            $counter = 1;

            while (static::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $counter++;
            }

            $model->slug = $slug;
        });
    }
}
