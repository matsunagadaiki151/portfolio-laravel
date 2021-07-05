<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LinkController extends Controller
{
    public function index()
    {   
        $items = DB::table('votes')->orderBy('vote_num', 'desc')->get();
        $items_id_sort = DB::table('votes')->orderBy('id', 'asc')->get();

        return view('link.index', ['items' => $items,
        'items_id_sort' => $items_id_sort]);
    }

    public function voted(Request $request)
    {
        $titleName = $request->titles;
        logger('test', ['title' => $titleName]);
        DB::table('votes')->where('title', '=', $titleName)
        ->increment('vote_num');
        return redirect('/link');
    }
}
