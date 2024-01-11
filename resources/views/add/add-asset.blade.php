<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>:: Assets Management ::</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="FAVICON.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
            {{--  --}}
            @include('add.include.logout')
        </div>
        <div rel="sticky" data-scroll-top="true" class="adminHeader clearfix">
            <div class="col-sm-6">
                <h3 class="lead">
                    <a href="{{ url('/dashboard') }}"><span><img src="images/back.png" alt=""></span><span>Home</span></a>
                    <a href="{{ url('/asset') }}"><span>/</span><span>Assets</span></a>
                </h3>
            </div>
            <form action="{{ url('/DepreciationsSave') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-sm-6">
                <div class="newPro">
                <a href="{{ url('/asset') }}" class="cnn">Cancel</a>
                    <button type="submit" class="btn btn-primary w-3 custom-width">Save</button>
                </div>
            </div>
        </div>
    </div>
        @include('include.sidebar')
    <div class="admin odd configuration" style="padding-bottom:15px;">
        <h3 class="title"><span>New Assets</span></h3>
        <div class="proTable">
        <div class="row">

            <div class="col-sm-6">
                <div class="proRow">
                    <h2>Fixed Asset No.</h2>
                    <input type="text" name="Fixed_asset_no" placeholder="Enter Fixed Asset No"  value="{{ $fixedassetid }}" readonly>
                    </div>

                </div>
                <div class="col-sm-6">
                    <div class="proRow">
                        <h2>Asset Classifications</h2>
                            <select name="Class_code">
                            <option>Select</option>
                            @foreach($classIds as $classId)
            <option value="{{ $classId }}">
                {{ $classId }} &nbsp; &nbsp;&nbsp;&nbsp; {{ $classifications[$classId] }}
            </option>
        @endforeach
                            </select>
                        </div>
                    {{-- <div class="proRow">
                        <h2>Fixed Asset ID</h2>
                        <input type="text" name="Fixed_asset_id" placeholder="Enter Fixed Asset ID">
                    </div> --}}
{{--
                    <div class="proRow"> --}}
                    {{-- <h2>Status</h2>
                        {{-- <input type="text" name="status" placeholder="Enter Status"> --}}
                        {{-- <select name="status"> --}}
                            {{-- <option @readonly(true)>Select</option>
                            <option >Active</option>
                            <option >Dactive</option> --}}
                            {{-- <option >Others</option> --}}
                        {{-- </select> --}}
                    {{-- </div> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="proRoww">
                        <h2><b>Asset details:</b></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                <div class="proRow">
                    <h2>Asset Type</h2>
                    <select name="asset_type">
                        <option @readonly(true)>Select</option>
                        <option >Tangible</option>
                        <option >Intangible</option>
                    </select>
                </div>
                    <div class="proRow">
                        <h2>Asset Description</h2>
                            <input type="text" name="asset_description" placeholder="Enter Asset Description">
                    </div>
                    {{-- <div class="proRow">
                        <h2>Asset Models</h2>
                        <input type="text" name="asset_models" placeholder="Enter Asset Models">
                    </div> --}}
                    {{-- <div class="proRow">
                        <h2>Asset Serial No.</h2>
                        <input type="text" name="asset_models" placeholder="Enter Asset Models">
                    </div> --}}
                </div>
                <div class="col-sm-6">
                    <div class="proRow">
                        <h2>Asset Vendor</h2>
                        <select name="asset_vendor">
                            <option >Select</option>
                            @foreach($vendors as $vendor)
            <option value="{{ $vendor }}">{{ $vendor }}</option>
                                @endforeach
                        </select>
                    </div>
                    {{-- <div class="proRow">
                        <h2>Asset Manufacturing</h2>
                            <input type="date" name="asset_manufacturing" placeholder="Enter Asset Manufacturing">
                    </div> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="proRoww">
                        <h2><b>Asset Location:</b></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="proRow">
                        <h2>Location</h2>
                        <select name="location">
                            <option>Select</option>

                            @foreach($Location as $loc)
                        <option value="{{ $loc }}">{{ $loc }}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="proRoww">
                        <h2><b>Asset Calculation:</b></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="proRow">
                        <h2>Quantity</h2>
                        <input type="number" name="quantity" placeholder="Enter Quantity">
                    </div>
                    <div class="proRow">
                        <h2>Purchase Date</h2>
                    <input type="date" name="purchase_date" placeholder="Enter Purchase Date">
                    </div>
                    <div class="proRow">
                        <label for="invoice">Upload Invoice</label>
                        <input type="file" name="invoice" id="invoice" accept=".pdf, .doc, .docx">
                    </div>

                    {{-- <div class="proRow">
                        <h2>Depreciation Beg Date</h2>
                    <input type="date" name="depreciation_beg_date" placeholder="Enter Depreciation Beg Date">
                    </div> --}}
                </div>
                <div class="col-sm-6">
                    {{-- <div class="proRow">
                        <h2>Account Number</h2>
                    <input type="text" name="account_number" placeholder="Enter Account Number">
                    </div> --}}
                    {{-- <div class="proRow">
                        <h2>Life</h2>
                        <select name="life"> --}}
                            {{-- <option>Select</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option> --}}
                            {{-- @foreach($life as $asset_life)
                        <option value="{{ $asset_life }}">{{ $asset_life }}</option>
                                @endforeach --}}
                        {{-- </select>
                    </div> --}}
                    <div class="proRow">
                        <h2>Purchase Cost</h2>
                        <input type="number" step="0.01" name="purchase_cost" placeholder="Enter Purchase Cost">
                    </div>


                    {{-- <script>
                        document.getElementById('yourFormId').addEventListener('submit', function(event) {
                            event.preventDefault(); // Prevent the form from submitting for demonstration purposes

                            // Append percentage sign before submitting the form
                            var rateCAct = document.getElementById('rate_c_act');
                            var rateITAct = document.getElementById('rate_it_act');

                            // Check if the user has manually added the percentage sign
                            if (!rateCAct.value.endsWith('%')) {
                                rateCAct.value += '%';
                            }

                            if (!rateITAct.value.endsWith('%')) {
                                rateITAct.value += '%';
                            }

                            // Now, the form can be submitted with the percentage sign included
                            console.log("Submitting form with rates:", rateCAct.value, rateITAct.value);
                            // You can remove the console.log statement and submit the form using AJAX or any other method.
                        });
                    </script> --}}



                </div>
            </div>
            {{-- <div class="upload">
            <label for="invoice">Upload Invoice</label>
            <input type="file" name="invoice" id="invoice" accept=".pdf, .doc, .docx">

        </div> --}}
        </div>
    </div>
    </form>
</div>
<!-- Jquery Core Js -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
    var winHeight = $(window).height();
    $(".mainWrapper").css("min-height", winHeight);

    var mwHeight = $(".mainWrapper").height() + 10;
    $(".leftPanel").css("height", mwHeight);
  });
  $('[data-toggle="tooltip"]').tooltip();

        $(document).ready(function(){
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
