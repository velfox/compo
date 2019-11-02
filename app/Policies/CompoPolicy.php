<?php

namespace App\Policies;

use App\Competition;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any competitions.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

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
     * Determine whether the user can create competitions.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
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

    /**
     * Determine whether the user can delete the competition.
     *
     * @param  \App\User  $user
     * @param  \App\Competition  $competition
     * @return mixed
     */
    public function delete(User $user, Competition $competition)
    {
        //
    }

    /**
     * Determine whether the user can restore the competition.
     *
     * @param  \App\User  $user
     * @param  \App\Competition  $competition
     * @return mixed
     */
    public function restore(User $user, Competition $competition)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the competition.
     *
     * @param  \App\User  $user
     * @param  \App\Competition  $competition
     * @return mixed
     */
    public function forceDelete(User $user, Competition $competition)
    {
        //
    }
}
