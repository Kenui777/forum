<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class UserController extends Controller
{
    public function listAllUsers(Request $request)
    {
        $users = User:: all();
        return view('users.listAllUsers', ['users' => $users]); 
    }

    public function listUser(Request $request, $uid)
    {
        //procurar user no bd
        $user = User::where('id', $id)->first();
        return view('user.profile', ['user' => $user]);  
    }

    public function editUser(Request $request, $uid)
    {
        return view('users.editUser'); 
    }


    public function updateUser(Request $request, $uid)
    {
        //procurar user no bd
        $user = User::where('id', $id)->first();
        $user->name =  $request->name;
        $user->email =  $request->email;

        if($request->password != '') {
            $user->password = Hash::make($request -> password);
        }
        $user ->save();

        return redirect()->route('listUser', [$User->id])
                         ->with('message',  'Atualizado com sucesso!');

    }

    public function deleteUser(Request $request, $uid)
    {
        //procurar user no bd
        User::where('id', $id)->delete();

        return redirect()->route('listUser', [$User->id])
                         ->with('message',  'Atualizado com sucesso!');

    }

    public function registerUser( Request $request) {
        if($request->method() === 'GET') {
            
            return view('auth.register');
        } else {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);

            $user = User::create([
                'name' => $request -> name,
                'email' => $request -> email,
                'password' => Hash::make($request -> password),
            ]);

            Auth::login($user);
            redirect()->route('listAllUsers')->with('Sucesso',  'logout realizado com sucesso!');
        }
    }
}
