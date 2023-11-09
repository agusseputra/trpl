<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(){
        $berita=Berita::getBerita()->orderByDesc('berita_id')->paginate(6);
        $beritaTerkini=Berita::getBerita()->orderByDesc('berita_id')->get();
        return view('berita',compact('berita','beritaTerkini'));
    }
    public function detail($slug='all'){
        $beritaTerkini=Berita::getBerita()->where('slug','!=',$slug)->orderByDesc('berita_id')->paginate(6);
        if($slug=='all'){
            $berita=Berita::getBerita()->orderByDesc('berita_id')->paginate(6);            
            return view('berita',compact('berita','beritaTerkini'));
        }
        $berita=Berita::getBerita()->where('slug','=',$slug)->first();        
        return view('detailBerita',compact('berita','beritaTerkini'));
    }
}
