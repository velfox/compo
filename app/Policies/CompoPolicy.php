<?php

namespace App\Policies;

use App\Competition;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompoPolicy
{
    use HandlesAuthorization;



    /**
     * Determine whether the user can view the competition.
     *
     * @param  \App\User  $user
     * @param  \App\Competition  $competition
     * @return mixed
     */
    public function view(User $user, Competition $competition)
    {
        return $competition->owner_id == $user->id;
    }
    


    /**
     * Determine whether the user can update the competition.
     *
     * @param  \App\User  $user
     * @param  \App\Competition  $competition
     * @return mixed
     */
    public function update(User $user, Competition $competition)
    {
        return $competition->owner_id == $user->id;
    }


}
