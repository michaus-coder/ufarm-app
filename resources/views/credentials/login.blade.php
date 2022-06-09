@extends('layouts.nonav')

@section('title')
    Login | U-Farm
@endsection

@section('extra-cdn')
    
@endsection

@section('extra-style')
    <style>

    </style>
@endsection

@section('content')
    <div class="row content-home mt-2">
        
        <div class="col-md-6 col-12 ms-md-5 mt-5 content-left-container">
            <div class="row">
                <div class="col">
                    <div class="title">
                        <h1>Login</h1>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <div class="quote">
                        <p>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi odio a corporis quos voluptas numquam natus ullam ex perferendis sint magnam esse repudiandae, maxime rem cum libero cupiditate illum velit."</p>
                    </div>
                </div>
            </div>
            <form action="/" method="post">
                @csrf
                <div class="row mt-4">
                    <div class="col">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-7">
                        <a href="/signup" >
                            <p class="sign-up-text">
                                Don't have an account? Sign up
                            </p>
                        </a>
                    </div>
                    <div class="col-5">
                        <a href="/forget-password" >
                            <p class="forget-pass">
                                Forgot Password?
                            </p>
                        </a>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <button type="submit" class="btn btn-primary  log-btn">
                            <span> Login </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6 col-0 content-right-container">

        </div>
    </div>
@endsection

@section('js')
    
@endsection