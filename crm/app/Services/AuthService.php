<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    /**
     * Authenticate the user and generate a token.
     *
     * @param string $email
     * @param string $password
     * @return string|null
     */
    public function authenticate($email, $password)
    {
        $user = User::where('email', $email)->first();

        if ($user && Hash::check($password, $user->password)) {
            return $user->createToken('auth_token')->plainTextToken;
        }

        return null;
    }
}
