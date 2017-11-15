<?php

namespace CesEsport\Http\Controllers\Auth;

use CesEsport\Game;
use CesEsport\User;
use CesEsport\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/';

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
            'name' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \CesEsport\User
     */
    protected function create(array $data)
    {
        $cesi = "0";

        if(isset($data['cesi-member'])){
            if($data['cesi-member'] == "True"){
                $cesi = "1";
            }
        }
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'bio' => 'Entrez votre bio ici',
            'cesmember' => $cesi,
        ]);
        for ($n= 0; $n < 3; $n++){
            $user->jeux()->attach(3);
        }
        for ($l= 0; $l < 3; $l++){
            $user->plateforme()->attach(5);
        }

        return $user;
    }
}
