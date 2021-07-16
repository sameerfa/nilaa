@extends('layouts.master')
@section('page-title') Settings | Nilaa @endsection
@section('container')
<div class="container px-6 mx-auto grid">
  <h2
    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
  >
    Update your <i>password</i>.
  </h2>
    <div
      class="grid gap-6 mb-8 md:grid-cols-2 min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
    >
      <div class="grid xs:grid-cols-1">
        <form action="/settings" method="post">
          @csrf
          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">New Password</span>
            <input
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              type="password"
              placeholder="******"
              name="password"
              required
            />
          </label><br>
          <label class="block text-sm">
            <button type="submit"
            class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
              Update
            </button>
          </label>
        </form>
        @if(session('status'))
          <p class="text-gray-700 dark:text-gray-400">{{ session('status') }}</p>
        @endif
      </div>
      <div class="grid xs:grid-cols-1"><lottie-player src="https://assets2.lottiefiles.com/packages/lf20_qww4b8ne.json" background="transparent" speed="1" loop autoplay></lottie-player></div>
    </div>
</div>
@endsection
@section('scripts')
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection
