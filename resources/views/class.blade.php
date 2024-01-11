<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>:: Assets Management ::</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="FAVICON.png">

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('css/dataTables.bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
</head>

<body>
    <div class="mainWrapper">
        <div class="header">
            <div class="headerTop clearfix">
                <div class="col-sm-4">
                    <img src="{{asset('images/logoo.png')}}" alt="">
                </div>
                @include('include.logout')
            </div>
            <div rel="sticky" data-scroll-top="true" class="adminHeader clearfix">
                <div class="col-sm-6">
                    <h3 class="lead">
                        <a href="{{ url('/dashboard') }}">
                            <span><img src="{{asset('images/back.png')}}" alt=""></span><span>Home</span>
                        </a>
                    </h3>
                </div>
                <div class="col-sm-6">
                    <div class="newPro">
                        <a href="{{ url('add_class') }}">New Class</a>
                    </div>
                </div>
            </div>
        </div>
        @include('include.sidebar')
        <div class="admin odd configuration" style="padding-bottom:15px;">
            <h3 class="title"><span>Asset Class</span></h3>
            <div class="proTable clearfix">
                <table id="example" class="table table-striped table-bordered table-hover tch" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width: 5% !important;">
                                <div class="demo-checkbox">
                                    <input type="checkbox" id="c1" name="cc" />
                                    <label for="c1" class="top"><span></span></label>
                                </div>
                            </th>
                            <th style="width: 10% !important;">Class ID</th>
                            <th style="width: 15% !important;">Class Description</th>
                            <th style="width: 10% !important;">Asset Life</th>
                            <th style="width: 10% !important;">Rate of Depreciations (C Act)</th>
                            <th style="width: 15% !important;">Rate of Depreciations (It Act)</th>
                            <th style="width: 10% !important;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($classes as $class)
                        <tr>
                            <td class="sorting_1">
                                <div class="demo-checkbox">
                                    <input type="checkbox" id="c2" name="" />
                                    <label for="c2" class="top"><span></span></label>
                                </div>
                            </td>
                            <td>{{ $class->class_id }}</td>
                            <td>{{ $class->class_description }}</td>
                            <td>{{ $class->asset_life }}</td>
                            <td>{{ $class->Rate_of_def_c_act }}</td>
                            <td>{{ $class->Rate_of_def_it_act }}</td>
                            <td>
                                <div class="supplyOuter">
                                    <button type="button" class="btn1 bg-transfer waves-effect">
                                        <a href="{{ url('/edit_class') }}/{{ $class->id }}">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                    </button>
                                    <button type="button" class="btn1 bg-transfer waves-effect" style="margin-left:5px;">
                                        <a href="{{ url('/view_class') }}/{{ $class->id }}">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9">No classes found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
<style>
  /* .custom-pagination-container {
    text-align: right;
    margin-top: -40px;
  } */
</style>


{{-- <div class="text-right custom-pagination-container">
    {{ $classes->links() }}
</div> --}}



        </div>
    </div>
    <!-- Jquery Core Js -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
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
