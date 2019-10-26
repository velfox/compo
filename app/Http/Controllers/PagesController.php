<?php

namespace App\Http\Controllers;

use App\Competition;
use Doctrine\DBAL\Schema\View;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $tasks = [
            'hoi',
            'dag',
            'doei'
        ];
        return view('welcome', [
            'tasks' => $tasks,
            'test' => 'hoi',
            'title' => request('title')

            ]);
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function json(){
        $data = Competition::all();
        return $data;
    }

    public function compo(){
        $compo = Competition::all();
        return View('compo.compo', compact('compo'));
    }

    public function create(){
        return View('compo.create');
    }

    public function store(){
        $compo = new Competition();

        $compo->name = request('title');
        $compo->maxplayers = request('maxplayers');
        $compo->minplayers = request('minplayers');
        $compo->date = request('date');

        $compo->save();

        return redirect('/compo');
    }
}
