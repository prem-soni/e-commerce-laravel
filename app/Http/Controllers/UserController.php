<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user = User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password))
        {
            return "username or password is not match";
        }
        else{
             $req->session()->put('user', $user);
             return redirect('/');
        }
    }
    function Register(Request $req)
    {
        //return $req->input();

        //$user->password=$req->password;
        //$user->cpassword=$req->cpassword;
         if($req->password==$req->cpassword)
         {
             
             $user = new User;
             $user->name=$req->name;
             $user->email=$req->email;
             $user->password=Hash::make($req->password);
             //return $req->input();
             $user->save();
         }
         else
         {
             return "password and confirm password is not same";
         }
          return  redirect('/login');
    }
}
