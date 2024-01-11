<div class="leftPanel">
    <ul>
        <li class="{{ request()->is('dashboard*') ? 'active' : '' }}">
            <a href="{{ url('/dashboard') }}" title="Dashboard" data-toggle="tooltip" data-placement="right">
                <i class="fa fa-tachometer" aria-hidden="true"></i>
            </a>
        </li>
        <li class="{{ request()->is('class*') ? 'active' : '' }}">
            <a href="{{ url('/class') }}" title="Asset Class" data-toggle="tooltip" data-placement="right">
                <img src="{{asset('images/class.png')}}" alt="">
            </a>
        </li>
        <li class="{{ request()->is('asset*') ? 'active' : '' }}">
            <a href="{{ url('/asset') }}" title="Asset Catalog" data-toggle="tooltip" data-placement="right">
                <img src="{{asset('images/product.png')}}" alt="">
            </a>
        </li>
        <li class="{{ request()->is('vendor*') ? 'active' : '' }}">
            <a href="{{ url('/vendor') }}" title="Vendor" data-toggle="tooltip" data-placement="right">
                <img src="{{asset('images/vendor.png')}}" alt="">
            </a>
        </li>
        <li class="{{ request()->is('location*') ? 'active' : '' }}">
            <a href="{{ url('/location') }}" title="Location" data-toggle="tooltip" data-placement="right">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
            </a>
        </li>
        <li class="{{ request()->is('department*') ? 'active' : '' }}">
            <a href="{{ url('/department') }}" title="Departments" data-toggle="tooltip" data-placement="right">
                <i class="fa fa-building" aria-hidden="true"></i>
            </a>
        </li>

        <li class="{{ request()->is('user*') ? 'active' : '' }}">
            <a href="{{ url('/user') }}" title="User Management" data-toggle="tooltip" data-placement="right">
                <i class="fa fa-user" aria-hidden="true" style="font-size: 25px;"></i>
            </a>
        </li>
        <li class="{{ request()->is('report*') ? 'active' : '' }}">
            <a href="{{ url('/report') }}" title="Report" data-toggle="tooltip" data-placement="right">
                <img src="{{asset('images/report.png')}}" alt="">
            </a>
        </li>
    </ul>
</div>
