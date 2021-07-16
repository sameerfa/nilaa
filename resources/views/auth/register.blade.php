@extends('layouts.master')
@section('page-title') Create your account  | Nilaa @endsection
@section('container')
<div class="container px-6 mx-auto grid">
  <h2
    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
  >
    Create your account with <i>Nilaa</i>.
  </h2>
  <div
    class="grid gap-6 mb-8 md:grid-cols-2 min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
  >
    <div class="grid xs:grid-cols-1">
      <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_sjhy9tez.json" background="transparent" speed="1" loop autoplay></lottie-player>
    </div>
    <div class="grid xs:grid-cols-1">
      <form method="POST" action="{{ route('register') }}">
          @csrf
          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Name</span>
            <input
              class="@error('name') is-invalid @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              type="text"
              name="name"
              value="{{ old('name')}}"
              required
              placeholder="Full Name"
              autofocus
            />
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </label><br>
          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Email</span>
            <input
              class="@error('email') is-invalid @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              type="email"
              name="email"
              value="{{ old('email')}}"
              required
              placeholder="name@email.com"
            />
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </label><br>
          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Password</span>
            <input
              class="@error('password') is-invalid @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              type="password"
              name="password"
              required
              placeholder="******"
            />
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </label><br>
          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Confirm Password</span>
            <input
              class="@error('password') is-invalid @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              type="password"
              name="password_confirmation"
              required
              placeholder="******"
            />
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </label><br>
          <div class="flex mt-6 text-sm">
            <label class="flex items-center dark:text-gray-400">
              <input
                type="checkbox"
                class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
              />
              <span class="ml-2">
                I agree to the
                <span class="underline">privacy policy</span>
              </span>
            </label>
          </div>
          <label class="block text-sm">
            <button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
              Register
            </button>
          </label><br>
          <label class="block text-sm">
            <a
              class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
              href="{{ url('/login/google') }}"
            >
              Sign up with Google
            </a>
          </label>
          <hr class="my-8" />
      <p class="mt-1">
        <a
          class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
          href="/login"
        >
          Got an Account? Login here
        </a>
      </p>
    </form>
    </div>
  </div>
</div>
@endsection
@section('scripts')
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection
