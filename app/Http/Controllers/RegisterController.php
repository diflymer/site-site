<?php

namespace App\Http\Controllers;
use App\Models\Hobby;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index(){

        
        $hobbies = Hobby::get();


        return view('register.index', compact('hobbies'));
    }

    public function add(Request $request){


        $validated = $request->validate([
            'login' => ['required', 'string', 'min:5', 'max:15', 'unique:users'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'name' => ['required', 'string'],
            'surname' => ['required', 'string'],
            'fatherName' => ['string'],
            'city' => ['required', 'string'],
            'birthdate' => ['required', 'date'],
            'phone' => ['required', 'numeric', 'min:11'],
            'password' => ['required', 'string', 'min:7', 'confirmed'],
            'password_confirmation' => ['required']
        ]);
        
        $user = new User();

        $user->login = $validated['login'];
        $user->email = $validated['email'];
        $user->name = $validated['name'];
        $user->surname = $validated['surname'];
        $user->fatherName = $validated['fatherName'];
        $user->birthdate = $validated['birthdate'];
        $user->city = $validated['city'];
        $user->phone = $validated['phone'];
        $user->password =  bcrypt($validated['password']);
        
        
        $hobbies = $request->hobbiesArray;

        $user->save();

        Auth::attempt($validated);

        $user->hobbies()->sync($hobbies);

        session()->flash('regSuccess', __('Спасибо за регистрацию!'));

        return redirect('/');

    }
}
