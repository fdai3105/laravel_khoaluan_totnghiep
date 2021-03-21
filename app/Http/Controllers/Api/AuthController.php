<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Auth;
use Exception;
use Hash;
use Illuminate\Http\JsonResponse;

/**
 * @group  Authenticator
 *
 * APIs of auth
 */
class AuthController extends Controller {
    /**
     * Login
     *
     * @bodyParam
     * @param LoginRequest $request
     * @return JsonResponse
     */
    public function login(LoginRequest $request): JsonResponse {
        $request->validated();

        $find = User::where('email', '=', $request->input('email'))->first();
        if (!$find) {
            return response()->json(['message' => 'This user is not register'], 401);
        }
        try {
            $credentials = request(['email', 'password']);
            if (Auth::attempt($credentials)) {
                $user = $request->user();
                $token = $user->createToken('Personal Access Token');
                $token->token->save();
                return response()->json([
                    'user' => $user,
                    'access_token' => $token->accessToken,
                    'expires_at' => $token->token->expires_at,
                ]);
            } else {
                return response()->json(['message' => 'wrong email or password'], 401);
            }
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 422);
        }

    }

    /**
     * Created a user
     *
     * @param RegisterRequest $request
     * @return JsonResponse
     * @bodyParam  name string name
     * @bodyParam  email string email
     * @bodyParam  password string password
     * @bodyParam  phone string phone
     * @bodyParam  gender int gender of user (0 = not known, 1 = male, 2 = female, 8 = not applicable)
     */
    public function register(RegisterRequest $request): JsonResponse {
        $request->validated();

        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'gender' => $request->gender,
                'level' => 0,
            ]);
            return response()->json(['message' => 'created success']);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 422);
        }
    }
}
