<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function read()
    {
        $data = User::all();
        return view('read')->with([
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = User::findOrFail($id);
        $data->name = $request->name;
        //$data->email = $request->email;
        $data->save();

        //return view('/admin/edit_profile');
    }
}
