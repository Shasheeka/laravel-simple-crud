<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * @return User[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        $user = new User();
        return $user::all();
    }

    /**
     * @param Request $request
     * @return User[]|\Illuminate\Database\Eloquent\Collection
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =  $request->password;
        $user->save();

        return $user::all();
    }

    /**
     * @param $userId
     * @return User[]|\Illuminate\Database\Eloquent\Collection
     */
    public function delete($userId)
    {
        $user = new User();
        $user::destroy($userId);

        return $user::all();
    }

}
