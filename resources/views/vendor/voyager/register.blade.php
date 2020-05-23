<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../signin/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../signin/css/style.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>

    <div class="main">
        <!-- Sign up form -->
        <section class="sign-up">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Đăng ký</h2>
                        <form action="{{route('register')}}" method="POST" class="register-form" id="register-form">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Họ tên"/>
                            </div>
                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="tel" name="phone" id="phone" placeholder="Số điện thoại" pattern="[0-9].{8,}"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Mật khẩu"/>
                            </div>
                            <div class="form-group">
                                <label for="repassword"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="repassword" id="repassword" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>Tôi đồng ý với <a href="#" class="term-service">Điều khoản</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Đăng ký"/>
                            </div>
                        </form>
                        @if(!$errors->isEmpty())
                            <div class="alert alert-danger">
                                <ul class="list-unstyled">
                                    @foreach($errors->all() as $err)
                                    <li>{{ $err }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>



                    <div class="signup-image">
                        <figure><img src="../signin/images/signup-image.jpg" alt="sign up image"></figure>
                        <a href="{{ route('voyager.login') }}" class="signup-image-link">Dã có tài khoản</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->

    </div>

    <!-- JS -->
    <script src="../signin/vendor/jquery/jquery.min.js"></script>
    <script src="../signin/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>