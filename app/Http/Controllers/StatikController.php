<?php

namespace App\Http\Controllers;

use App\Models\Statik;
use Illuminate\Http\Request;

class StatikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statiks = Statik::latest()->Paginate(5);
    
        return view('statiks.index',compact('statiks'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('statiks.create');
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
            'halaman'=>'required|max:50|unique:statiks,halaman',
            'body' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/statiks/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Statik::create($input);
     
        return redirect()->route('statiks.index')
                        ->with('success','Halaman Berhasil Dibuat !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Statik  $statik
     * @return \Illuminate\Http\Response
     */
    public function show(Statik $statik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Statik  $statik
     * @return \Illuminate\Http\Response
     */
    public function edit(Statik $statik)
    {
        return view('statiks.edit',compact('statik'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Statik  $statik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Statik $statik)
    {
        $request->validate([
            'halaman' => 'required',
            'body' => 'required'
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/statiks/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $statik->update($input);
    
        return redirect()->route('statiks.index')
                        ->with('success','Halaman Berhasil Diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Statik  $statik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Statik $statik)
    {
        $statik->delete();

        return redirect()->route('statiks.index')
                        ->with('success','Halaman Berhasil Dihapus !');
    }
}
