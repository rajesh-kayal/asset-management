<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>:: Assets Management ::</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="FAVICON.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css">
    <link href="css/dataTables.bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <div class="mainWrapper">
        <div class="header">
            <div class="headerTop clearfix">
            <div class="col-sm-4">
                    <img src="images/logoo.png" alt="">
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
            <form method="post" action="{{ url('AssetClassStore') }}">
                        @csrf
            <div rel="sticky" data-scroll-top="true" class="adminHeader clearfix">
                <div class="col-sm-6">
                    <h3 class="lead">
                        <a href="{{ url('/dashboard') }}"><span><img src="images/back.png" alt=""></span><span>Home</span></a>
                        <a href="class{{ url('/class') }}"><span>/</span><span>Class</span></a>
                    </h3>
                </div>
                <div class="col-sm-6">
                    <div class="newPro">
                        <a href="{{ url('/class') }}" class="cnn">Cancel</a>
                        <button type="submit" class="btn btn-primary w-3 custom-width">Save</button>
                    </div>

                </div>
            </div>
        </div>
        @include('include.sidebar')

        <div class="admin odd configuration" style="padding-bottom:15px;">
            <h3 class="title"><span>New Class</span></h3>
            <div class="proTable">
                <div class="row">
                    <div class="col-sm-6">
                    <div class="proRow">
                            <h2>Class ID</h2>
                            <input type="text" value="{{ $nextClassId }}" name="next_class_id" readonly>
                        </div>
                        <div class="proRow">
                            <h2>Asset Life</h2>
                            <select name="asset_life">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                            </select>
                        </div>

                        
                    </div>
                    <div class="col-sm-6">
                        <div class="proRow">
                            <h2>Class Description</h2>
                                <input type="text" name="class_description" placeholder="class Description">
                            </select>
                        </div>


                        <div class="proRow percentage-input">
                            <h2>Rate of Depreciations (C Act)</h2>
                            <input type="number" step="0.01" name="Rate_of_def_c_act" placeholder="Rate of Depreciation">
                            <span class="percentage-sign">%</span>
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <div class="proRow percentage-input">
                            <h2>Rate of Depreciations (It Act)</h2>
                            <input type="number" step="0.01" name="Rate_of_def_it_act" placeholder="Rate of Depreciation">
                            <span class="percentage-sign">%</span>
                        </div>
                        <style>
                            .percentage-input {
                                position: relative;
                                display: inline-block;
                            }

                            .percentage-sign {
                                position: absolute;
                                right: 30px;
                                top: 78%;
                                transform: translateY(-50%);
                            }
                        </style>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- Jquery Core Js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
