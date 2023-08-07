<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function fetch()
    {
        try {
            $user = User::where('id', Auth::user()->id)->first();
            return ResponseFormatter::success($user, 'Selamat datang kembali ' . Auth::user()->name);
        } catch (Exception $e) {
            return ResponseFormatter::error(null, 'Gagal');
        }
    }
}
