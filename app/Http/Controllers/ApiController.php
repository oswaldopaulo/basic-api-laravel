<?php

namespace App\Http\Controllers;


use App\Http\Requests\UserApiRequest;
use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    static function  getToken()
    {
        return "TOKENTESTE";
    }

    function getUsers(Request $request)
    {

        $querystring = $request->only(['search']);
        $users =  User::select('id','name','email');

        if($request->input('search')) {
            $users->orWhere('name','like','%'.$request->input('search').'%');
            $users->orwhere('email','like','%'.$request->input('search').'%');
        }

        return response()->json($users->paginate(20)->appends($querystring));

    }

    function getUser($id)
    {

        $user=User::find($id);
        $user->addresses= UserAddress::where('user_id',$id)->get();
        return response()->json($user);

    }
    function setUser(UserApiRequest $request)
    {

       $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return response()->json(['user' => $user],201);
    }


}
