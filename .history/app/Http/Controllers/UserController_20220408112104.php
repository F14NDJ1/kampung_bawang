<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(Request $request, $id)
    {
        $data = M_Crud::findOrFail($id);
        $data->name = $request->name;
        $data->save();
    }
}
