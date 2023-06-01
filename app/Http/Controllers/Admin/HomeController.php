<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;


class HomeController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }
}
