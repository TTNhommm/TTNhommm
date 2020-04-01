<!-- START PAGE SIDEBAR -->
<div class="page-sidebar">
    <!-- START X-NAVIGATION -->
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="{{route('home-admin')}}">
                
            </a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li class="xn-profile">
            <a href="#" class="profile-mini">
                <img src="{{ url('/') }}/public/admin/assets/images/users/avatar.jpg" alt="John Doe"/>
            </a>
            <div class="profile">
                <div class="profile-image">
                    <img src="{{ url('/') }}/public/admin/assets/images/users/avatar.jpg" alt="John Doe"/>
                </div>
                <div class="profile-data">
                    <div class="profile-data-name">Admin</div>
                    <div class="profile-data-title">Web Developer/Designer</div>
                </div>

            </div>                                                                        
        </li>
        {{-- <li class="xn-title">Navigation</li> --}}
        <li class="active">
            <a href="{{route('home-admin')}}"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
        </li>                    
        {{-- <li class="xn-title">Components</li> --}}
        {{-- <li class="xn-openable">
            <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">UI Kits</span></a>                        
            <ul>
                <li><a href="ui-widgets.html"><span class="fa fa-heart"></span> Widgets</a></li>                            
                <li><a href="ui-elements.html"><span class="fa fa-cogs"></span> Elements</a></li>
                <li><a href="ui-buttons.html"><span class="fa fa-square-o"></span> Buttons</a></li>                            
                <li><a href="ui-panels.html"><span class="fa fa-pencil-square-o"></span> Panels</a></li>
                <li><a href="ui-icons.html"><span class="fa fa-magic"></span> Icons</a><div class="informer informer-warning">+679</div></li>
                <li><a href="ui-typography.html"><span class="fa fa-pencil"></span> Typography</a></li>
                <li><a href="ui-portlet.html"><span class="fa fa-th"></span> Portlet</a></li>
                <li><a href="ui-sliders.html"><span class="fa fa-arrows-h"></span> Sliders</a></li>
                <li><a href="ui-alerts-popups.html"><span class="fa fa-warning"></span> Alerts & Popups</a></li>                            
                <li><a href="ui-lists.html"><span class="fa fa-list-ul"></span> Lists</a></li>
                <li><a href="ui-tour.html"><span class="fa fa-random"></span> Tour</a></li>
                <li><a href="ui-nestable.html"><span class="fa fa-sitemap"></span> Nestable List</a></li>
                <li><a href="ui-autocomplete.html"><span class="fa fa-search-plus"></span> Autocomplete</a></li>
                <li><a href="ui-slide-menu.html"><span class="fa fa-angle-right"></span> Slide Menu</a><div class="informer informer-danger">New!</div></li>
            </ul>
        </li>                     --}}
        <li class="xn-openable">
            <a href="#"><span class="fa fa-table"></span> <span class="xn-text">Danh mục</span></a>
            <ul>                            
                <li><a href="{{route('home-category')}}"><span class="fa fa-align-justify"></span> Danh sách danh mục</a></li>
                <li><a href="{{route('create-category')}}"><span class="fa fa-plus"></span> Thêm danh mục</a></li>
                {{-- <li><a href="table-export.html"><span class="fa fa-download"></span> Export Tables</a></li>                             --}}
            </ul>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-laptop"></span> <span class="xn-text">Sản phẩm</span></a>
            <ul>                            
                <li><a href="{{route('product-home')}}"><span class="fa fa-align-justify"></span> Danh sách sản phẩm</a></li>
                <li><a href="{{route('product-create')}}"><span class="fa fa-plus"></span> Thêm sản phẩm</a></li>
                {{-- <li><a href="table-export.html"><span class="fa fa-download"></span> Export Tables</a></li>                             --}}
            </ul>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-shopping-cart"></span> <span class="xn-text">Đơn hàng</span></a>
            <ul>                            
                <li><a href="{{route('order-notapprove')}}"><span class="fa fa-times"></span> Đơn hàng chưa duyệt</a></li>
                <li><a href="{{route('order-approve')}}"><span class="fa fa-check"></span> Đơn hàng đã duyệt</a></li>
                {{-- <li><a href="table-export.html"><span class="fa fa-download"></span> Export Tables</a></li>                             --}}
            </ul>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Tài khoản</span></a>
            <ul>                            
                <li><a href="{{route('customer-home')}}"><span class="fa fa-users"></span> Khách hàng</a></li>
                <li><a href="{{route('employee-home')}}"><span class="fa fa-user"></span> Nhân viên</a></li>
                {{-- <li><a href="table-export.html"><span class="fa fa-download"></span> Export Tables</a></li>                             --}}
            </ul>
        </li>
        {{-- <li class="xn-openable">
            <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Charts</span></a>
            <ul>
                <li><a href="charts-morris.html">Morris</a></li>
                <li><a href="charts-nvd3.html">NVD3</a></li>
                <li><a href="charts-rickshaw.html">Rickshaw</a></li>
                <li><a href="charts-other.html">Other</a></li>
            </ul>
        </li>                     --}}
        {{-- <li>
            <a href="maps.html"><span class="fa fa-map-marker"></span> <span class="xn-text">Maps</span></a>
        </li>                    
        <li class="xn-openable">
            <a href="#"><span class="fa fa-sitemap"></span> <span class="xn-text">Navigation Levels</span></a>
            <ul>                            
                <li class="xn-openable">
                    <a href="#">Second Level</a>
                    <ul>
                        <li class="xn-openable">
                            <a href="#">Third Level</a>
                            <ul>
                                <li class="xn-openable">
                                    <a href="#">Fourth Level</a>
                                    <ul>
                                        <li><a href="#">Fifth Level</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>                            
            </ul>
        </li>
         --}}
    </ul>
    <!-- END X-NAVIGATION -->
</div>
<!-- END PAGE SIDEBAR -->