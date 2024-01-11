<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>:: Assets Management ::</title>
     <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://jcboeeformsystem.org/images/favicon.png">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap Core Css -->
    <link href="https://jcboeeformsystem.org/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="https://jcboeeformsystem.org/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="https://jcboeeformsystem.org/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="https://jcboeeformsystem.org/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="https://jcboeeformsystem.org/css/style.css" rel="stylesheet">
    <link href="css/sowrav.css" rel="stylesheet">


    <link href="css/style.css" rel="stylesheet" />
 </head>

<body class="">

    <div class="overlay"></div>

        <section>
        <div class="container">
            <div class="row eform">
                    <div class="col-md-12 eform-login eform-temp">

                    <div class="eform-login-form eform-rightd">

                        <form method="POST" action="{{ url('/login') }}" method="POST" autocomplete="Off">
                            @if(session()->has('logout'))
                            <div class="alert alert-success">{{ session()->get('logout') }}</div>
                            @endif
                            @csrf
                        <div class="col-md-12 eform-bottom">
                           <img src="{{ asset('images/logoo.png') }}" width="100% ">
                           @if ($errors->any())
                           <div class="alert alert-warning">
                               <ul>
                                   @foreach ($errors->all() as $error)
                                       <li>{{ $error }}</li>
                                   @endforeach
                               </ul>
                           </div>
                       @endif

                        </div>
                        <div class="col-md-12 eform-ribbon">
                            <div class="icon-eform"><i class="fa fa-lock"></i></div>
                            <div class="secure-eform">HIGH SECURED LOGIN</div>
                        </div>
                        <div class="col-md-12 eform-top">
                            <label class="form-label">User ID</label>
                            <div class="input-group">

                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input id="userid" type="text" class="form-control" name="userid" placeholder="User Name" value="">
                            </div>
                            @if(session()->has('exist'))
                            <div class="alert alert-warning">{{ session()->get('exist') }}</div>
                            @endif
                        </div>
                        <div class="col-md-12 eform-top">
                             <label class="form-label">Password</label>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input id="password" type="password" class="form-control demos" name="password" placeholder="Enter your password" value="">
                                <span onclick="pass()" style="cursor: pointer" id="pass" class="fa fa-eye-slash field-icon"></span>

                            </div>
                            @if(session()->has('Incorrect'))
                            <div class="alert alert-warning">{{ session()->get('Incorrect') }}</div>
                            @endif
                        </div>
                         <div class="col-md-12">
                             <button type="submit" class="btn22 btn-success logggg">LOGIN <i  class="fa fa-arrow-circle-right"  ></i></button>
                        </div>
                        </form>
                        <div class="row eform-heading">
                        </div>

                    </div>

                </div>


            </div>
        </div>
    </section>



</body>

</html>
