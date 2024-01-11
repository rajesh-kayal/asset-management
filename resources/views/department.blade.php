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
                    <a href="{{ url('/add-department') }}">New Department</a>
                </div>
            </div>
        </div>
        @include('include.sidebar')
        <div class="admin odd configuration" style="padding-bottom:15px;">
            <div class="proTable clearfix">
                <ul class="nav nav-tabs locdep" role="tablist">
                    <li role="presentation" class="active"><a href="#dpt" aria-controls="dpt" role="tab" data-toggle="tab">Department Code</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="dpt">
                        <table id="example2" class="table table-striped table-bordered table-hover tch" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="width: 20px !important;">
                                        <div class="demo-checkbox">
                                            <input type="checkbox" id="c4" name="cc" />
                                            <label for="c4" class="top"><span></span></label>
                                        </div>
                                    </th>
                                    <th style="width: 140px !important;">Program Code</th>
                                    <th style="width: 320px !important;">Program Name</th>
                                    <th style="width: 140px !important;">Department Code</th>
                                    <th style="width: 420px !important;">Department Description</th>
                                    <th style="width: 100px !important;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($departments as $dept)
                                <tr>
                                    <td class="sorting_1">
                                        <div class="demo-checkbox">
                                            <input type="checkbox" id="c5" name="" />
                                            <label for="c5" class="top"><span></span></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="supplyOuter">
                                            <div class="suppy"><span>{{ $dept->program_code }}</span></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="supplyOuter">
                                            <div class="suppy"><span>{{ $dept->program_name }}</span></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="supplyOuter">
                                            <div class="suppy"><span>{{ $dept->department_code }}</span></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="supplyOuter">
                                            <div class="suppy"><span>{{ $dept->department_description }}</span></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="supplyOuter">
                                            <button type="button" class="btn1 bg-transfer waves-effect">
                                                <a href="{{ url('/edit-department') }}/{{ $dept->id }}">
                                                    <i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                </a>
                                            <button type="button" class="btn1 bg-transfer waves-effect" style="margin-left:5px;">
                                                <a href="{{ url('/view-department') }}/{{ $dept->id }}">
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
            $('#example2').DataTable();
        });
    </script>
</body>

</html>
