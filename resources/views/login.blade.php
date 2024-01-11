<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>:: Assets Management ::</title>
    <style>
        @import url('https://rsms.me/inter/inter-ui.css');
        ::selection {
            background: #2D2F36;
        }
        ::-webkit-selection {
            background: #2D2F36;
        }
        ::-moz-selection {
            background: #2D2F36;
        }
        body {
            background: white;
            font-family: 'Inter UI', sans-serif;
            margin: 0;
            padding: 20px;
        }
        .page {
            background: #e2e2e5;
            display: flex;
            flex-direction: column;
            height: calc(100% - 40px);
            position: absolute;
            place-content: center;
            width: calc(100% - 40px);
        }
        @media (max-width: 767px) {
            .page {
                height: auto;
                margin-bottom: 20px;
                padding-bottom: 20px;
            }
        }
        .container {
            display: flex;
            height: 320px;
            margin: 0 auto;
            width: 640px;
        }
        @media (max-width: 767px) {
            .container {
                flex-direction: column;
                height: 630px;
                width: 320px;
            }
        }
        .left {
            background: white;
            height: calc(100% - 40px);
            top: 20px;
            position: relative;
            width: 50%;
        }
        @media (max-width: 767px) {
            .left {
                height: 100%;
                left: 20px;
                width: calc(100% - 40px);
                max-height: 270px;
            }
        }
        .login {
            font-size: 50px;
            font-weight: 900;
            margin: 50px 40px 40px;
        }
        .eula {
            color: #999;
            font-size: 14px;
            line-height: 1.5;
            margin: 40px;
            margin-top: 66px;
        }
        .right {
            background: #474A59;
            box-shadow: 0px 0px 40px 16px rgba(0, 0, 0, 0.22);
            color: #F1F1F2;
            position: relative;
            width: 50%;
        }
        @media (max-width: 767px) {
            .right {
                flex-shrink: 0;
                height: 100%;
                width: 100%;
                max-height: 350px;
            }
        }
        svg {
            position: absolute;
            width: 320px;
        }
        path {
            fill: none;
            stroke: url(#linearGradient);
            stroke-width: 4;
            stroke-dasharray: 240 1386;
        }
        .form {
            margin: 40px;
            position: absolute;
        }
        label {
            color: #c2c2c5;
            display: block;
            font-size: 14px;
            height: 16px;
            margin-top: 20px;
            margin-bottom: 5px;
        }
        input {
            background: transparent;
            border: 0;
            color: #f2f2f2;
            font-size: 20px;
            height: 30px;
            line-height: 30px;
            outline: none !important;
            width: 100%;
        }
        input::-moz-focus-inner {
            border: 0;
        }
        #submit {
            color: #707075;
            margin-top: 40px;
            transition: color 300ms;
        }
        #submit:focus {
            color: #f2f2f2;
        }
        #submit:active {
            color: #d0d0d2;
        }
    </style>
</head>
<body>
<div class="page">
    
    <div class="container">
        <div class="left">
            @if ($errors->any())
                    <div class="alert alert-success">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
            {{-- <div class="login"><img src="{{ asset('images/logoo.png') }}" width="80%"></div> --}}
            {{-- <div  style="text-align: center;">:: Assets Management :: </div> --}}
 <div class="eula" style="text-align: left;">
     <img src="{{ asset('images/logoo.png') }}"  alt="Asset Management" style="width: 200px;"><br>
  
  <br>
 <b>:: Assets Management ::</b><br>
  <p>
    Manage your assets effectively to optimize their value and performance.
  </p>
  {{-- <p>By <a href="https://www.ivdisplays.com/">Ivdisplays digital services pvt ltd</a></p> --}}
</div>

        </div>
        <div class="right">
            <svg viewBox="0 0 320 300">
                <defs>
                    <linearGradient
                            id="linearGradient"
                            x1="13"
                            y1="193.49992"
                            x2="307"
                            y2="193.49992"
                            gradientUnits="userSpaceOnUse">
                        <stop
                                style="stop-color:#ff00ff;"
                                offset="0"
                                id="stop876"/>
                        <stop
                                style="stop-color:#ff0000;"
                                offset="1"
                                id="stop878"/>
                    </linearGradient>
                </defs>
                <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143"/>
            </svg>
            <div class="form">
                
                <form method="POST" action="{{ url('/login') }}" autocomplete="off">
                    @if(session()->has('logout'))
                        <div class="alert alert-success">{{ session()->get('logout') }}</div>
                    @endif
                    @csrf
                    <label for="userid">User Id</label>
                    <input id="userid" type="number" class="form-control" name="userid" placeholder="User Id" value="">
                    @if(session()->has('exist'))
                            <div class="alert alert-warning">{{ session()->get('exist') }}</div>
                            @endif
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control demos" name="password" placeholder="Enter your password" value="">
                    @if(session()->has('Incorrect'))
                        <div class="alert alert-warning">{{ session()->get('Incorrect') }}</div>
                    @endif
                    <input type="submit" id="submit" value="LOGIN">
                </form>
            </div>
        </div>
    </div>
    
</div>

<script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1"></script>
<script>
    var current = null;
    document.querySelector('#userid').addEventListener('focus', function (e) {
        if (current) current.pause();
        current = anime({
            targets: 'path',
            strokeDashoffset: {
                value: 0,
                duration: 700,
                easing: 'easeOutQuart'
            },
            strokeDasharray: {
                value: '240 1386',
                duration: 700,
                easing: 'easeOutQuart'
            }
        });
    });
    document.querySelector('#password').addEventListener('focus', function (e) {
        if (current) current.pause();
        current = anime({
            targets: 'path',
            strokeDashoffset: {
                value: -336,
                duration: 700,
                easing: 'easeOutQuart'
            },
            strokeDasharray: {
                value: '240 1386',
                duration: 700,
                easing: 'easeOutQuart'
            }
        });
    });
    document.querySelector('#submit').addEventListener('focus', function (e) {
        if (current) current.pause();
        current = anime({
            targets: 'path',
            strokeDashoffset: {
                value: -730,
                duration: 700,
                easing: 'easeOutQuart'
            },
            strokeDasharray: {
                value: '530 1386',
                duration: 700,
                easing: 'easeOutQuart'
            }
        });
    });
</script>
</body>
</html>


{{-- <!DOCTYPE html>
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

</html> --}}
