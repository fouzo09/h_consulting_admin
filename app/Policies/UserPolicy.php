<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function see(User $user)
    {
        if ($user->hasPermission('view_all_users'))
            return TRUE;

        return FALSE;
    }

    public function create(User $user)
    {
        if ($user->hasPermission('create_users'))
            return TRUE;

        return FALSE;
    }

    public function show(User $user)
    {
        if ($user->hasPermission('show_users'))
            return TRUE;

        return FALSE;
    }

    public function edit(User $user)
    {
        if ($user->hasPermission('edit_users'))
            return TRUE;

        return FALSE;
    }

    public function disable(User $user)
    {
        if ($user->hasPermission('disable_users'))
            return TRUE;

        return FALSE;
    }

    public function delete(User $user)
    {
        if ($user->hasPermission('delete_user'))
            return TRUE;

        return FALSE;
    }


}
