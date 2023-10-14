<x-admin-layout>

  <x-slot name="title" >
    {{ __('Add New Author') }}
  </x-slot>

  <x-slot name="header" >
    <h1 class="h3 mb-3">{{ __('Library Management') }}</h1>
  </x-slot>

  <section class="row">
    <div class="col-12 d-flex justify-content-center">
      <div class="card col-10 col-lg-6">
        <form action="{{ route('authors.store') }}" method="post">
          @csrf
          <div class="card-header">
            <h5 class="card-title mb-0">{{ __('Create New Author') }}</h5>
          </div>
          <div class="card-body py-0">
            <div class="row g-3">
              <div class="col-12">
                <input type="text" name="name" class="form-control" id="title" placeholder="{{ __('Full Name') }}" value="{{ old('name') }}" />
              </div>
              <div class="col-12">
                <textarea name="biography" class="form-control" id="biography" cols="30" rows="10" placeholder="{{ __('Type details here ...') }}">{{ old('biography') }}</textarea>
              </div>
              <div class="col-6">
                <input type="date" name="birth_date" class="form-control" id="born" placeholder="{{ __('Username') }}" value="{{ old('birth_date') }}" />
              </div>
              <div class="col-6">
                <input type="date" name="death_date" class="form-control" id="died" placeholder="{{ __('Cell Phone') }}" value="{{ old('death_date') }}" />
              </div>
              <div class="col-12">
                <input type="text" name="slug" class="form-control" id="slug" placeholder="{{ __('Author Slug') }}" value="{{ old('slug') }}" readonly required />
              </div>
              <div class="col-12">
                <textarea name="birth_place" class="form-control" id="place" cols="30" rows="4" placeholder="{{ __('Type addres here ...') }}">{{ old('birth_place') }}</textarea>
              </div>
              <div class="col-4">
                <select name="gender" class="form-select" id="gender" >
                  <option value="">{{ __('-- Choose --') }}</option>
                  <option value="1">{{ __('Male') }}</option>
                  <option value="2">{{ __('Female') }}</option>
                </select>
              </div>
              <div class="col-4">
                <select name="religion" class="form-select" id="religion" >
                  <option value="">{{ __('-- Choose --') }}</option>
                  <option value="1">{{ __('Islam') }}</option>
                  <option value="2">{{ __('Chistian') }}</option>
                  <option value="3">{{ __('Hinduism') }}</option>
                  <option value="4">{{ __('Buddhist') }}</option>
                  <option value="5">{{ __('Jewish') }}</option>
                  <option value="5">{{ __('Others') }}</option>
                </select>
              </div>
              <div class="col-4">
                <select name="status" class="form-select" id="status" >
                  <option value="">{{ __('-- Choose --') }}</option>
                  <option value="1">{{ __('Enable') }}</option>
                  <option value="2">{{ __('Disable') }}</option>
                </select>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="row">
              <div class="col-6 d-grid">
                <a href="{{ route('authors.index') }}" class="btn btn-outline-secondary" >
                  <i class="align-middle me-1" data-feather="arrow-left"></i>
                  <span class="ps-1">{{ __('Discard') }}</span>
                </a>
              </div>
              <div class="col-6 d-grid">
                <button type="submit" class="btn btn-outline-primary" >
                  <i class="align-middle me-1" data-feather="plus"></i>
                  <span class="ps-1">{{ __('Create New') }}</span>
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
