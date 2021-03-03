<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <title> NPS Fácil - Painel Administrativo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="NPS Fácil - Net Promoter Score Software" name="description" />
    <meta content="NPS" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
 
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-login text-center">
                            <div class="bg-login-overlay"></div>
                            <div class="position-relative">
                                <h5 class="text-white font-size-20">Bem vindo(a) ao NPS FÁCIL!</h5>
                                <p class="text-white-50 mb-0">Faça login para continuar.</p>
                                <a class="logo logo-admin mt-4">
                                    <img src="{{asset('assets/images/logo-sm-dark.png')}}" alt="" height="60">
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-5">
                            <div class="p-2">
                                <form method="POST" class="form-horizontal" action="{{ route('login') }}">
                                    @csrf
                             

                                    <div class="form-group">
                                        <label for="username">Email</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="userpassword">Senha</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                   

                                    <div class="mt-3">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">ACESSAR SISTEMA</button>
                                    </div>

                                
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                       
                        <p>© 2021 NPS Fácil. Criado com amor <i class="mdi mdi-heart text-danger"></i> por João P. Andrade</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

    <script src="{{asset('assets/js/app.js')}}"></script>

</body>

</html>