<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\Request

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


/**
 * Where to redirect users after login.
 *
 * @var string
 */

class Admin_Auth extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = RouteServiceProvider::admin;
    
    public function username()
    {
        $data=request()->input("login_data");
        if(filter_var($data,FILTER_VALIDATE_EMAIL)){
            $hit="email";
        }
        else{
            $hit="uname";
        }
        request()->merge([$hit=>$data]);
        return $hit;
    }
    public function loginShow(){
        return view("admin.login");
    }
    public function dash(){
        return view("admin.dashboard");
    }

    public function regiShow(){
        return view("admin.registration");
    }
    public function regiStore(Request $r){


        $r->validate([
            "name"=>"required",
            "uname"=>"required",
            "email"=>"required",
            "password"=>"required"
        ]);
      Admin::create([
          "name"=>$r->name,
          "uname"=>$r->uname,
          "email"=>$r->email,
          "password"=>Hash::make($r->pass)
      ]);
      return redirect()->route("admin-login");
    }

 

protected function guard()
{
    return Auth::guard('admin');
}
}
    