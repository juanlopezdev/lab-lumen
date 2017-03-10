<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller {

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    
  }

  /**
   * Lista de usuarios
   */
  public function getUsers() {
    $users = User::all();
    return response()->json($users);
  }

  /**
   * Obtener detalle de un usuario por su ID
   * 
   * @param int $user_id Usuario ID
   * @return json
   */
  public function getUser($user_id) {
    $user = User::find($user_id);
    return response()->json($user);
  }

  /**
   * Crear usuario
   * 
   * @param Request $request
   * @return json
   */
  public function createUser(Request $request) {
    $user = User::create($request->all());
    return response()->json($user);
  }

  /**
   * Actualizar usuario
   * 
   * @param Request $request
   * @param int $user_id Usuario ID
   * @return json
   */
  public function updateUser(Request $request, $user_id) {
    $user = User::find($user_id);
    $user->user_name = $request->input('user_name');
    $user->user_lastname = $request->input('user_lastname');
    $user->save();

    return response()->json($user);
  }

}
