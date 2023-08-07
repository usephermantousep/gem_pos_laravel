<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        /**
         * @param Request $request
         * @return \Illuminate\Http\JsonResponse
         * @throws \Exception
         */
        try {
            $request->validate([
                'username' => 'required',
                'password' => 'required',
            ]);

            $credentials = request(['username', 'password']);
            if (!Auth::attempt($credentials)) {
                return ResponseFormatter::error([
                    'message' => 'Unauthorized'
                ], 'Gagal login, cek kembali username dan password anda', 500);
            }

            $user = User::where('username', $request->username)->first();
            if (!Hash::check($request->password, $user->password, [])) {
                throw new Exception('Invalid Credentials');
            }

            $tokenResult = $user->createToken('authToken')->plainTextToken;
            return ResponseFormatter::success([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user' => $user
            ], 'Selamat datang kembali ' . Auth::user()->nama_lengkap);
        } catch (Exception $error) {
            return ResponseFormatter::error(null, $error->getMessage(), 500);
        }
    }
}
