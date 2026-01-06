<?php

namespace App\Policies;

use App\Models\User;
use App\Models\GiveawayProductRequirement;
use Illuminate\Auth\Access\HandlesAuthorization;

class GiveawayProductRequirementPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the giveawayProductRequirement can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the giveawayProductRequirement can view the model.
     */
    public function view(User $user, GiveawayProductRequirement $model): bool
    {
        return true;
    }

    /**
     * Determine whether the giveawayProductRequirement can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the giveawayProductRequirement can update the model.
     */
    public function update(User $user, GiveawayProductRequirement $model): bool
    {
        return true;
    }

    /**
     * Determine whether the giveawayProductRequirement can delete the model.
     */
    public function delete(User $user, GiveawayProductRequirement $model): bool
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
     * Determine whether the giveawayProductRequirement can restore the model.
     */
    public function restore(User $user, GiveawayProductRequirement $model): bool
    {
        return false;
    }

    /**
     * Determine whether the giveawayProductRequirement can permanently delete the model.
     */
    public function forceDelete(
        User $user,
        GiveawayProductRequirement $model
    ): bool {
        return false;
    }
}
