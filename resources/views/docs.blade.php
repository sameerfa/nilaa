@extends('layouts.master')
@section('page-title') Docs | Nilaa @endsection
@section('container')
<div class="container px-6 mx-auto grid">
  <h2
    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
  >
    it's so easy to code <i>Nilaa</i>.
  </h2>
    <!-- OPERATORS -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800" id="operators">
      <div class="grid xs:grid-cols-1">
        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
          Operators
        </h4>
        <p class="text-gray-700 dark:text-gray-200">
          An operator performs some operation on single or multiple operands (data value) and produces a result. For example 1 + 2, where + sign is an operator and 1 is left operand and 2 is right operand. + operator adds two numeric values and produces a result which is 3 in this case.
          <br>You can also use Brackets to define the order of precedense in which these operators get executed. Power operators can be used as 2 ^ 2 which results in 4.
        </p>
      </div>
      <div class="grid xs:grid-cols-1">
          <code class="my-2 rounded bg-black text-white p-6">
            >> 1 + 2 * 3 <br>
            >> (1 + 2) * 3 <br>
            >> -4<br>
            >> 2 ^ 2<br><br>
            <i>Output</i><br>
            >> 7<br>
            >> 9<br>
            >> 4<br>
            >> 4
          </code>
      </div>
    </div>
    <!-- VARIABLES -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800" id="variables">
      <div class="grid xs:grid-cols-1">
        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
          Variables
        </h4>
        <p class="text-gray-700 dark:text-gray-200">
          Variable means anything that can vary. Nilaa includes variables which hold the data value and it can be changed anytime.<br>
          Nilaa uses reserved keyword <b>MARI</b> to declare a variable. A variable must have a unique name. You can assign a value to a variable using equal to <b>(=)</b> operator when you declare it or before using it.
        </p>
      </div>
      <div class="grid xs:grid-cols-1">
          <code class="my-2 rounded bg-black text-white p-6">
            >> MARI a = 5<br>
            >> MARI b = a/5 <br>
            >> MARI c = "two"<br><br>
            <i>Output</i><br>
            >> 5<br>
            >> 1.0<br>
            >> two
          </code>
      </div>
    </div>
    <!-- COMPARISON & LOGICAL OPERATORS -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800" id="comparison">
      <div class="grid xs:grid-cols-1">
        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
          Comparison & Logical Operators
        </h4>
        <p class="text-gray-700 dark:text-gray-200">
          Comparison and Logical operators are used to test for true or false. Comparison operators are used in logical
          statements to determine equality or difference between variables or values. Logical operators are used to determine
          the logic between variables or values.
        </p>
        <p class="text-gray-700 dark:text-gray-200">
          You can use <b>UNMAI</b> and <b>POI</b> to make TRUE or FALSE statements and use <b>MATRUM</b> and <b>ALLA</b> instead of AND and OR.
        </p>
      </div>
      <div class="grid xs:grid-cols-1">
          <code class="my-2 rounded bg-black text-white p-6">
            >> 5 == 5 <br>
            >> 6 == 4 <br>
            >> (2 + 8) == (5 + 5)<br>
            >> 6 != 4<br>
            >> 6 != 4 MATRUM 5 == 1<br>
            >> 5 < 6<br>
            >> UNMAI<br>
            >> POI<br><Br>
            <i>Output</i><br>
            >> 1<br>
            >> 0<br>
            >> 1<br>
            >> 1<br>
            >> 0<br>
            >> 1<br>
            >> 1<br>
            >> 0<br><br>
          </code>
      </div>
    </div>
    <!-- IF Condition -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800" id="if">
      <div class="grid xs:grid-cols-1">
        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
          IF Condition
        </h4>
        <p class="text-gray-700 dark:text-gray-200">
          Nilaa includes if-else conditional statements to control the program flow, similar to other programming languages.<br>
          JavaScript includes following forms of if-else conditions:<br><br>
            - <b>ENDRAL</b> condition<br>
            - <b>ENDRAL-VERU</b> condition<br>
            - <b>VERUENDRAL</b> condition<br><br>
            <b>MUDI</b> is used to define that the conditional statement is ended. <b>ENIL</b> is used after the condition and executes the following lines if the condition is true.
            <b>PATHIVU</b> is the print function of <i>Nilaa</i>. It prints everything inside it.
        </p>
      </div>
      <div class="grid xs:grid-cols-1">
          <code class="my-2 rounded bg-black text-white p-6">
            >> ENDRAL 5 == 5 ENIL PATHIVU(123)<br>
            >> ENDRAL 5 != 5 ENIL PATHIVU(123) VERU PATHIVU(321)<br>
            >> ENDRAL 5 != 5 ENIL PATHIVU(123) VERUENDRAL 5 == 5 ENIL PATHIVU(312) VERU PATHIVU(321)<br><br>
            <i>Output</i><br>
            >> 123<br>
            >> 321<br>
            >> 312
          </code>
      </div>
    </div>
    <!-- FOR and WHILE loops -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800" id="forandwhile">
      <div class="grid xs:grid-cols-1">
        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
          FOR loops
        </h4>
        <p class="text-gray-700 dark:text-gray-200">
          The <b>FOR (IDHUVARAI) loop</b> requires following three parts.<br><br>
          Initializer: Initialize a counter variable to start with<br>
          Condition: specify a condition that must evaluate to true for next iteration<br>
          Iteration: increase or decrease counter<br>
        </p>
      </div>
      <div class="grid xs:grid-cols-1">
          <code class="my-2 rounded bg-black text-white p-6">
            >> MARI result = 1 <br>
            >> IDHUVARAI i = 1 ILIRUNDHU 6 ENIL<br>
            >> MARI result = result * i<br>
            >> MUDI<br>
            >> PATHIVU(result)<br><br>
            <i>Output</i><br>
            >> 120
          </code>
      </div>
      <div class="grid xs:grid-cols-1">
        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
          WHILE loops
        </h4>
        <p class="text-gray-700 dark:text-gray-200">
          Nilaa includes <b>WHILE (APPODHU) loop</b> to execute code repeatedly till it satisfies a specified condition. Unlike for loop, while loop only requires condition expression.
        </p>
      </div>
      <div class="grid xs:grid-cols-1">
          <code class="my-2 rounded bg-black text-white p-6">
            >> MARI i = 1 <br>
            >> APPODHU i < 100 ENIL<br>
            >> MARI i = i + 1<br>
            >> MUDI<br>
            >> PATHIVU(i)<br><br>
            <i>Output</i><br>
            >> 100
          </code>
      </div>
    </div>
    <!-- FUNCTIONS -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800" id="functions">
      <div class="grid xs:grid-cols-1">
        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
          Functions
        </h4>
        <p class="text-gray-700 dark:text-gray-200">
          Nilaa provides functions similar to most of the scripting and programming languages.<br>
