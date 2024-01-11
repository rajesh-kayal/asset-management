<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>:: Assets Management ::</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('FAVICON.png') }}">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="mainWrapper">
        <div class="header">
            <div class="headerTop clearfix">
                <div class="col-sm-4">
                    <img src="{{ asset('images/logoo.png') }}" alt="">
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
                @include('add.include.logout')
            </div>
            <div rel="sticky" data-scroll-top="true" class="adminHeader clearfix">
                <div class="col-sm-6">
                    <h3 class="lead">
                        <a href="{{ url('/dashboard') }}"><span><img src="{{ asset('images/back.png') }}" alt=""></span><span>Home</span></a>
                        <a href="{{ url('/user') }}"><span>/</span><span>User</span></a>
                    </h3>
                </div>
                    <div class="col-sm-6">
                        <div class="newPro">
                            <a href="{{ url('/user') }}" class="cnn">Cancel</a>
                            <button type="submit" class="btn btn-primary w-3 custom-width">Save</button>
                        </div>
                    </div>
            </div>
        </div>
        @include('include.sidebar')
        <div class="admin odd configuration" style="padding-bottom:15px;">
            <h3 class="title"><span>View User</span></h3>
            <div class="proTable">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="proRow">
                            <h2>Name</h2>
                            <input type="text" disabled placeholder="Enter User Name" name="name" value="{{ $user->name }}">
                        </div>

                        <div class="proRow">
                            <h2>Designation</h2>
                            <select name="designation" disabled>
                                <option value="Jr PHP Laravel Developer" @if($user->designation == "Jr PHP Laravel Developer") selected @endif>Jr PHP Laravel Developer</option>
                                <option value="Sr Laravel Developer" @if($user->designation == "Sr Laravel Developer") selected @endif>Sr Laravel Developer</option>
                                <option value="Front End UI / React JS Developer" @if($user->designation == "Front End UI / React JS Developer") selected @endif>Front End UI / React JS Developer</option>
                                <option value="Business Development Executive" @if($user->designation == "Business Development Executive") selected @endif>Business Development Executive</option>
                            </select>
                        </div>

                        <div class="proRow">
                            <h2>Phone</h2>
                            <div class="input-group">
                                <span class="input-group-addon">+91</span>
                                <input type="tel" class="form-control" disabled placeholder="Enter User Number" name="phoneNumber" value="{{ $user->phone_number }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="proRow">
                            <h2>Asset</h2>
                            <input type="text" disabled placeholder="Asset" name="asset" value="{{ $user->asset }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    <!-- Jquery Core Js -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            var winHeight = $(window).height();
            $(".mainWrapper").css("min-height", winHeight);

            var mwHeight = $(".mainWrapper").height() + 10;
            $(".leftPanel").css("height", mwHeight);
        });
        $('[data-toggle="tooltip"]').tooltip();

        $(document).ready(function () {
            $('#example').DataTable();
            $('#example2').DataTable();
            $('#example3').DataTable();
            $('#example4').DataTable();
            $('#example5').DataTable();
            $('#example6').DataTable();
            $('#example7').DataTable();
        });
    </script>
</body>

</html>
