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
        <h2>PHP Quiz</h2>
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
            <form method="POST" action="{{ route('phpQuizAction') }}" enctype="multipart/form-data">
                @csrf
                <ol>
                     <li>What does PHP stand for ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="phpQ1" value="phpQ1_1"> Personal Hypertext Processor</li>
                        <li><input class="form-check-input" type="radio" name="phpQ1" value="phpQ1_2"> Private Home Page</li>
                        <li><input class="form-check-input" type="radio" name="phpQ1" value="phpQ1_3"> PHP: Hypertext Preprocessor</li>
                    </ul>
                    <hr>
                    <li>PHP server scripts are surrounded by delimiters, which ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="phpQ2" value="phpQ2_1"> &lt;?php...?&gt; </li>
                        <li><input class="form-check-input" type="radio" name="phpQ2" value="phpQ2_2"> &lt;&>...&lt;/&&gt;</li>
                        <li><input class="form-check-input" type="radio" name="phpQ2" value="phpQ2_3"> &lt;?php>...&lt;/?&gt;</li>
                        <li><input class="form-check-input" type="radio" name="phpQ2" value="phpQ2_4"> &lt;script>...&lt;/script&gt;</li>
                    </ul>
                    <hr>
                    <li>How do you write "Hello World" in PHP</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="phpQ3" value="phpQ3_1"> Document.Write("Hello World");</li>
                        <li><input class="form-check-input" type="radio" name="phpQ3" value="phpQ3_2"> echo "Hello World";</li>
                        <li><input class="form-check-input" type="radio" name="phpQ3" value="phpQ3_3"> "Hello World";</li>
                    </ul>
                    <hr>
                    <li>All variables in PHP start with which symbol ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="phpQ4" value="phpQ4_1"> _</li>
                        <li><input class="form-check-input" type="radio" name="phpQ4" value="phpQ4_2"> &</li>
                        <li><input class="form-check-input" type="radio" name="phpQ4" value="phpQ4_3"> !</li>
                        <li><input class="form-check-input" type="radio" name="phpQ4" value="phpQ4_4"> $</li>
                    </ul>
                    <hr>
                     <li>What is the correct way to end a PHP statement ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="phpQ5" value="phpQ5_1"> &lt;/php&gt;</li>
                        <li><input class="form-check-input" type="radio" name="phpQ5" value="phpQ5_2"> .</li>
                        <li><input class="form-check-input" type="radio" name="phpQ5" value="phpQ5_3"> New line</li>
                        <li><input class="form-check-input" type="radio" name="phpQ5" value="phpQ5_4"> ;</li>
                    </ul>
                    <hr>
                     <li>Which operator is used to check if two values are equal and of same data type ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="phpQ6" value="phpQ6_1"> ==</li>
                        <li><input class="form-check-input" type="radio" name="phpQ6" value="phpQ6_2"> !=</li>
                        <li><input class="form-check-input" type="radio" name="phpQ6" value="phpQ6_3"> ===</li>
                        <li><input class="form-check-input" type="radio" name="phpQ6" value="phpQ6_4"> =</li>
                    </ul>
                    <hr>
                     <li>The if statement is used to execute some code only if a specified condition is true</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="phpQ7" value="phpQ7_1"> True</li>
                        <li><input class="form-check-input" type="radio" name="phpQ7" value="phpQ7_2"> False</li>
                    </ul>
                    <hr>
                     <li>How do you create an array in PHP ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="phpQ8" value="phpQ8_1"> $cars = array("Volvo", "BMW", "Toyota");</li>
                        <li><input class="form-check-input" type="radio" name="phpQ8" value="phpQ8_2"> $cars = array["Volvo", "BMW", "Toyota"];</li>
                        <li><input class="form-check-input" type="radio" name="phpQ8" value="phpQ8_3"> $cars = "Volvo", "BMW", "Toyota";</li>
                    </ul>
                    <hr>
                     <li>In PHP, the only way to output text is with echo.</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="phpQ9" value="phpQ9_1"> True</li>
                        <li><input class="form-check-input" type="radio" name="phpQ9" value="phpQ9_2"> False</li>
                    </ul>
                    <hr>
                     <li>How do you create a cookie in PHP ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="phpQ10" value="phpQ10_1"> setcookie()</li>
                        <li><input class="form-check-input" type="radio" name="phpQ10" value="phpQ10_2"> makecookie() </li>
                        <li><input class="form-check-input" type="radio" name="phpQ10" value="phpQ10_3"> createcookie</li>
                    </ul>
                    <hr>
                     <li>Which one of these variables has an illegal name ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="phpQ11" value="phpQ11_1"> $myVar</li>
                        <li><input class="form-check-input" type="radio" name="phpQ11" value="phpQ11_2"> $_my_Var</li>
                        <li><input class="form-check-input" type="radio" name="phpQ11" value="phpQ11_3"> $my-Var</li>
                        <li><input class="form-check-input" type="radio" name="phpQ11" value="phpQ11_4"> $my_Var</li>
                    </ul>
                    <hr>
                    <li>The die() and exit() functions do the exact same thing.</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="phpQ12" value="phpQ12_1"> False</li>
                        <li><input class="form-check-input" type="radio" name="phpQ12" value="phpQ12_2"> True</li>
                    </ul>
                    <hr>
                    <li>PHP can be run on Microsoft Windows IIS(Internet Information Server):</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="phpQ13" value="phpQ13_1"> True</li>
                        <li><input class="form-check-input" type="radio" name="phpQ13" value="phpQ13_2"> False</li>
                    </ul>
                    <hr>
                    <li>What is a correct way to add a comment in PHP ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="phpQ14" value="phpQ14_1"> &lt;comment&gt;.....&lt;/comment&gt;</li>
                        <li><input class="form-check-input" type="radio" name="phpQ14" value="phpQ14_2"> *\.....\*</li>
                        <li><input class="form-check-input" type="radio" name="phpQ14" value="phpQ14_3"> &lt;!--.....--&gt;</li>
                        <li><input class="form-check-input" type="radio" name="phpQ14" value="phpQ14_4"> /*.....*/</li>
                    </ul>
                    <li>What is the correct way to add 1 to the $count variable ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="phpQ15" value="phpQ15_1"> $count++;</li>
                        <li><input class="form-check-input" type="radio" name="phpQ15" value="phpQ15_2"> count++;</li>
                        <li><input class="form-check-input" type="radio" name="phpQ15" value="phpQ15_3"> $count =+1</li>
                        <li><input class="form-check-input" type="radio" name="phpQ15" value="phpQ15_4"> ++count</li>
                    </ul>
                    <hr>
                    <li>Which superglobal variable holds information about headers, paths, and script locations ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="phpQ16" value="phpQ16_1"> $_GET</li>
                        <li><input class="form-check-input" type="radio" name="phpQ16" value="phpQ16_2"> $_SESSION</li>
                        <li><input class="form-check-input" type="radio" name="phpQ16" value="phpQ16_3"> $_SERVER</li>
                        <li><input class="form-check-input" type="radio" name="phpQ16" value="phpQ16_4"> $GLOBALS</li>
                    </ul>
                    <hr>
                    <li>PHP allows you to send emails directly from a scrip</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="phpQ17" value="phpQ17_1"> False</li>
                        <li><input class="form-check-input" type="radio" name="phpQ17" value="phpQ17_2"> True</li>
                    </ul>
                    <hr>
                    <li>What is the correct way to open the file "time.txt" as readable?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="phpQ18" value="phpQ18_1"> fopen("time.txt","r+");</li>
                        <li><input class="form-check-input" type="radio" name="phpQ18" value="phpQ18_2"> open("time.txt");</li>
                        <li><input class="form-check-input" type="radio" name="phpQ18" value="phpQ18_3"> open("time.txt","read");</li>
                        <li><input class="form-check-input" type="radio" name="phpQ18" value="phpQ18_4"> fopen("time.txt","r");</li>
                    </ul>
                    <hr>
                    <li>What is the correct way to create a function in PHP ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="phpQ19" value="phpQ19_1"> function myFunction()</li>
                        <li><input class="form-check-input" type="radio" name="phpQ19" value="phpQ19_2"> create myFunction()</li>
                        <li><input class="form-check-input" type="radio" name="phpQ19" value="phpQ19_3"> new_function myFunction()</li>
                    </ul>
                    <hr>
                    <li>What is the correct way to include the file "time.inc" ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="phpQ20" value="phpQ20_1"> &lt;!-- include file="time.inc" --&gt;</li>
                        <li><input class="form-check-input" type="radio" name="phpQ20" value="phpQ20_2"> &lt;?php include:"time.inc"; ?&gt;</li>
                        <li><input class="form-check-input" type="radio" name="phpQ20" value="phpQ20_3"> &lt;?php include "time.inc"; ?&gt;</li>
                        <li><input class="form-check-input" type="radio" name="phpQ20" value="phpQ20_4"> &lt;?php include file="time.inc"; ?&gt;</li>
                    </ul>
                    <hr>
                    <li>Include files must have the file extension ".inc"</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="phpQ21" value="phpQ21_1"> True</li>
                        <li><input class="form-check-input" type="radio" name="phpQ21" value="phpQ21_2"> False</li>
                    </ul>
                    <hr>
                    <li>In PHP you can use both single quotes ( ' ' ) and double quotes ( " " ) for strings:</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="phpQ22" value="phpQ22_1"> True</li>
                        <li><input class="form-check-input" type="radio" name="phpQ22" value="phpQ22_2"> False</li>
                    </ul>
                    <hr>
                    <li>When using the POST method, variables are displayed in the URL:</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="phpQ23" value="phpQ23_1"> True</li>
                        <li><input class="form-check-input" type="radio" name="phpQ23" value="phpQ23_2"> False</li>
                    </ul>
                    <hr>
                    <li>How do you get information from a form that is submitted using the "get" method ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="phpQ24" value="phpQ24_1"> Request.Form;</li>
                        <li><input class="form-check-input" type="radio" name="phpQ24" value="phpQ24_2"> Request.QueryString;</li>
                        <li><input class="form-check-input" type="radio" name="phpQ24" value="phpQ24_3"> $_GET[];</li>
                    </ul>
                    <hr>
                    <li>The PHP syntax is most similar to:</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="phpQ25" value="phpQ25_1"> VBScript</li>
                        <li><input class="form-check-input" type="radio" name="phpQ25" value="phpQ25_2"> JavaScript</li>
                        <li><input class="form-check-input" type="radio" name="phpQ25" value="phpQ25_3"> Perl and C</li>
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
