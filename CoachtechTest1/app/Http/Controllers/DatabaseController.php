<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    public function index()
    {
        $items = DB::table('contacts')->get();
        return view('management', ['items' => $items]);
    }


}

