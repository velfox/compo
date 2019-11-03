<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Competition;

class SearchController extends Controller
{
    public function index(Request $request)
    {

        $query = $request->search;

        $compos = Competition::where('name', 'LIKE', "%$query%")->get();
        return view('compo.search-result', compact('compos'));
    }
}
