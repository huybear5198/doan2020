<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../public/signin/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../public/signin/css/style.css">
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Register</h2>
                        <form action="{{route('postreg')}}" method="POST" class="register-form" id="register-form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        <strong>{{session('success')}}</strong>
                                    </div>
                                @endif                  
                            </div>
                            <div class="form-group">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li style="color: red; font-weight: bold; ">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif              
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="repassword"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="repassword" id="repassword" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="6LcF3skUAAAAAOMMTPUXf6TRzCtEJBl83_RGyfFr"></div>
                                @if (session('errors'))
                                    <span class="invalid-feedback" style="display:block">
                                        <strong>{{session('g-recaptcha-response')}}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../public/signin/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="{{route('login')}}" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->

    </div>

    <!-- JS -->
    <script src="../public/signin/vendor/jquery/jquery.min.js"></script>
    <script src="../public/signin/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>