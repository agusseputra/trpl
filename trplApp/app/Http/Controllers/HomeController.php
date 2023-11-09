<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Kurikulum;
use Illuminate\Http\Request;
use App\Models\Berita;

class HomeController extends Controller
{
    public function index(){
        $berita=Berita::getBerita()->orderBy('berita_id','desc')->paginate(3);
        return view('landing',compact('berita'));
    }
    public function kurikulum(){
        $kurikulum = Kurikulum::all();
        foreach ($kurikulum as $key => $value) {
            $mk[$value->semester][$value->mk_kode]=array(
                'nama'=>$value->mk_nama,
                'semester'=>$value->semester,
                'sks'=>$value->sks
            );
        }
        return view('kurikulum', compact('mk'));
    }
    public function karir(){        
        return view('karir');
    }
    public function pengajar(){
        $ds=Dosen::all();
        return view('dosen', compact('ds'));
    }
    public function kompetensi(){
        return view('kompetensi');
    }
    public function berita(){
        return view('berita');
    }
}
