<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


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
            // 'reg_img' => ['required|file|mimes:jpeg,jpg,png|max:5000'],
            'user_id' => ['required', 'string','max:255', 'unique:users'],
            'reg_password' => ['required', 'string', 'min:8', 'confirmed'],
            'reg_fname' => ['required', 'string', 'max:255'],
            'reg_lname' => ['required', 'string','max:255'],
            'reg_sonof' => ['required', 'string','max:255'],
            'reg_grandchild' => ['required', 'string', 'max:255'],
            'reg_education' => ['required', 'string',  'max:255'],
            'reg_address' => ['required', 'string','max:255'],
            'reg_work' => ['required', 'string', 'max:255'],
            'reg_work_address' => ['required', 'string','max:255'],
            'reg_nic' => ['required', 'string', 'max:255',],
            'reg_datebirth' => ['required', 'string', 'max:255',],
            'reg_number' => ['required', 'numeric', 'max:11',],
            'reg_landline' => ['required','numeric','max:12',],
            'reg_wife' => ['required', 'string', 'max:255',],
            'reg_daughter' => ['required', 'string', 'max:255',],
            'reg_grand_daughter' => ['required', 'string', 'max:255',],
            'reg_childerns' => ['required', 'string', 'max:255',],
            'reg_child1_name' => ['required', 'string', 'max:255',],
            'reg_child1_age' => ['required','numeric', 'max:4',],
            'reg_child1_education' => ['required', 'string', 'max:255',],
            'reg_child1_nic' => ['required', 'string', 'max:255',],
            'reg_child1_marital' => ['required', 'string', 'max:255',],
            
            'reg_child2_name' => ['required', 'string', 'max:255',],
            'reg_child2_age' => ['required','numeric', 'max:4',],
            'reg_child2_education' => ['required', 'string', 'max:255',],
            'reg_child2_nic' => ['required', 'string', 'max:255',],
            'reg_child2_marital' => ['required', 'string', 'max:255',],

            'reg_child3_name' => ['required', 'string', 'max:255',],
            'reg_child3_age' => ['required','numeric', 'max:4',],
            'reg_child3_education' => ['required', 'string', 'max:255',],
            'reg_child3_nic' => ['required', 'string', 'max:255',],
            'reg_child3_marital' => ['required', 'string', 'max:255',],

            'reg_child4_name' => ['required', 'string', 'max:255',],
            'reg_child4_age' => ['required','numeric', 'max:4',],
            'reg_child4_education' => ['required', 'string', 'max:255',],
            'reg_child4_nic' => ['required', 'string', 'max:255',],
            'reg_child4_marital' => ['required', 'string', 'max:255',],

            'reg_child5_name' => ['required', 'string', 'max:255',],
            'reg_child5_age' => ['required','numeric', 'max:4',],
            'reg_child5_education' => ['required', 'string', 'max:255',],
            'reg_child5_nic' => ['required', 'string', 'max:255',],
            'reg_child5_marital' => ['required', 'string', 'max:255',],

            'reg_child6_name' => ['required', 'string', 'max:255',],
            'reg_child6_age' => ['required','numeric', 'max:4',],
            'reg_child6_education' => ['required', 'string', 'max:255',],
            'reg_child6_nic' => ['required', 'string', 'max:255',],
            'reg_child6_marital' => ['required', 'string', 'max:255',],

            'reg_child7_name' => ['required', 'string', 'max:255',],
            'reg_child7_age' => ['required','numeric', 'max:4',],
            'reg_child7_education' => ['required', 'string', 'max:255',],
            'reg_child7_nic' => ['required', 'string', 'max:255',],
            'reg_child7_marital' => ['required', 'string', 'max:255',],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $request)
    {
        dd($request);
        return User::create([
            // 'reg_img' => $data['reg_img'],
            'user_id' => $data['user_id'],
            'reg_password' => Hash::make($data['reg_password']),
            'reg_fname' => $data['reg_fname'],
            'reg_lname' => $data['reg_lname'],
            'reg_sonof' => $data['reg_sonof'],
            'reg_grandchild' => $data['reg_grandchild'],
            'reg_education' => $data['reg_education'],
            'reg_address' => $data['reg_address'],
            'reg_work' => $data['reg_work'],
            'reg_work_address' => $data['reg_work_address'],
            'reg_nic' => $data['reg_nic'],
            'reg_datebirth' => $data['reg_datebirth'],
            'reg_number' => $data['reg_number'],
            'reg_landline' => $data['reg_landline'],
            'reg_wife' => $data['reg_wife'],
            'reg_daughter' => $data['reg_daughter'],

            'reg_grand_daughter' => $data['reg_grand_daughter'],
            'reg_childerns' => $data['reg_childerns'],
            'reg_child1_name' => $data['reg_child1_name'],
            'reg_child1_age' => $data['reg_child1_age'],
            'reg_child1_education' => $data['reg_child1_education'],
            'reg_child1_nic' => $data['reg_child1_nic'],
            'reg_child1_marital' => $data['reg_child1_marital'],

            'reg_child2_name' => $data['reg_child2_name'],
            'reg_child2_age' => $data['reg_child2_age'],
            'reg_child2_education' => $data['reg_child2_education'],
            'reg_child2_nic' => $data['reg_child2_nic'],
            'reg_child2_marital' => $data['reg_child2_marital'],

            'reg_child3_name' => $data['reg_child3_name'],
            'reg_child3_age' => $data['reg_child3_age'],
            'reg_child3_education' => $data['reg_child3_education'],
            'reg_child3_nic' => $data['reg_child3_nic'],
            'reg_child3_marital' => $data['reg_child3_marital'],

            'reg_child4_name' => $data['reg_child4_name'],
            'reg_child4_age' => $data['reg_child4_age'],
            'reg_child4_education' => $data['reg_child4_education'],
            'reg_child4_nic' => $data['reg_child4_nic'],
            'reg_child4_marital' => $data['reg_child4_marital'],

            'reg_child5_name' => $data['reg_child5_name'],
            'reg_child5_age' => $data['reg_child5_age'],
            'reg_child5_education' => $data['reg_child5_education'],
            'reg_child5_nic' => $data['reg_child5_nic'],
            'reg_child5_marital' => $data['reg_child5_marital'],

            'reg_child6_name' => $data['reg_child6_name'],
            'reg_child6_age' => $data['reg_child6_age'],
            'reg_child6_education' => $data['reg_child6_education'],
            'reg_child6_nic' => $data['reg_child6_nic'],
            'reg_child6_marital' => $data['reg_child6_marital'],

            'reg_child7_name' => $data['reg_child7_name'],
            'reg_child7_age' => $data['reg_child7_age'],
            'reg_child7_education' => $data['reg_child7_education'],
            'reg_child7_nic' => $data['reg_child7_nic'],
            'reg_child7_marital' => $data['reg_child7_marital'],

        ]);
    }
}
