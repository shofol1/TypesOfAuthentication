<?php

namespace App\Http\Controllers;

use App\Mail\websiteMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class websiteController extends Controller
{
    public function index(){
        return view('home');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function login(){
        return view('login');
    }
    public function register(){
        return view('registration');
    }
    public function forgetPass(){
        return view('forget_password');
    }
    public function registerSubmit(Request $request){
        $user=new User();
       $token=hash('sha256',time());
        $user->name=$request->name;
       $user->email=$request->email;
       $user->password=Hash::make($request->password);
       $user->status='pending';
    $user->token=$token;
       $user->save();

     $verify_link=url('/register/verify/'.$token.'/'.$request->email);
     $subject="registration confirmation";
     $message="Please click on the link: <br><a href='$verify_link'>click here</a>";
    Mail::to($request->email)->send(new websiteMail($subject,$message));
    echo "email send";
    }

    public function verify_register($token,$email){
    echo $token;
    }
}
