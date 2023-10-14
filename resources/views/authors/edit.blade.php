<x-admin-layout>

  <x-slot name="title" >
    {{ __('Update Author') }}
  </x-slot>

  <x-slot name="header" >
    <h1 class="h3 mb-3">{{ __('Library Management') }}</h1>
  </x-slot>

  <section class="row">
    <div class="col-12 d-flex justify-content-center">
      <div class="card col-10 col-lg-6">
        <form action="{{ route('authors.update', $author->id) }}" method="post">
          @csrf
          @method('put')
          <div class="card-header">
            <h5 class="card-title mb-0">{{ __('Update Author Data') }}</h5>
          </div>
          <div class="card-body py-0">
            <div class="row g-3">
              <div class="col-12">
                <input type="text" name="name" class="form-control" id="title" placeholder="{{ __('Full Name') }}" value="{{ $author->name }}" />
              </div>
              <div class="col-12">
                <textarea name="biography" class="form-control" id="biography" cols="30" rows="10" placeholder="{{ __('Type details here ...') }}">{{ $author->biography }}</textarea>
              </div>
              <div class="col-6">
                <input type="date" name="birth_date" class="form-control" id="born" placeholder="{{ __('Username') }}" value="{{ $author->birth_date }}" />
              </div>
              <div class="col-6">
                <input type="date" name="death_date" class="form-control" id="died" placeholder="{{ __('Cell Phone') }}" value="{{ $author->death_date }}" />
              </div>
              <div class="col-12">
                <input type="text" name="slug" class="form-control" id="slug" placeholder="{{ __('Author Slug') }}" value="{{ $author->slug }}" required />
              </div>
              <div class="col-12">
                <textarea name="birth_place" class="form-control" id="place" cols="30" rows="4" placeholder="{{ __('Type addres here ...') }}">{{ $author->birth_place }}</textarea>
              </div>
              <div class="col-4">
                <select name="gender" class="form-select" id="gender" >
                  <option value="">{{ __('-- Choose --') }}</option>
                  <option value="1" {{ $author->gender === 1 ? 'selected' : '' }} >{{ __('Male') }}</option>
                  <option value="2" {{ $author->gender === 2 ? 'selected' : '' }} >{{ __('Female') }}</option>
                </select>
              </div>
              <div class="col-4">
                <select name="religion" class="form-select" id="religion" >
                  <option value="">{{ __('-- Choose --') }}</option>
                  <option value="1" {{ $author->religion === 1 ? 'selected' : '' }} >{{ __('Islam') }}</option>
                  <option value="2" {{ $author->religion === 2 ? 'selected' : '' }} >{{ __('Chistian') }}</option>
                  <option value="3" {{ $author->religion === 3 ? 'selected' : '' }} >{{ __('Hinduism') }}</option>
                  <option value="4" {{ $author->religion === 4 ? 'selected' : '' }} >{{ __('Buddhist') }}</option>
                  <option value="5" {{ $author->religion === 5 ? 'selected' : '' }} >{{ __('Jewish') }}</option>
                  <option value="6" {{ $author->religion === 6 ? 'selected' : '' }} >{{ __('Others') }}</option>
                </select>
              </div>
              <div class="col-4">
                <select name="status" class="form-select" id="status" >
                  <option value="">{{ __('-- Choose --') }}</option>
                  <option value="1" {{ $author->status === 1 ? 'selected' : '' }} >{{ __('Enable') }}</option>
                  <option value="2" {{ $author->status === 2 ? 'selected' : '' }} >{{ __('Disable') }}</option>
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
