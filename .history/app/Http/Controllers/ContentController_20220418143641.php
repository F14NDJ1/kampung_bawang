<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function content($content_kind)
    {
        if (request()->user()->hasRole('User Content')) {
            return view('/user/content/content_list')->with([
                'data' => $content_kind,
            ]);
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
}
