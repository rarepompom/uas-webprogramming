@extends('template.layoutAuth')

@section('content')
    <div class="container-fluid ps-md-0" style="overflow: hidden">
        <div class="row g-0">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image">
            </div>

            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row d-flex justify-content-center mb-4">
                            <img src="{{ asset('logo.png') }}" class="img-fluid" alt=""
                                style="height: 150px; width:550px">
                        </div>
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4">Welcome back!</h3>

                                <!-- Sign In Form -->
                                <form action="#" method="POST">

                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email/User id</label>
                                        <input name="email" type="text"
                                            class="form-control @error('email') is-invalid @enderror" id="email"
                                            placeholder="Input your email or user id" required>
                                        @error('email')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" id="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                                        @error('password')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="d-grid register">
                                        <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2"
                                            style="background-color: black;" type="submit">Login</button>
                                        <div class="text-center">
                                            <a class="small" style="color: black; text-decoration: none"
                                                href="{{route('register')}}">Already have account? Login here!</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .login {
            min-height: 100vh;
        }

        .bg-image {
            background-image: url('https://images.unsplash.com/photo-1531747056595-07f6cbbe10ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80');
            background-size: cover;
            background-position: center;
        }

        .login-heading {
            font-weight: 300;
            font-size: 50px;
        }

        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
        }

        .register a :hover {
            color: red;
            text-decoration: red;
        }
    </style>
@endsection
