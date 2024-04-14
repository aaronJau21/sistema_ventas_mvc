<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUsernRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(LoginRequest $request): JsonResponse
    {
        $user = User::where('email', $request->email)->first();

        if (!password_verify($request->password, $user->password)) {
            return response()->json([
                'status' => 404,
                'msg' => 'Credenciales incorrectas'
            ], 404);
        }

        return response()->json([
            'status' => 201,
            'msg' => 'Bienvenido'
        ]);
    }

    public function createUser(CreateUsernRequest $request): JsonResponse
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return response()->json([
            'status' => 200,
            'user' => $user
        ]);
    }

    public function findByEmail(string $email): User
    {
        $user = User::where('email', $email)->first(); // SELECT email FROM 'users' WHERE email = $email

        return $user;
    }

    public function deleteUser(string $id): JsonResponse
    {
        // $user = User::find($id)->delete();
        $user = User::find($id);
        $user->delete();

        return response()->json([
            'status' => 200,
            'msg' => 'Se elimino'
        ]);
    }
}
