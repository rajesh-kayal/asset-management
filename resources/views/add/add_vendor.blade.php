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
            @include('add.include.logout')
        </div>
        <div rel="sticky" data-scroll-top="true" class="adminHeader clearfix">
            <div class="col-sm-6">
                <h3 class="lead">
                    <a href="{{ url('/dashboard') }}"><span><img src="images/back.png" alt=""></span><span>Home</span></a>
                    <a href="{{ url('/vendor') }}"><span>/</span><span>Vendor</span></a>
                </h3>
            </div>
            <form action="{{ url('/save_vendor') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-sm-6">
                <div class="newPro">
                	<a href="{{ url('/vendor') }}" class="cnn">Cancel</a>
                    <button type="submit" class="btn btn-primary w-3 custom-width">Save</button>
                </div>
            </div>
        </div>
    </div>
     @include('include.sidebar')
    <div class="admin odd configuration" style="padding-bottom:15px;">
        <h3 class="title"><span>New Vendor</span></h3>
        <div class="proTable">
        	<div class="row">
            	<div class="col-sm-6">
                	<div class="proRow">
                        <h2>Name</h2>
                        <input type="text" id="vendorName" name="vendor_name" placeholder="Enter Vendor Name">
                    </div>
                    <div class="row phmob">
                        <div class="col-sm-6">
                            <div class="proRow">
                                <h2>Phone</h2>
                                <input type="text" id="vendorPhone" name="phone" placeholder="Enter Phone">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="proRow">
                                <h2>Mobile</h2>
                                <input type="text" id="vendorMobile" name="mobile" placeholder="Enter Mobile">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="proRow">
                        <h2>Primary Contact</h2>
                        <input type="text" id="primaryContact" name="primary_contact" placeholder="Enter Primary Contact">
                    </div>
                    <div class="proRow">
                        <h2>Email</h2>
                        <input type="email" id="vendorEmail" name="email" placeholder="Enter Email">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="proRow">
                        <h2>Description</h2>
                        <textarea id="vendorDescription" name="description" placeholder="Enter Vendor Description"></textarea>
                    </div>
                    <div class="addHead">Address</div>
                </div>
                <div class="col-sm-6">
                    <div class="proRow">
                        <h2>Line 1</h2>
                        <input type="text" id="addressLine1" name="address_line1" placeholder="Enter Address Line 1">
                    </div>
                    <div class="row phmob">
                        <div class="col-sm-6">
                            <div class="proRow">
                                <h2>City</h2>
                                <input type="text" id="addressCity" name="city" placeholder="Enter City">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="proRow">
                                <h2>State</h2>
                                <input type="text" id="addressState" name="state" placeholder="Enter State">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="proRow">
                        <h2>Line2</h2>
                        <input type="text" id="addressLine2" name="address_line2" placeholder="Enter Address Line 2">
                    </div>
                    <div class="row phmob">
                        <div class="col-sm-6">
                            <div class="proRow">
                                <h2>Country</h2>
                                <input type="text" id="addressCountry" name="country" placeholder="Enter Country">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="proRow">
                                <h2>Zip Code</h2>
                                <input type="text" id="addressZipCode" name="zip_code" placeholder="Enter Zip Code">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
