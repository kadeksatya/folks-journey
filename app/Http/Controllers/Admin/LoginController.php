<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    private $users;
    public function __construct(User $user)
    {
        $this->middleware('guest')->except('logout');
        $this->users = $user;
    }

    function index() {
        return view('admin.pages.auth.index', [
            'page_title' => 'Login'
        ]);
    }

    function login(Request $request) {
        try {
            $formdata = $request->only(['email', 'password']);
            $data = $this->users->where('email', $formdata['email'])->first();
            if($data == null){
                return $this->error('Account not registered !');
            }
            if(Auth::attempt($formdata)){
                return $this->success('admin.dashboard.index', 'Login successfully !');
            }

            return $this->error('Email or password incorrect, please try again !');
        } catch (\Throwable $th) {
            return $this->error('Something went wrong'.' - '.$th->getMessage());
        } catch (\Exception $th) {
            return $this->error('Something went wrong' . ' - ' . $th->getMessage());
        }
    }

    function logout()
    {
        try {
            Auth::logout();
            return $this->success('admin.auth.index', 'Logout successfully !');
        } catch (\Throwable $th) {
            return $this->error('Something went wrong' . ' - ' . $th->getMessage());
        } catch (\Exception $th) {
            return $this->error('Something went wrong' . ' - ' . $th->getMessage());
        }
    }
}
