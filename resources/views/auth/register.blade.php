<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin Pro</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="assets/img/faviconuutm.ico" />
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary" background="background8.jpg">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container-xl px-4">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
                                <!-- Social registration form-->
                                <div class="card my-5">
                                    <div class="card-body p-5 text-center">
                                        <div class="h3 fw-light mb-3">Create an Account</div>
                                        <!-- <div class="small text-muted mb-2">Sign in using...</div> -->
                                        <!-- Social registration links-->
                                        <!-- <a class="btn btn-icon btn-facebook mx-1" href="#!"><i class="fab fa-facebook-f fa-fw fa-sm"></i></a>
                                        <a class="btn btn-icon btn-github mx-1" href="#!"><i class="fab fa-github fa-fw fa-sm"></i></a>
                                        <a class="btn btn-icon btn-google mx-1" href="#!"><i class="fab fa-google fa-fw fa-sm"></i></a>
                                        <a class="btn btn-icon btn-twitter mx-1" href="#!"><i class="fab fa-twitter fa-fw fa-sm text-white"></i></a> -->
                                    </div>
                                    <hr class="my-0" />
                                    <div class="card-body p-5">
                                        <!-- <div class="text-center small text-muted mb-4">...or enter your information below.</div> -->
                                        <!-- Login form-->
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf

                                            <!-- Form Group (Name)-->
                                            <div class="mb-3">
                                                <label class="text-gray-600 small" for="name">{{ __('Full Name') }}</label>
                                                <input id="name" type="text" class="form-control form-control-solid @error('name') is-invalid @enderror" aria-label="Full Name" aria-describedby="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <!-- Form Group (Email Address)-->
                                            <div class="mb-3">
                                                <label class="text-gray-600 small" for="email">{{ __('Email Address') }}</label>
                                                <input id="email" type="email" class="form-control form-control-solid @error('email') is-invalid @enderror" aria-label="Email Address" aria-describedby="email" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <!-- Form Row-->
                                            <div class="row gx-3">
                                                <div class="col-md-6">
                                                    <!-- Form Group (choose password)-->
                                                    <div class="mb-3">
                                                        <label class="text-gray-600 small" for="password">{{ __('Password') }}</label>
                                                        <input id="password" type="password" class="form-control form-control-solid @error('password') is-invalid @enderror" aria-label="Password" aria-describedby="password" name="password" required autocomplete="new-password">

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- Form Group (confirm password)-->
                                                    <div class="mb-3">
                                                        <label class="text-gray-600 small" for="password-confirm">{{ __('Confirm Password') }}</label>
                                                        <input id="password-confirm" type="password" class="form-control form-control-solid" aria-label="Confirm Password" aria-describedby="password-confirm" name="password_confirmation" required autocomplete="new-password">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Form Group (form submission)-->
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="checkTerms" type="checkbox" value="" />
                                                    <label class="form-check-label" for="checkTerms">
                                                        I accept the
                                                        <a href="#!">terms &amp; conditions</a>
                                                        .
                                                    </label>
                                                </div>
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Create Account') }}
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <hr class="my-0" />
                                    <div class="card-body px-5 py-4">
                                        <div class="small text-center">
                                            Have an account?
                                            <a href="{{ route('login') }}">{{ __('Sign in!') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="footer-admin mt-auto footer-dark">
                    <div class="container-xl px-4">
                        <div class="row">
                            <div class="col-md-6 small">Copyright © 2023 Universiti Teknologi Malaysia</div>
                            <div class="col-md-6 text-md-end small">
                                <a href="#!">Privacy Policy</a>
                                &middot;
                                <a href="#!">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
