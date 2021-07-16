@extends('layouts.master')
@section('page-title') {{ auth()->user()->name }}'s Programs | Nilaa @endsection
@section('container')
<div class="container px-6 mx-auto grid">
  <h2
    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
  >
    these are your <i>programs</i>.
  </h2>
  @if(session('status'))
    <p class="text-gray-700 dark:text-gray-400">{{ session('status') }}</p>
  @endif
  <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
      <table class="w-full whitespace-no-wrap">
        <thead>
          <tr
            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
          >
            <th class="px-4 py-3">File Name</th>
            <th class="px-4 py-3">Date</th>
            <th class="px-4 py-3">Actions</th>
          </tr>
        </thead>
        <tbody
          class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
        >
          @foreach($programs as $program)
          <tr class="text-gray-700 dark:text-gray-400">
            <td class="px-4 py-3">
              {{ $program->name }}
            </td>
            <td class="px-4 py-3 text-sm">
              {{ $program->updated_at->diffForHumans() }}
            </td>
            <td class="px-4 py-3 text-xs">
              <a href='/interpreter/{{ $program->id }}' class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">View</a>
              <a href='/myprograms/{{ $program->id }}' class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">Delete</a>
              @if($program->status == 1)
              <span
                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
              >
                Listed
              </span>
              @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $programs->links() }}
    </div>
  </div>
</div>
@endsection
@section('scripts')
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection
