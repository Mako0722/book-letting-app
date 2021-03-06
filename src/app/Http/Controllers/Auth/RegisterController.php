<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'min:2', 'max:16', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'profile_image' => ['file','mimes:jpeg,png,jpg,bmb','max:2048'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // $file = $data['profile_image'];
        // dd($file);
        if(!isset($data['profile_image'])) {
            $fileName = 'default.png';
            // $file_path = "/images/profile_image/etc.png";
        } else {
            $file = $data['profile_image'];
            $fileName = time() . '.' . $file->getClientOriginalName();
            $target_path = public_path('/images/profile/');
            $file->move($target_path,$fileName);
        }


        // if($file = $data['profile_image']) {
        //     $fileName = time() . '.' . $file->getClientOriginalName();
        // } else {
        //     $fileName = 'default.png';
        // }

        // $target_path = public_path('/images/profile/');
        // $file->move($target_path,$fileName);

        // dd($fileName);


        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'profile_image' => $fileName,
        ]);
    }
}
