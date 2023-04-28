<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;



class HomeController extends Controller
{
   public function index()
{
    $results = DB::select('select * from users');

    return view('welcome', ['results' => $results]);
}

public function submit_form(Request $request)
{
    $name = $request->input('name');
    $email = $request->input('email');
    $password = bcrypt($request->input('password'));
    $image = $request->file('image');

    $imageName = $image->getClientOriginalName();
    $imagePath = $image->store('public/images');
    $imageUrl = asset('storage/' . str_replace('public', '',$imagePath));
    echo $imageUrl;
  
    DB::table('users')->insert([
        'name' => $name,
        'email' => $email,
        'password'=>$password,
        'image'=>$imageUrl
        // ...
    ]);
    $data = ['name' => $name, 'email' => $email];
    
  
    return view('form', $data);
}

public function register()
{
    //Storage::makeDirectory('../public/image');

    $data = ['name' => "", 'email' => ""];
    return view('form', $data);

}

public function login(Request $request)
{
    if ($request->isMethod('post')) {
        $email = $request->input('email');
        $password = $request->input('password');
        $data = DB::select('select * from users where email=?', [$email]);
        if (Hash::check($password, $data[0]->password)) {
            echo 'LOGGED';
        } else {
            echo 'NOT LOGGED';
        }
        
        
        
        // Authenticate the user
    } else {
        // Handle GET request here
        return view('login');
    }
}


}




