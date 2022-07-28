<?php
namespace App\Services;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthService
{
    /**
     * Register a user and attach a role to the account
     *
     * @param array $userData
     * @return User $user
     */
    public function register(array $userData)
    {
        return DB::transaction(function () use ($userData) {
            return tap(
                User::create($userData),
                function (User $user) {
                    $user->role()->attach(2);
                    // fire the registered event
                    event(new Registered($user));
                }
            );
        });
    }

    /**
     * Attampt to login the user
     *
     * @param string $username
     * @param string $password
     * @return void
     */
    public function authenticate(string $email, string $password)
    {
        return Auth::attempt(compact('email', 'password'), true);
    }

    /**
    * Get a JWT via given credentials.
    *
    * @return array
    */
    public function authenticateStateless(string $email, string $password)
    {
        abort_if(! $token = $this->authenticate($email, $password), 400, 'Login credentials do not match our records');

        return $this->respondWithToken($token);
    }

    /**
    * Refresh a token.
    *
    * @return \Illuminate\Http\JsonResponse
    */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return array
     */
    public function respondWithToken($token)
    {
        $user = auth()->user();

        return [
            'user' => $user,
            'role' => $user->role->first()->name,
            'token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ];
    }

    /**
     * Change the user password
     *
     * @param array $password
     * @return User $user
     */
    public function changePassword(array $password)
    {
        $user = auth()->user();

        if (!Hash::check($password['old_password'], $user->password)) {
            abort(400, 'Invalid old password');
        } elseif (Hash::check(request('new_password'), $user->password)) {
            abort(400, 'Please enter a password which is not similar then current password.');
        } else {
            $user->update(['password' => $password['new_password']]);
            return $user;
        }
    }

    public function updateUserDetails(array $userData)
    {
        $user = Auth::user();
        if (!$user->update($userData)) {
            abort(500, 'An error occured, please try again later');
        }
        return $user;
    }

    public function sendResetPasswordEmail($email)
    {
        return Password::sendResetLink(compact('email'));
    }

    public function resetPassword($email, $token, Request $request)
    {
        $resetPasswordFailedStatusMapping = [
            Password::INVALID_USER,
            Password::INVALID_TOKEN
        ];

        if ($request->method() == 'POST') {
            $resetPasswordStatus = Password::reset(
                [
                'email' => $email, 'token' => $token, 'password' => $request->password
            ],
                function ($user, $password) {
                    $user->password = $password;
                    $user->save();
                }
            );

            if (in_array($resetPasswordStatus, $resetPasswordFailedStatusMapping)) {
                return response()->json(['message' => 'Invalid User/Token']);
            }

            return redirect()->route('login')->with('success', 'Password Updated Successfully!');
        }

        return view('auth.resetpassword', compact('email', 'token'));
    }
}
