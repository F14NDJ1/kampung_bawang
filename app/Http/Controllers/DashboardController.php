<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class DashboardController extends Controller
{
    public function index()
    {
        $lists = Content::orderBy('created_at', 'desc')
            ->limit(4)
            ->get();

        // foreach ($lists as $list) {
        //     echo $list->name_content . '<br>';
        // }

        return view('/dashboards/index')->with([
            'data' => $lists
        ]);
    }

    public function about()
    {
        return view('/dashboards/about');
    }

    public function artikel()
    {
        // $lists = Content::all();

        // foreach ($lists as $list) {
        //     echo $list->name_content . '<br>';
        // }

        return view('/dashboards/artikel')->with([
            'data' => Content::latest()->get()
        ]);
    }
}
