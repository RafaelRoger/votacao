<html lang="en">

<head>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async=""
        src="https://www.googletagmanager.com/gtag/js?id=G-CHVC6JFEV8&amp;l=dataLayer&amp;cx=c"></script>
    <script id="ga-gtag" type="text/javascript" async=""
        src="https://www.googletagmanager.com/gtag/js?id=UA-38417733-31"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login - Kuhava LDA</title>

    <link rel="stylesheet" id="StyleGenerator" href="{{ url('assets/css/utils.css') }}">

</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-xl px-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <!-- Basic login form-->
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header justify-content-center">
                                    <h3 class="fw-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('login') }}" method="post">
                                        @csrf
                                        @if(session('message'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ __(session('message')) }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                        @endif
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                                            <input class="form-control" name="username" id="inputEmailAddress"
                                                type="email" placeholder="Enter email address">
                                        </div>
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputPassword">Password</label>
                                            <input class="form-control" name="password" id="inputPassword"
                                                type="password" placeholder="Enter password">
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" id="rememberPasswordCheck"
                                                    type="checkbox" value="">
                                                <label class="form-check-label" name="remember"
                                                    for="rememberPasswordCheck">Remember
                                                    password</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="auth-password-basic.html">Forgot Password?</a>
                                            <button class="btn btn-primary">Login</button>
                                        </div>
                                    </form>
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
                        <div class="col-md-6 small">Copyright © kuhava.com 2023</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

</body>

</html>