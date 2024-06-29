@extends('user-app.app')

@section('content')
    <style>
        /* Login Animation */
        @keyframes moveLeft {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(0);
            }
        }

        .move-left {
            animation: moveLeft 1.5s ease-in-out;
        }

        @keyframes moveDown {
            0% {
                transform: translateY(-100%);
            }

            100% {
                transform: translateY(0);
            }
        }

        .move-down {
            animation: moveDown 1.5s ease-in-out;
        }

        /* Additional Styles */
        .form-group .icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
        }

        /* form profile */
        .input {
            width: 420px;
            height: 37px;
            background-color: #05060f0a;
            padding: 0 1rem;
            border: 2px solid white;
            font-size: 1rem;
            transition: border-color .3s cubic-bezier(.25, .01, .25, 1) 0s, color .3s cubic-bezier(.25, .01, .25, 1) 0s, background .2s cubic-bezier(.25, .01, .25, 1) 0s;
        }

        .label {
            display: block;
            margin-bottom: .3rem;
            font-size: .9rem;
            font-weight: bold;
            color: #ffffff;
            transition: color .3s cubic-bezier(.25, .01, .25, 1) 0s;
        }

        .input:hover,
        .input:focus,
        .input-group:hover .input {
            outline: none;
            border-color: #ffffff;
        }

        .input-group:hover .label,
        .input:focus {
            color: #ffffff;
        }
    </style>
    <section class="container pt-5 mt-2">
        <div class="row justify-content-center">
            <div class="col-6 mb-5 pt-5"><img class="img-fluid move-down" src="{{ asset('assets/profile.svg') }}"></div>
            <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                <div class="rounded-5 move-left" style="background-color: #141E27; width: 636px; height: 750px;">
                    <p class="text-light text-center"
                        style="font-family: Platypi, serif; font-size: 30px; margin-top: 70px;">This Is Your Profile Page.
                    </p>
                    <p class="text-light fw-lighter text-center">Custom Your Profile.</p>
                    <form action="{{ route('profile.update') }}" method="POST" class="ms-2 mt-4">
                        @csrf
                        <div class="row d-flex justify-content-center">
                            <div class="row input-group d-flex justify-content-center">
                                <label class="label" style="padding-left: 142px;">Username</label>
                                <input autocomplete="off" name="name" class="input text-light" type="text" value="{{ $user->name }}" required>
                            </div>
                            <div class="row input-group d-flex justify-content-center mt-3">
                                <label class="label" style="padding-left: 142px;">Email</label>
                                <input autocomplete="off" name="email" class="input text-light" type="email" value="{{ $user->email }}" required>
                            </div>
                            <div class="row input-group d-flex justify-content-center mt-3">
                                <label class="label" style="padding-left: 142px;">Age</label>
                                <input autocomplete="off" name="age" class="input text-light" type="text" value="{{ $user->age }}" required>
                            </div>
                            <div class="row input-group d-flex justify-content-center mt-3">
                                <label class="label" style="padding-left: 142px;">Phone Number</label>
                                <input autocomplete="off" name="phone_number" id="phone_number" class="input text-light" type="text" value="{{ $user->phone_number }}" required>
                                <div></div>
                            </div>
                            <div class="row input-group d-flex justify-content-center mt-3">
                                <label class="label" style="padding-left: 142px;">Password</label>
                                <input autocomplete="off" name="password" class="input text-light" type="password" required>
                            </div>
                            <div class="row input-group d-flex justify-content-center mt-3">
                                <label class="label" style="padding-left: 142px;">Confirm Password</label>
                                <input autocomplete="off" name="password_confirmation" class="input text-light" type="password" required>
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <button type="submit" class="btn btn-outline-light btn-block" style="width: 300px;">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('user-app.footer')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            animateOnScroll();
        });

        window.addEventListener("scroll", function() {
            animateOnScroll();
        });

        function animateOnScroll() {
            var animatedElements = document.querySelectorAll(".animated-element");
            animatedElements.forEach(function(element) {
                if (isElementInViewport(element)) {
                    element.classList.add("visible");
                } else {
                    element.classList.remove("visible");
                }
            });
        }

        function isElementInViewport(el) {
            var rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        const form = document.querySelector("form");
        form.addEventListener("submit", function(e) {});
    </script>
@endsection
