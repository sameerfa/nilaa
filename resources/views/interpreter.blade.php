@extends('layouts.master')
@section('page-title') Interpreter | Nilaa @endsection
@section('container')
<div class="container px-6 mx-auto grid">
  <h2
    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
  >
    write your program <i>here</i>
  </h2>
  <div class="grid gap-6 mb-8 md:grid-cols-2">
    <div class="grid xs:grid-cols-1">
      <form action="/interpreter" method="post" id="compilecode">
        {{ csrf_field() }}
        {{ method_field('post')}}
        <textarea rows=40 class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
        id="editor" name="code" placeholder="Type your code here" required>@if(!empty($txt)) {{ $txt }} @endif</textarea><br>
        <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" value="Compile" name="compile"
        onclick="document.getElementById('compilecode').submit()"><br>
        <input type="text" placeholder="Program Name" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"><br>
        <textarea placeholder="Program Description" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"></textarea><Br>
        <input type="submit" value="Save" name="save" class="bg-blue-500 rounded">
      </form>
    </div>
    <div class="grid xs:grid-cols-1 my-6 text-gray-700 dark:text-gray-200">
        @if(!empty($output))
        <h2 class="font-bold">Output:</h2>
          @if(strpos($output, "["))
            <code><pre>{{ substr($output, 0, strpos($output, "[")) }}</pre></code>
          @else
            <code><pre>{{ $output }}</pre></code>
          @endif
        @else
          <img src="assets/img/web.svg">
        @endif
    </div>
  </div>
</div>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/codemirror.min.js" integrity="sha512-i9pd5Q6ntCp6LwSgAZDzsrsOlE8SN+H5E0T5oumSXWQz5l1Oc4Kb5ZrXASfyjjqtc6Mg6xWbu+ePbbmiEPJlDg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/codemirror.min.css" integrity="sha512-xIf9AdJauwKIVtrVRZ0i4nHP61Ogx9fSRAkCLecmE2dL/U8ioWpDvFCAy4dcfecN72HHB9+7FfQj3aiO68aaaw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script>
    var editor = CodeMirror.fromTextArea(document.getElementById('editor'), {
      mode: "javascript",
      lineNumbers: true,
    });
    editor.save()
  </script>
@endsection
