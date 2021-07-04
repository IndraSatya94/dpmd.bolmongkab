<?php

namespace App\Http\Controllers;

use App\Models\Wakilbupati;
use Illuminate\Http\Request;

class WakilbupatiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wakilbupati = Wakilbupati::Paginate(5);
    
        return view('wakilbupati.index',compact('wakilbupati'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wakilbupati.create');
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
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/wakilbupati/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Wakilbupati::create($input);
     
        return redirect()->route('wakilbupati.index')
                        ->with('success','Profil Wakil Buapti Berhasil Dibuat !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wakilbupati  $wakilbupati
     * @return \Illuminate\Http\Response
     */
    public function show(Wakilbupati $wakilbupati)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wakilbupati  $wakilbupati
     * @return \Illuminate\Http\Response
     */
    public function edit(Wakilbupati $wakilbupati)
    {
        return view('wakilbupati.edit',compact('wakilbupati'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wakilbupati  $wakilbupati
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wakilbupati $wakilbupati)
    {
        $request->validate([
            'nama' => 'required',
            'body' => 'required'
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/wakilbupati/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $wakilbupati->update($input);
    
        return redirect()->route('wakilbupati.index')
                        ->with('success','Profil Wakil Bupati Berhasil Diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wakilbupati  $wakilbupati
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wakilbupati $wakilbupati)
    {
        $wakilbupati->delete();

        return redirect()->route('wakilbupati.index')
                        ->with('success','Profil wakilbupati Berhasil Dihapus !');
    }
}
