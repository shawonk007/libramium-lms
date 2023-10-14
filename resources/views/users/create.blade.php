<x-admin-layout>

  <x-slot name="title" >
    {{ __('Add New User') }}
  </x-slot>

  <x-slot name="header" >
    <h1 class="h3 mb-3">{{ __('Users & Members') }}</h1>
  </x-slot>

  <section class="row">
    <div class="col-12 d-flex justify-content-center">
      <div class="card col-10 col-lg-6">
        <form action="{{ route('users.store') }}" method="post">
          @csrf
          <div class="card-header">
            <h5 class="card-title mb-0">{{ __('Create New User') }}</h5>
          </div>
          <div class="card-body py-0">
            <div class="row g-3">
              <div class="col-6">
                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="{{ __('First Name') }}" value="{{ old('firstname') }}" />
              </div>
              <div class="col-6">
                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="{{ __('Last Name') }}" value="{{ old('lastname') }}" required />
              </div>
              <div class="col-6">
                <input type="text" name="username" class="form-control" id="username" placeholder="{{ __('Username') }}" value="{{ old('username') }}" required />
              </div>
              <div class="col-6">
                <input type="tel" name="phone" class="form-control" id="phone" placeholder="{{ __('Cell Phone') }}" value="{{ old('phone') }}" required />
              </div>
              <div class="col-12">
                <input type="email" name="email" class="form-control" id="email" placeholder="{{ __('Email Address') }}" value="{{ old('email') }}" required />
              </div>
              <div class="col-6">
                <input type="password" name="password" class="form-control" id="password" placeholder="{{ __('Password') }}" value="{{ old('password') }}" required />
              </div>
              <div class="col-6">
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="{{ __('Confirm Password') }}" value="{{ old('password_confirmation') }}" required />
              </div>
              <div class="col-12">
                <textarea name="description" class="form-control" id="description" cols="30" rows="10" placeholder="{{ __('Type details here ...') }}">{{ old('description') }}</textarea>
              </div>
              <div class="col-12">
                <select name="role_id" class="form-select" id="roleId">
                  <option value="">{{ __('-- Choose One --') }}</option>
                  @foreach($roles as $id => $title)
                    <option value="{{ $id }}">{{ $title }}</option>
                  @endforeach
                </select>
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
