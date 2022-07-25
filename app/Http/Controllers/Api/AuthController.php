<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\LoginResource;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    protected $service;

    public function __construct(AuthService $service)
    {
        $this->service = $service;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request)
    {
        return response()->json([
            'message' => 'User created successfully',
            'data' => new LoginResource($this->service->register($request->validated()))
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return response()->json([
            'message' => 'User fetched successfully',
            'data' => auth()->user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(LoginRequest $request)
    {
        return response()->json([
            'message' => 'Login was successful',
            'data' => $this->service->authenticateStateless($request->email, $request->password)
        ]);
    }

    public function sendForgotPassword(ForgotPasswordRequest $request)
    {
        $resetPasswordStatus = $this->service->sendResetPasswordEmail($request->email);

        if ($resetPasswordStatus == Password::INVALID_USER) {
            return response()->json(["No account found with this email: {$request->email}"]);
        }

        if ($resetPasswordStatus == Password::RESET_THROTTLED) {
            return response()->json(["Please try again after ".config('auth.passwords.users.throttle')." seconds"]);
        }

        if ($resetPasswordStatus == Password::RESET_LINK_SENT) {
            return response()->json(["message" => "Password Reset Email Sent to {$request->email}"]);
        }
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
                return response()->json(['Invalid User/Token']);
            }

            return response()->json(['success' => 'Password Updated Successfully!']);
        }

        return view('auth.resetpassword', compact('email', 'token'));
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        return response()->json([
            'message' => ' password changed successfully',
            'data' => $this->service->changePassword($request->validated())
        ]);
    }
}
