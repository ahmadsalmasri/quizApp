@extends('layouts.app')

@section('content')
@if(Session::has('success_complate'))
<div class="d-flex justify-content-center">
    <div class="col-md-8 alert alert-success alert-dismissible text-center font-weight-bold mt-2 ml-0 radius" role="alert">
        {{ Session::get('success_complate') }}
    </div>
</div>
@endif
<div class="row">
    <div class="col-md-7 text-end">
        <h2>Python Quiz</h2>
    </div>
    <div class="col-md-5">
        <div class="text-end">
            <a class="text-secondary m-5" href="{{ route('quiz') }}">back to quiz</a>
        </div>
    </div>
</div>

<div class="row" id="VueApp">
    <div class="col-md-12">
        <div>
            <form method="POST" action="{{ route('pythonQuizAction') }}" enctype="multipart/form-data">
                @csrf
                <ol>
                     <li>What is a correct syntax to output "Hello World" in Python ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="pythonQ1" value="pythonQ1_1"> p("Hello World")</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ1" value="pythonQ1_2"> print("Hello World")</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ1" value="pythonQ1_3"> echo("Hello World");</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ1" value="pythonQ1_4"> echo "Hello World"</li>
                    </ul>
                    <hr>
                    <li>How do you insert COMMENTS in Python code ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="pythonQ2" value="pythonQ2_1"> #This is a comment</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ2" value="pythonQ2_2"> /*This is a comment*/</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ2" value="pythonQ2_3"> //This is a comment</li>
                    </ul>
                    <hr>
                    <li>Which one is NOT a legal variable name ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="pythonQ3" value="pythonQ3_1"> my_var</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ3" value="pythonQ3_2"> Myvar</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ3" value="pythonQ3_3"> _myvar</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ3" value="pythonQ3_4"> my-var</li>
                    </ul>
                    <hr>
                    <li>How do you create a variable with the numeric value 5 ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="pythonQ4" value="pythonQ4_1"> x = 5</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ4" value="pythonQ4_2"> x = int(5)</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ4" value="pythonQ4_3"> Both the other answers are correct</li>
                    </ul>
                    <hr>
                     <li>What is the correct file extension for Python files ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="pythonQ5" value="pythonQ5_1"> .py</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ5" value="pythonQ5_2"> .pyth</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ5" value="pythonQ5_3"> .pt</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ5" value="pythonQ5_4"> .pyt</li>
                    </ul>
                    <hr>
                     <li>How do you create a variable with the floating number 2.8 ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="pythonQ6" value="pythonQ6_1"> Both the other answers are correct</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ6" value="pythonQ6_2"> x = float(2.8)</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ6" value="pythonQ6_3"> x = 2.8</li>
                    </ul>
                    <hr>
                     <li>What is the correct syntax to output the type of a variable or object in Python ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="pythonQ7" value="pythonQ7_1"> print(typeof(x))</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ7" value="pythonQ7_2"> print(type(x))</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ7" value="pythonQ7_3"> print(typeOf(x))</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ7" value="pythonQ7_4"> print(typeof x)</li>
                    </ul>
                    <hr>
                     <li>What is the correct way to create a function in Python ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="pythonQ8" value="pythonQ8_1"> create myFunction():</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ8" value="pythonQ8_2"> def myFunction():</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ8" value="pythonQ8_3"> function myfunction():</li>
                    </ul>
                    <hr>
                     <li>In Python, 'Hello', is the same as "Hello"</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="pythonQ9" value="pythonQ9_1"> True</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ9" value="pythonQ9_2"> False</li>
                    </ul>
                    <hr>
                     <li>What is a correct syntax to return the first character in a string ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="pythonQ10" value="pythonQ10_1"> x = sub("Hello", 0, 1)</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ10" value="pythonQ10_2"> x = "Hello".sub(0, 1)</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ10" value="pythonQ10_3"> x = "Hello"[0]</li>
                    </ul>
                    <hr>
                     <li>Which method can be used to remove any whitespace from both the beginning and the end of a string ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="pythonQ11" value="pythonQ11_1"> trim()</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ11" value="pythonQ11_2"> len()</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ11" value="pythonQ11_3"> ptrim()</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ11" value="pythonQ11_4"> strip()</li>
                    </ul>
                    <hr>
                    <li>Which method can be used to return a string in upper case letters ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="pythonQ12" value="pythonQ12_1"> upperCase()</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ12" value="pythonQ12_2"> toUpperCase()</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ12" value="pythonQ12_3"> uppercase()</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ12" value="pythonQ12_4"> upper()</li>
                    </ul>
                    <hr>
                    <li>Which method can be used to replace parts of a string ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="pythonQ13" value="pythonQ13_1"> replace()</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ13" value="pythonQ13_2"> switch()</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ13" value="pythonQ13_3"> replaceString()</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ13" value="pythonQ13_4"> repl()</li>
                    </ul>
                    <hr>
                    <li>Which operator is used to multiply numbers ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="pythonQ14" value="pythonQ14_1"> #</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ14" value="pythonQ14_2"> *</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ14" value="pythonQ14_3"> x</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ14" value="pythonQ14_4"> %</li>
                    </ul>
                    <li>Which operator can be used to compare two values ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="pythonQ15" value="pythonQ15_1"> <></li>
                        <li><input class="form-check-input" type="radio" name="pythonQ15" value="pythonQ15_2"> ><</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ15" value="pythonQ15_3"> ==</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ15" value="pythonQ15_4"> =</li>
                    </ul>
                    <hr>
                    <li>Which of these collections defines a LIST ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="pythonQ16" value="pythonQ16_1"> {"apple", "banana", "cherry"}</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ16" value="pythonQ16_2"> ["apple", "banana", "cherry"]</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ16" value="pythonQ16_3"> ("apple", "banana", "cherry")</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ16" value="pythonQ16_4"> {"name": "apple", "color": "green"}</li>
                    </ul>
                    <hr>
                    <li>Which of these collections defines a TUPLE ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="pythonQ17" value="pythonQ17_1"> ["apple", "banana", "cherry"]</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ17" value="pythonQ17_2"> {"name": "apple", "color": "green"}</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ17" value="pythonQ17_3"> ("apple", "banana", "cherry")</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ17" value="pythonQ17_4"> {"apple", "banana", "cherry"}</li>
                    </ul>
                    <hr>
                    <li>Which of these collections defines a SET ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="pythonQ18" value="pythonQ18_1"> ["apple", "banana", "cherry"]</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ18" value="pythonQ18_2"> {"name": "apple", "color": "green"}</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ18" value="pythonQ18_3"> ("apple", "banana", "cherry")</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ18" value="pythonQ18_4"> {"apple", "banana", "cherry"}</li>
                    </ul>
                    <hr>
                    <li>Which of these collections defines a DICTIONARY ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="pythonQ19" value="pythonQ19_1"> {"name": "apple", "color": "green"}</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ19" value="pythonQ19_2"> {"apple", "banana", "cherry"}</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ19" value="pythonQ19_3"> ("apple", "banana", "cherry")</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ19" value="pythonQ19_4"> ["apple", "banana", "cherry"]</li>
                    </ul>
                    <hr>
                    <li>Which collection is ordered, changeable, and allows duplicate members ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="pythonQ20" value="pythonQ20_1"> LIST</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ20" value="pythonQ20_2"> DICTIONARY</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ20" value="pythonQ20_3"> TUPLE</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ20" value="pythonQ20_4"> SET</li>
                    </ul>
                    <hr>
                    <li>Which collection does not allow duplicate members ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="pythonQ21" value="pythonQ21_1"> TUPLE</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ21" value="pythonQ21_2"> LIST</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ21" value="pythonQ21_3"> SET</li>
                    </ul>
                    <hr>
                    <li>How do you start writing an if statement in Python ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="pythonQ22" value="pythonQ22_1"> if x > y:</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ22" value="pythonQ22_2"> if x > y then:</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ22" value="pythonQ22_3"> if (x > y)</li>
                    </ul>
                    <hr>
                    <li>How do you start writing a while loop in Python ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="pythonQ23" value="pythonQ23_1"> x > y while {</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ23" value="pythonQ23_2"> while x > y:</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ23" value="pythonQ23_3"> while (x > y)</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ23" value="pythonQ23_4"> while x > y {</li>
                    </ul>
                    <hr>
                    <li>How do you start writing a for loop in Python ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="pythonQ24" value="pythonQ24_1"> for x > y:</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ24" value="pythonQ24_2"> for each x in y:</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ24" value="pythonQ24_3"> for x in y:</li>
                    </ul>
                    <hr>
                    <li>Which statement is used to stop a loop ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="pythonQ25" value="pythonQ25_1"> stop</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ25" value="pythonQ25_2"> exit</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ25" value="pythonQ25_3"> return</li>
                        <li><input class="form-check-input" type="radio" name="pythonQ25" value="pythonQ25_4"> break</li>
                    </ul>
                </ol>
                <hr>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Finish</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
