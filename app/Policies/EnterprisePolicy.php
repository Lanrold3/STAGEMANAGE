<?php

namespace App\Policies;

use App\Models\User;
use App\Models\enterprise;
use Illuminate\Auth\Access\HandlesAuthorization;

class EnterprisePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\enterprise  $enterprise
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, enterprise $enterprise)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->cd()||$user->admin();
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\enterprise  $enterprise
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, enterprise $enterprise)
    {
        return $user->cd()||$user->admin();
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\enterprise  $enterprise
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, enterprise $enterprise)
    {
        return $user->cd()||$user->admin();
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\enterprise  $enterprise
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, enterprise $enterprise)
    {
        return $user->cd()||$user->admin();
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\enterprise  $enterprise
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, enterprise $enterprise)
    {
        return $user->cd()||$user->admin();
    }
}
