<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        if (request()->user()->hasRole('Admin')) {
            return view('/admin/home');
        } else {
            return redirect('/user/home');
        }
    }

    public function list()
    {
        if (request()->user()->hasRole('Admin')) {
            return view('/admin/user_list');
        } else {
            return redirect('/user/home');
        }
    }

    public function read()
    {
        if (request()->user()->hasRole('Admin')) {
            $data = User::all();
            return view('/admin/read')->with([
                'data' => $data
            ]);
        } else {
            return redirect('/user/home');
        }
    }

    public function create()
    {
        if (request()->user()->hasRole('Admin')) {
            $data = Role::all();
            return view('admin/create')->with([
                'data' => $data
            ]);
        } else {
            return redirect('/user/home');
        }
    }

    public function store(Request $request)
    {
        if (request()->user()->hasRole('Admin')) {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required'],
            ]);
            $role = $request->role;
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $user->roles()->attach(Role::where('name', $role)->first());
        } else {
            return redirect('/user/home');
        }
    }

    public function show($id)
    {
        if (request()->user()->hasRole('Admin')) {
            $data = User::findOrFail($id);
            $data_role = Role::all();
            $role = $data->showRole('Admin');
            return view('/admin/edit')->with([
                'data' => $data,
                'data_role' => $data_role,
                'role' => $role
            ]);
        } else {
            return redirect('/user/home');
        }
    }

    public function update(Request $request, $id)
    {
        if (request()->user()->hasRole('Admin')) {

            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                //'password' => ['required'],
            ]);
            $data = User::findOrFail($id);
            $data->name = $request->name;
            $data->email = $request->email;
            $data->save();

            $role = $request->role;
            $data->roles()->sync([$role]);
        } else {
            return redirect('/user/home');
        }
    }

    public function destroy($id)
    {
        if (request()->user()->hasRole('Admin')) {
            $data = User::findOrFail($id);
            $data->delete();
        } else {
            return redirect('/user/home');
        }
    }

    public function update_account(Request $request, $id)
    {
        $data = User::findOrFail($id);
        $data->name = $request->name;
        //$data->email = $request->email;
        $data->save();

        //return view('/admin/edit_profile');
    }
}
