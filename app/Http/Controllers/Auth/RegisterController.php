<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use Auth;


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

    public function create()
    {
        // $registration = Registration::get('user_id');
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reg_img = $request->reg_img;

        $originalName = $reg_img->getClientOriginalName();

        $reg_img_new_name = 'reg_img-' .time() . '-' . $originalName;
        // we Can use move method
        $reg_img->move( 'Admin/reg_img' , $reg_img_new_name);
        // Create Post
        // Lets use create() method
        // Add path as well it makes it easier during view
        $user = User::create([
            'reg_img' => 'Admin/reg_img/' . $reg_img_new_name,
            // 'user_id' => $request->user_id,
            'user_id' => Helper::IDGenerator(new User,'user_id',5,'DJSB'),
            'reg_password' =>bcrypt($request['reg_password']),
            'reg_fname' => $request->reg_fname,
            'reg_lname' => $request->reg_lname,
            'reg_sonof' => $request->reg_sonof,
            'reg_grandchild' => $request->reg_grandchild,
            'reg_education' => $request->reg_education,
            'reg_address' => $request->reg_address,
            'reg_work' => $request->reg_work,
            'reg_work_address' => $request->reg_work_address,
            'reg_nic' => $request->reg_nic,
            'reg_datebirth' => $request->reg_datebirth,
            'reg_number' => $request->reg_number,
            'reg_landline' => $request->reg_landline,
            'reg_wife' => $request->reg_wife,
            'reg_daughter' => $request->reg_daughter,
            'reg_grand_daughter' => $request->reg_grand_daughter,
            'reg_childerns' => $request->reg_childerns,
            'reg_child1_name' => $request->reg_child1_name,
            'reg_child1_age' => $request->reg_child1_age,
            'reg_child1_education' => $request->reg_child1_education,
            'reg_child1_nic' => $request->reg_child1_nic,
            'reg_child1_marital' => $request->reg_child1_marital,
            'reg_child2_name' => $request->reg_child2_name,
            'reg_child2_age' => $request->reg_child2_age,
            'reg_child2_education' => $request->reg_child2_education,
            'reg_child2_nic' => $request->reg_child2_nic,
            'reg_child2_marital' => $request->reg_child2_marital,
            'reg_child3_name' => $request->reg_child3_name,
            'reg_child3_age' => $request->reg_child3_age,
            'reg_child3_education' => $request->reg_child3_education,
            'reg_child3_nic' => $request->reg_child3_nic,
            'reg_child3_marital' => $request->reg_child3_marital,
            'reg_child4_name' => $request->reg_child4_name,
            'reg_child4_age' => $request->reg_child4_age,
            'reg_child4_education' => $request->reg_child4_education,
            'reg_child4_nic' => $request->reg_child4_nic,
            'reg_child4_marital' => $request->reg_child4_marital,
            'reg_child5_name' => $request->reg_child5_name,
            'reg_child5_age' => $request->reg_child5_age,
            'reg_child5_education' => $request->reg_child5_education,
            'reg_child5_nic' => $request->reg_child5_nic,
            'reg_child5_marital' => $request->reg_child5_marital,
            'reg_child6_name' => $request->reg_child6_name,
            'reg_child6_age' => $request->reg_child6_age,
            'reg_child6_education' => $request->reg_child6_education,
            'reg_child6_nic' => $request->reg_child6_nic,
            'reg_child6_marital' => $request->reg_child6_marital,
            'reg_child7_name' => $request->reg_child7_name,
            'reg_child7_age' => $request->reg_child7_age,
            'reg_child7_education' => $request->reg_child1_name,
            'reg_child7_nic' => $request->reg_child7_nic,
            'reg_child7_marital' => $request->reg_child7_marital,

        ]);
        // Flash message
       
        return redirect('show');
    }
    public function show()
    {
        $user = User::all();
        // dd($user);
        return view('admin.show')->with('user',$user);
    }
    public function info($id)
    {
        $user = User::where('id',$id)->first();
        // dd($registration);
         
        return view('admin.info',['user' => $user]); 
    }
    public function edit1($id)
    {
        $user = User::where('id',$id)->first();
 
        return view('admin.edit1', ['user' => $user]);
    }
    public function update1(Request $request, $id)
    {
        $user = User::where('id',$id)->first();
        $user->update([
            
            'user_id' => request('user_id'),
            // 'reg_password' => request('reg_password'),
            'reg_fname' => request('reg_fname'),
            // 'reg_lname' => request('reg_lname'),
            'reg_sonof' => request('reg_sonof'),
            'reg_grandchild' => request('reg_grandchild'),
            'reg_education' => request('reg_education'),
            'reg_address' => request('reg_address'),
            'reg_work' => request('reg_work'),
            'reg_work_address' => request('reg_work_address'),
            'reg_nic' => request('reg_nic'),
            'reg_datebirth' => request('reg_datebirth'),
            'reg_number' => request('reg_number'),
            'reg_landline' => request('reg_landline'),
            'reg_wife' => request('reg_wife'),
            'reg_daughter' => request('reg_daughter'),
            'reg_grand_daughter' => request('reg_grand_daughter'),
            'reg_childerns' => request('reg_childerns'),
            

            'reg_child1_name' => request('reg_child1_name'),
            'reg_child1_age' => request('reg_child1_age'),
            'reg_child1_education' => request('reg_child1_education'),
            'reg_child1_nic' => request('reg_child1_nic'),
            'reg_child1_marital' => request('reg_child1_marital'),
            'reg_child2_name' => request('reg_child2_name'),
            'reg_child2_age' => request('reg_child2_age'),
            'reg_child2_education' => request('reg_child2_education'),
            'reg_child2_nic' => request('reg_child2_nic'),
            'reg_child2_marital' => request('reg_child2_marital'),
            'reg_child3_name' => request('reg_child3_name'),
            'reg_child3_age' => request('reg_child3_age'),
            'reg_child3_education' => request('reg_child3_education'),
            'reg_child3_nic' => request('reg_child3_nic'),
            'reg_child3_marital' => request('reg_child3_marital'),
            'reg_child4_name' => request('reg_child4_name'),
            'reg_child4_age' => request('reg_child4_age'),
            'reg_child4_education' => request('reg_child4_education'),
            'reg_child4_nic' => request('reg_child4_nic'),
            'reg_child4_marital' => request('reg_child4_marital'),
            'reg_child5_name' => request('reg_child5_name'),
            'reg_child5_age' => request('reg_child5_age'),
            'reg_child5_education' => request('reg_child5_education'),
            'reg_child5_nic' => request('reg_child5_nic'),
            'reg_child5_marital' => request('reg_child5_marital'),
            'reg_child6_name' => request('reg_child6_name'),
            'reg_child6_age' => request('reg_child6_age'),
            'reg_child6_education' => request('reg_child6_education'),
            'reg_child6_nic' => request('reg_child6_nic'),
            'reg_child6_marital' => request('reg_child6_marital'),
            'reg_child7_name' => request('reg_child7_name'),
            'reg_child7_age' => request('reg_child7_age'),
            'reg_child7_education' => request('reg_child1_name'),
            'reg_child7_nic' => request('reg_child7_nic'),
            'reg_child7_marital' => request('reg_child7_marital'),

        ]);


        $user->update($request->all());

        return redirect()->route('show');
    }
    public function profile()
    {
        $admin = Auth::admin();
        return view('admin.profile',['admin'=>$admin]);
    }

    }
