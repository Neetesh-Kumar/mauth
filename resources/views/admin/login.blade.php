@extends('layouts.admin-app')

@section('content')
<div class="container-login100">
			<div class="wrap-login100">
        @if(Session::get('error'))
        <div class="col-md-8">
            <div class="alert alert-danger">{{ Session::get('error') }}</div>    
        </div>        
        @endif
        <form class="login100-form validate-form" method="POST" action="{{ route('admin.auth') }}">
        @csrf
				
                <span class="login100-form-title p-b-43">
                    Admin Login Form
                </span>
                <div class="select-role" >
                    
                        <a class="btn active btn-block bg-info text-white">
                            <div class="icon"><img src="{{asset('Admin/vendors/images/briefcase-svg.png')}}" class="svg" alt=""></div>
                            <span>Login</span>
                            Form
                        </a>
                        
                        <a href="{{ route('login')}}" class="btn btn-block bg-dark text-white">
                            <div class="icon"><img src="{{asset('Admin/vendors/images/person-svg.png')}}" class="svg" alt=""></div>
                            <span>I'm</span>
                            User
                        </a>
                   
                    
                    
                </div>
                
                
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100 form-control-user @error('email') is-invalid @enderror" id="email" type="email" name="email"  required autocomplete="email" autofocus>
                    <span class="focus-input100"></span>
                    <span class="label-input100">Email</span>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message}}</strong>

                    </span>
                    @enderror
                </div>
                
                
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100 form-control-user @error('password') is-invalid @enderror" type="password" name="password" id="password" required autocomplete="passwword">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Password</span>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message}}</strong>

                    </span>
                    @enderror
                </div>

                <div class="flex-sb-m w-full p-t-3 p-b-32">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    
                </div>
        

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" name="login">
                        Login
                    </button>
                </div>
                
                    </form>
                    <div class="login100-more" style="background-image: url('{{asset('images/main-100.jpg')}}');">
				</div>
                </div>
            </div>

@endsection
