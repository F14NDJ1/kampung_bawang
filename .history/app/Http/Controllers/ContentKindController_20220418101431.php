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
                'name' => ['required', 'string', 'max:255'],
                'detail' => ['required', 'string', 'email', 'max:255'],
            ]);
            $role = $request->role;
            $user = Content_kind::create([
                'name' => $request->name,
                'detail' => $request->detail,
            ]);
        } else {
            return redirect('/user/home');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
