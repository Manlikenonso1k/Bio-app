<?php

namespace App\Policies;

use App\Models\Cv;
use App\Models\User;

class CvPolicy
{
    /**
     * Determine whether the user can view any CVs.
     */
    public function viewAny(User $user): bool
    {
        // Allow viewing CVs owned by the user
        return true;
    }

    /**
     * Determine whether the user can view the CV.
     */
    public function view(User $user, Cv $cv): bool
    {
        return $user->id === $cv->user_id;
    }

    /**
     * Determine whether the user can create CVs.
     */
    public function create(User $user): bool
    {
        // Allow all authenticated users to create CVs
        return true;
    }

    /**
     * Determine whether the user can update the CV.
     */
    public function update(User $user, Cv $cv): bool
    {
        return $user->id === $cv->user_id;
    }

    /**
     * Determine whether the user can delete the CV.
     */
    public function delete(User $user, Cv $cv): bool
    {
        return $user->id === $cv->user_id;
    }

    /**
     * Determine whether the user can restore the CV.
     */
    public function restore(User $user, Cv $cv): bool
    {
        return false; // You can adjust this if you implement restore functionality
    }

    /**
     * Determine whether the user can permanently delete the CV.
     */
    public function forceDelete(User $user, Cv $cv): bool
    {
        return false; // Adjust if needed
    }
}
