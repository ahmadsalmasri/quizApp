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
        <h2>JavaScript Quiz</h2>
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
            <form method="POST" action="{{ route('javascriptQuizAction') }}" enctype="multipart/form-data">
                @csrf
                <ol>
                     <li>How to write an IF statement in JavaScript ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jsQ1" value="jsQ1_1"> if (i == 5) </li>
                        <li><input class="form-check-input" type="radio" name="jsQ2" value="jsQ1_2"> if i = 5</li>
                        <li><input class="form-check-input" type="radio" name="jsQ3" value="jsQ1_3"> if i = 5 then</li>
                        <li><input class="form-check-input" type="radio" name="jsQ4" value="jsQ1_4"> if i == 5 then</li>
                    </ul>
                    <hr>
                    <li>Which operator is used to assign a value to a variable ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jsQ2" value="jsQ2_1"> -</li>
                        <li><input class="form-check-input" type="radio" name="jsQ2" value="jsQ2_2"> x</li>
                        <li><input class="form-check-input" type="radio" name="jsQ2" value="jsQ2_3"> *</li>
                        <li><input class="form-check-input" type="radio" name="jsQ2" value="jsQ2_4"> =</li>
                    </ul>
                    <hr>
                    <li>What is the correct JavaScript syntax to change the content of the HTML element below ?</li>
                    <p>&lt;p id="demo"&gt;This is a demonstration.</p>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jsQ3" value="jsQ3_1"> #demo.innerHTML = "Hello World!";</li>
                        <li><input class="form-check-input" type="radio" name="jsQ3" value="jsQ3_2"> document.getElementByName("p").innerHTML = "Hello World!";</li>
                        <li><input class="form-check-input" type="radio" name="jsQ3" value="jsQ3_3"> document.getElementById("demo").innerHTML = "Hello World!";  </li>
                        <li><input class="form-check-input" type="radio" name="jsQ3" value="jsQ3_4"> document.getElement("p").innerHTML = "Hello World!";</li>
                    </ul>
                    <hr>
                    <li>How do you write "Hello World" in an alert box ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jsQ4" value="jsQ4_1"> alert("Hello World");</li>
                        <li><input class="form-check-input" type="radio" name="jsQ4" value="jsQ4_2"> msgBox("Hello World");</li>
                        <li><input class="form-check-input" type="radio" name="jsQ4" value="jsQ4_3"> alertBox("Hello World");</li>
                        <li><input class="form-check-input" type="radio" name="jsQ4" value="jsQ4_4"> msg("Hello World");</li>
                    </ul>
                    <hr>
                     <li>What is the correct way to write a JavaScript array ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jsQ5" value="jsQ5_1"> var colors = ["red", "green", "blue"] </li>
                        <li><input class="form-check-input" type="radio" name="jsQ5" value="jsQ5_2"> var colors = "red", "green", "blue"</li>
                        <li><input class="form-check-input" type="radio" name="jsQ5" value="jsQ5_3"> var colors = 1 = ("red"), 2 = ("green"), 3 = ("blue")</li>
                        <li><input class="form-check-input" type="radio" name="jsQ5" value="jsQ5_4"> var colors = (1:"red", 2:"green", 3:"blue")</li>
                    </ul>
                    <hr>
                     <li>How to write an IF statement for executing some code if "i" is NOT equal to 5 ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jsQ6" value="jsQ6_1"> if (i <> 5)</li>
                        <li><input class="form-check-input" type="radio" name="jsQ6" value="jsQ6_2"> if (i != 5)</li>
                        <li><input class="form-check-input" type="radio" name="jsQ6" value="jsQ6_3"> if i =! 5 then</li>
                        <li><input class="form-check-input" type="radio" name="jsQ6" value="jsQ6_4"> if i <> 5</li>
                    </ul>
                    <hr>
                     <li>Which event occurs when the user clicks on an HTML element ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jsQ7" value="jsQ7_1"> onmouseover</li>
                        <li><input class="form-check-input" type="radio" name="jsQ7" value="jsQ7_2"> onchange</li>
                        <li><input class="form-check-input" type="radio" name="jsQ7" value="jsQ7_3"> onclick</li>
                        <li><input class="form-check-input" type="radio" name="jsQ7" value="jsQ7_4"> onmouseclick</li>
                    </ul>
                    <hr>
                     <li>How do you round the number 7.25, to the nearest integer ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jsQ8" value="jsQ8_1"> Math.rnd(7.25)</li>
                        <li><input class="form-check-input" type="radio" name="jsQ8" value="jsQ8_2"> round(7.25)</li>
                        <li><input class="form-check-input" type="radio" name="jsQ8" value="jsQ8_3"> rnd(7.25)</li>
                        <li><input class="form-check-input" type="radio" name="jsQ8" value="jsQ8_4"> Math.round(7.25)</li>
                    </ul>
                    <hr>
                     <li>How does a FOR loop start ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jsQ9" value="jsQ9_1"> for (i = 0; i <= 5; i++)</li>
                        <li><input class="form-check-input" type="radio" name="jsQ9" value="jsQ9_2"> for (i <= 5; i++)</li>
                        <li><input class="form-check-input" type="radio" name="jsQ9" value="jsQ9_3"> for i = 1 to 5</li>
                        <li><input class="form-check-input" type="radio" name="jsQ9" value="jsQ9_4"> for (i = 0; i <= 5)</li>
                    </ul>
                    <hr>
                     <li>Inside which HTML element do we put the JavaScript ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jsQ10" value="jsQ10_1"> &lt;js&gt;</li>
                        <li><input class="form-check-input" type="radio" name="jsQ10" value="jsQ10_2"> &lt;scripting&gt;</li>
                        <li><input class="form-check-input" type="radio" name="jsQ10" value="jsQ10_3"> &lt;javascript&gt;</li>
                        <li><input class="form-check-input" type="radio" name="jsQ10" value="jsQ10_4"> &lt;script&gt;</li>
                    </ul>
                    <hr>
                     <li>Is JavaScript case-sensitive?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jsQ11" value="jsQ11_1"> False</li>
                        <li><input class="form-check-input" type="radio" name="jsQ11" value="jsQ11_2"> True</li>
                    </ul>
                    <hr>
                    <li>What is the correct syntax for referring to an external script called "xxx.js" ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jsQ12" value="jsQ12_1"> &lt;script href="xxx.js"&gt;</li>
                        <li><input class="form-check-input" type="radio" name="jsQ12" value="jsQ12_2"> &lt;script name="xxx.js"&gt;</li>
                        <li><input class="form-check-input" type="radio" name="jsQ12" value="jsQ12_3"> &lt;script src="xxx.js"&gt;</li>
                    </ul>
                    <hr>
                    <li>How do you call a function named "myFunction" ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jsQ13" value="jsQ13_1"> call function myFunction()</li>
                        <li><input class="form-check-input" type="radio" name="jsQ13" value="jsQ13_2"> call myFunction()</li>
                        <li><input class="form-check-input" type="radio" name="jsQ13" value="jsQ13_3"> myFunction()</li>
                    </ul>
                    <hr>
                    <li>The external JavaScript file must contain the &lt;script&gt; tag.</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jsQ14" value="jsQ14_1"> False</li>
                        <li><input class="form-check-input" type="radio" name="jsQ14" value="jsQ14_2"> True</li>
                    </ul>
                    <hr>
                    <li>How does a WHILE loop start ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jsQ15" value="jsQ15_1"> while (i <= 10; i++)</li>
                        <li><input class="form-check-input" type="radio" name="jsQ15" value="jsQ15_2"> while (i <= 10)</li>
                        <li><input class="form-check-input" type="radio" name="jsQ15" value="jsQ15_3"> while i = 1 to 10</li>
                    </ul>
                    <hr>
                    <li>Where is the correct place to insert a JavaScript ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jsQ16" value="jsQ16_1"> The &lt;body&gt; section</li>
                        <li><input class="form-check-input" type="radio" name="jsQ16" value="jsQ16_2"> The &lt;head&gt; section</li>
                        <li><input class="form-check-input" type="radio" name="jsQ16" value="jsQ16_3"> Both the &lt;head> section and the &lt;body&gt; section are correct</li>
                    </ul>
                    <hr>
                    <li>How can you add a comment in a JavaScript ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jsQ17" value="jsQ17_1"> //This is a comment </li>
                        <li><input class="form-check-input" type="radio" name="jsQ17" value="jsQ17_2"> &lt;!--This is a comment--&gt;</li>
                        <li><input class="form-check-input" type="radio" name="jsQ17" value="jsQ17_3"> 'This is a comment</li>
                    </ul>
                    <hr>
                    <li>What is the correct JavaScript syntax for opening a new window called "w2" ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jsQ18" value="jsQ18_1"> w2 = window.new("http://www.w3schools.com");</li>
                        <li><input class="form-check-input" type="radio" name="jsQ18" value="jsQ18_2"> w2 = window.open("http://www.w3schools.com");</li>
                    </ul>
                    <hr>
                    <li>How do you declare a JavaScript variable ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jsQ19" value="jsQ19_1"> v carName;</li>
                        <li><input class="form-check-input" type="radio" name="jsQ19" value="jsQ19_2"> variable carName;</li>
                        <li><input class="form-check-input" type="radio" name="jsQ19" value="jsQ19_3"> var carName;</li>
                    </ul>
                    <hr>
                    <li>How do you create a function in JavaScript ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jsQ20" value="jsQ20_1"> function myFunction()</li>
                        <li><input class="form-check-input" type="radio" name="jsQ20" value="jsQ20_2"> function:myFunction()</li>
                        <li><input class="form-check-input" type="radio" name="jsQ20" value="jsQ20_3"> function = myFunction()</li>
                    </ul>
                    <hr>
                    <li>How to insert a comment that has more than one line ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jsQ21" value="jsQ21_1"> /*This comment has more than one line*/</li>
                        <li><input class="form-check-input" type="radio" name="jsQ21" value="jsQ21_2"> //This comment has more than one line//</li>
                        <li><input class="form-check-input" type="radio" name="jsQ21" value="jsQ21_3"> &lt;!--This comment has more than one line--&gt;</li>
                    </ul>
                    <hr>
                    <li>JavaScript is the same as Java.</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jsQ22" value="jsQ22_1"> True</li>
                        <li><input class="form-check-input" type="radio" name="jsQ22" value="jsQ22_2"> False</li>
                    </ul>
                    <hr>
                    <li>How can you detect the client's browser name ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jsQ23" value="jsQ23_1"> client.navName</li>
                        <li><input class="form-check-input" type="radio" name="jsQ23" value="jsQ23_2"> navigator.appName</li>
                        <li><input class="form-check-input" type="radio" name="jsQ23" value="jsQ23_3"> browser.name</li>
                    </ul>
                    <hr>
                    <li>What will the following code return: Boolean(10 > 9)</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jsQ24" value="jsQ24_1"> true</li>
                        <li><input class="form-check-input" type="radio" name="jsQ24" value="jsQ24_2"> NaN</li>
                        <li><input class="form-check-input" type="radio" name="jsQ24" value="jsQ24_3"> false</li>
                    </ul>
                    <hr>
                    <li>How do you find the number with the highest value of x and y ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jsQ25" value="jsQ25_1"> ceil(x, y)</li>
                        <li><input class="form-check-input" type="radio" name="jsQ25" value="jsQ25_2"> top(x, y)</li>
                        <li><input class="form-check-input" type="radio" name="jsQ25" value="jsQ25_3"> Math.ceil(x, y)</li>
                        <li><input class="form-check-input" type="radio" name="jsQ25" value="jsQ25_4"> Math.max(x, y) </li>
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
