<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $download = Download::latest()->Paginate(5);
    
        return view('download.index',compact('download'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('download.create');
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
            'nama' => 'required',
            'file' => 'required|file|mimes:pdf,docx,xlsx,doc|max:2048',
        ]);
  
        $input = $request->all();

        if ($file = $request->file('file')) {
            $destinationPath = 'file/download/';
            $filedownload = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filedownload);
            $input['file'] = "$filedownload";
        }
    
        Download::create($input);
     
        return redirect()->route('download.index')
                        ->with('success','Informasi Download Berhasil Ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function show(Download $download)
    {
        return view('download.show',compact('download'));

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Download  $download
     * @return \Illuminate\Http\Response
     */
    }
    
    public function edit(Download $download)
    {
        return view('download.edit',compact('download'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Download $download)
    {
        $request->validate([
            'nama' => 'required'
        ]);
  
        $input = $request->all();

        if ($file = $request->file('file')) {
            $destinationPath = 'file/download/';
            $filedownload = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filedownload);
            $input['file'] = "$filedownload";
        } else {
            unset($input['file']);
        }
          
        $download->update($input);
    
        return redirect()->route('download.index')
                        ->with('success','Informasi Download Berhasil Diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function destroy(Download $download)
    {
        $download->delete();

        return redirect()->route('download.index')
                        ->with('success','Informasi Download Berhasil Dihapus !');
    }
}
