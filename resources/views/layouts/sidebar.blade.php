<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link bg-primary">
    <img src="/img/logo.png" alt="Laravel Starter" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">ICE Institute</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route("admin.home") }}" class="nav-link">
            <i class="nav-icon fa fa-th"></i>
            <p>Dashboard</p>
          </a>
        </li>
        @can('user_management_access')
        <li class="nav-item has-treeview {{ request()->is('admin/permissions*') ? 'menu-open' : '' }} {{ request()->is('admin/roles*') ? 'menu-open' : '' }} {{ request()->is('admin/users*') ? 'menu-open' : '' }}">
          <a class="nav-link nav-dropdown-toggle">
            <i class="nav-icon fas fa-users"></i>
            <p>
              <span>{{ trans('global.userManagement.title') }}</span>
              <i class="right fa fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            @can('permission_access')
            <li class="nav-item">
              <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-unlock-alt"></i>
                <p>
                  <span>{{ trans('global.permission.title') }}</span>
                </p>
              </a>
            </li>
            @endcan @can('role_access')
            <li class="nav-item">
              <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-briefcase"></i>
                <p>
                  <span>{{ trans('global.role.title') }}</span>
                </p>
              </a>
            </li>
            @endcan @can('user_access')
            <li class="nav-item">
              <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  <span>{{ trans('global.user.title') }}</span>
                </p>
              </a>
            </li>
            @endcan
          </ul>
        </li>
        @endcan @can('product_access')
        <li class="nav-item">
          <a href="{{ route("admin.products.index") }}" class="nav-link {{ request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-book"></i>
            <p>
              <span>{{ trans('global.product.title') }}</span>
            </p>
          </a>
        </li>
        @endcan
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
