@extends('clients.layouts.layout')

@section('title')
    Đăng Kí
@endsection
@section('content')
    <div class="mb-1 pb-4 mb-xl-5 pb-xl-5"></div>
    <div class="mb-4 pb-4"></div>
    <section class="login-register container">
        <h2 class="text text-center"> Register</h2>
        <div class="mb-1 pb-4 mb-xl-5 pb-xl-5"></div>
        <div class="register-form">
            <form action="{{route('register.store')}}" method="POST" name="register-form" class="needs-validation" >
                @csrf
                <div class="form-floating mb-3">
                    <input name="name" type="text" class="form-control form-control_gray" id="customerNameRegisterInput" placeholder="Username" >
                    <label for="customerNameRegisterInput">Username</label>
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="pb-3"></div>

                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control form-control_gray" id="customerEmailRegisterInput" placeholder="Email address *" >
                    <label for="customerEmailRegisterInput">Email</label>
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="pb-3"></div>

                <div class="form-floating mb-3">
                    <input name="password" type="password" class="form-control form-control_gray" id="customerPasswodRegisterInput" placeholder="Password *" >
                    <label for="customerPasswodRegisterInput">Password </label>
                    @error('password')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input name="password_confirmation" type="password" class="form-control form-control_gray" id="customerPasswodRegisterInput" placeholder="Password *" >
                    <label for="customerPasswodRegisterInput">Nhập lại Password </label>
                </div>
                <div class="mb-1 pb-4 mb-xl-5 pb-xl-5"></div>

                <button class="btn btn-primary w-100 text-uppercase" type="submit">Register</button>
            </form>
        </div>
    </section>
    <div class="mb-1 pb-4 mb-xl-5 pb-xl-5"></div>

@endsection
