<?php

namespace App\Http\Controllers;

use App\Competition;
use Hamcrest\Core\CombinableMatcher;
use Illuminate\Http\Request;

class ComposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compo = Competition::all();
        return View('compo.compo', compact('compo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('compo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // dd(request()->all());
        Competition::create(request(['name','maxplayers','minplayers','date',]));

        // oude manier
        // $compo = new Competition();
        // $compo->name = request('title');
        // $compo->maxplayers = request('maxplayers');
        // $compo->minplayers = request('minplayers');
        // $compo->date = request('date');

        // $compo->save();

        return redirect('/compo');
    }

    /**
     * Display the specified resource. Competition $competition
     *
     * @param  \App\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function show(Competition $compo)
    {
        return view('compo.show', compact('compo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function edit(Competition $compo)
    {
        return view('compo.edit', compact('compo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function update(Competition $compo)
    {


        $compo->update(request(['name','maxplayers','minplayers','date',]));

        // oude manier
        // $compo->name = request('name');
        // $compo->date = request('date');
        // $compo->save();

        return redirect('/compo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Competition $compo)
    {
        $compo->delete();
        return redirect('/compo');

    }
}
