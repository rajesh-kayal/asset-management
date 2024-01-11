<div class="col-sm-8">
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right eform-right">
                        <li class="dropdown eform-dropdown topDrop">
                            <button class="btn btn-primary22 dropdown-toggle btyn ng-binding" type="button" data-toggle="dropdown" style="text-align:left; padding: 0 !important; font-size: 14px; margin-top: 8px; background-color: #fff!important;">
                            <sup>Welcome</sup>{{session('USER')}}
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu eform-menu">
                                <li><span>Admin</span></li>
                                <li class="logout"><a href="{{ url('/logout') }}" title="{{session('USER')}}">Logout</a></li>
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
                    </ul>
                </div>
            </div>