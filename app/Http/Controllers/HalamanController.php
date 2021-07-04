<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use App\Models\Pimpinan;
use App\Models\Pengumuman;

use App\Models\Banner;
use App\Models\Download;
use App\Models\Kategori;


use App\Models\Visimisi;
use App\Models\Agenda;
use App\Models\User;
use App\Models\Slide;
use App\Models\Berita;
use App\Models\Struktur;
use App\Models\Galeri;
use App\Models\Kontak;
use App\Models\Statik;

class HalamanController extends Controller
{
    // public function index(){
    //     $menus = DB::table('menus')->get();
    //     return view('admin/Halaman', compact('menus'));
    // }

    //dishub
    public function index(){
        $gambars = Galeri::where('jenis_file', 'gambar')->get();
        $videos = Galeri::where('jenis_file', 'video')->get();
        $kontaks = Kontak::get();
        $beritas = Berita::get();
        $recents = Berita::take(3)->latest()->get();
        $slide1 = Slide::where('slide', 'slide1')->get();
        $slide2 = Slide::where('slide', 'slide2')->get();
        return view('dpmd/index',compact('slide1','slide2','beritas','kontaks','recents','gambars','videos'));
    }

    public function visimisi(){
        $visimisi = Statik::where('halaman', 'visimisi')->get();
        return view('dpmd/pages/visimisi',compact('visimisi'));
    }

    public function struktur(){
        $strukturs = Statik::where('halaman', 'struktur')->get();
        return view('dpmd/pages/struktur',compact('strukturs'));
    }

    public function usaha(){
        $usaha = Statik::where('halaman', 'usaha')->get();
        return view('dpmd/pages/usaha',compact('usaha'));
    }

    public function tugasfungsi(){
        $tugasfungsi = Statik::where('halaman', 'tugasfungsi')->get();
        return view('dpmd/pages/tugasfungsi',compact('tugasfungsi'));
    }

    public function kelembagaan(){
        $kelembagaan = Statik::where('halaman', 'kelembagaan')->get();
        return view('dpmd/pages/kelembagaan',compact('kelembagaan'));
    }

    public function sambutan(){
        $sambutan = Statik::where('halaman', 'sambutan')->get();
        return view('dpmd/pages/sambutan',compact('sambutan'));
    }

    public function pemerintahan(){
        $pemerintahan = Statik::where('halaman', 'pemerintahan')->get();
        return view('dpmd/pages/pemerintahan',compact('pemerintahan'));
    }
   
    public function sekretariat(Request $request) {
        $sekretariat = Statik::where('halaman', 'sekretariat')->get();
        return view('dpmd/pages/sekretariat',compact('sekretariat'));
    }

    public function agendadet(Request $request, $id){
        $agenda = Agenda::where('id', $id)->firstOrFail();
        return view('dpmd/pages/agenda-detail',compact('agenda'));
    }
    public function agenda(){
        $agenda = Agenda::latest()->paginate(5);
        return view('dpmd/pages/agenda',compact('agenda'));
    }

    public function galeri(){
        $gambars = Galeri::where('jenis_file', 'gambar')->get();
        $videos = Galeri::where('jenis_file', 'video')->get();
        return view('dpmd/pages/galeri',compact('gambars','videos'));
    }

    public function kontak(){
        $kontaks = Kontak::get();
        return view('dpmd/pages/kontak',compact('kontaks'));
    }

    public function berita(Request $request) {
        $kategori = Kategori::latest()->Paginate(5);
        $beritas = Berita::latest()->Paginate(5);
        $sidebar = Berita::skip(5)->take(3)->Paginate(5);
        
        return view('dpmd/pages/berita',compact('beritas','kategori','sidebar'));
    }

    public function hascarberita(Request $request) {
        if($request->has('cari')){
            $kategori = Kategori::latest()->simplePaginate(5);
            $sidebar = Berita::skip(5)->simplePaginate(5);
            $beritas = Berita::where('judul','LIKE','%'.$request->cari.'%')->with('kategori')->get();
        } else {
            $kategori = Kategori::latest()->Paginate(5);
            $beritas = Berita::latest()->Paginate(5);
            $sidebar = Berita::skip(5)->Paginate(5);
        }
        return view('dpmd/pages/hascar-berita',compact('beritas','kategori','sidebar'));
    }

    public function beritadetail(Request $request, $id){
        if($request->has('cari')){
            $kategori = Kategori::latest()->simplePaginate(5);
            $sidebar = Berita::skip(5)->simplePaginate(5);
            $beritas = Berita::where('judul','LIKE','%'.$request->cari.'%')->with('kategori')->get();
            return view('dpmd/pages/berita',compact('beritas','kategori','sidebar'));
        } else {
            $kategori = Kategori::latest()->Paginate(5);
            $beritas = Berita::where('id', $id)->firstOrFail();
            $sidebar = Berita::skip(5)->Paginate(5);
            return view('dpmd/pages/berita-detail',compact('beritas','sidebar','kategori'));
        }

    }

    // public function tugasfungsi(){
    //     $tugasfungsi = Statik::where('halaman', 'tugasfungsi')->get();
    //     return view('dishub/pages/tugasfungsi',compact('tugasfungsi'));
    // }
    //akhir dishub

    // public function pengumuman(Request $request) {
    //     $kategori = Kategori::latest()->Paginate(5);
    //     $pengumuman = Pengumuman::latest()->Paginate(5);
    //     $sidebar = Pengumuman::skip(5)->Paginate(5);
        
    //     return view('bolmongkab/detail/pengumuman',compact('pengumuman','kategori','sidebar'));
    // }
    // public function hascarpengumuman(Request $request) {
    //     if($request->has('cari')){
    //         $kategori = Kategori::latest()->simplePaginate(5);
    //         $sidebar = Pengumuman::skip(5)->simplePaginate(5);
    //         $pengumuman = Pengumuman::where('judul','LIKE','%'.$request->cari.'%')->with('kategori')->get();
    //     } else {
    //         $kategori = Kategori::latest()->simplePaginate(5);
    //         $pengumuman = Pengumuman::latest()->simplePaginate(5);
    //         $sidebar = Pengumuman::skip(5)->simplePaginate(5);
    //     }
    //     return view('bolmongkab/detail/hascarpengumuman',compact('pengumuman','kategori','sidebar'));
    // }

    public function download(){
        $download = Download::latest()->simplePaginate();
        return view('bolmongkab/detail/download',compact('download'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // public function pengdet(Request $request, $id){
    //     if($request->has('cari')){
    //         $kategori = Kategori::latest()->simplePaginate(5);
    //         $sidebar = Pengumuman::skip(5)->simplePaginate(5);
    //         $pengumuman = Pengumuman::where('judul','LIKE','%'.$request->cari.'%')->with('kategori')->get();
    //         return view('bolmongkab/detail/pengumuman',compact('pengumuman','kategori','sidebar'));
    //     } else {
    //         $kategori = Kategori::latest()->simplePaginate(5);
    //         $pengumuman = Pengumuman::where('id', $id)->firstOrFail();
    //         $pengside = Pengumuman::latest()->paginate(5);
    //         return view('bolmongkab/detail/pengumuman-detail',compact('pengumuman','pengside','kategori'));
    //     }

    // }

    public function getDownload(Request $request, $id) {
        $download = Download::where('id', $id)->firstOrFail();
        return view('download.show',compact('download'));
    }
}
