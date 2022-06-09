@extends('layouts.nonav')

@section('title')
    Sign Up | U-Farm
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
                        <h1>Sign Up</h1>
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
                            <label for="Text">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <div class="form-group">
                            <label for="date">Birthdate</label>
                            <input type="date" class="form-control" id="date" name="date" placeholder="Birthdate">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
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
                        <a href="/login" >
                            <p class="sign-up-text">
                                Already have an account? Login
                            </p>
                        </a>
                    </div>
                </div>
                
                <div class="row mt-4 mb-5">
                    <div class="col">
                        <button type="submit" class="btn btn-primary  log-btn">
                            <span> Sign Up </span>
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