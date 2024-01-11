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
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

</head>
<body>
<div class="mainWrapper">
    <div class="header">
        <div class="headerTop clearfix">
            <div class="col-sm-4">
                <img src="images/logoo.png" alt="">
            </div>
            <div class="col-sm-8">
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right eform-right">
                        <li class="dropdown eform-dropdown topDrop">
                            <button class="btn btn-primary22 dropdown-toggle btyn ng-binding" type="button" data-toggle="dropdown" style="text-align:left; padding: 0 !important; font-size: 14px; margin-top: 8px; background-color: #fff!important;">
                                Welcome John Doe
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu eform-menu">
                                <li>John Doe</li>
                                <li><span>Admin</span></li>
                                <li class="logout"><a href="{{ url('/logout') }}">Logout</a></li>
                            </ul>
                        </li>
                        <li class="dropdown firstDrop">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <i class="fa fa-bell" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">NOTIFICATIONS</li>
                                <li class="body">
                                    <ul class="menu" style="overflow: hidden;">
                                        <li ng-repeat="as in notification" style="padding:5px 5px;" class="ng-scope">
                                            <a href="javascript:void(0);" style="display: block;">
                                                <div class="icon-circle bg-red" ng-show="as.status=='Rejected'">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </div>
                                                <!-- <div class="icon-circle bg-light-green ng-hide" ng-show="as.status=='Approved'">
                                                    <i class="material-icons">done</i>
                                                </div> -->
                                                <div class="menu-info" style="top: -6px;">
                                                    <h4 class="ng-binding">Vivamus mollis tempor digniss</h4>
                                                </div>
                                            </a>
                                        </li><!-- end ngRepeat: as in notification -->
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <!-- Tasks -->

                        <!-- <li class="dropdown firstDrop scDrop">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><span><i class="fa fa-question-circle" aria-hidden="true"></i></span><span>Help</span></a> -->
    <!-- ng-show="(notification.length>0)? notification.length:''" -->
                            <!-- <ul class="dropdown-menu">
                                <li>
                                    <div class="helpInner">
                                        <div class="helpInnerHeader">
                                            <div><div class="header-left-icons"><span>Clear</span></div></div>
                                            <div>Category Management</div>
                                            <div class="header-right-icons"><i class="fa fa-times" aria-hidden="true"></i></div>
                                        </div>
                                        <div class="conversation-messages">
                                            <h1>17 Aug, 10:46 AM</h1>
                                            <div class="conversation-messages-box">
                                                <span>Namaste. I am Asset Management Assistant.</span>
                                            </div>
                                            <div class="conversation-messages-box">
                                                <span>Type your question in the search box below or click on one of the following frequently viewed topics.</span>
                                            </div>
                                            <div class="conversation-messages-boxx"><span>reconcile</span></div>
                                        </div>
                                        <div class="conversationFooter">
                                            <div class="conversationFooterLeft"><img src="images/bulb.png" alt=""></div>
                                            <div class="conversationFooterRight">
                                                <input type="text" name="" ng-model="message" class="ng-pristine ng-untouched ng-valid ng-empty">
                                                <input type="submit" name="" ng-click="enquiry('eform_system')">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
        <div rel="sticky" data-scroll-top="true" class="adminHeader clearfix">
            <div class="col-sm-6">
                <h3 class="lead">
                    <a href="{{ url('/dashboard') }}"><span><img src="images/back.png" alt=""></span><span>Home</span></a>
                    <a href="{{ url('/category') }}"><span>/</span><span>Category</span></a>
                </h3>
            </div>
            <div class="col-sm-6">
                <div class="newPro">
                	<a href="{{ url('/category') }}" class="cnn">Cancel</a>
                    <a href="#">Save</a>
                </div>
            </div>
        </div>
    </div>
    @include('include.sidebar')
    <div class="admin odd configuration" style="padding-bottom:15px;">
        <h3 class="title"><span>New Category</span></h3>
        <div class="proTable">
        	<div class="row">
            	<div class="col-sm-6">
                    <div class="proRow">
                        <h2>Category ID</h2>
                        <input type="text" placeholder="">
                    </div>
                    <div class="proRow">
                    	<h2>Internal Account Number</h2>
                        <input type="text" placeholder="">
                    </div>
                    <div class="proRow">
                        <h2>Category Estimated Life</h2>
                        <input type="text" placeholder="">
                    </div>
                    <div class="proRow">
                        <h2>Default Depreciation MTH</h2>
                        <input type="text" placeholder="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="proRow">
                        <h2>Category Description</h2>
                        <input type="text" placeholder="">
                    </div>
                    <div class="proRow">
                        <h2>G/L Fund</h2>
                        <input type="text" placeholder="">
                    </div>
                    <div class="proRow">
                        <h2>Depreciation Active</h2>
                        <select>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                    <div class="proRow">
                        <h2>FA Replacement%</h2>
                        <input type="text" placeholder="">
                    </div>
                </div>
            </div>
        </div>
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
