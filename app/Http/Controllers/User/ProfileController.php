<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //abort_if(Gate::denies('user_list_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        //abort_if(Gate::denies('user_list_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        //$users = User::;
        //$users = User::with(['roles'])->;
        $users = User::with('roles')->paginate(10);
        if($request->filter_login){
            $users = User::where('login', 'LIKE', '%'.$request->filter_login.'%')->paginate(15);
        }
        if($request->filter_email) {
            $users = User::where('email', 'LIKE', '%'.$request->filter_email.'%')->paginate(15);
        }
        if($request->filter_code) {
            $users = User::where('code', 'LIKE', '%'.$request->filter_code.'%')->paginate(15);
        }
        return view('panel.user.profile', compact('users'));
    }
}
