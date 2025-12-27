<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UserBankInfo;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserBankInfoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the userBankInfo can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the userBankInfo can view the model.
     */
    public function view(User $user, UserBankInfo $model): bool
    {
        return true;
    }

    /**
     * Determine whether the userBankInfo can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the userBankInfo can update the model.
     */
    public function update(User $user, UserBankInfo $model): bool
    {
        return true;
    }

    /**
     * Determine whether the userBankInfo can delete the model.
     */
    public function delete(User $user, UserBankInfo $model): bool
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
     * Determine whether the userBankInfo can restore the model.
     */
    public function restore(User $user, UserBankInfo $model): bool
    {
        return false;
    }

    /**
     * Determine whether the userBankInfo can permanently delete the model.
     */
    public function forceDelete(User $user, UserBankInfo $model): bool
    {
        return false;
    }
}
