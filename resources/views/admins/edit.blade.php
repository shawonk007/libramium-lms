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
                <label for="firstname">
                  <span class="fw-bold">{{ __('First Name') }}</span>
                  <span>{{ __('*') }}</span>
                </label>
                <input type="text" name="firstname" class="form-control mt-2" id="firstname" placeholder="{{ __('John') }}" value="{{ $admin->firstname }}" />
              </div>
              <div class="col-6">
                <label for="lastname">
                  <span class="fw-bold">{{ __('Last Name') }}</span>
                  <span>{{ __('*') }}</span>
                </label>
                <input type="text" name="lastname" class="form-control mt-2" id="lastname" placeholder="{{ __('Doe') }}" value="{{ $admin->lastname }}" required />
              </div>
              <div class="col-6">
                <label for="username">
                  <span class="fw-bold">{{ __('Username') }}</span>
                  <span>{{ __('*') }}</span>
                </label>
                <input type="text" name="username" class="form-control mt-2" id="username" placeholder="{{ __('john.doe') }}" value="{{ $admin->username }}" required />
              </div>
              <div class="col-6">
                <label for="phone">
                  <span class="fw-bold">{{ __('Cell Phone') }}</span>
                  <span>{{ __('*') }}</span>
                </label>
                <input type="tel" name="phone" class="form-control mt-2" id="phone" placeholder="{{ __('+88 (01X) XX-XXXXXX') }}" value="{{ $admin->phone }}" required />
              </div>
              <div class="col-12">
                <label for="email">
                  <span class="fw-bold">{{ __('Email Address') }}</span>
                  <span>{{ __('*') }}</span>
                </label>
                <input type="email" name="email" class="form-control mt-2" id="email" placeholder="{{ __('john.doe@example.com') }}" value="{{ $admin->email }}" required />
              </div>
              <div class="col-12">
                <label for="biography">
                  <span class="fw-bold">{{ __('Biography') }}</span>
                </label>
                <textarea name="description" class="form-control mt-2" id="description" cols="30" rows="10" placeholder="{{ __('Type details here ...') }}">{{ old('description') }}</textarea>
              </div>
              <div class="col-6">
                <label for="createdAt">
                  <span class="fw-bold">{{ __('Profile Created') }}</span>
                </label>
                <input type="datetime-local" name="created_at" class="form-control mt-2" id="createdAt" placeholder="{{ __('Profile Created') }}" value="{{ $admin->created_at }}" disabled />
              </div>
              <div class="col-6">
                <label for="updatedAt">
                  <span class="fw-bold">{{ __('Last Updated') }}</span>
                </label>
                <input type="datetime-local" name="updated_at" class="form-control mt-2" id="updatedAt" placeholder="{{ __('Last Updated') }}" value="{{ $admin->updated_at }}" disabled />
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
