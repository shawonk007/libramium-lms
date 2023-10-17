<x-admin-layout>

  <x-slot name="title" >
    {{ __('Update User') }}
  </x-slot>

  <x-slot name="header" >
    <h1 class="h3 mb-3">{{ __('Users & Members') }}</h1>
  </x-slot>

  <section class="row">
    <div class="col-12 d-flex justify-content-center">
      <div class="card col-10 col-lg-6">
        <form action="{{ route('users.update', $user->id) }}" method="post">
          @csrf
          @method('put')
          <div class="card-header">
            <h5 class="card-title mb-0">{{ __('Update User Data') }}</h5>
          </div>
          <div class="card-body py-0">
            <div class="row g-3">
              <div class="col-6">
                <label for="firstname">
                  <span class="fw-bold">{{ __('First Name') }}</span>
                  <span>{{ __('*') }}</span>
                </label>
                <input type="text" name="firstname" class="form-control mt-2" id="firstname" placeholder="{{ __('First Name') }}" value="{{ $user->firstname }}" />
              </div>
              <div class="col-6">
                <label for="lastname">
                  <span class="fw-bold">{{ __('Last Name') }}</span>
                  <span>{{ __('*') }}</span>
                </label>
                <input type="text" name="lastname" class="form-control mt-2" id="lastname" placeholder="{{ __('Last Name') }}" value="{{ $user->lastname }}" required />
              </div>
              <div class="col-6">
                <label for="username">
                  <span class="fw-bold">{{ __('Username') }}</span>
                  <span>{{ __('*') }}</span>
                </label>
                <input type="text" name="username" class="form-control mt-2" id="username" placeholder="{{ __('Username') }}" value="{{ $user->username }}" required />
              </div>
              <div class="col-6">
                <label for="phone">
                  <span class="fw-bold">{{ __('Cell Phone') }}</span>
                  <span>{{ __('*') }}</span>
                </label>
                <input type="tel" name="phone" class="form-control mt-2" id="phone" placeholder="{{ __('Cell Phone') }}" value="{{ $user->phone }}" required />
              </div>
              <div class="col-12">
                <label for="email">
                  <span class="fw-bold">{{ __('Email Address') }}</span>
                  <span>{{ __('*') }}</span>
                </label>
                <input type="email" name="email" class="form-control mt-2" id="email" placeholder="{{ __('Email Address') }}" value="{{ $user->email }}" required />
              </div>
              <div class="col-12">
                <label for="biography">
                  <span class="fw-bold">{{ __('Biography') }}</span>
                </label>
                <textarea name="description" class="form-control mt-2" id="description" cols="30" rows="10" placeholder="{{ __('Type details here ...') }}">{{ old('description') }}</textarea>
              </div>
              <div class="col-12">
                <label for="roleId">
                  <span class="fw-bold">{{ __('User Role') }}</span>
                  <span>{{ __('*') }}</span>
                </label>
                <select name="role_id" class="form-select mt-2" id="roleId">
                  <option value="">{{ __('-- Choose One --') }}</option>
                  @foreach($roles as $id => $title)
                    <option value="{{ $id }}" {{ $user->role_id == $id ? 'selected' : '' }}>{{ $title }}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-6">
                <label for="createdAt">
                  <span class="fw-bold">{{ __('Profile Created') }}</span>
                </label>
                <input type="datetime-local" name="created_at" class="form-control mt-2" id="createdAt" placeholder="{{ __('Profile Created') }}" value="{{ $user->created_at }}" disabled />
              </div>
              <div class="col-6">
                <label for="updatedAt">
                  <span class="fw-bold">{{ __('Last Updated') }}</span>
                </label>
                <input type="datetime-local" name="updated_at" class="form-control mt-2" id="updatedAt" placeholder="{{ __('Last Updated') }}" value="{{ $user->updated_at }}" disabled />
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="row">
              <div class="col-6 d-grid">
                <a href="{{ route('users.index') }}" class="btn btn-outline-secondary" >
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
