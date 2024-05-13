<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function view()
    {
        if (Auth::user()->role_id != 1) {
            return false;
        } else {
            return true;
        }
    }
}
