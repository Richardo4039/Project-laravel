<!DOCTYPE html>
<html>
<head>
    <link href="/css/app.css" rel="stylesheet" type="text/css" >

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('/image/3.png')}}">

    <title>Jual Beli Fauna</title>
</head>
    <body class="my-login-page">
        <section class="h-100">
            <div class="container h-100">
                <div class="row justify-content-md-center h-100">
                    <div class="card-wrapper">
                        <div class="brand">
                            <img src="{{asset('/image/3.png')}}">
                        </div>
                        <div class="card fat">
                            <div class="card-body">
                                <h3 class="card-title">Login</h3>
                                <form method="POST" action="/kirimdata"> {{csrf_field()}}
                                 
                                    <div class="form-group">
                                        <label for="username"><!-- Alamat <i>E-mail</i>/ --><i>Username</i></label>

                                        <input id="username" type="username" class="form-control" name="username" value="" required autofocus placeholder="Username">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Kata Sandi</label>
                                        <input id="password" type="password" class="form-control" name="password" required data-eye placeholder="Password">
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox" name="remember"> Ingat Saya
                                        </label>
                                        <a href="forgot.html" class="float-right">Lupa Kata Sandi?</a>
                                    </div>

                                    <div class="form-group no-margin">
                                        <button type="submit" class="btn btn-success btn-block">
                                            Login
                                        </button>
                                    </div>
                                    <div class="margin-top20 text-center">
                                        Tidak Mempunyai akun?<a href="register.html"> Klik disini</a>
                                    </div><br>
                                </form>
                            </div>
                        </div>
                        <div class="footer">
                            Copyright &copy; JBF 2019
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="bootstrapjs/jquery.min.js"></script>
        <script src="bootstrapjs/login.js"></script>

    </body>
</html>