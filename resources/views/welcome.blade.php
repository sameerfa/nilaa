@extends('layouts.master')
@section('page-title') Home | Nilaa @endsection
@section('container')
<div class="container px-6 mx-auto grid">
  <h2
    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
  >
    hey there! I'm <i>Nilaa</i>.
  </h2>
    <div
      class="grid gap-6 mb-8 md:grid-cols-2 min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
    >
      <div class="grid xs:grid-cols-1"><lottie-player src="https://assets2.lottiefiles.com/packages/lf20_qww4b8ne.json" background="transparent" speed="1" loop autoplay></lottie-player></div>
      <div class="grid xs:grid-cols-1">
        <p class="my-6 text-gray-700 dark:text-gray-200"><i>Nilaa</i> is an Open Source Programming language built with Python Interpreter based on the language Tamil/ Tanglish (Tamil written in English).
          It is built with the intention of helping native language speakers to practise programming concepts in their language, thus reducing
          the barrier of entry into the world of programming.</p>
          <code class="my-2 text-gray-700 dark:text-gray-200">
            PATHIVU("Vanakkam Ulagam")
            <br>
            PATHIVU(5*5)
          </code>
          <code class="my-2 text-gray-700 dark:text-gray-200">
            Nilaa >> Vanakkam Ulagam
            <br>
            Nilaa >> 10
          </code>
      </div>
    </div>
    @if(sizeof($topp))
    <h2
      class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
    >
      Top <i>Programs</i>.
    </h2>
    <div
      class="grid gap-6 mb-8 md:grid-cols-2"
    >
    @foreach($topp as $top)
      <div class="grid xs:grid-cols-1 min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="flex items-center text-sm">
          <!-- Avatar with inset shadow -->
          <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
            <img class="object-cover w-full h-full rounded-full" src="{{ $top->user->image }}" alt="" loading="lazy">
            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
          </div>
          <div>
            <p  class="text-gray-700 dark:text-gray-200">{{ $top->user->name }}</p>
            <p class="text-xs text-gray-600 dark:text-gray-400">
              {{ $top->name }} | {{ $top->updated_at->diffForHumans() }}
            </p>
          </div>
        </div>
        <code class="my-6 rounded bg-black text-white p-6">
          <?php
            $file     = fopen($top->file_name, "r");
            while(! feof($file)) {
              $txt = fgets($file);
            }
            echo $txt;
            fclose($file);
          ?>
        </code>
      </div>
    @endforeach
    </div>
  @endif
  <span class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
    <div class="flex items-center">
      <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
      </svg>
      <span>Write us <a href='mailto:samervj@gmail.com'>here</a> or start an <a href='https://github.com/sameerfa/nilaa/issues'>issue</a> on Github if you encounter any bugs.</span>
    </div>
    <a href='https://github.com/sameerfa/nilaa/issues'><span>View more →</span></a>
  </span>
</div>
@endsection
@section('scripts')
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection
