<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function register()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*
        Validation
        */
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
            'picture' => 'required'
        ]);

        $fileName = time() . $request->file('picture')->getClientOriginalName();
        $path = $request->file('picture')->storeAs('picture', $fileName, 'public');
        $picturePath = Storage::url($path);

        $picture["picture"] = $picturePath;

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'picture' => $picturePath
        ]);

//        Auth::login($user);
//
//        if (User::count() === 1) {
//            // Si c'est le premier utilisateur, lui attribuer le rôle d'administrateur
//            $user->assignRole('admin');
//        } else {
//            // Sinon, attribuer le rôle d'utilisateur normal
//            $user->assignRole('user');
//        }

        return redirect('/login');

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}