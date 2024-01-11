<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"  name="viewport">
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
                @include('view.include.logout')
            </div>

            <div rel="sticky" data-scroll-top="true" class="adminHeader clearfix">
                <div class="col-sm-6">
                    <h3 class="lead">
                        <a href="{{ url('/dashboard') }}">
                            <span><img src="{{ asset('images/back.png') }}" alt=""></span>
                            <span>Home</span>
                        </a>
                        <a href="{{ url('/asset') }}">
                            <span>/</span><span>Assets</span>
                        </a>
                    </h3>
                </div>
                <form action="{{ url('/update-asset') }}" method="post" enctype="multipart/form-data">
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
            <h3 class="title"><span>View Assets</span></h3>
            <div class="proTable">
                <div class="row">
                    <div class="col-sm-6">
                        <input type="hidden" name="hid" value="{{ $asset->id }}">
                        <div class="proRow">
                            <h2>Fixed Asset No.</h2>
                            <input type="text" disabled name="Fixed_asset_no" value="{{ $asset->Fixed_asset_no }}" readonly>
                        </div>
                        <div class="proRow">
                            <h2>Class Code</h2>
                            <select disabled name="Class_code">
                                <option @if ($asset->Class_code == '1000') selected @endif>1000</option>
                                <option @if ($asset->Class_code == '1100') selected @endif>1100</option>
                                <option @if ($asset->Class_code == '1200') selected @endif>1200</option>
                                <option @if ($asset->Class_code == '1300') selected @endif>1300</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="proRow">
                            <h2>Fixed Asset ID</h2>
                            <input type="text" disabled name="Fixed_asset_id" value="{{ $asset->Fixed_asset_id }}">
                        </div>
                        <div class="proRow">
                            <h2>Status</h2>
                            <input type="text" disabled name="status" value="{{ $asset->status }}">
                        </div>
                    </div>
                </div>

                <!-- Asset details -->
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
                            <select disabled name="asset_type">
                                <option @if ($asset->asset_type == 'Tangible') selected @endif>Tangible</option>
                                <option @if ($asset->asset_type == 'Intangible') selected @endif>Intangible</option>
                            </select>
                        </div>

                        <div class="proRow">
                            <h2>Asset Description</h2>
                            <input type="text" disabled name="asset_description" value="{{ $asset->asset_description }}">
                        </div>
                        <div class="proRow">
                            <h2>Asset Models</h2>
                            <input type="text" disabled name="asset_models" value="{{ $asset->asset_models }}">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="proRow">
                            <h2>Asset Vendor</h2>
                            <select disabled name="asset_vendor">
                                <option @if ($asset->asset_vendor == 'Select') selected @endif>Select</option>
                                <option @if ($asset->asset_vendor == 'Microsoft Corporation') selected @endif>Microsoft Corporation</option>
                                <option @if ($asset->asset_vendor == 'Dell Technologies') selected @endif>Dell Technologies</option>
                                <option @if ($asset->asset_vendor == 'HP Inc.') selected @endif>HP Inc.</option>
                                <option @if ($asset->asset_vendor == 'Cisco Systems') selected @endif>Cisco Systems</option>
                            </select>
                        </div>

                        <div class="proRow">
                            <h2>Asset Manufacturing</h2>
                            <input type="date" disabled name="asset_manufacturing" value="{{ $asset->asset_manufacturing }}">
                        </div>
                    </div>
                </div>

                <!-- Asset Location -->
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
                            <h2>Department Code</h2>
                            <select disabled name="department_code">
                                <option @if ($asset->department_code == 'Select') selected @endif>Select</option>
                                <option @if ($asset->department_code == '095') selected @endif>095</option>
                                <option @if ($asset->department_code == '096') selected @endif>096</option>
                                <option @if ($asset->department_code == '097') selected @endif>097</option>
                                <option @if ($asset->department_code == '098') selected @endif>098</option>
                                <option @if ($asset->department_code == '099') selected @endif>099</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="proRow">
                            <h2>Location</h2>
                            <select disabled name="location">
                                <option @if ($asset->location == 'Select') selected @endif>Select</option>
                                <option @if ($asset->location == 'Company Headquarters') selected @endif>Company Headquarters</option>
                                <option @if ($asset->location == 'Development Center') selected @endif>Development Center</option>
                                <option @if ($asset->location == 'Datacenter Facility') selected @endif>Datacenter Facility</option>
                                <option @if ($asset->location == 'Branch Office - City A') selected @endif>Branch Office - City A</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Asset Calculation -->
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
                            <h2>Acquisition Date</h2>
                            <input type="date" disabled name="acquisition_date" value="{{ $asset->acquisition_date }}">
                        </div>

                        <div class="proRow">
                            <h2>Original Cost</h2>
                            <input type="text" disabled name="original_cost" value="{{ $asset->original_cost }}">
                        </div>

                        <div class="proRow">
                            <h2>Depreciation Beg Date</h2>
                            <input type="date" disabled name="depreciation_beg_date" value="{{ $asset->depreciation_beg_date }}">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="proRow">
                            <h2>Account Number</h2>
                            <input type="text" disabled name="account_number" value="{{ $asset->account_number }}">
                        </div>

                        <div class="proRow">
                            <h2>Life</h2>
                            <select disabled name="life">
                                <option>Select</option>
                                <option @if ($asset->life == '5 Years') selected @endif>5 Years</option>
                                <option @if ($asset->life == '4 Years') selected @endif>4 Years</option>
                            </select>
                        </div>

                        <div class="proRow">
                            <h2>Replacement value</h2>
                            <input type="text" disabled name="replacement_value" value="{{ $asset->replacement_value }}">
                        </div>

                        <div class="proRow">
                            <h2>Depriciation Amount</h2>
                            <input type="text" disabled name="depreciation_amount" value="{{ $asset->depreciation_amount }}">
                        </div>
                    </div>
                </div>

<div class="upload">
    @if ($asset->invoice)
        <div class="mt-3">
            <p class="mb-1">Current Invoice:</p>
            <a href="{{ asset('/uploads/' . $asset->invoice) }}" download="{{ $asset->invoice }}" target="_blank" class="btn btn-outline-primary btn-sm">
                <i class="fa fa-download"></i> Download Invoice
            </a>
        </div>
    @endif
</div>



            </div>
            </form>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
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
