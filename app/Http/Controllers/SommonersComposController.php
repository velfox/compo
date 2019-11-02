<?php

namespace App\Http\Controllers;
use App\Competition;
use App\summoner;
use Illuminate\Http\Request;
use App\User;

class SommonersComposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $compoid = request('competition_id');

        $validated = request()->validate(['competition_id' => ['required','integer']]);
        $validated['user_id'] = auth()->id();

        summoner::create($validated);

        return redirect('/compo/'. $compoid);
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
    public function destroy()
    {
        $userid = auth()->id();
        $validated = request()->validate(['competition_id' => ['required','integer']]);
        $competition_id = $validated['competition_id'];

        summoner::where([
            ['user_id', '=', $userid],
            ['competition_id', '=', $competition_id]
        ])->delete();

        return redirect("/compo/$competition_id");
    }
}



