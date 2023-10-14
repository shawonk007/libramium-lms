<x-admin-layout>

  <x-slot name="title" >
    {{ __('Manage Languages') }}
  </x-slot>

  <x-slot name="header" >
    <h1 class="h3 mb-3">{{ __('Library Management') }}</h1>
  </x-slot>

  <section class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="card-title mb-0">{{ __('Manage Languages') }}</h5>
          <a href="{{ route('languages.create') }}" class="btn btn-primary btn-sm">
            <i class="fas fa-plus"></i>
            <span class="ps-1">{{ __('Add New') }}</span>
          </a>
        </div>
        <div class="card-body">
          <table id="datatables" class="table table-striped">
            <thead>
              <tr>
                <th class="d-none d-xl-table-cell">{{ __('SL') }}</th>
                <th>{{ __('Title') }}</th>
                <th class="d-none d-xl-table-cell">{{ __('Slug') }}</th>
                <th>{{ __('Status') }}</th>
                <th class="d-none d-xl-table-cell">{{ __('Date Created') }}</th>
                <th width="90px">{{ __('Action') }}</th>
              </tr>
            </thead>
            <tbody>
              @foreach ( $languages as $language )
                <tr>
                  <td class="d-none d-xl-table-cell">{{ $loop->iteration }}</td>
                  <td>
                    <strong>{{ $language->title }}</strong>
                  </td>
                  <td class="d-none d-xl-table-cell">{{ $language->slug }}</td>
                  <td>
                    @if ($language->status === 1)
                      <span class="badge bg-success">{{ __('Enable') }}</span>
                    @elseif($language->status === 0)
                      <span class="badge bg-danger">{{ __('Disable') }}</span>
                    @else
                      <span class="badge bg-secondary">{{ __('Pending') }}</span>
                    @endif
                  </td>
                  <td class="d-none d-xl-table-cell">{{ $language->created_at->diffforhumans() }}</td>
                  <td class="d-flex align-items-center">
                    <a href="{{ route('languages.edit', $language->id) }}" class="btn btn-outline-primary btn-sm">
                      <i class="fas fa-edit"></i>
                    </a>
                    @if ($loop->iteration > 6)
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
