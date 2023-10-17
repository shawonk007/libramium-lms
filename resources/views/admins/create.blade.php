<x-admin-layout>

  <x-slot name="title" >
    {{ __('Add New Admin') }}
  </x-slot>

  <x-slot name="header" >
    <h1 class="h3 mb-3">{{ __('Users & Members') }}</h1>
  </x-slot>

  <section class="row">
    <div class="col-12 d-flex justify-content-center">
      <div class="card col-10 col-lg-6">
        <form action="{{ route('admins.store') }}" method="post">
          @csrf
          <div class="card-header">
            <h5 class="card-title mb-0">{{ __('Create New Administrator') }}</h5>
          </div>
          <div class="card-body py-0">
            <div class="row g-3">
              <div class="col-6">
                <label for="firstname">
                  <span class="fw-bold">{{ __('First Name') }}</span>
                  <span>{{ __('*') }}</span>
                </label>
                <input type="text" name="firstname" class="form-control mt-2" id="firstname" placeholder="{{ __('John') }}" value="{{ old('firstname') }}" />
              </div>
              <div class="col-6">
                <label for="lastname">
                  <span class="fw-bold">{{ __('Last Name') }}</span>
                  <span>{{ __('*') }}</span>
                </label>
                <input type="text" name="lastname" class="form-control mt-2" id="lastname" placeholder="{{ __('Doe') }}" value="{{ old('lastname') }}" required />
              </div>
              <div class="col-6">
                <label for="username">
                  <span class="fw-bold">{{ __('Username') }}</span>
                  <span>{{ __('*') }}</span>
                </label>
                <input type="text" name="username" class="form-control mt-2" id="username" placeholder="{{ __('john.doe') }}" value="{{ old('username') }}" required />
              </div>
              <div class="col-6">
                <label for="phone">
                  <span class="fw-bold">{{ __('Cell Phone') }}</span>
                  <span>{{ __('*') }}</span>
                </label>
                <input type="tel" name="phone" class="form-control mt-2" id="phone" placeholder="{{ __('+88 (01X) XX-XXXXXX') }}" value="{{ old('phone') }}" required />
              </div>
              <div class="col-12">
                <label for="email">
                  <span class="fw-bold">{{ __('Email Address') }}</span>
                  <span>{{ __('*') }}</span>
                </label>
                <input type="email" name="email" class="form-control mt-2" id="email" placeholder="{{ __('john.doe@example.com') }}" value="{{ old('email') }}" required />
              </div>
              <div class="col-6">
                <label for="password">
                  <span class="fw-bold">{{ __('Password') }}</span>
                  <span>{{ __('*') }}</span>
                </label>
                <input type="password" name="password" class="form-control mt-2" id="password" placeholder="{{ __('Password') }}" value="{{ old('password') }}" required />
              </div>
              <div class="col-6">
                <label for="password_confirmation">
                  <span class="fw-bold">{{ __('Re-Type Password') }}</span>
                  <span>{{ __('*') }}</span>
                </label>
                <input type="password" name="password_confirmation" class="form-control mt-2" id="password_confirmation" placeholder="{{ __('Confirm Password') }}" value="{{ old('password_confirmation') }}" required />
              </div>
              <div class="col-12">
                <label for="biography">
                  <span class="fw-bold">{{ __('Biography') }}</span>
                </label>
                <textarea name="description" class="form-control mt-2" id="description" cols="30" rows="10" placeholder="{{ __('Type details here ...') }}">{{ old('description') }}</textarea>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="row">
              <div class="col-6 d-grid">
                <a href="{{ route('admins.index') }}" class="btn btn-outline-secondary" >
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
