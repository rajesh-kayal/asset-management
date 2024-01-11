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
                        <a href="{{ url('/add_vendor') }}">New Vendor</a>
                    </div>
                </div>
        </div>
    </div>
     @include('include.sidebar')
    <div class="admin odd configuration" style="padding-bottom:15px;">
        <h3 class="title"><span>Vendor</span></h3>
        <div class="proTable clearfix">
        	<table id="example" class="table table-striped table-bordered table-hover tch" style="width:100%">
                  <thead>
                     <tr>
                        <th style="width: 5% !important;">
                        	<div class="demo-checkbox">
                                <input type="checkbox" id="c1" name="cc" />
								<label for="c1" class="top"><span></span></label>
                            </div>
                        </th>
                        <th style="width: 20% !important;">Name</th>
                        <th style="width: 26% !important;">Email</th>
                        <th style="width: 18% !important;">Phone</th>
                        <th style="width: 18% !important;">Mobile</th>
                        <th style="width: 10% !important;">Action</th>
                    </tr>
                </thead>
                <tbody>
        @foreach($Vendores as $vendor)
                            <tr>
                                <td class="sorting_1">
                                    <div class="demo-checkbox">
                                        <input type="checkbox" id="c{{ $vendor->id }}" name="cc" />
                                        <label for="c{{ $vendor->id }}" class="top"><span></span></label>
                                    </div>
                                </td>
                                <td>{{ $vendor->vendor_name }}</td>
                                <td>{{ $vendor->email }}</td>
                                <td>{{ $vendor->phone }}</td>
                                <td>{{ $vendor->mobile }}</td>
                                <td>
                                    <div class="supplyOuter">
                                        <button type="button" class="btn1 bg-transfer waves-effect">
                                            <a href="{{ url('/edit_vendor') }}/{{ $vendor->id }}">
                                            <i class="fa fa-pencil" aria-hidden="true"></i></a></button>
                                        <button type="button" class="btn1 bg-transfer waves-effect" style="margin-left:5px;">
                                            <a href="{{ url('/view_vendor') }}/{{ $vendor->id }}">
                                            <i class="fa fa-eye" aria-hidden="true"></i></a></button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
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
    $(".mainWrapper").css("height", winHeight);
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
