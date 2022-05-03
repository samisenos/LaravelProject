<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
        <div style="direction: rtl">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="https://www.gravatar.com/avatar/52f0fbcbedee04a121cba8dad1174462?s=200&d=mm&r=g" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview {{isActive(['admin.user.index','admin.user.create','admin.user.edit'],'menu-open')}}">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                کاربران
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.user.index')}}" class="nav-link {{isActive(['admin.user.index'],'active')}}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست کاربران</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('admin.user.create')}}" class="nav-link {{isActive(['admin.user.create'],'active')}}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>ایجاد کاربر جدید</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.user.create')}}" class="nav-link {{isActive(['admin.user.edit'],'active')}}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>ویرایش مشخصات</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview  {{isActive(['admin.permission.index','admin.permission.create','admin.role.create','admin.role.index'],'menu-open')}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                مجوزهای دسترسی
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.permission.index')}}" class="nav-link {{isActive(['admin.permission.index'],'active')}}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>تمام مجوزها</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('admin.permission.create')}}" class="nav-link {{isActive(['admin.permission.create'],'active')}}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>ایجاد مجوز جدید</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.role.create')}}" class="nav-link {{isActive(['admin.role.create'],'active')}}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>ایجاد مقام جدید</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.role.index')}}" class="nav-link {{isActive(['admin.role.index'],'active')}}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>تمام مقام ها</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
