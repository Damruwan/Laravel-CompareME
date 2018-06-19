<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * User login authentication
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
            ]);

        if (\Auth::attempt($request->only(['email', 'password']))) {
            if(\Auth::User()->isAdmin())
                return redirect()->route('items');

            return redirect()->to(action('UserController@index'));    

        } else {
            return redirect()->back()
                ->withErrors(['error' => 'Invalid credentials.'])
                ->withInput($request->except(['password']));
        }
    }

    /**
     * User logout
     * @return [type] [description]
     */
    public function logout()
    {
        \Auth::logout();
        return redirect()->to('/');
    }
}
