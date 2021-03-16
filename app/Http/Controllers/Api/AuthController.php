<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request): JsonResponse {
        try {
            $credentials = request(['email', 'password']);
            if (\Auth::attempt($credentials)) {
                $user = $request->user();
                $token = $user->createToken('Personal Access Token');
                $token->token->save();
                return response()->json([
                    'user' => $user,
                    'access_token' => $token->accessToken,
                    'expires_at' => $token->token->expires_at
                ]);
            } else {
                return response()->json(['message' => 'wrong email or password']);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }

    }

    /**
     * Created a user
     *
     * @param Request $request
     * @bodyParam  name string name
     * @bodyParam  email string email
     * @bodyParam  password string password
     * @bodyParam  phone string phone
     * @bodyParam  gender int gender of user (0 = not known, 1 = male, 2 = female, 8 = not applicable)
     * @return JsonResponse
     */
    public function register(Request $request): JsonResponse {
        //        $request->validated();
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => \Hash::make($request->password),
                'phone' => $request->phone,
                'gender' => $request->gender,
                'level' => 0,
            ]);
            return response()->json(['message' => 'created success']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }
}
