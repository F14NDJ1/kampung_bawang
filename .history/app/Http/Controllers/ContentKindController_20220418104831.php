<?php

namespace App\Http\Controllers;

use App\Models\Content_kind;
use Illuminate\Http\Request;

class ContentKindController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        if (request()->user()->hasRole('User Content')) {
            return view('/user/home');
        } else {
            return redirect('/admin/home');
        }
    }
    public function content_kind_list()
    {
        if (request()->user()->hasRole('User Content')) {
            return view('/user/contentKind/content_kind_list');
        } else {
            return redirect('/admin/home');
        }
    }

    public function read()
    {
        if (request()->user()->hasRole('User Content')) {
            $data = Content_kind::all();
            return view('/user/contentKind/read')->with([
                'data' => $data
            ]);
        } else {
            return redirect('/admin/home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (request()->user()->hasRole('User Content')) {
            return view('/user/contentKind/create');
        } else {
            return redirect('/admin/home');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (request()->user()->hasRole('User Content')) {
            $request->validate([
                'name_content_kind' => ['required', 'string', 'max:255'],
                'detail_content_kind' => ['required', 'string', 'max:255'],
            ]);
            Content_kind::create([
                'name_content_kind' => $request->name_content_kind,
                'detail_content_kind' => $request->detail_content_kind,
            ]);
        } else {
            return redirect('/admin/home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (request()->user()->hasRole('User Content')) {
            $data = Content_kind::findOrFail($id);
            return view('/user/contentKind/edit')->with([
                'data' => $data,
            ]);
        } else {
            return redirect('/admin/home');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (request()->user()->hasRole('Admin')) {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'role' => ['required']
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
