@extends('master.misc')

@section('page-title', 'Register Page')

@section('page-content')
    <section class="my-5">
        <div class="row m-0 justify-content-center">
            <div class="col-xxl-3 col-xl-5 col-lg-7 col-md-10 col-12">
                @error('auth_error')
                <div class="alert alert-danger">
                    {{ $message }} <b><a class="alert-link" href="{{url('/register')}} ">Register Now</a></b>
                </div>
                @enderror
                <form method="post" action="{{ url('/register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputUsername" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="exampleInputUsername">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword2">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="keepPersistant" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Keep me Logged in</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
