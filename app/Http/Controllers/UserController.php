<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Competition;
use App\summoner;
use App\Results;

class UserController extends Controller
{

    public function edit(User $user)
    {
        $this->ChekAuthorizeUser($user);
        return view('user.edit', compact('user'));
    }


    public function update(User $user)
    {
        $this->ChekAuthorizeUser($user);
        $validated = request()->validate([
            'name'=> ['required','min:3','max:255'],
            'email'=> ['required','min:2','max:100','email']
        ]);


        $user->update($validated);
        return redirect('user/' . $user->id . '/edit');
    }

    public function destroy(User $user)
    {
        $this->ChekAuthorizeUser($user);

        Competition::where([
            ['owner_id', '=', $user->id]
        ])->delete();

        Results::where([
            ['user_id', '=', $user->id]
        ])->delete();

        Summoner::where([
            ['user_id', '=', $user->id]
        ])->delete();

        $user->delete();
        return redirect('/home');
    }

    public function admin(){
        $this->ChekAuthorizeAdmin();
        $user = User::all();
        return view('user.admin', compact('user'));
    }

    private function ChekAuthorizeUser($user){

        $admin = User::where([['id', '=', auth()->id()]])->get('admin')->pluck('admin')->toArray();

        if ($admin[0] == 1) {
        } else {
            abort_if($user->id !== auth()->id(), 403);
        }
        // $this->authorize('update', $compo);
    }

    private function ChekAuthorizeAdmin(){

        $admin = User::where([['id', '=', auth()->id()]])->get('admin')->pluck('admin')->toArray();

        if ($admin[0] == 1) {
        } else {
            abort(403);
        }
        // $this->authorize('update', $compo);
    }
}
