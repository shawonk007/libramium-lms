<x-admin-layout>

  <x-slot name="title" >
    {{ __('Update Role') }}
  </x-slot>

  <x-slot name="header" >
    <h1 class="h3 mb-3">{{ __('User Settings') }}</h1>
  </x-slot>

  <section class="row">
    <div class="col-12 d-flex justify-content-center">
      <div class="card col-10 col-lg-6">
        <form action="{{ route('roles.update', $role->id) }}" method="post">
          @csrf
          @method('put')
          <div class="card-header">
            <h5 class="card-title mb-0">{{ __('Update Role Data') }}</h5>
          </div>
          <div class="card-body py-0">
            <div class="row g-3">
              <div class="col-12">
                <label for="title">
                  <span class="fw-bold">{{ __('Title') }}</span>
                  <span class="text-danger">{{ _('*') }}</span>
                </label>
                <input type="text" name="title" class="form-control mt-2" id="title" placeholder="{{ __('Member') }}" value="{{ $role->title }}" required />
              </div>
              <div class="col-12">
                <label for="description">
                  <span class="fw-bold">{{ __('Description') }}</span>
                </label>
                <textarea name="description" class="form-control mt-2" id="description" cols="30" rows="10" placeholder="{{ __('Type details here ...') }}">{{ $role->description }}</textarea>
              </div>
              <div class="col-6">
                <label for="slug">
                  <span class="fw-bold">{{ __('Slug') }}</span>
                  <span>{{ _('*') }}</span>
                </label>
                <input type="text" name="slug" class="form-control mt-2" id="slug" placeholder="{{ __('member') }}" value="{{ $role->slug }}" />
              </div>
              <div class="col-6">
                <label for="status">
                  <span class="fw-bold">{{ __('Status') }}</span>
                  <span>{{ _('*') }}</span>
                </label>
                <select name="status" class="form-control mt-2" id="status">
                  <option value="">{{ __('-- Choose Status --') }}</option>
                  <option value="1" {{ $role->status === 1 ? 'selected' : '' }} >{{ __('Enable') }}</option>
                  <option value="0" {{ $role->status === 0 ? 'selected' : '' }} >{{ __('Disable') }}</option>
                </select>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="row">
              <div class="col-6 d-grid">
                <a href="{{ route('roles.index') }}" class="btn btn-outline-secondary" >
                  <i class="align-middle me-1" data-feather="arrow-left"></i>
                  <span class="ps-1">{{ __('Discard') }}</span>
                </a>
              </div>
              <div class="col-6 d-grid">
                <button type="submit" class="btn btn-outline-success" >
                  <i class="align-middle me-1" data-feather="check"></i>
                  <span class="ps-1">{{ __('Update') }}</span>
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

  <x-slot name="script" >
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
  </x-slot>

</x-admin-layout>
