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
                <label for="title">
                  <span class="fw-bold">{{ _('Full Name') }}</span>
                  <span>{{ __('*') }}</span>
                </label>
                <input type="text" name="name" class="form-control mt-2" id="title" placeholder="{{ __('Kazi Nazrul Islam') }}" value="{{ $author->name }}" />
              </div>
              <div class="col-12">
                <label for="biography">
                  <span class="fw-bold">{{ _('Biography') }}</span>
                </label>
                <textarea name="biography" class="form-control mt-2" id="biography" cols="30" rows="10" placeholder="{{ __('Type details here ...') }}">{{ $author->biography }}</textarea>
              </div>
              <div class="col-6">
                <label for="born">
                  <span class="fw-bold">{{ _('Date of Birth') }}</span>
                </label>
                <input type="date" name="birth_date" class="form-control mt-2" id="born" value="{{ $author->birth_date }}" />
              </div>
              <div class="col-6">
                <label for="died">
                  <span class="fw-bold">{{ _('Date of Death') }}</span>
                </label>
                <input type="date" name="death_date" class="form-control mt-2" id="died" value="{{ $author->death_date }}" />
              </div>
              <div class="col-12">
                <label for="place">
                  <span class="fw-bold">{{ _('Birth Place') }}</span>
                </label>
                <textarea name="birth_place" class="form-control mt-2" id="place" cols="30" rows="4" placeholder="{{ __('Type addres here ...') }}">{{ $author->birth_place }}</textarea>
              </div>
              <div class="col-12">
                <label for="slug">
                  <span class="fw-bold">{{ _('Slug') }}</span>
                  <span>{{ __('*') }}</span>
                </label>
                <input type="text" name="slug" class="form-control mt-2" id="slug" placeholder="{{ __('kazi-nazrul-islam') }}" value="{{ $author->slug }}" required />
              </div>
              <div class="col-4">
                <label for="gender">
                  <span class="fw-bold">{{ _('Gender') }}</span>
                </label>
                <select name="gender" class="form-select mt-2" id="gender" >
                  <option value="">{{ __('-- Choose --') }}</option>
                  <option value="1" {{ $author->gender === 1 ? 'selected' : '' }} >{{ __('Male') }}</option>
                  <option value="2" {{ $author->gender === 2 ? 'selected' : '' }} >{{ __('Female') }}</option>
                </select>
              </div>
              <div class="col-4">
                <label for="religion">
                  <span class="fw-bold">{{ _('Religion') }}</span>
                </label>
                <select name="religion" class="form-select mt-2" id="religion" >
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
                <label for="status">
                  <span class="fw-bold">{{ _('Status') }}</span>
                  <span>{{ __('*') }}</span>
                </label>
                <select name="status" class="form-select mt-2" id="status" >
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
