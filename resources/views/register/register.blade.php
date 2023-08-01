@extends('template.layoutAuth')

@section('content')
    <div class="container-fluid pe-md-0" style="overflow: hidden">
        <div class="row g-0">
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row d-flex justify-content-center mb-4">
                            <img src="{{ asset('logo.png') }}" class="img-fluid" alt="" style="height: 100px; width:400px">
                        </div>
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading" style="color: black">Register Here!</h3>

                                <!-- Register Form -->
                                <form action="{{ route('register') }}" method="POST" class="mt-4" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                      <label for="name" class="form-label">Full name</label>
                                      <input name="name" id="name" value="{{ old('name') }}" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="John Doe" required>
                                      @error('name')

                                          <span class="invalid-feedback">{{ $message }}</span>
                                      @enderror
                                    </div>

                                    <label for="dating" class="form-label">Dating Code</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">DT</span>
                                        <input value="{{ old('datingcode') }}" name="datingcode" id="datingcode" type="text" class="form-control @error('datingcode') is-invalid @enderror @if(Session::has('failed')) is-invalid @endif" placeholder="Dating code (3 digits)" required>
                                        @error('datingcode')
                                          <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                        @if (Session::has('failed'))
                                          <span class="invalid-feedback">{{ Session::get('failed') }}</span>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                      <label for="birthday" class="form-label">Birthday</label>
                                      <input name="birthday" value="{{ old('birthday') }}" id="birthday" type="date" class="form-control @error('birthday') is-invalid @enderror" required>
                                        @error('birthday')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select name="gender" id="gender" required class="form-select" aria-label="Default select example">
                                            <option selected disabled>Select your gender</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                            @error('gender')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </select>
                                    </div>


                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input name="email" value="{{ old('email') }}" type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="johndoe@gmail.com" required>
                                        @error('email')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <label for="phonenumber" class="form-label">Phone Number</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">+62</span>
                                        <input value="{{ old('phonenumber') }}" name="phonenumber" id="phonenumber" type="text" class="form-control @error('phonenumber') is-invalid @enderror @if(Session::has('failed')) is-invalid @endif" placeholder="8xxxxxxxx" required>
                                        @error('phonenumber')
                                          <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                        @if (Session::has('failed'))
                                          <span class="invalid-feedback">{{ Session::get('failed') }}</span>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Upload Your Photo</label>
                                        <input value="{{ old('image') }}" class="form-control @error('image') is-invalid @enderror" name="image" type="file" id="formFile" required>
                                        @error('image')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                      <label for="password" class="form-label">Password</label>
                                      <input type="password" placeholder="Create Your Password" value="{{ old('password') }}" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                                        @error('password')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="d-grid register">
                                        <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2"
                                            style="background-color: black;" type="submit">Register Now</button>
                                        <div class="text-center">
                                            <a class="small" style="color: black; text-decoration: none"
                                                href="{{route('login')}}">Already have account? Login here!</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
        </div>
    </div>

    <style>
        .login {
            min-height: 100vh;
        }

        .bg-image {
            background-image: url('https://images.unsplash.com/photo-1561287495-a3fe1fd28504?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1854&q=80');
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

        .register a :hover{
            color: red;
            text-decoration: red;
        }
    </style>
@endsection
