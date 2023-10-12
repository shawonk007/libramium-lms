<x-admin-layout>

  <x-slot name="title" >
    {{ __('Update Admin') }}
  </x-slot>

  <x-slot name="header" >
    <h1 class="h3 mb-3">{{ __('Users & Members') }}</h1>
  </x-slot>

  <section class="row">
    <div class="col-12 d-flex justify-content-center">
      <div class="card col-10 col-lg-6">
        <form action="{{ route('admins.update', $admin->id) }}" method="post">
          @csrf
          @method('put')
          <div class="card-header">
            <h5 class="card-title mb-0">{{ __('Update Administrator Data') }}</h5>
          </div>
          <div class="card-body py-0">
            <div class="row g-3">
              <div class="col-6">
                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="{{ __('First Name') }}" value="{{ $admin->firstname }}" />
              </div>
              <div class="col-6">
                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="{{ __('Last Name') }}" value="{{ $admin->lastname }}" required />
              </div>
              <div class="col-6">
                <input type="text" name="username" class="form-control" id="username" placeholder="{{ __('Username') }}" value="{{ $admin->username }}" required />
              </div>
              <div class="col-6">
                <input type="tel" name="phone" class="form-control" id="phone" placeholder="{{ __('Cell Phone') }}" value="{{ $admin->phone }}" required />
              </div>
              <div class="col-12">
                <input type="email" name="email" class="form-control" id="email" placeholder="{{ __('Email Address') }}" value="{{ $admin->email }}" required />
              </div>
              <div class="col-12">
                <textarea name="description" class="form-control" id="description" cols="30" rows="10" placeholder="{{ __('Type details here ...') }}">{{ old('description') }}</textarea>
              </div>
              <div class="col-5">
                <label for="createdAt" class="mt-1">{{ __('Profile Created') }}</label>
              </div>
              <div class="col-7">
                <input type="datetime-local" name="created_at" class="form-control" id="createdAt" placeholder="{{ __('Profile Created') }}" value="{{ $admin->created_at }}" readonly />
              </div>
              <div class="col-5">
                <label for="updatedAt" class="mt-1">{{ __('Last Updated') }}</label>
              </div>
              <div class="col-7">
                <input type="datetime-local" name="updated_at" class="form-control" id="updatedAt" placeholder="{{ __('Last Updated') }}" value="{{ $admin->created_at }}" readonly />
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
