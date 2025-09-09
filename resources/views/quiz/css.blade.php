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
        <h2>CSS Quiz</h2>
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
            <form method="POST" action="{{ route('cssQuizAction') }}" enctype="multipart/form-data">
                @csrf
                <ol>
                    <li>What does CSS stand for ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ1" value="cssQ1_1" v-model="selectedCssQ1"> Colorful Style Sheets</li>
                        <li><input class="form-check-input" type="radio" name="cssQ1" value="cssQ1_2" v-model="selectedCssQ1"> Creative Style Sheets</li>
                        <li><input class="form-check-input" type="radio" name="cssQ1" value="cssQ1_3" v-model="selectedCssQ1"> Cascading Style Sheets</li>
                        <li><input class="form-check-input" type="radio" name="cssQ1" value="cssQ1_4" v-model="selectedCssQ1"> Computer Style Sheets</li>
                    </ul>
                    <hr>
                    <li>Where in an HTML document is the correct place to refer to an external style sheet ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ2" value="cssQ2_1" v-model="selectedCssQ2"> In the &lt;head&gt; section</li>
                        <li><input class="form-check-input" type="radio" name="cssQ2" value="cssQ2_2" v-model="selectedCssQ2"> At the end of the document</li>
                        <li><input class="form-check-input" type="radio" name="cssQ2" value="cssQ2_3" v-model="selectedCssQ2"> In the &lt;body&gt; section</li>
                        <li><input class="form-check-input" type="radio" name="cssQ2" value="cssQ2_4" v-model="selectedCssQ2"> In the &lt;script&gt; section</li>
                    </ul>
                    <hr>
                    <li>Which HTML tag is used to define an internal style sheet ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ3" value="cssQ3_1" v-model="selectedCssQ3"> &lt;css&gt;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ3" value="cssQ3_2" v-model="selectedCssQ3"> &lt;style&gt;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ3" value="cssQ3_3" v-model="selectedCssQ3"> &lt;script&gt;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ3" value="cssQ3_4" v-model="selectedCssQ3"> &lt;body&gt;</li>
                    </ul>
                    <hr>
                    <li>What is the correct HTML for referring to an external style sheet ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ4" value="cssQ4_1" v-model="selectedCssQ4"> &lt;tylesheet&gt;mystyle.css&lt;/stylesheet&gt;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ4" value="cssQ4_2" v-model="selectedCssQ4">  &lt;style src="mystyle.css"&gt;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ4" value="cssQ4_3" v-model="selectedCssQ4">  &lt;link rel="stylesheet" type="text/css" href="mystyle.css"&gt;</li>
                    </ul>
                    <hr>
                    <li>Which HTML attribute is used to define inline styles ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ5" value="cssQ5_1" v-model="selectedCssQ5"> class</li>
                        <li><input class="form-check-input" type="radio" name="cssQ5" value="cssQ5_2" v-model="selectedCssQ5"> style</li>
                        <li><input class="form-check-input" type="radio" name="cssQ5" value="cssQ5_3" v-model="selectedCssQ5"> syles</li>
                        <li><input class="form-check-input" type="radio" name="cssQ5" value="cssQ5_4" v-model="selectedCssQ5"> font</li>
                    </ul>
                    <hr>
                    <li>How do you insert a comment in a CSS file ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ6" value="cssQ6_1" v-model="selectedCssQ6"> /*this is a comment*/</li>
                        <li><input class="form-check-input" type="radio" name="cssQ6" value="cssQ6_2" v-model="selectedCssQ6"> 'this is a comment</li>
                        <li><input class="form-check-input" type="radio" name="cssQ6" value="cssQ6_3" v-model="selectedCssQ6"> //this is a commnet</li>
                        <li><input class="form-check-input" type="radio" name="cssQ6" value="cssQ6_4" v-model="selectedCssQ6"> //this is a comment//</li>
                    </ul>
                    <hr>
                    <li>Which is the correct CSS syntax ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ7" value="cssQ7_1" v-model="selectedCssQ7"> {body;color;red;}</li>
                        <li><input class="form-check-input" type="radio" name="cssQ7" value="cssQ7_2" v-model="selectedCssQ7"> body:color=red;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ7" value="cssQ7_3" v-model="selectedCssQ7"> body{color:red;}</li>
                        <li><input class="form-check-input" type="radio" name="cssQ7" value="cssQ7_4" v-model="selectedCssQ7"> {body;color:red;}</li>
                    </ul>
                    <hr>
                    <li>Which CSS property is used to change the text color of an element ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ8" value="cssQ8_1" v-model="selectedCssQ8"> color</li>
                        <li><input class="form-check-input" type="radio" name="cssQ8" value="cssQ8_2" v-model="selectedCssQ8"> text-color</li>
                        <li><input class="form-check-input" type="radio" name="cssQ8" value="cssQ8_3" v-model="selectedCssQ8"> fgcolor</li>
                    </ul>
                    <hr>
                    <li>How do you add a background color for all &lt;h1&gt; elements ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ9" value="cssQ9_1" v-model="selectedCssQ9"> h1.all{background-color:#FFFFFF;}</li>
                        <li><input class="form-check-input" type="radio" name="cssQ9" value="cssQ9_2" v-model="selectedCssQ9"> h1{background-color:#FFFFFF;}</li>
                        <li><input class="form-check-input" type="radio" name="cssQ9" value="cssQ9_3" v-model="selectedCssQ9"> all.h1{background-color:#FFFFFF;}</li>
                    </ul>
                    <hr>
                    <li>How do you display hyperlinks without an underline ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ10" value="cssQ10_1" v-model="selectedCssQ10"> a{text-decoration:none;}</li>
                        <li><input class="form-check-input" type="radio" name="cssQ10" value="cssQ10_2" v-model="selectedCssQ10"> a{text-decoration:no-underline;}</li>
                        <li><input class="form-check-input" type="radio" name="cssQ10" value="cssQ10_3" v-model="selectedCssQ10"> a{underline:none;}</li>
                        <li><input class="form-check-input" type="radio" name="cssQ10" value="cssQ10_4" v-model="selectedCssQ10"> a{decoration:no-underline;}</li>
                    </ul>
                    <hr>
                    <li>How do you make each word in a text start with a capital letter ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ11" value="cssQ11_1" v-model="selectedCssQ11"> you can't do that with CSS</li>
                        <li><input class="form-check-input" type="radio" name="cssQ11" value="cssQ11_2" v-model="selectedCssQ11"> text-style:capitalize</li>
                        <li><input class="form-check-input" type="radio" name="cssQ11" value="cssQ11_3" v-model="selectedCssQ11"> transform:capitalize</li>
                        <li><input class="form-check-input" type="radio" name="cssQ11" value="cssQ11_4" v-model="selectedCssQ11"> text-transform:capitalize</li>
                    </ul>
                    <hr>
                    <li>Which property is used to change the background color ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ12" value="cssQ12_1" v-model="selectedCssQ12"> bgcolor</li>
                        <li><input class="form-check-input" type="radio" name="cssQ12" value="cssQ12_2" v-model="selectedCssQ12"> background-color</li>
                        <li><input class="form-check-input" type="radio" name="cssQ12" value="cssQ12_3" v-model="selectedCssQ12"> color</li>
                    </ul>
                    <hr>
                    <li>What is the correct CSS syntax for making all the &lt;p&gt; elements bold ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ13" value="cssQ13_1" v-model="selectedCssQ13"> p{text-size:bold;}</li>
                        <li><input class="form-check-input" type="radio" name="cssQ13" value="cssQ13_2" v-model="selectedCssQ13"> &lt;p syle="font-size:bold";&gt;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ13" value="cssQ13_3" v-model="selectedCssQ13"> &lt;p syle="text-size:bold";&gt;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ13" value="cssQ13_4" v-model="selectedCssQ13"> p{font-weight:bold;}</li>
                    </ul>
                    <hr>
                    <li>Which CSS property controls the text size ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ14" value="cssQ14_1" v-model="selectedCssQ14"> font-style</li>
                        <li><input class="form-check-input" type="radio" name="cssQ14" value="cssQ14_2" v-model="selectedCssQ14"> text-size</li>
                        <li><input class="form-check-input" type="radio" name="cssQ14" value="cssQ14_3" v-model="selectedCssQ14"> text-style</li>
                        <li><input class="form-check-input" type="radio" name="cssQ14" value="cssQ14_4" v-model="selectedCssQ14"> font-size</li>
                    </ul>
                    <hr>
                    <li>What is the default value of the position property ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ15" value="cssQ15_1" v-model="selectedCssQ15"> absolute</li>
                        <li><input class="form-check-input" type="radio" name="cssQ15" value="cssQ15_2" v-model="selectedCssQ15"> relative</li>
                        <li><input class="form-check-input" type="radio" name="cssQ15" value="cssQ15_3" v-model="selectedCssQ15"> static</li>
                        <li><input class="form-check-input" type="radio" name="cssQ15" value="cssQ15_4" v-model="selectedCssQ15"> fixed</li>
                    </ul>
                    <hr>
                    <li>How do you select all p elements inside a div element ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ16" value="cssQ16_1" v-model="selectedCssQ16"> div p</li>
                        <li><input class="form-check-input" type="radio" name="cssQ16" value="cssQ16_2" v-model="selectedCssQ16"> div.p</li>
                        <li><input class="form-check-input" type="radio" name="cssQ16" value="cssQ16_3" v-model="selectedCssQ16"> div + p</li>
                    </ul>
                    <hr>
                    <li>How do you group selectors ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ17" value="cssQ17_1" v-model="selectedCssQ17"> Separate each selector with a comma</li>
                        <li><input class="form-check-input" type="radio" name="cssQ17" value="cssQ17_2" v-model="selectedCssQ17"> Separate each selector with a plus sign</li>
                        <li><input class="form-check-input" type="radio" name="cssQ17" value="cssQ17_3" v-model="selectedCssQ17"> Separate each selector with a space</li>
                    </ul>
                    <hr>
                    <li>How do you select an element with id 'demo' ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ18" value="cssQ18_1" v-model="selectedCssQ18"> demo</li>
                        <li><input class="form-check-input" type="radio" name="cssQ18" value="cssQ18_2" v-model="selectedCssQ18"> #demo</li>
                        <li><input class="form-check-input" type="radio" name="cssQ18" value="cssQ18_3" v-model="selectedCssQ18"> *demo</li>
                        <li><input class="form-check-input" type="radio" name="cssQ18" value="cssQ18_4" v-model="selectedCssQ18"> .demo</li>
                    </ul>
                    <hr>
                    <li>How do you select elements with class name 'test' ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ19" value="cssQ19_1" v-model="selectedCssQ19"> .test</li>
                        <li><input class="form-check-input" type="radio" name="cssQ19" value="cssQ19_2" v-model="selectedCssQ19"> *test</li>
                        <li><input class="form-check-input" type="radio" name="cssQ19" value="cssQ19_3" v-model="selectedCssQ19"> test</li>
                        <li><input class="form-check-input" type="radio" name="cssQ19" value="cssQ19_4" v-model="selectedCssQ19"> #test</li>
                    </ul>
                    <hr>
                    <li>Which property is used to change the left margin of an element ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ20" value="cssQ20_1" v-model="selectedCssQ20"> indent</li>
                        <li><input class="form-check-input" type="radio" name="cssQ20" value="cssQ20_2" v-model="selectedCssQ20"> padding-left</li>
                        <li><input class="form-check-input" type="radio" name="cssQ20" value="cssQ20_3" v-model="selectedCssQ20"> margin-left</li>
                    </ul>
                    <hr>
                    <li>How do you make a list that lists its items with squares ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ21" value="cssQ21_1" v-model="selectedCssQ21"> list: square;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ21" value="cssQ21_2" v-model="selectedCssQ21"> list-style-type: square;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ21" value="cssQ21_3" v-model="selectedCssQ21"> list-type: square;</li>
                    </ul>
                    <hr>
                    <li>When using the padding property; are you allowed to use negative values ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ22" value="cssQ22_1" v-model="selectedCssQ22"> No</li>
                        <li><input class="form-check-input" type="radio" name="cssQ22" value="cssQ22_2" v-model="selectedCssQ22"> Yes</li>
                    </ul>
                    <hr>
                    <li>Which property is used to change the font of an element ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ23" value="cssQ23_1" v-model="selectedCssQ23"> font-style</li>
                        <li><input class="form-check-input" type="radio" name="cssQ23" value="cssQ23_2" v-model="selectedCssQ23"> font-weight</li>
                        <li><input class="form-check-input" type="radio" name="cssQ23" value="cssQ23_3" v-model="selectedCssQ23"> font-family</li>
                    </ul>
                    <hr>
                    <li>How do you display a border like this:</li>
                    <span>The top border = 10 pixels |</span>
                    <span>The bottom border = 5 pixels |</span>
                    <span>The left border = 20 pixels |</span>
                    <span>The right border = 1pixel |</span>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ24" value="cssQ24_1" v-model="selectedCssQ24"> border-width:10px 1px 5px 20px;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ24" value="cssQ24_2" v-model="selectedCssQ24"> border-width:5px 20px 10px 1px;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ24" value="cssQ24_3" v-model="selectedCssQ24"> border-width:10px 20px 5px 1px;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ24" value="cssQ24_4" v-model="selectedCssQ24"> border-width:10px 5px 20px 1px;</li>
                    </ul>
                    <hr>
                    <li>How do you make the text bold ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ25" value="cssQ25_1" v-model="selectedCssQ25"> style:bold;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ25" value="cssQ25_2" v-model="selectedCssQ25"> font-weight:bold;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ25" value="cssQ25_3" v-model="selectedCssQ25"> font:bold;</li>
                    </ul>
                    <hr>
                    <li>How do you Select all elements with lang attribute ="it"</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ26" value="cssQ26_1" v-model="selectedCssQ26"> #[lang=it]</li>
                        <li><input class="form-check-input" type="radio" name="cssQ26" value="cssQ26_2" v-model="selectedCssQ26"> [lang=it]</li>
                        <li><input class="form-check-input" type="radio" name="cssQ26" value="cssQ26_3" v-model="selectedCssQ26"> [lang="it"]</li>
                    </ul>
                    <hr>
                    <li>How do you Select all &lt;p&gt; elements that are next to &lt;ul&gt; elements ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ27" value="cssQ27_1" v-model="selectedCssQ27"> ul > p</li>
                        <li><input class="form-check-input" type="radio" name="cssQ27" value="cssQ27_2" v-model="selectedCssQ27"> ul ~ p</li>
                        <li><input class="form-check-input" type="radio" name="cssQ27" value="cssQ27_3" v-model="selectedCssQ27"> ul + p</li>
                        <li><input class="form-check-input" type="radio" name="cssQ27" value="cssQ27_4" v-model="selectedCssQ27"> ul p</li>
                    </ul>
                    <hr>
                    <li>How do you Select all &lt;p&gt; elements where that parent is a  &lt;div&gt; element ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ28" value="cssQ28_1" v-model="selectedCssQ28"> div > p</li>
                        <li><input class="form-check-input" type="radio" name="cssQ28" value="cssQ28_2" v-model="selectedCssQ28"> div p</li>
                        <li><input class="form-check-input" type="radio" name="cssQ28" value="cssQ28_3" v-model="selectedCssQ28"> div ~ p</li>
                        <li><input class="form-check-input" type="radio" name="cssQ28" value="cssQ28_4" v-model="selectedCssQ28"> div + p</li>
                    </ul>
                    <hr>
                    <li>How do you Select all &lt;table&gt; elements that are siblings of a &lt;ul&gt; element ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ29" value="cssQ29_1" v-model="selectedCssQ29"> ul + table</li>
                        <li><input class="form-check-input" type="radio" name="cssQ29" value="cssQ29_2" v-model="selectedCssQ29"> ul ~ table</li>
                        <li><input class="form-check-input" type="radio" name="cssQ29" value="cssQ29_3" v-model="selectedCssQ29"> ul table</li>
                        <li><input class="form-check-input" type="radio" name="cssQ29" value="cssQ29_4" v-model="selectedCssQ29"> ul > table</li>
                    </ul>
                    <hr>
                    <li>How do you Selects all disabled form elements ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ30" value="cssQ30_1" v-model="selectedCssQ30"> :disabled</li>
                        <li><input class="form-check-input" type="radio" name="cssQ30" value="cssQ30_2" v-model="selectedCssQ30"> [disabled]</li>
                        <li><input class="form-check-input" type="radio" name="cssQ30" value="cssQ30_3" v-model="selectedCssQ30"> .disabled</li>
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

@section('script')
    <script>
    </script>
@endsection
@endsection
