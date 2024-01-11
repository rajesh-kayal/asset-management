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
                </div>
        </div>
    </div>
    @include('include.sidebar')
    <div class="admin odd configuration" style="padding-bottom:15px;">
        <h3 class="title"><span>Report</span></h3>
        <div class="portlet">
            <div class="portlet-body form">
                <div class="row">
                    <div class="col-lg-3 col-lg-offset-2 col-sm-4 col-sm-offset-0">
                    </div>
                    <div class="col-sm-6 sded col-lg-4 serchRow">
    <div class="col-sm-6">
        <div class="proRow">
            <h2>Start Date</h2>
            <input type="date" placeholder="">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="proRow">
            <h2>End Date</h2>
            <input type="date" placeholder="">
        </div><br>
    </div>
    <div class="col-sm-6">
        <div class="proRow">
            <h2>Financial Year</h2>
            <select name="financialYear">
                @php
                    $currentYear = date('Y');
                    for ($i = $currentYear - 10; $i <= $currentYear + 5; $i++) {
                        $startYear = $i;
                        $endYear = $i + 1;
                        $financialYear = "{$startYear}-{$endYear}";
                        echo "<option value='{$financialYear}'>{$financialYear}</option>";
                    }
                @endphp
            </select>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="proRow">
            <h2>Classification</h2>
            <select name="classification">
                <option > Select </option>
                {{-- @foreach($assets as $asset)
            <option value="{{ $asset->asset_description  }}">{{ $asset->asset_description  }}</option>
                                @endforeach --}}
                <!-- Add more options as needed -->
            </select>
        </div><br>
    </div>
    <div class="col-sm-6">
        <div class="proRow">
            <h2>Asset Catalogue</h2>
            <select name="assetCatalogue">
                <option value="" disabled selected>Select an asset category</option>
                <option value="computers">Computers</option>
                <option value="furniture">Furniture</option>
                <option value="vehicles">Vehicles</option>
                <option value="electronics">Electronics</option>
                <!-- Add more options as needed -->
            </select>
        </div>

    </div>
    <div class="col-sm-6">
        <div class="proRow">
            <h2>Asset Type</h2>
            <select name="assetType">
                <option value="tangible">Tangible</option>
                <option value="intangible">Intangible</option>
                <!-- Add more options as needed -->
            </select>
        </div>
    </div>
</div>

                    <div class="col-sm-2">
                        <div class="serchRow">
                            <div class="clinfoclm srrcchh">
                              <input type="submit" name="" value="Search" class="btn1 bg-green waves-effect">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="proTable srrc clearfix">
        	<table id="example" class="table table-striped table-bordered table-hover tch" style="width:100%">
                  <thead>
                    <tr>
                        <th>Asset No.</th>
                        <th>Quantity</th>
                        <th>Asset Description</th>
                        <th>Purchase Date</th>
                        <th>Class</th>
                        <th>Life</th>
                        <th>Original Cost</th>
                        <th>Beginning Depreciation</th>
                        <th>Current year Depreciation</th>
                        <th>Accumulated Depreciation</th>

                        {{-- <th>class id</th>
                        <th>purchase date</th>
                        <th>purchase cost</th>
                        <th>purchase days</th>
                        <th>Company_current_year_depreciation</th>
                        <th>Company_accumulated_depreciation</th>
                        <th>It_current_year_depreciation</th>
                        <th>It_accumulated_depreciation</th> --}}
                    </tr>
                </thead>
                <tbody>

                    @foreach($assets as $report)
                        <tr>
                            <td>{{ $report->Fixed_asset_no }}</td>
                            <td>{{ $report->Quantity }}</td>
                            <td>{{ $report->asset_description }}</td>
                            <td>{{ $report->purchase_date }}</td>
                            <td>{{ $report->Class }}</td>
                            <td>{{ $report->Life }}</td>
                            <td>{{ $report->actuall_depreciation }}</td>
                            <td>{{ $report->Beginning_Depreciation }}</td>
                            <td>{{ $report->Current_year_Depreciation}}</td>
                            <td>{{ $report->Accumulated_Depreciation }}</td>

                            {{-- <td>{{ $report->class_id }}</td>
                            <td>{{ $report->purchase_date }}</td>
                            <td>{{ $report->purchase_cost }}</td>
                            <td>{{ $report->purchase_days }}</td>
                            <td>{{ $report->Company_current_year_depreciation }}</td>
                            <td>{{ $report->Company_accumulated_depreciation }}</td>
                            <td>{{ $report->It_current_year_depreciation }}</td>
                            <td>{{ $report->It_accumulated_depreciation }}</td> --}}
                            {{-- <td>{{ $report->accumulated_depreciation }}</td> --}}
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
