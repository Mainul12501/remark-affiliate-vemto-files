<?php

namespace App\Policies;

use App\Models\User;
use App\Models\BaseSetting;
use Illuminate\Auth\Access\HandlesAuthorization;

class BaseSettingPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the baseSetting can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the baseSetting can view the model.
     */
    public function view(User $user, BaseSetting $model): bool
    {
        return true;
    }

    /**
     * Determine whether the baseSetting can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the baseSetting can update the model.
     */
    public function update(User $user, BaseSetting $model): bool
    {
        return true;
    }

    /**
     * Determine whether the baseSetting can delete the model.
     */
    public function delete(User $user, BaseSetting $model): bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the baseSetting can restore the model.
     */
    public function restore(User $user, BaseSetting $model): bool
    {
        return false;
    }

    /**
     * Determine whether the baseSetting can permanently delete the model.
     */
    public function forceDelete(User $user, BaseSetting $model): bool
    {
        return false;
    }
}
