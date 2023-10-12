<aside id="sidebar" class="sidebar js-sidebar">
  <div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="index.html">
      <span class="sidebar-brand-text align-middle">AdminKit
        <sup><small class="badge bg-primary text-uppercase">Pro</small></sup>
      </span>
      <svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF" style="margin-left: -3px">
        <path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
        <path d="M20 12L12 16L4 12"></path>
        <path d="M20 16L12 20L4 16"></path>
      </svg>
    </a>

    <div class="sidebar-user">
      <div class="d-flex justify-content-center">
        <div class="flex-shrink-0">
          <img src="{{ asset('img/avatars/avatar.jpg') }}" class="avatar img-fluid rounded me-1" alt="Charles Hall" />
        </div>
        <div class="flex-grow-1 ps-2">
          <a class="sidebar-user-title dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown">Charles Hall</a>
          <div class="dropdown-menu dropdown-menu-start">
            <a class="dropdown-item" href="javascript:void(0)">
              <i class="align-middle me-1" data-feather="user"></i> Profile
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
              <i class="align-middle me-1" data-feather="pie-chart"></i> Analytics
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="javascript:void(0)">
              <i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
              <i class="align-middle me-1" data-feather="help-circle"></i> Help Center
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="javascript:void(0)">Log out</a>
          </div>
          <div class="sidebar-user-subtitle">Designer</div>
        </div>
      </div>
    </div>

    <ul class="sidebar-nav">
      <li class="sidebar-header">Pages</li>
      <li class="sidebar-item active">
        <a class="sidebar-link" href="{{ route('admin.dashboard') }}">
          <i class="align-middle" data-feather="sliders"></i>
          <span class="align-middle">Dashboards</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link">
          <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Pages</span>
        </a>
        <ul id="pages" class="sidebar-dropdown list-unstyled collapse show" data-bs-parent="#sidebar">
          <li class="sidebar-item">
            <a class="sidebar-link" href="javascript:void(0)">Settings</a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="javascript:void(0)">Projects
              <span class="sidebar-badge badge bg-primary">Pro</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="javascript:void(0)">Clients
              <span class="sidebar-badge badge bg-primary">Pro</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="javascript:void(0)">Orders
              <span class="sidebar-badge badge bg-primary">Pro</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="javascript:void(0)">Pricing
              <span class="sidebar-badge badge bg-primary">Pro</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="javascript:void(0)">Chat
              <span class="sidebar-badge badge bg-primary">Pro</span>
            </a>
          </li>
          <li class="sidebar-item active">
            <a class="sidebar-link" href="javascript:void(0)">Blank Page</a>
          </li>
        </ul>
      </li>
      <li class="sidebar-item">
        <a data-bs-target="#admins" data-bs-toggle="collapse" class="sidebar-link">
          <i class="align-middle" data-feather="users"></i> <span class="align-middle">{{ ('Administrators') }}</span>
        </a>
        <ul id="admins" class="sidebar-dropdown list-unstyled collapse show" data-bs-parent="#sidebar">
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admins.index') }}">{{ __('Manage Admins') }}</a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admins.create') }}">{{ __('Add New Admin') }}
            </a>
          </li>
        </ul>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('roles.index') }}">
          <i class="align-middle" data-feather="user"></i> <span class="align-middle">{{ ('User Settings') }}</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="pages-profile.html">
          <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
        </a>
      </li>
    </ul>

    {{-- <div class="sidebar-cta">
      <div class="sidebar-cta-content">
        <strong class="d-inline-block mb-2">Weekly Sales Report</strong>
        <div class="mb-3 text-sm">Your weekly sales report is ready for download!</div>
        <div class="d-grid">
          <a href="https://adminkit.io/" class="btn btn-outline-primary" target="_blank">Download</a>
        </div>
      </div>
    </div> --}}
  </div>
</aside>
