@extends('layouts.master')
@section('page-title') Examples | Nilaa @endsection
@section('container')
<div class="container px-6 mx-auto grid">
  <h2
    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
  >
    <i>Nilaa</i> Examples
  </h2>
  <div class="grid gap-6 mb-8 md:grid-cols-2 min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800" id="variables">
    <div class="grid xs:grid-cols-1">
      <img src="assets/img/space.svg">
    </div>
    <div class="grid xs:grid-cols-1">
      <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
        Program to Display "Vanakkam, Ulagam!"
      </h4>
      <p class="text-gray-700 dark:text-gray-200">
        <b>PATHIVU()</b> is a Built in Nilaa function, it is used to print statements and variables. It is so simple to program using Nilaa,
        you don't have to include any external files or methods or even a ; (semi colon) at the end of each line.<br>
        The following code will print the text "Vanakkam, Ulagam!" or any other text or variables given inside the paranthesis. But keep in mind
        "" (quotes) needs to be used when printing strings. Give it a try <a href='/interpreter'><u>here</u></a>.

      </p>
      <code class="my-2 rounded bg-black text-white p-6">
        >> PATHIVU("Vanakkam, Ulagam!")<br><br>
        <i>Output</i><br>
        >> Vanakkam, Ulagam!
      </code>
    </div>
  </div>
  <div class="grid gap-6 mb-8 md:grid-cols-2 min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800" id="variables">
    <div class="grid xs:grid-cols-1">
      <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
        Program to Add Two Integers
      </h4>
      <code class="my-2 rounded bg-black text-white p-6">
        >> MARI a = 5<br>
        >> MARI b = 5<br>
        >> PATHIVU(a + b)<br><br>
        >> <i>Output</i><br>
        >> 10
      </code>
    </div>
    <div class="grid xs:grid-cols-1">
      <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
        Program to Multiply Two Float points
      </h4>
      <code class="my-2 rounded bg-black text-white p-6">
        >> MARI a = 5.75<br>
        >> MARI b = 4.20<br>
        >> PATHIVU(a * b)<br><br>
        >> <i>Output</i><br>
        >> 24.150000000000002
      </code>
    </div>
    <div class="grid xs:grid-cols-1">
      <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
        Program to Find the Largest Number Among Three Numbers
      </h4>
      <code class="my-2 rounded bg-black text-white p-6">
        >> MARI n1 = 50<br>
        >> MARI n2 = 51<br>
        >> MARI n3 = 49<br><br>
        >> ENDRAL n1 >= n2 MATRUM n1 >= n3 ENIL<br>
        >>  PATHIVU("n1 is the largest number.")<br>
        >> VERUENDRAL n2 >= n1 MATRUM n2 >= n3 ENIL<br>
        >>  PATHIVU("n2 is the largest number.")<br>
        >> VERU<br>
        >>  PATHIVU("n3 is the largest number.")<br>
        >> MUDI<br><br>
        >> <i>Output</i><br>
        >> n2 is the largest number.
      </code>
    </div>
    <div class="grid xs:grid-cols-1">
      <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
        Program to Check Whether a Number is Positive or Negative
      </h4>
      <code class="my-2 rounded bg-black text-white p-6">
        >> MARI num = 5<br>
        >> ENDRAL num <= 0.0 ENIL<br>
        >> ENDRAL num == 0.0 ENIL<br>
        >> PATHIVU("You entered 0.");<br>
        >> VERU<br>
        >> PATHIVU("You entered a negative number.");<br>
        >> MUDI<br>
        >> VERU<br>
        >> PATHIVU("You entered a positive number.");<br>
        >> MUDI<br><br>
        >> <i>Output</i><br>
        >> You entered a positive number.
      </code>
    </div>
    <div class="grid xs:grid-cols-1">
      <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
        Program to Find the Sum of Natural Numbers using Recursion
      </h4>
      <code class="my-2 rounded bg-black text-white p-6">
        >> SEYAL addNumbers(n)<br>
        >> ENDRAL n != 0 ENIL<br>
        >> THIRUMBU n + addNumbers(n-1)<br>
        >> VERU<br>
        >> THIRUMBU n<br>
        >> MUDI<br>
        >> MUDI<br>
        >> MARI num = 20<br>
        >> addNumbers(num)<br><br>
        >> <i>Output</i><br>
        >> [<seyal addNumbers>, 20, 210]
      </code>
    </div>
    <div class="grid xs:grid-cols-1">
      <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
        Program to Concatenate Two Strings
      </h4>
      <code class="my-2 rounded bg-black text-white p-6">
        >> MARI name = "this string is "<br>
        >> MARI age = "concatenated!"<br>
        >> PATHIVU(name + age) <br><br>
        >> <i>Output</i><br>
        >> this string is concatenated!
      </code>
    </div>
  </div>
</div>
@endsection
@section('scripts')
@endsection
