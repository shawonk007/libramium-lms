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
                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="{{ __('First Name') }}" value="{{ $user->firstname }}" />
              </div>
              <div class="col-6">
                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="{{ __('Last Name') }}" value="{{ $user->lastname }}" required />
              </div>
              <div class="col-6">
                <input type="text" name="username" class="form-control" id="username" placeholder="{{ __('Username') }}" value="{{ $user->username }}" required />
              </div>
              <div class="col-6">
                <input type="tel" name="phone" class="form-control" id="phone" placeholder="{{ __('Cell Phone') }}" value="{{ $user->phone }}" required />
              </div>
              <div class="col-12">
                <input type="email" name="email" class="form-control" id="email" placeholder="{{ __('Email Address') }}" value="{{ $user->email }}" required />
              </div>
              <div class="col-12">
                <textarea name="description" class="form-control" id="description" cols="30" rows="10" placeholder="{{ __('Type details here ...') }}">{{ old('description') }}</textarea>
              </div>
              <div class="col-12">
                <select name="role_id" class="form-select" id="roleId">
                  <option value="">{{ __('-- Choose One --') }}</option>
                  @foreach($roles as $id => $title)
                    <option value="{{ $id }}" {{ $user->role_id == $id ? 'selected' : '' }}>{{ $title }}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-5">
                <label for="createdAt" class="mt-1">{{ __('Profile Created') }}</label>
              </div>
              <div class="col-7">
                <input type="datetime-local" name="created_at" class="form-control" id="createdAt" placeholder="{{ __('Profile Created') }}" value="{{ $user->created_at }}" readonly />
              </div>
              <div class="col-5">
                <label for="updatedAt" class="mt-1">{{ __('Last Updated') }}</label>
              </div>
              <div class="col-7">
                <input type="datetime-local" name="updated_at" class="form-control" id="updatedAt" placeholder="{{ __('Last Updated') }}" value="{{ $user->updated_at }}" readonly />
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
