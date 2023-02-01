<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Register_Controller extends Controller
{
    protected function RuteRerister(){
        return view('auth.register');
    }

    protected function CreateNewUser(array $insert){
        $data = CreateNewUser::make($data,
        [
            'pre_name' => ['required', 'string', 'max:255'],
            'frist_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255','unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'ID_card_code' => ['required', 'integer', 'min:13'],
            'address' => ['required','string','max:255'],
            'type' => ['required', 'string','max:255'],
            'status' => ['required', 'string','max:255'],
        ]);
        dd($data);
        return $data;
    }


    protected function Create(array $data){
        return User::create([
            'pre_name' => $data['pre_name'],
            'frist_name' => $data['frist_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'ID_card_code' => $data['ID_card_code'],
            'address' => $data['address'],
            'type' => $data['type'],
            'status' => $data['status'],
        ]);
    }
}
