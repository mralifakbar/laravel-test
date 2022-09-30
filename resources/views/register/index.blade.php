@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form>
                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name">
                    <label for="name">Name</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                    <label for="username">Username</label>
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@email.com">
                    <label for="email">Email Address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control rounded-bottom" id="password" placeholder="Password" name="password">
                    <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-danger mt-3" type="submit">Register</button>
            </form>

            <small class="d-block text-center mt-3">Already registered? <a href="/login" class="text-decoration-none">Login now!</a></small>
        </main>
    </div>
</div>


@endsection
