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
            </div>
            @include('include.logout')
        </div>
        <div rel="sticky" data-scroll-top="true" class="adminHeader clearfix">
                <div class="col-sm-6"><h3 class="lead"><a href="{{ url('/dashboard') }}"><span><img src="images/back.png" alt=""></span><span>Home</span></a></h3></div>
                <div class="col-sm-6">
                    <div class="newPro">
                        <a href="{{ url('/add_category') }}">New Category</a>
                    </div>
                </div>
        </div>
    </div>
    @include('include.sidebar')
    <div class="admin odd configuration" style="padding-bottom:15px;">
        <h3 class="title"><span>Asset Category</span></h3>
        <div class="proTable clearfix">
        	<table id="example" class="table table-striped table-bordered table-hover tch" style="width:100%">
                  <thead>
                     <tr>
                        <th style="width: 3% !important">
                        	<div class="demo-checkbox">
                                 <input type="checkbox" id="c1" name="cc" />
								 <label for="c1" class="top"><span></span></label>
                             </div>
                        </th>
                        <th style="width: 9% !important">Category ID</th>
                        <th style="width: 14% !important">Category Description</th>
                        <th style="width: 10% !important">Internal A/C No</th>
                        <th style="width: 10% !important">G/L Fund</th>
                        <th style="width: 10% !important">Category Estimated Life</th>
                        <th style="width: 10% !important">Default Active</th>
                        <th style="width: 12% !important">Default Depreciation MTH</th>
                        <th style="width: 12% !important">FA Replacement %</th>
                        <th style="width: 7% !important">Action</th>
                        </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="sorting_1">
                            <div class="demo-checkbox">
                                 <input type="checkbox" id="c2" name="" />
                                 <label for="c2" class="top"><span></span></label>
                             </div>
                        </td>
                       <!-- Building and Building Improvements -->
                        <td>
                            <div class="supplyOuter">
                                <div class="suppy"><span></span>100</div>
                            </div>
                        </td>
                        <td>
                            <div class="supplyOuter">
                                <div class="suppy"><span>Land, Easements & Right Of Way</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="supplyOuter">
                                <div class="suppy"><span>Lorem Ipsum</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="supplyOuter">
                                <div class="suppy"><span>Lorem Ipsum</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="supplyOuter">
                                <div class="suppy"><span>1</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="supplyOuter">
                                <div class="suppy"><span>N</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="supplyOuter">
                                <div class="suppy"><span>1</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="supplyOuter">
                                <div class="suppy"><span>100</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="supplyOuter">
                                <button type="button" class="btn1 bg-transfer waves-effect"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                <button type="button" class="btn1 bg-transfer waves-effect" style="margin-left:5px;"><i class="fa fa-eye" aria-hidden="true"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="sorting_1">
                            <div class="demo-checkbox">
                                 <input type="checkbox" id="c2" name="" />
                                 <label for="c2" class="top"><span></span></label>
                             </div>
                        </td>

                        <td>
                            <div class="supplyOuter">
                                <div class="suppy"><span>200</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="supplyOuter">
                                <div class="suppy"><span>Land Improvements</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="supplyOuter">
                                <div class="suppy"><span>Lorem Ipsum</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="supplyOuter">
                                <div class="suppy"><span>Lorem Ipsum</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="supplyOuter">
                                <div class="suppy"><span>1</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="supplyOuter">
                                <div class="suppy"><span>N</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="supplyOuter">
                                <div class="suppy"><span>1</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="supplyOuter">
                                <div class="suppy"><span>100</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="supplyOuter">
                                <button type="button" class="btn1 bg-transfer waves-effect"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                <button type="button" class="btn1 bg-transfer waves-effect" style="margin-left:5px;"><i class="fa fa-eye" aria-hidden="true"></i></button>
                            </div>
                        </td>
                    </tr>
                 </tbody>
             </table>
        </div>
    </div>
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