In Nilaa, a function allows you to define a block of code, give it a name and then execute it as many times as you want.<br>
<br>
A Nilaa function can be defined using <b>function (SEYAL)</b> keyword.
        </p>
      </div>
      <div class="grid xs:grid-cols-1">
          <code class="my-2 rounded bg-black text-white p-6">
            >> SEYAL kootal(a, b)<br>
            >> PATHIVU(a + b)<br>
            >> MUDI<br>
            >> kootal(5, 5) <br><br>
            <i>Output</i><br>
            >> 10
          </code>
      </div>
    </div>
    <!-- STRINGS -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800" id="strings">
      <div class="grid xs:grid-cols-1">
        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
          Strings
        </h4>
        <p class="text-gray-700 dark:text-gray-200">
          String is a primitive data type in Nilaa. A string is textual content. It must be enclosed in single or double quotation marks.
          You can use <b>*</b> to multiply the string the certain number of times mentioned after and use <b>+</b> to append another string.
        </p>
      </div>
      <div class="grid xs:grid-cols-1">
          <code class="my-2 rounded bg-black text-white p-6">
            >> "this is a "+"string"<br>
            >> "hello " * 3<br>
            >> SEYAL vanakkam(aal, murai)<br>
            >> PATHIVU("Vanakkam " * murai + aal)<br>
            >> MUDI<Br>
            >> vanakkam("Nilaa", 3)<br><br>
            <i>Output</i><br>
            >> "this is a string"<br>
            >> "hello hello hello"<br>
            >> Vanakkam Vanakkam Vanakkam Nilaa
          </code>
      </div>
    </div>
    <!-- LISTS -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800" id="lists">
      <div class="grid xs:grid-cols-1">
        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
          Lists
        </h4>
        <p class="text-gray-700 dark:text-gray-200">
          A <b>list (PATTIYAL)</b> is created by placing all the items (elements) inside square brackets [], separated by commas.<br><br>
          You can add more elements to a list by using <b>+</b> followed by the element, use <b>*</b> to add two lists together and
          <b>/index number</b> to get that value in list.<br><br>
          Append, Pop and Extend can be applied to a list by using <b>SERKA(), NEEKKU() and NEETU()</b> respectively.
        </p>
      </div>
      <div class="grid xs:grid-cols-1">
          <code class="my-2 rounded bg-black text-white p-6">
            >> [1, 2, 3, 4] + 5<br>
            >> [1, 2, 3] * [3, 4, 5]<br>
            >> [1, 2, 3] / 0<br><br>
            >> MARI pattiyal = [1, 2, 3]<br>
            >> SERKA(pattiyal, 4)<br>
            >> NEEKKU(pattiyal, 2)<br>
            >> NEETU(pattiyal, [4, 5, 6])<br>
            >> PATHIVU(pattiyal)<br><br>
            <i>Output</i><br>
            >> [1, 2, 3, 4, 5]<br>
            >> [1, 2, 3, 3, 4, 5]<br>
            >> 1<br><br>
            >> 1, 2, 4, 4, 5, 6
          </code>
      </div>
    </div>
    <!-- HELPER FUNCTIONS -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800" id="helpers">
      <div class="grid xs:grid-cols-1">
        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
          Helper Functions
        </h4>
        <p class="text-gray-700 dark:text-gray-200">
          You can use <b>IDHU_ENNAA(), IDHU_ELUTHAA(), IDHU_PATTIYALAA(), THIRUMBU, THODARU, NIRUTHU</b>
          to find if a value is number, string, list or to return, continue and stop while writing your Nilaa program.
        </p>
      </div>
      <div class="grid xs:grid-cols-1">
          <code class="my-2 rounded bg-black text-white p-6">
            >> IDHU_ENNAA(5)<br>
            >> IDHU_ELUTHAA("Nilaa")<br>
            >> IDHU_PATTIYALAA([1, 2, 3])<br><br>
            <i>Output</i><br>
            >> 1<br>
            >> 1<br>
            >> 1
          </code>
      </div>
      <div class="grid xs:grid-cols-1">
          <code class="my-2 rounded bg-black text-white p-6">
            >> <i> THIRUMBU Example</i><br><br>
            >> SEYAL anupu()<br>
            >>  MARI i = 5<br>
            >>  THIRUMBU i<br>
            >> MUDI<br>
            >> anupu()<br><br>
            <i>Output</i><br>
            >> 5
          </code>
      </div>
      <div class="grid xs:grid-cols-1">
          <code class="my-2 rounded bg-black text-white p-6">
            >> <i> THODARU & NIRUTHU Example</i><br><br>
            >> MARI a = []<br>
            >> IDHUVARAI i = 0 ILIRUNDHU 10 ENIL<br>
            >>  ENDRAL i == 4 ENIL<br>
            >>    THODARU<br>
            >>  VERUENDRAL i == 8 ENIL<br>
            >>    NIRUTHU<br>
            >>  MUDI<br>
            >> MARI a = a + i<br>
            >> MUDI<br>
            >> PATHIVU(a)<br><br>
            <i>Output</i><br>
            >> 0, 1, 2, 3, 5, 6, 7
          </code>
      </div>
    </div>
</div>
@endsection
