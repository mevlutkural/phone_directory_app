<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use stdClass;

class AuthController extends Controller
{
    /****LogIn Function*****/
    public function login(Request $req)
    {
        $credentials = $req->only(['email', 'password']);

        $user = User::where('email', $credentials['email'])->first();

        if (!$user) {
            return response('Kullanıcı bulunamadı.', 401);
        }

/*         if (!$user?->is_active) {
            return response('Hesabınız deaktif durumdadır.', 401);
        } */

        if (Auth::attempt($credentials)) {

            $data = new stdClass;
            $data->user = Auth::user();
            $data->token = Auth::user()->createToken(str()->random(60))->plainTextToken;
            $message = "Giriş başarılı";

            $res = [
                'data'    => $data,
                'message' => $message
            ];

            return response()->json($res);
        }

        $errorMessage = 'Girdiğiniz bilgileri kontrol ederek tekrar deneyiniz.';

        return response($errorMessage, 401);
    }

    // LogOut
    public function logOut(Request $req)
    {
        try {
            $req->user()->tokens()->delete();
            return response()->json(['status' => 'true', 'message' => "Çıkış Yapıldı", 'data' => []]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'false', 'message' => $e->getMessage(), 'data' => []], 500);
        }
    }
}
