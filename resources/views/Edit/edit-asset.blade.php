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
    <link href="{{ asset('css/dataTables.bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
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
            @include('edit.include.logout')
        </div>
        <div rel="sticky" data-scroll-top="true" class="adminHeader clearfix">
            <div class="col-sm-6">
                <h3 class="lead">
                    <a href="{{ url('/dashboard') }}"><span><img src="images/back.png" alt=""></span><span>Home</span></a>
                    <a href="{{ url('/asset') }}"><span>/</span><span>Assets</span></a>
                </h3>
            </div>
            <form action="{{ url('/save-asset') }}" method="post" enctype="multipart/form-data">
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
        <h3 class="title"><span>Edit Assets</span></h3>
        <div class="proTable">
        <div class="row">

            <div class="col-sm-6">
                <div class="proRow">
                    <h2>Fixed Asset No.</h2>
                    <input type="text" name="Fixed_asset_no" placeholder="Enter Fixed Asset No"  value="{{ $asset->Fixed_asset_no }}" readonly>
                    </div>

                </div>
                <div class="col-sm-6">
                    <div class="proRow">
                        <h2>Asset Classifications</h2>
                        <select name="Class_code" disabled>
                            <option disabled>Select</option>
                            <option selected>{{ $asset->Class_code }}</option>
                        </select>
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
                            <option @if ($asset->asset_type == 'Tangible') selected @endif>Tangible</option>
                            <option @if ($asset->asset_type == 'Intangible') selected @endif>Intangible</option>
                    </select>
                </div>
                    {{-- <div class="proRow">
                        <h2>Asset Description</h2>
                        <input type="text" name="asset_description" value="{{ $asset->asset_description }}">
                    </div> --}}

                </div>
                <div class="col-sm-6">
                    <div class="proRow">
                        <h2>Asset Vendor</h2>
                        <select name="asset_vendor">
                            <option @if ($asset->asset_vendor == 'Select') selected @endif>Select</option>
                            <option @if ($asset->asset_vendor == 'Microsoft Corporation') selected @endif>Microsoft Corporation</option>
                            <option @if ($asset->asset_vendor == 'Dell Technologies') selected @endif>Dell Technologies</option>
                            <option @if ($asset->asset_vendor == 'HP Inc.') selected @endif>HP Inc.</option>
                            <option @if ($asset->asset_vendor == 'Cisco Systems') selected @endif>Cisco Systems</option>
                        </select>
                    </div>
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
                {{-- <div class="col-sm-6">
                    <div class="proRow">
                        <h2>Department Code</h2>
                        <select name="department_code">
                            <option @if ($asset->department_code == 'Select') selected @endif>Select</option>
                            <option @if ($asset->department_code == '095') selected @endif>095</option>
                            <option @if ($asset->department_code == '096') selected @endif>096</option>
                            <option @if ($asset->department_code == '097') selected @endif>097</option>
                            <option @if ($asset->department_code == '098') selected @endif>098</option>
                            <option @if ($asset->department_code == '099') selected @endif>099</option>
                        </select>
                    </div>
                </div> --}}
                <div class="col-sm-6">
                    <div class="proRow">
                        <h2>Location</h2>
                        <select name="location">
                            <option @if ($asset->location == 'Select') selected @endif>Select</option>
                            <option @if ($asset->location == 'In Office') selected @endif>In Office</option>
                            <option @if ($asset->location == 'In Reg Office') selected @endif>In Reg Office</option>
                            <option @if ($asset->location == 'Others') selected @endif>Others</option>
                        </select>
                    </div>
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
                        <input type="text" disabled name="quantity" value="{{ $asset->quantity }}">
                    </div>
                    <div class="proRow">
                        <h2>Purchase Date</h2>
                        <input type="text" disabled name="purchase_date" value="{{ $asset->purchase_date }}">
                    </div>
                    {{-- <div class="proRow">
                        <label for="invoice">Upload Invoice</label>
                        <input type="file" name="invoice" id="invoice" accept=".pdf, .doc, .docx">
                    </div> --}}
                    <div class="proRow">
                        <div class="upload">
                            <label for="invoice">Upload Invoice</label>
                            <input type="file" name="invoice" id="invoice" accept=".pdf, .doc, .docx">

                            @if ($asset->invoice)
                                <div class="mt-2">
                                    <p>Current Invoice: <a href="{{ asset('/uploads/' . $asset->invoice) }}" target="_blank">{{ $asset->invoice }}</a></p>
                                    <script>
                                        // Display the current invoice name in the file input
                                        document.getElementById('invoice').addEventListener('change', function() {
                                            var filename = document.getElementById('invoice').files[0].name;
                                            document.getElementById('invoice').setAttribute('value', filename);
                                        });
                                    </script>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
                <div class="col-sm-6">
                    <div class="proRow">
                        <h2>Purchase Cost</h2>
                        <input type="number" step="0.01" name="purchase_cost" placeholder="Enter Purchase Cost" value="{{ $asset->purchase_cost }}" readonly>
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
