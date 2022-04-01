@extends('base')

@section('Content')
    <h1 style="margin-bottom: -60px"></h1>
    <section class="vh-100 d-flex align-items-center justify-content-center my-auto">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">

                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <h2 class="my-4"><b>Login</b></h2>
                    <form action="/login" method="POST">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form3Example3" name="email" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" />

                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="form3Example4" name="password" class="form-control form-control-lg"
                                placeholder="Enter password" />

                        </div>

                        <div class="d-flex justify-content-between align-items-center">

                            <a href="#!" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register"
                                    class="link-danger">Register</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
