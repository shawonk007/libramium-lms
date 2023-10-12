<x-admin-layout>

  <x-slot name="title" >
    {{ __('Manage Admins') }}
  </x-slot>

  <x-slot name="header" >
    <h1 class="h3 mb-3">{{ __('Users & Members') }}</h1>
  </x-slot>

  <section class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="card-title mb-0">{{ __('Manage Administrators') }}</h5>
          <a href="{{ route('admins.create') }}" class="btn btn-primary btn-sm">
            <i class="fas fa-plus"></i>
            <span class="ps-1">{{ __('Add New') }}</span>
          </a>
        </div>
        <div class="card-body">
          <table id="datatables" class="table table-striped">
            <thead>
              <tr>
                <th class="d-none d-xl-table-cell">{{ __('SL') }}</th>
                <th>{{ __('Name of Administrator') }}</th>
                <th class="d-none d-xl-table-cell">{{ __('Username') }}</th>
                <th class="d-none d-xl-table-cell">{{ __('Email Address') }}</th>
                <th class="d-none d-xl-table-cell">{{ __('Date Joined') }}</th>
                <th width="90px">{{ __('Action') }}</th>
              </tr>
            </thead>
            <tbody>
              @foreach ( $admins as $admin )
                <tr>
                  <td class="d-none d-xl-table-cell">{{ $loop->iteration }}</td>
                  <td>
                    <strong>{{ $admin->firstname . " " . $admin->lastname }}</strong>
                  </td>
                  <td class="d-none d-xl-table-cell">{{ $admin->username }}</td>
                  <td class="d-none d-xl-table-cell">{{ $admin->email }}</td>
                  <td class="d-none d-xl-table-cell">{{ $admin->created_at->diffforhumans() }}</td>
                  <td class="d-flex align-items-center">
                    <a href="{{ route('admins.edit', $admin->id) }}" class="btn btn-outline-primary btn-sm">
                      <i class="fas fa-edit"></i>
                    </a>
                    @if ($loop->iteration > 3)
                      <form action="" method="post">
                        <button type="submit" class="btn btn-outline-danger btn-sm ms-1">
                          <i class="fas fa-trash-alt"></i>
                        </button>
                      </form>
                    @endif
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <x-slot name="script" >
  </x-slot>

</x-admin-layout>
