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
        <h2>jQuey Quiz</h2>
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
            <form method="POST" action="{{ route('jqueyQuizAction') }}" enctype="multipart/form-data">
                @csrf
                <ol>
                    <li>Which jQuery method is used to hide selected elements ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jqueryQ1" value="jqueryQ1_1"> hidden()</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ1" value="jqueryQ1_2"> visible(false)</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ1" value="jqueryQ1_3"> display(none)</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ1" value="jqueryQ1_4"> hide() </li>
                    </ul>
                    <hr>
                    <li>Look at the following selector: $(":disabled"). What does it select ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jqueryQ2" value="jqueryQ2_1"> All elements containing the text "disabled"</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ2" value="jqueryQ2_2"> All disabled input elements</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ2" value="jqueryQ2_3"> All hidden elements</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ2" value="jqueryQ2_4"> All elements that does not contain the text "disabled"</li>
                    </ul>
                    <hr>
                    <li>Is it possible to use jQuery together with AJAX ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jqueryQ3" value="jqueryQ3_1"> yes</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ3" value="jqueryQ3_2"> no</li>
                    </ul>
                    <hr>
                    <li>Which of the following is correct ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jqueryQ4" value="jqueryQ4_1"> jQuery is a JSON Library</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ4" value="jqueryQ4_2"> jQuery is a JavaScript Library</li>
                    </ul>
                    <hr>
                    <li>Which jQuery function is used to prevent code from running, before the document is finished loading ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jqueryQ5" value="jqueryQ5_1"> $(document).ready()</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ5" value="jqueryQ5_2"> $(document).load()</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ5" value="jqueryQ5_3"> $(body).onload()</li>
                    </ul>
                    <hr>
                    <li>With jQuery, look at the following selector: $("div.intro"). What does it select ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jqueryQ6" value="jqueryQ6_1"> All div elements with id="intro"</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ6" value="jqueryQ6_2"> The first div element with class="intro"</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ6" value="jqueryQ6_3"> The first div element with id="intro"</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ6" value="jqueryQ6_4"> All div elements with class="intro"</li>
                    </ul>
                    <hr>
                    <li>What is the correct jQuery code for making all div elements 100 pixels high ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jqueryQ7" value="jqueryQ7_1"> $("div").height(100)</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ7" value="jqueryQ7_2"> $("div").height="100"</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ7" value="jqueryQ7_3"> $("div").yPos(100)</li>
                    </ul>
                    <hr>
                    <li>Look at the following selector: $("div"). What does it select ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jqueryQ8" value="jqueryQ8_1"> The first div element</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ8" value="jqueryQ8_2"> The first div element with class div</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ8" value="jqueryQ8_3"> All div elements</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ8" value="jqueryQ8_4"> The first div element with id div</li>
                    </ul>
                    <hr>
                    <li>jQuery uses CSS selectors to select elements ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jqueryQ9" value="jqueryQ9_1"> False</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ9" value="jqueryQ9_2"> True</li>
                    </ul>
                    <hr>
                    <li>What is the correct jQuery code to set the background color of all p elements to red ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jqueryQ10" value="jqueryQ10_1"> $("p").css("background-color","red");</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ10" value="jqueryQ10_2"> $("p").style("background-color","red")</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ10" value="jqueryQ10_3"> $("p").manipulate("background-color","red");</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ10" value="jqueryQ10_4"> $("p").layout("background-color","red");</li>
                    </ul>
                    <hr>
                    <li>The jQuery animate() method can be used to animate ANY CSS property ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jqueryQ11" value="jqueryQ11_1"> Yes</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ11" value="jqueryQ11_2"> Only properties containing numeric values</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ11" value="jqueryQ11_3"> All properties except the shorthand properties</li>
                    </ul>
                    <hr>
                    <li>Which jQuery method is used to set one or more style properties for selected elements ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jqueryQ12" value="jqueryQ12_1"> style()</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ12" value="jqueryQ12_2"> xml()</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ12" value="jqueryQ12_3"> html()</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ12" value="jqueryQ12_4"> css()</li>
                    </ul>
                    <hr>
                    <li>Is jQuery a W3C standard ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jqueryQ13" value="jqueryQ13_1"> no</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ13" value="jqueryQ13_2"> yes</li>
                    </ul>
                    <hr>
                    <li>What scripting language is jQuery written in ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jqueryQ14" value="jqueryQ14_1"> C++</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ14" value="jqueryQ14_2"> JavaScript</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ14" value="jqueryQ14_3"> VBScript</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ14" value="jqueryQ14_4"> C#</li>
                    </ul>
                    <hr>
                    <li>Which sign does jQuery use as a shortcut for jQuery ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jqueryQ15" value="jqueryQ15_1"> the # sign</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ15" value="jqueryQ15_2"> the % sign</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ15" value="jqueryQ15_3"> the $ sign</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ15" value="jqueryQ15_4"> the ? sign</li>
                    </ul>
                    <hr>
                    <li>Which jQuery method is used to remove selected elements ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jqueryQ16" value="jqueryQ16_1"> None of them</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ16" value="jqueryQ16_2"> remove()</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ16" value="jqueryQ16_3"> detach()</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ16" value="jqueryQ16_4"> Both methods can be used</li>
                    </ul>
                    <hr>
                    <li>Look at the following selector: $("div p"). What does it select ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jqueryQ17" value="jqueryQ17_1"> All p elements inside a div element</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ17" value="jqueryQ17_2"> All div elements with a p element</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ17" value="jqueryQ17_3"> The first p element inside a div element</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ17" value="jqueryQ17_4"> All p elements that is parent of div element</li>
                    </ul>
                    <hr>
                    <li>The jQuery html() method works for both HTML and XML documents</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jqueryQ18" value="jqueryQ18_1"> False</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ18" value="jqueryQ18_2"> True</li>
                    </ul>
                    <hr>
                    <li>Which jQuery method returns the direct parent element of the selected element ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jqueryQ19" value="jqueryQ19_1"> ancestor()</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ19" value="jqueryQ19_2"> ancestors()</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ19" value="jqueryQ19_3"> parent()</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ19" value="jqueryQ19_4"> parents()</li>
                    </ul>
                    <hr>
                    <li>Is jQuery a library for client scripting or server scripting ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jqueryQ20" value="jqueryQ20_1"> Server scripting</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ20" value="jqueryQ20_2"> Client scripting</li>
                    </ul>
                    <hr>
                    <li>Which jQuery method is used to perform an asynchronous HTTP request ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jqueryQ21" value="jqueryQ21_1"> jQuery.ajaxAsync()</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ21" value="jqueryQ21_2"> jQuery.ajax()</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ21" value="jqueryQ21_3"> jQuery.ajaxSetup()</li>
                    </ul>
                    <hr>
                    <li>Which jQuery method should be used to deal with name conflicts ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jqueryQ22" value="jqueryQ22_1"> noNameConflict()</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ22" value="jqueryQ22_2"> nameConflict()</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ22" value="jqueryQ22_3"> conflict()</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ22" value="jqueryQ22_4"> noConflict()</li>
                    </ul>
                    <hr>
                    <li>Look at the following selector: $("p#intro"). What does it select ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jqueryQ23" value="jqueryQ23_1"> The p element with id="intro"</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ23" value="jqueryQ23_2"> The p element with class="intro"</li>
                    </ul>
                    <hr>
                    <li>Which jQuery method is used to switch between adding/removing one or more classes (for CSS) from selected elements ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jqueryQ24" value="jqueryQ24_1"> switchClass()</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ24" value="jqueryQ24_2"> switch()</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ24" value="jqueryQ24_3"> toggleClass()</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ24" value="jqueryQ24_4"> altClass()</li>
                    </ul>
                    <hr>
                    <li>Which statement is true ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="jqueryQ25" value="jqueryQ25_1"> To use jQuery, you can refer to a hosted jQuery library at Google</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ25" value="jqueryQ25_2"> To use jQuery, you do not have to do anything. Most browsers (Internet Explorer, Chrome, Firefox and Opera) have the jQuery library built in the browser</li>
                        <li><input class="form-check-input" type="radio" name="jqueryQ25" value="jqueryQ25_3"> To use jQuery, you must buy the jQuery library at www.jquery.com</li>
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
