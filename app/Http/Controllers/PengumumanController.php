<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumuman = Pengumuman::with('kategori','tag')->latest()->Paginate(5);
    
        return view('pengumuman.index',compact('pengumuman'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $kategori = Kategori::all();
        $tags = Tag::all();
        return view('pengumuman.create',compact('kategori','user','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'id_kategori' => 'required',
            'id_tag' => 'required'
        ]);
  
        $input = $request->all();

        Pengumuman::create($input);
     
        return redirect()->route('pengumuman.index')
                        ->with('success','Pengumuman Berhasil Ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengumuman $pengumuman)
    {
        $kategori = Kategori::all();
        $user = User::all();
        $tags = Tag::all();
        return view('pengumuman.edit',compact('pengumuman','kategori','user','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        $request->validate([
            'judul'=>'required',
            'konten'=>'required',

        ]);
  
        $input = $request->all();
          
        $pengumuman->update($input);
    
        return redirect()->route('pengumuman.index')
                        ->with('success','pengumuman Berhasil Diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengumuman $pengumuman)
    {
        $pengumuman->delete();

        return redirect()->route('pengumuman.index')
                        ->with('success', 'pengumuman Berhasil Dihapus !');
    }
}
