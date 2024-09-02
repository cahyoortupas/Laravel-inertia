<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index()
    {
        return Inertia::render('Users/Index', [
            'title' => 'User',
            'url' => 'users',
            'users' => User::paginate()
        ]);
    }

    public function create()
    {
        return Inertia::render('Users/Create', [
            'title' => 'Input User',
            'url' => '/users'
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'level' => $request->level,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'message' => 'Data User berhasil diinput',
        ], 200);

    }

    public function edit($id)
    {
        $user = User::find($id);
        return Inertia::render('Users/Edit', [
            'title' => 'Edit User',
            'url' => '/users',
            'user' => $user
        ]);
    }

    public function update($id,Request $request){

        $user = User::find($id);
        if($request->password){
            $request->validate([
                'nama' => 'required|string|max:255',
                'email' => 'required|string|lowercase|email|max:255',
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);

            $user->password = Hash::make($request->password);
        }else{
            $request->validate([
                'nama' => 'required|string|max:255',
                'email' => 'required|string|lowercase|email|max:255',
            ]);

        }

        $user->name = $request->nama;
        $user->email = $request->email;
        $user->level = $request->level;
        $user->save();

        return response()->json([
            'message' => 'Data User berhasil diedit',
        ], 200);

    }

    public function delete($id){
        
        $user = User::find($id)->delete();

        return response()->json([
            'message' => 'Data User berhasil dihapus',
        ], 200);

    }




}
