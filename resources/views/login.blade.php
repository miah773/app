<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/logo.png') }}">
    <link href="{{asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>

<body class="h-100" style="background-image: url('assets/img/backg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">s'identifier </h4>
                                    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                                    <i class="fa-solid fa-lock fa-3x" style="color: #13357B; "></i>
                                    </div>
                                    @if(Session()->has('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ Session()->get('error') }}
                                        </div>
                                    @endif

                                    <form action="{{route('login')}}" method="POST">
                                    @csrf    
                                    <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" id="email" name="email" class="form-control"  required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for ="password"><strong>mot de passe </strong></label>
                                            <input id="password" name="password" type="password" class="form-control" required >
                                            
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">se souvenir</label>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block" style="background-color: #13357B; border-color: #564ab1;" >S'identifier</button>
                                        
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('assets/vendor/global.min.js')}}"></script>
    <script src="{{asset('assets/js/quixnav-init.js')}}"></script>
    <script src="{{asset('assets/js/custom.min.js')}}"></script>

</body>

</html>