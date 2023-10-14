<x-admin-layout>

  <x-slot name="title" >
    {{ __('Manage Authors') }}
  </x-slot>

  <x-slot name="header" >
    <h1 class="h3 mb-3">{{ __('Library Management') }}</h1>
  </x-slot>

  <section class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="card-title mb-0">{{ __('Manage Authors') }}</h5>
          <a href="{{ route('authors.create') }}" class="btn btn-primary btn-sm">
            <i class="fas fa-plus"></i>
            <span class="ps-1">{{ __('Add New') }}</span>
          </a>
        </div>
        <div class="card-body">
          <table id="datatables" class="table table-striped">
            <thead>
              <tr>
                <th class="d-none d-xl-table-cell">{{ __('SL') }}</th>
                <th>{{ __('Name of Authors') }}</th>
                <th class="d-none d-xl-table-cell">{{ __('Slug') }}</th>
                <th>{{ __('Status') }}</th>
                <th class="d-none d-xl-table-cell">{{ __('Date Created') }}</th>
                <th width="90px">{{ __('Action') }}</th>
              </tr>
            </thead>
            <tbody>
              @foreach ( $authors as $author )
                <tr>
                  <td class="d-none d-xl-table-cell">{{ $loop->iteration }}</td>
                  <td>
                    <strong>{{ $author->name }}</strong>
                  </td>
                  <td class="d-none d-xl-table-cell">{{ $author->slug }}</td>
                  <td>
                    @if ($author->status === 1)
                      <span class="badge bg-success">{{ __('Enable') }}</span>
                    @elseif($author->status === 0)
                      <span class="badge bg-danger">{{ __('Disable') }}</span>
                    @else
                      <span class="badge bg-secondary">{{ __('Pending') }}</span>
                    @endif
                  </td>
                  <td class="d-none d-xl-table-cell">{{ $author->created_at->diffforhumans() }}</td>
                  <td class="d-flex align-items-center">
                    <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-outline-primary btn-sm">
                      <i class="fas fa-edit"></i>
                    </a>
                    @if ($loop->iteration > 9)
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
