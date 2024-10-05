<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Validator;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    
  }

  protected function respondWithToken($token)
  {
    return response()->json([
      'access_token' => $token,
      'token_type' => 'bearer',
      'expires_in' => auth('api')->factory()->getTTL() * 60
    ]);
  }

  public function login(Request $request) {
    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash ::check($request->password, $user->password)) {
      return response()->json(['message' => 'Wrong password or email'], 401);
    }

    $token = $user->createToken('token-name')->plainTextToken;

    return response()->json([
        'token' => $token,
        'name' => $user->name,
        'email' => $user->email
      ], 200);
  }

  public function logout(Request $request)
  {
      $request->user()->tokens()->delete();
      return response()->json(['message' => 'Logout exitoso'], 200);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $name = $request->name;
    $password = $request->password;

    $validator = Validator::make(request()->all(), [
      'name' => 'required',
      'email' => 'required|email|unique:usuarios',
      'password' => 'required',
    ]);
    
    if ($validator->fails()) {
      return response()->json($validator->errors(), 401);
    }

    if (isset($name) && isset($password)) {
      $user = new User;
      $user->name = $name;
      $user->email = request()->email;
      $user->password = bcrypt($password);
      
      if ($user->save()) {
        return response()->json(['message' => 'User created successfully'], 200);
      } else {
        return response()->json(['message' => 'User can´t be created'], 500);
      }
    }
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    
  }
}
