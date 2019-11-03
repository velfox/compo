<?php

namespace App\Http\Controllers;

use App\Competition;
use App\Mail\CompoCreated;
use Hamcrest\Core\CombinableMatcher;
use Illuminate\Http\Request;
use App\summoner;
use App\User;

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

    public function own(){
        $compo = Competition::where([
            ['id', '=', auth()->id()],
        ])->get();
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

            $compo = Competition::create($validated);



        return redirect('/compo');


    }

    public function show(Competition $compo)
    {
        return view('compo.show', compact('compo'));
    }

    public function edit(Competition $compo)
    {
        $this->ChekAuthorizeUser($compo);
        return view('compo.edit', compact('compo'));
    }

    public function update(Competition $compo)
    {
        $this->ChekAuthorizeUser($compo);
        $compo->update(request(['name','maxplayers','minplayers','date',]));
        return redirect('/compo');
    }

    public function destroy(Competition $compo)
    {
        $this->ChekAuthorizeUser($compo);
        $compo->delete();
        return redirect('/compo');
    }

    private function ChekAuthorizeUser($compo){
        $user = User::where([
            ['id', '=', auth()->id()],
        ])->get('admin')->pluck('admin')->toArray();

        if ($user[0] == 1) {
        } else {
            abort_if($compo->owner_id !== auth()->id(), 403);
        }
        // $this->authorize('update', $compo);
    }
}



