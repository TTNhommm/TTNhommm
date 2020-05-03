<!-- START PAGE SIDEBAR -->
<div class="page-sidebar">
    <!-- START X-NAVIGATION -->
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="{{route('admin.home')}}">
            </a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li class="xn-profile">
            <a href="#" class="profile-mini">
                <img src="admin/assets/images/users/avatar.jpg" alt="John Doe"/>
            </a>
            <div class="profile">
                <div class="profile-image">
                    <img src="admin/assets/images/users/avatar.jpg" alt="John Doe"/>
                </div>
                <div class="profile-data">
                    <div class="profile-data-name">Admin</div>
                    <div class="profile-data-title">Web Developer/Designer</div>
                </div>

            </div>                                                                        
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-table"></span> <span class="xn-text">Nhà cung cấp</span></a>
            <ul>                            
                <li><a href="{{ route('admin.get.list.category')}}"><span class="fa fa-align-justify"></span> Danh sách nhà cung cấp</a></li>
                <li><a href="{{ route('admin.get.create.category')}}"><span class="fa fa-plus"></span> Thêm nhà cung cấp</a></li>
            </ul>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-laptop"></span> <span class="xn-text">Đơn hàng nhập</span></a>
            <ul>                            
                <li><a href="{{ route('admin.get.list.product')}}"><span class="fa fa-align-justify"></span> Danh sách đơn hàng</a></li>
                <li><a href="{{route('admin.get.create.product')}}"><span class="fa fa-plus"></span> Thêm đơn hàng</a></li>
            </ul>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-shopping-cart"></span> <span class="xn-text">Đơn hàng xuất</span></a>
            <ul>                            
                <li><a href="{{ route('admin.get.list.order.not')}}"><span class="fa fa-times"></span> Đơn hàng chưa duyệt</a></li>
                <li><a href="{{ route('admin.get.list.order')}}"><span class="fa fa-check"></span> Đơn hàng đã duyệt</a></li>
            </ul>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Tài khoản</span></a>
            <ul>                            
                <li><a href="#"><span class="fa fa-users"></span> Khách hàng</a></li>
                <li><a href="{{ route('get.home.login')}}"><span class="fa fa-user"></span> Nhân viên</a></li>
            </ul>
        </li>
    </ul>
    <!-- END X-NAVIGATION -->
</div>
<!-- END PAGE SIDEBAR -->