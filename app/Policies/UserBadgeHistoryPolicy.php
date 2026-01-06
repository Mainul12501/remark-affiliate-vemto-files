<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UserBadgeHistory;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserBadgeHistoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the userBadgeHistory can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the userBadgeHistory can view the model.
     */
    public function view(User $user, UserBadgeHistory $model): bool
    {
        return true;
    }

    /**
     * Determine whether the userBadgeHistory can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the userBadgeHistory can update the model.
     */
    public function update(User $user, UserBadgeHistory $model): bool
    {
        return true;
    }

    /**
     * Determine whether the userBadgeHistory can delete the model.
     */
    public function delete(User $user, UserBadgeHistory $model): bool
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
     * Determine whether the userBadgeHistory can restore the model.
     */
    public function restore(User $user, UserBadgeHistory $model): bool
    {
        return false;
    }

    /**
     * Determine whether the userBadgeHistory can permanently delete the model.
     */
    public function forceDelete(User $user, UserBadgeHistory $model): bool
    {
        return false;
    }
}
