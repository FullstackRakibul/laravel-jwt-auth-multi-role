<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function auth(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $token = auth()->attempt($credentials);

            $message = $token;
            return view('auth.login')->with('message', $message);

//            return response()->json(['token' => $token]);
        }

            $message = 'Invalid email or pass';

//        return response()->json(['error' => 'Unauthorized'], 401);
        return view('auth.login')->with('message', $message);
    }

    public function register(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            //
            'role' => $request->role,
        ]);


          $token = auth()->attempt(['email' => $request->email, 'password' => $request->password]);

          $context = [
            "token" => $token,
            'user' => $user,
          ];

//        return send_response('registers validate success ',$context);

////        return response()->json(['token' => $token]);
        return view('auth.registration')->with($token);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
