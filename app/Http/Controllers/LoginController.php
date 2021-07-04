<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(5);
    
        return view('Login.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function halamanlogin(){
        return view('Login.Login-aplikasi');
    }


    public function postlogin(Request $request){
        if(Auth::attempt($request->only('username','password'))){
            return redirect('/home');
        }    
        return redirect('/login')
                        ->with('salah','Password / Username Salah');
    }

    public function logout(){
        Auth::logout();
        return redirect ('/');
    }

    public function registrasi(){
        return view('Login.registrasi');
    }

    public function simpanregistrasi(Request $request){
        // dd($request->all());
        $this->validate($request, [
            'email'=>'required|max:50|unique:users,email',
            'name'=>'required',
            'username'=>'required',

        ]);

        User::create([
            'name' => $request->name,
            'level' => 'operator',
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        
        return redirect('admin')
                        ->with('success','Operator Berhasil Ditambahkan !');


    }


    public function edit(Request $request, $id)
    {
        $users = User::where('id', $id)->firstOrFail();
        return view('login.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('users')
              ->where('id', $request->id_user)
              ->update(['name' => $request->name,
              'email' => $request->email,
              'username' => $request->username,
              'password' => bcrypt($request->password)]);
    
        return redirect()->route('admin')
                        ->with('success','User Berhasil Diupdate !');
    }


        /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $users = User::where('id', $id);
        $users->delete();
     
        return redirect()->route('admin')
                        ->with('success','User Berhasil Dihapus !');
    }
}
