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
            Nila >> 10
          </code>
      </div>
    </div>
</div>
@endsection
@section('scripts')
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection
