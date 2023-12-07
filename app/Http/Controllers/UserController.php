<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function doLogin(Request $request)
    {
        $userInput = $request->post('user_input');
        $passInput = $request->post('pass_input');

        $user = DB::select("select * from users where email = '$userInput' and password = '$passInput'");

        if (count($user) >= 1) {
            session()->put('user', $user[0]);
        }

        return redirect(route('home'));
    }

    public function checkData(Request $request)
    {
        if ($request->get('logout')) {
            session()->flush();
            return redirect(route('home'));
        }

        if (is_null(session('user'))) {
            return view('login');
        }
        return view('logedin', ['user' => session('user')]);
    }
}
