<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class Authenticate extends Controller
{
    public function index(){
        return view('login');
       //return view('dashboards.dashboard');
    }
    
    public function signIn(Request $request){
        $request->validate(
            ['email'    => 'required',
            'password'  => 'required',
            ]
        );
        //print_r($request->toArray());
        if(!!$this->validUser($request)){

            return redirect(route('viewpage'));
        }else{
            echo 'error';
        }
    }
    protected function validUser($request){
        return $this->verifyUser($request);
    }
    protected function verifyUser($request){
        $user = User::join('roles','roleId', '=', 'roles.id')
                ->select('users.id as userId','users.username','users.name','users.email','roles.type as roleType','roles.id as roleId','roles.identity as roleIdentity')
                ->where(['users.email' => $request->email, 'users.password' => md5($request->password), 'users.status' => 1])
                ->first();
                !!$user && $this->setSession($user);
                return $user;
       // dd($user);        
    }
    protected function setSession($user){
        return request()->session()->put([
            'user'          => $user->userId,
            'username'      => $user->username,
            'name'          => $user->name,
            'email'         => $user->email,
            'roleId'        => $user->roleId,
            'roleIdentity'  => $user->roleIdentity
        ]);
    }


    public function signOut(){
        request()->session()->flush();
        return redirect(route('viewpage'));
    }
}
