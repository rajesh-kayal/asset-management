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
                @include('edit.include.logout')
            </div>
            <div rel="sticky" data-scroll-top="true" class="adminHeader clearfix">
                <div class="col-sm-6">
                    <h3 class="lead">
                        <a href="{{ url('/dashboard') }}"><span><img src="{{ asset('images/back.png') }}" alt=""></span><span>Home</span></a>
                        <a href="{{ url('/vendor') }}"><span>/</span><span>Vendor</span></a>
                    </h3>
                </div>
                <form action="{{ url('/update_vendor') }}" method="post">
                    @csrf
                    <div class="col-sm-6">
                        <div class="newPro">
                            <a href="{{ url('/vendor') }}" class="cnn">Cancel</a>
                            <button type="submit" class="btn btn-primary w-3 custom-width">Save</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
        @include('include.sidebar')
        <div class="admin odd configuration" style="padding-bottom:15px;">
            <h3 class="title"><span>View Vendor</span></h3>
            <form action="{{ url('/update_vendor') }}" method="post">
                @csrf
                <input type="hidden" disabled name="vendor_id" value="{{ $vendor->id }}">
                <div class="proTable">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="proRow">
                                <h2>Name</h2>
                                <input type="text" id="vendorName" disabled name="vendor_name" placeholder="Enter Vendor Name" value="{{ $vendor->vendor_name }}">
                            </div>
                            <div class="row phmob">
                                <div class="col-sm-6">
                                    <div class="proRow">
                                        <h2>Phone</h2>
                                        <input type="text" id="vendorPhone" disabled name="phone" placeholder="Enter Phone" value="{{ $vendor->phone }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="proRow">
                                        <h2>Mobile</h2>
                                        <input type="text" id="vendorMobile" disabled name="mobile" placeholder="Enter Mobile" value="{{ $vendor->mobile }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="proRow">
                                <h2>Primary Contact</h2>
                                <input type="text" id="primaryContact" disabled name="primary_contact" placeholder="Enter Primary Contact" value="{{ $vendor->primary_contact }}">
                            </div>
                            <div class="proRow">
                                <h2>Email</h2>
                                <input type="email" id="vendorEmail" disabled name="email" placeholder="Enter Email" value="{{ $vendor->email }}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="proRow">
                                <h2>Description</h2>
                                <textarea id="vendorDescription" disabled name="description" placeholder="Enter Vendor Description">{{ $vendor->description }}</textarea>
                            </div>
                            <div class="addHead">Address</div>
                        </div>
                        <div class="col-sm-6">
                            <div class="proRow">
                                <h2>Line 1</h2>
                                <input type="text" id="addressLine1" disabled name="address_line1" placeholder="Enter Address Line 1" value="{{ $vendor->address_line1 }}">
                            </div>
                            <div class="row phmob">
                                <div class="col-sm-6">
                                    <div class="proRow">
                                        <h2>City</h2>
                                        <input type="text" id="addressCity" disabled name="city" placeholder="Enter City" value="{{ $vendor->city }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="proRow">
                                        <h2>State</h2>
                                        <input type="text" id="addressState" disabled name="state" placeholder="Enter State" value="{{ $vendor->state }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="proRow">
                                <h2>Line2</h2>
                                <input type="text" id="addressLine2" disabled name="address_line2" placeholder="Enter Address Line 2" value="{{ $vendor->address_line2 }}">
                            </div>
                            <div class="row phmob">
                                <div class="col-sm-6">
                                    <div class="proRow">
                                        <h2>Country</h2>
                                        <input type="text" id="addressCountry" disabled name="country" placeholder="Enter Country" value="{{ $vendor->country }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="proRow">
                                        <h2>Zip Code</h2>
                                        <input type="text" id="addressZipCode" disabled name="zip_code" placeholder="Enter Zip Code" value="{{ $vendor->zip_code }}">
                                    </div>
                                </div>
                            </div>
                        </div>
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
