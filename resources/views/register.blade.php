@extends('master-clean')

@section('title', 'Register')

@section('content')
<div class="position-absolute top-50 start-50 translate-middle text-center">
    <div class="secondary-bg text-white py-4 px-5" style="width: 600px;">
        <h1 class="font-weight-bold mb-4 outlined-text-small" style="font-family: 'Squada One', sans-serif; font-size: 8rem;">Register</h1>
        <div class="d-grid gap-2">
            <div class="mb-2 col-lg-12 mx-auto">
                <label for="exampleFormControlInput1" class="form-label" style="font-family: 'Days One', sans-serif; font-size: 2rem;">Username</label>
                <input type="text" class="form-control bg-form" style="font-family: 'Inter', sans-serif; font-size: 1.5rem;" id="exampleFormControlInput1" placeholder="username">
            </div>
            <div class="mb-2 col-lg-12 mx-auto">
                <label for="exampleFormControlInput2" class="form-label" style="font-family: 'Days One', sans-serif; font-size: 2rem;">Email Address</label>
                <input type="email" class="form-control bg-form" style="font-family: 'Inter', sans-serif; font-size: 1.5rem;" id="exampleFormControlInput2" placeholder="name@example.com">
            </div>
            <div class="mb-5 col-lg-12 mx-auto">
                <label for="exampleFormControlInput3" class="form-label" style="font-family: 'Days One', sans-serif; font-size: 2rem;">Password</label>
                <input type="password" class="form-control bg-form" style="font-family: 'Inter', sans-serif; font-size: 1.5rem;" id="exampleFormControlInput2">
            </div>
            <div class="d-grid gap-4 col-6 mx-auto">
                <a href="#" class="btn btn-primary btn-sm rounded-pill" style="--bs-btn-font-size: 1.5rem;
                font-family: 'Days One', sans-serif;">Register</a>
                <p class="text" style="font-family: 'Inter', sans-serif; font-size: 1.25rem;">Already have an account? Click <a href="login">here to Login</a></p>
            </div>
        </div>
    </div>
</div>
@endsection