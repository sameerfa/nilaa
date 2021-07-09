<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nilaa V 0.1.16</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="py-16 bg-gray-200">
    <h1 class="mb-4 text-4xl text-center text-gray-800 font-bold font-sans">
      Nilaa <small class="text-xl">Version 0.1.16</small>
    </h1>
    <p class="text-sm text-center text-gray-600 font-sans">
      Compile your first Nila.
    </p>
    <div class="px-10 py-16 grid md:grid-cols-2 gap-4">
      <div>
        <form action="/" method="post">
          {{ csrf_field() }}
          {{ method_field('post')}}
          <textarea rows=20 class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
          id="my-div" name="code" placeholder="Type your code here" required>@if(!empty($txt)) {{ $txt }} @endif</textarea><br>
          <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" value="Compile" name="compile">
        </form>
      </div>
      <div>
        <h2 class="font-bold">Result:</h2>
        <p>
          @if(!empty($output))
            <?php $exp = explode($output, '[<function'); ?>
            @if(str_contains($output,'[<function') AND !empty($exp[0]))
              <pre>{{ substr($output, 0, strpos($output, "[<function")) }}</pre>
            @else
              @if(substr($output, -2)==0)
                <pre>{{ substr($output, 0, -2) }}</pre>
              @else
                <pre>{{ $output }}</pre>
              @endif
            @endif
          @endif
        </p>
      </div>
    </div>
  </body>
</html>
