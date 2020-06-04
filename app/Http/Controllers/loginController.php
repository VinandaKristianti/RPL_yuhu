<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Socialite;
use Exception;
use Illuminate\Http\Request;


class loginController extends Controller
{
    public function index(){
        return view('login.index');
    }
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }


    public function Callback(Request $request)
    {
        try {
    
            $user = Socialite::driver('google')->user();
     
            $finduser = User::where('google_id', $user->id)->first();
     
            if($finduser){
     
                Auth::login($finduser);
    
                return redirect('/Mahasiswa');
     
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
    
                Auth::login($newUser);
     
                return redirect('/Mahasiswa');
            }
    
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
