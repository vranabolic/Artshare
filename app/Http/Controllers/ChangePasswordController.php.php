<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;

class ChangePasswordController extends Controller
{
    public function edit($id){
        return view('change_password.edit',['id' => $id]);
    }

    public function update(Request $request, $id){
        $data = $request->validate([
            'password' => 'required|min:7|confirmed'
        ]);
        $data['password'] = Hash::make($data['password']);
        User::findOrFail($id)
        ->fill($data)
        ->save();
        return redirect()->route('user.show',['user'=> $id]);
    }
}
