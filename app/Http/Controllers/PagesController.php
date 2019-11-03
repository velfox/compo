<?php

namespace App\Http\Controllers;

use App\Competition;
use Doctrine\DBAL\Schema\View;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('welcome');
    }

}
