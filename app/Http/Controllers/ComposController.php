<?php

namespace App\Http\Controllers;

use App\Competition;
use Hamcrest\Core\CombinableMatcher;
use Illuminate\Http\Request;
use App\summoner;

class ComposController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $compo = Competition::all();
        return View('compo.compo', compact('compo'));
    }

    public function create()
    {
        return View('compo.create');
    }

    public function store()
    {
        $today = date('Y-m-d H:i:s');
        $validated = request()->validate([
             'name'=> ['required','min:3','max:255'],
             'maxplayers'=> ['required','min:2','max:100','integer'],
             'minplayers'=> ['required','min:2','max:100','integer'],
             'gamemode' => ['required','min:4','max:100'],
             'date' => ['required','date',"after_or_equal:$today"]
            ]);

        $validated['owner_id'] = auth()->id();

        Competition::create($validated);
        return redirect('/compo');


    }

    public function show(Competition $compo)
    {
        return view('compo.show', compact('compo'));
    }

    public function edit(Competition $compo)
    {
        $this->authorize('vieuw', $compo);
        return view('compo.edit', compact('compo'));
    }

    public function update(Competition $compo)
    {
        $this->authorize('update', $compo);
        $compo->update(request(['name','maxplayers','minplayers','date',]));
        return redirect('/compo');
    }

    public function destroy(Competition $compo)
    {
        $this->authorize('update', $compo);
        $compo->delete();
        return redirect('/compo');
    }
}
