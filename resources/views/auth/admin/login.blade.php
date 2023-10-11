<x-auth-layout>

  <x-slot name="title" >
    {{ __('Admin Login') }}
  </x-slot>

  <x-auth-session-status class="mb-4" :status="session('status')" />

  <x-slot name="header" >
    <h1 class="h2">Welcome back, Charles</h1>
	<p class="lead">Sign in to your account to continue</p>
  </x-slot>

  <x-slot name="avatar" >
    <img src="{{ asset('img/avatars/avatar.jpg') }}" alt="Charles Hall" class="img-fluid rounded-circle" width="132" height="132" />
  </x-slot>

  <form action="{{ route('admin.login') }}" method="POST" >
    @csrf
    <div class="mb-3">
      <label class="form-label">{{ __('Email') }}</label>
      <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" />
      <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>
    <div class="mb-3">
      <label class="form-label">{{ __('Password') }}</label>
      <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
      <x-input-error :messages="$errors->get('password')" class="mt-2" />
      <small>
        @if (Route::has('password.request'))
          <a href="pages-reset-password.html">
            {{ __('Forgot your password?') }}
          </a>
        @endif
        {{-- <a href="pages-reset-password.html">{{ __('Forgot password?') }}</a> --}}
      </small>
    </div>
    <div>
      <label class="form-check">
        <input class="form-check-input" type="checkbox" name="remember" />
        <span class="form-check-label">{{ __('Remember me next time') }}</span>
      </label>
    </div>
    <div class="text-center mt-3">
      <button type="submit" class="btn btn-lg btn-primary">
        <span>{{ __('Sign in') }}</span>
      </button>
    </div>
  </form>

  <x-slot name="script" ></x-slot>

</x-auth-layout>
