<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('adminlte/dist/img/avatar5.png') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ checkRoute('admin::index') ? 'active' : '' }}">
                <a href="{{ route('admin::index') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ checkRoute(['admin::users.index', 'admin::users.create']) ? 'active' : '' }}">
                <a href="{{ route('admin::users.index') }}">
                    <i class="fa fa-user-secret"></i> <span>Users</span>
                </a>
            </li>
            <li class="{{ checkRoute(['admin::lives.index']) ? 'active' : '' }}">
                <a href="{{ route('admin::lives.index') }}">
                    <i class="fa fa-th"></i> <span>Lives</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

