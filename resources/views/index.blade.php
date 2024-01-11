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
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>
<div class="mainWrapper">
    <div class="header">
        <div class="headerTop clearfix">
            <div class="col-sm-4">
                    <img src="images/logoo.png" alt="">
            </div>
            @include('include.logout')
        </div>
        <div rel="sticky" data-scroll-top="true" class="adminHeader clearfix">
                <div class="col-sm-6"><h3 class="lead">Home</h3></div>
                <div class="col-sm-6">
                    <div class="search">
                        <input type="text" name="" placeholder="Search">
                        <input type="Submit" name="" placeholder="Search">
                    </div>
                </div>
        </div>
    </div>
    @include('include.sidebar')

    <div class="admin odd configuration ">
        <h3 class="title"><span>Asset Management</span></h3>
        <p>Keep track of your assets, vendors and contracts, all in one place</p>
        <ul class="admin_icons">
        	{{-- <li>
                <a href="{{ url('/category') }}">
                    <div class="img-outer"><img src="images/product-category.png" alt=""/></div>
                    <div class="admin-icon-text relationship_types"><span>Asset Category</span></div>
                </a>
            </li> --}}
            <li>
                <a href="{{ url('/class') }}">
                    <div class="img-outer"><img src="images/pro-class.png" alt=""/></div>
                    <div class="admin-icon-text asset_types"><span>Asset Class</span></div>
                </a>
            </li>
            <li>
                <a href="{{ url('/asset') }}">
                    <div class="img-outer"><img src="images/prooduct.png" alt=""/></div>
                    <div class="admin-icon-text product_catalogue"><span>Asset Catalog</span></div>
                </a>
            </li>
            <li>
                <a href="{{ url('/vendor') }}">
                    <div class="img-outer"><img src="images/vendoor.png" alt=""/></div>
                    <div class="admin-icon-text vendors"><span>Vendors</span></div>
                </a>
            </li>
            <li>
                <a href="{{ url('/location') }}">
                    <div class="img-outer"><img src="images/location.png" alt=""/></div>
                    <div class="admin-icon-text locations"><span>Locations</span></div>
                </a>
            </li>
            <li>
                <a href="{{ url('/department') }}">
                    <div class="img-outer"><img src="images/department.png" alt=""/></div>
                    <div class="admin-icon-text locations"><span>Department</span></div>
                </a>
            </li>
            <li>
                <a href="{{ url('/user') }}">
                    <div class="img-outer"><img src="images/user.png" alt=""/></div>
                    <div class="admin-icon-text discovery"><span>User Management</span></div>
                </a>
            </li>
            <li>
                <a href="{{ url('/report') }}">
                    <div class="img-outer"><img src="images/reportt.png" alt=""/></div>
                    <div class="admin-icon-text discovery"><span>Report</span></div>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- Jquery Core Js -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
  $(document).ready(function(){
    var winHeight = $(window).height();
    $(".mainWrapper").css("min-height", winHeight);

    var mwHeight = $(".mainWrapper").height() + 10;
    $(".leftPanel").css("height", mwHeight);
  });
  $('[data-toggle="tooltip"]').tooltip();
</script>
</body>
</html>
