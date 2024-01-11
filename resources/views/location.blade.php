<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>:: Assets Management ::</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="FAVICON.png">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/dataTables.bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="mainWrapper">
        <div class="headerTop clearfix">
            <div class="col-sm-4">
                <img src="{{ asset('images/logoo.png') }}" alt="">
            </div>
            @include('include.logout')
        </div>
        <div class="adminHeader clearfix">
            <div class="col-sm-6">
                <h3 class="lead">
                    <a href="{{ url('/dashboard') }}">
                        <span><img src="{{ asset('images/back.png') }}" alt=""></span><span>Home</span>
                    </a>
                </h3>
            </div>
            <div class="col-sm-6">
                <div class="newPro">
                    <a href="{{ url('/add_location') }}">New Location</a>
                </div>
            </div>
        </div>
        @include('include.sidebar')
        <div class="admin odd configuration" style="padding-bottom:15px;">
            <div class="proTable clearfix">
                <ul class="nav nav-tabs locdep" role="tablist">
                    <li role="presentation" class="active"><a href="#loc" aria-controls="loc" role="tab" data-toggle="tab">Location Code</a></li>
                    {{-- <li role="presentation"><a href="{{ url('/departments') }}">Department Code</a></li> --}}
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="loc">
                        <table id="example" class="table table-striped table-bordered table-hover tch" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="width: 20px;">
                                        <div class="demo-checkbox">
                                            <input type="checkbox" id="c1" name="cc" />
                                            <label for="c1" class="top"><span></span></label>
                                        </div>
                                    </th>
                                    <th style="width: 140px;">Location Code</th>
                                    <th>Location Name</th>
                                    <th style="width: 120px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($locations as $loc)
                                <tr>
                                    <td class="sorting_1">
                                        <div class="demo-checkbox">
                                            <input type="checkbox" id="c2" name="" />
                                            <label for="c2" class="top"><span></span></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="supplyOuter">
                                            <div class="suppy"><span>{{ $loc->code }}</span></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="supplyOuter">
                                            <div class="suppy"><span>{{ $loc->name }}</span></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="supplyOuter">
                                            <button type="button" class="btn1 bg-transfer waves-effect">
                                                <a href="{{ url('/edit-location') }}/{{ $loc->id }}">
                                                    <i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                </a>
                                            <button type="button" class="btn1 bg-transfer waves-effect" style="margin-left:5px;">
                                                <a href="{{ url('/view-location') }}/{{ $loc->id }}">
                                                    <i class="fa fa-eye" aria-hidden="true"></i></button>
                                                </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        });
    </script>
</body>

</html>
