@extends('user-app.app')

@section('content')
    <style>
        /* Login Form Styles */
        .form-group {
            position: relative;
            margin-bottom: 25px;
        }

        .form-group input {
            width: 100%;
            padding: 10px 0;
            font-size: 13px;
            border: none;
            border-bottom: 1px solid #ccc;
            outline: none;
            background-color: transparent;
        }

        .form-group input:focus,
        .form-group input:valid {
            border-color: transparent;
            border-bottom: 2px solid #007bff;
        }

        .form-group label {
            position: absolute;
            top: 10px;
            left: 0;
            pointer-events: none;
            transition: 0.3s;
        }

        .form-group input:focus+label,
        .form-group input:valid+label {
            top: -10px;
            font-size: 14px;
            color: #007bff;
        }

        .or-divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }

        .or-divider hr {
            flex: 1;
            border: none;
            border-top: 1.5px solid #ffffff;
            margin: 0 15px;
            padding-top: 13px;
        }

        .or-divider p {
            color: #ffffff;
            font-weight: bold;
        }

        /* Login Animation */
        @keyframes moveLeft {
            0% { transform: translateX(100%); }
            100% { transform: translateX(0); }
        }

        .move-left {
            animation: moveLeft 1.5s ease-in-out;
        }

        @keyframes moveDown {
            0% { transform: translateY(-100%); }
            100% { transform: translateY(0); }
        }

        .move-down {
            animation: moveDown 1.5s ease-in-out;
        }

        /* Eye Icon Styles */
        .eye-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .eye-icon i {
            cursor: pointer;
        }

        .show-password-icon {
            color: white;
        }
    </style>
    <section class="container pt-5 mt-2">
        <div class="row">
            <div class="col-6 mb-5 pt-5"><img class="img-fluid move-down" src="{{ asset('assets/login.svg') }}"></div>
            <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                <div class="rounded-5 move-left" style="background-color: #141E27; width: 636px; height: 750px;">
                    <p class="text-light text-center" style="font-family: Platypi, serif; font-size: 35px; margin-top: 150px;">Good to see you again!</p>
                    <p class="text-light fw-lighter text-center">Login your account</p>
                    @if(session('register-success'))
                        <div class="alert alert-success" role="alert" style="width: 400px; margin-left: 120px; font-size: 13px;">
                            {{ session('register-success') }}
                        </div>
                    @endif
                    <form role="form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="form-group d-flex justify-content-between">
                                        <input class="text-light" type="email" id="email" name="email" required>
                                        <label class="text-light" for="email">Email</label>
                                        @error('email')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group position-relative">
                                        <input class="text-light" type="password" id="password" name="password" required>
                                        <label class="text-light" for="password">Password</label>
                                        <div class="eye-icon" onclick="togglePasswordVisibility()">
                                            <i class="fas fa-eye show-password-icon"></i>
                                        </div>
                                        @error('password')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                                            <label class="form-check-label text-light" for="exampleCheck1">Remember Me</label>
                                        </div>
                                        <div class="mb-3">
                                            <a href="#" class="text-secondary">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="pt-3">
                                        <button type="submit" class="btn btn-outline-light btn-block" style="width: 400px;">Login</button>
                                    </div>
                                    <div class="or-divider">
                                        <hr>
                                        <p>or</p>
                                        <hr>
                                    </div>
                                    <a href="{{ route('google.login') }}" class="btn btn-outline-light btn-block" style="width: 400px;"><i class="fab fa-google" style="margin-right: 5px;"></i> Login with Google</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('user-app.footer')
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var eyeIcon = document.querySelector(".eye-icon i");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        }
    </script>
@endsection
