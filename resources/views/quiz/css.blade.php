@extends('layouts.app')

@section('content')
@if(Session::has('success_complate'))
<div class="d-flex justify-content-center">
    <div class="col-md-8 alert alert-success alert-dismissible text-center font-weight-bold mt-2 ml-0 radius" role="alert">
        {{ Session::get('success_complate') }}
    </div>
</div>
@endif
<div class="text-center">
    <a class="text-secondary" href="{{ route('quiz') }}">back to quiz</a>
</div>

<div class="row" id="VueApp">
    <div class="col-md-12">
        <div>
            <form method="POST" action="{{ route('cssQuizAction') }}" enctype="multipart/form-data">
                @csrf
                <ol>
                    <li style="color: blueviolet;">What does CSS stand for ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ1" value="wrong" v-model="selectedCssQ1"> Colorful Style Sheets</li>
                        <li><input class="form-check-input" type="radio" name="cssQ1" value="wrong" v-model="selectedCssQ1"> Creative Style Sheets</li>
                        <li><input class="form-check-input" type="radio" name="cssQ1" value="right" v-model="selectedCssQ1"> Cascading Style Sheets</li>
                        <li><input class="form-check-input" type="radio" name="cssQ1" value="wrong" v-model="selectedCssQ1"> Computer Style Sheets</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Where in an HTML document is the correct place to refer to an external style sheet ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ2" value="right" v-model="selectedCssQ2"> In the &lt;head&gt; section</li>
                        <li><input class="form-check-input" type="radio" name="cssQ2" value="wrong" v-model="selectedCssQ2"> At the end of the document</li>
                        <li><input class="form-check-input" type="radio" name="cssQ2" value="wrong" v-model="selectedCssQ2"> In the &lt;body&gt; section</li>
                        <li><input class="form-check-input" type="radio" name="cssQ2" value="wrong" v-model="selectedCssQ2"> In the &lt;script&gt; section</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which HTML tag is used to define an internal style sheet ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ3" value="wrong" v-model="selectedCssQ3"> &lt;css&gt;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ3" value="right" v-model="selectedCssQ3"> &lt;style&gt;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ3" value="wrong" v-model="selectedCssQ3"> &lt;script&gt;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ3" value="wrong" v-model="selectedCssQ3"> &lt;body&gt;</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">What is the correct HTML for referring to an external style sheet ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ4" value="wrong" v-model="selectedCssQ4"> &lt;tylesheet&gt;mystyle.css&lt;/stylesheet&gt;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ4" value="wrong" v-model="selectedCssQ4">  &lt;style src="mystyle.css"&gt;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ4" value="right" v-model="selectedCssQ4">  &lt;link rel="stylesheet" type="text/css" href="mystyle.css"&gt;</li>
                    </ul> 
                    <hr>
                    <li style="color: blueviolet;">Which HTML attribute is used to define inline styles ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ5" value="wrong" v-model="selectedCssQ5"> class</li>
                        <li><input class="form-check-input" type="radio" name="cssQ5" value="right" v-model="selectedCssQ5"> style</li>
                        <li><input class="form-check-input" type="radio" name="cssQ5" value="wrong" v-model="selectedCssQ5"> syles</li>
                        <li><input class="form-check-input" type="radio" name="cssQ5" value="wrong" v-model="selectedCssQ5"> font</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">How do you insert a comment in a CSS file ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ6" value="right" v-model="selectedCssQ6"> /*this is a comment*/</li>
                        <li><input class="form-check-input" type="radio" name="cssQ6" value="wrong" v-model="selectedCssQ6"> 'this is a comment</li>
                        <li><input class="form-check-input" type="radio" name="cssQ6" value="wrong" v-model="selectedCssQ6"> //this is a commnet</li>
                        <li><input class="form-check-input" type="radio" name="cssQ6" value="wrong" v-model="selectedCssQ6"> //this is a comment//</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which is the correct CSS syntax ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ7" value="wrong" v-model="selectedCssQ7"> {body;color;red;}</li>
                        <li><input class="form-check-input" type="radio" name="cssQ7" value="wrong" v-model="selectedCssQ7"> body:color=red;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ7" value="right" v-model="selectedCssQ7"> body{color:red;}</li>
                        <li><input class="form-check-input" type="radio" name="cssQ7" value="wrong" v-model="selectedCssQ7"> {body;color:red;}</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which CSS property is used to change the text color of an element ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ8" value="right" v-model="selectedCssQ8"> color</li>
                        <li><input class="form-check-input" type="radio" name="cssQ8" value="wrong" v-model="selectedCssQ8"> text-color</li>
                        <li><input class="form-check-input" type="radio" name="cssQ8" value="wrong" v-model="selectedCssQ8"> fgcolor</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">How do you add a background color for all &lt;h1&gt; elements ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ9" value="wrong" v-model="selectedCssQ9"> h1.all{background-color:#FFFFFF;}</li>
                        <li><input class="form-check-input" type="radio" name="cssQ9" value="right" v-model="selectedCssQ9"> h1{background-color:#FFFFFF;}</li>
                        <li><input class="form-check-input" type="radio" name="cssQ9" value="wrong" v-model="selectedCssQ9"> all.h1{background-color:#FFFFFF;}</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">How do you display hyperlinks without an underline ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ10" value="right" v-model="selectedCssQ10"> a{text-decoration:none;}</li>
                        <li><input class="form-check-input" type="radio" name="cssQ10" value="wrong" v-model="selectedCssQ10"> a{text-decoration:no-underline;}</li>
                        <li><input class="form-check-input" type="radio" name="cssQ10" value="wrong" v-model="selectedCssQ10"> a{underline:none;}</li>
                        <li><input class="form-check-input" type="radio" name="cssQ10" value="wrong" v-model="selectedCssQ10"> a{decoration:no-underline;}</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">How do you make each word in a text start with a capital letter ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ11" value="wrong" v-model="selectedCssQ11"> you can't do that with CSS</li>
                        <li><input class="form-check-input" type="radio" name="cssQ11" value="wrong" v-model="selectedCssQ11"> text-style:capitalize</li>
                        <li><input class="form-check-input" type="radio" name="cssQ11" value="wrong" v-model="selectedCssQ11"> transform:capitalize</li>
                        <li><input class="form-check-input" type="radio" name="cssQ11" value="right" v-model="selectedCssQ11"> text-transform:capitalize</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which property is used to change the background color ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ12" value="wrong" v-model="selectedCssQ12"> bgcolor</li>
                        <li><input class="form-check-input" type="radio" name="cssQ12" value="right" v-model="selectedCssQ12"> background-color</li>
                        <li><input class="form-check-input" type="radio" name="cssQ12" value="wrong" v-model="selectedCssQ12"> color</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">What is the correct CSS syntax for making all the &lt;p&gt; elements bold ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ13" value="wrong" v-model="selectedCssQ13"> p{text-size:bold;}</li>
                        <li><input class="form-check-input" type="radio" name="cssQ13" value="wrong" v-model="selectedCssQ13"> &lt;p syle="font-size:bold";&gt;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ13" value="wrong" v-model="selectedCssQ13"> &lt;p syle="text-size:bold";&gt;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ13" value="right" v-model="selectedCssQ13"> p{font-weight:bold;}</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which CSS property controls the text size ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ14" value="wrong" v-model="selectedCssQ14"> font-style</li>
                        <li><input class="form-check-input" type="radio" name="cssQ14" value="wrong" v-model="selectedCssQ14"> text-size</li>
                        <li><input class="form-check-input" type="radio" name="cssQ14" value="wrong" v-model="selectedCssQ14"> text-style</li>
                        <li><input class="form-check-input" type="radio" name="cssQ14" value="right" v-model="selectedCssQ14"> font-size</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">What is the default value of the position property ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ15" value="wrong" v-model="selectedCssQ15"> absolute</li>
                        <li><input class="form-check-input" type="radio" name="cssQ15" value="wrong" v-model="selectedCssQ15"> relative</li>
                        <li><input class="form-check-input" type="radio" name="cssQ15" value="right" v-model="selectedCssQ15"> static</li>
                        <li><input class="form-check-input" type="radio" name="cssQ15" value="wrong" v-model="selectedCssQ15"> fixed</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">How do you select all p elements inside a div element ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ16" value="right" v-model="selectedCssQ16"> div p</li>
                        <li><input class="form-check-input" type="radio" name="cssQ16" value="wrong" v-model="selectedCssQ16"> div.p</li>
                        <li><input class="form-check-input" type="radio" name="cssQ16" value="wrong" v-model="selectedCssQ16"> div + p</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">How do you group selectors ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ17" value="right" v-model="selectedCssQ17"> Separate each selector with a comma</li>
                        <li><input class="form-check-input" type="radio" name="cssQ17" value="wrong" v-model="selectedCssQ17"> Separate each selector with a plus sign</li>
                        <li><input class="form-check-input" type="radio" name="cssQ17" value="wrong" v-model="selectedCssQ17"> Separate each selector with a space</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">How do you select an element with id 'demo' ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ18" value="wrong" v-model="selectedCssQ18"> demo</li>
                        <li><input class="form-check-input" type="radio" name="cssQ18" value="right" v-model="selectedCssQ18"> #demo</li>
                        <li><input class="form-check-input" type="radio" name="cssQ18" value="wrong" v-model="selectedCssQ18"> *demo</li>
                        <li><input class="form-check-input" type="radio" name="cssQ18" value="wrong" v-model="selectedCssQ18"> .demo</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">How do you select elements with class name 'test' ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ19" value="right" v-model="selectedCssQ19"> .test</li>
                        <li><input class="form-check-input" type="radio" name="cssQ19" value="wrong" v-model="selectedCssQ19"> *test</li>
                        <li><input class="form-check-input" type="radio" name="cssQ19" value="wrong" v-model="selectedCssQ19"> test</li>
                        <li><input class="form-check-input" type="radio" name="cssQ19" value="wrong" v-model="selectedCssQ19"> #test</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which property is used to change the left margin of an element ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ20" value="wrong" v-model="selectedCssQ20"> indent</li>
                        <li><input class="form-check-input" type="radio" name="cssQ20" value="wrong" v-model="selectedCssQ20"> padding-left</li>
                        <li><input class="form-check-input" type="radio" name="cssQ20" value="right" v-model="selectedCssQ20"> margin-left</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">How do you make a list that lists its items with squares ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ21" value="wrong" v-model="selectedCssQ21"> list: square;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ21" value="right" v-model="selectedCssQ21"> list-style-type: square;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ21" value="wrong" v-model="selectedCssQ21"> list-type: square;</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">When using the padding property; are you allowed to use negative values ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ22" value="right" v-model="selectedCssQ22"> No</li>
                        <li><input class="form-check-input" type="radio" name="cssQ22" value="wrong" v-model="selectedCssQ22"> Yes</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which property is used to change the font of an element ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ23" value="wrong" v-model="selectedCssQ23"> font-style</li>
                        <li><input class="form-check-input" type="radio" name="cssQ23" value="wrong" v-model="selectedCssQ23"> font-weight</li>
                        <li><input class="form-check-input" type="radio" name="cssQ23" value="right" v-model="selectedCssQ23"> font-family</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">How do you display a border like this:</li>
                    <span>The top border = 10 pixels |</span>
                    <span>The bottom border = 5 pixels |</span>
                    <span>The left border = 20 pixels |</span>
                    <span>The right border = 1pixel |</span>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ24" value="right" v-model="selectedCssQ24"> border-width:10px 1px 5px 20px;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ24" value="wrong" v-model="selectedCssQ24"> border-width:5px 20px 10px 1px;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ24" value="wrong" v-model="selectedCssQ24"> border-width:10px 20px 5px 1px;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ24" value="wrong" v-model="selectedCssQ24"> border-width:10px 5px 20px 1px;</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">How do you make the text bold ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ25" value="wrong" v-model="selectedCssQ25"> style:bold;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ25" value="right" v-model="selectedCssQ25"> font-weight:bold;</li>
                        <li><input class="form-check-input" type="radio" name="cssQ25" value="wrong" v-model="selectedCssQ25"> font:bold;</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">How do you Select all elements with lang attribute ="it"</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ26" value="wrong" v-model="selectedCssQ26"> #[lang=it]</li>
                        <li><input class="form-check-input" type="radio" name="cssQ26" value="wrong" v-model="selectedCssQ26"> [lang=it]</li>
                        <li><input class="form-check-input" type="radio" name="cssQ26" value="right" v-model="selectedCssQ26"> [lang="it"]</li>
                    </ul> 
                    <hr>
                    <li style="color: blueviolet;">How do you Select all &lt;p&gt; elements that are next to &lt;ul&gt; elements ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ27" value="wrong" v-model="selectedCssQ27"> ul > p</li>
                        <li><input class="form-check-input" type="radio" name="cssQ27" value="wrong" v-model="selectedCssQ27"> ul ~ p</li>
                        <li><input class="form-check-input" type="radio" name="cssQ27" value="right" v-model="selectedCssQ27"> ul + p</li>
                        <li><input class="form-check-input" type="radio" name="cssQ27" value="wrong" v-model="selectedCssQ27"> ul p</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">How do you Select all &lt;p&gt; elements where that parent is a  &lt;div&gt; element ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ28" value="right" v-model="selectedCssQ28"> div > p</li>
                        <li><input class="form-check-input" type="radio" name="cssQ28" value="wrong" v-model="selectedCssQ28"> div p</li>
                        <li><input class="form-check-input" type="radio" name="cssQ28" value="wrong" v-model="selectedCssQ28"> div ~ p</li>
                        <li><input class="form-check-input" type="radio" name="cssQ28" value="wrong" v-model="selectedCssQ28"> div + p</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">How do you Select all &lt;table&gt; elements that are siblings of a &lt;ul&gt; element ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ29" value="wrong" v-model="selectedCssQ29"> ul + table</li>
                        <li><input class="form-check-input" type="radio" name="cssQ29" value="right" v-model="selectedCssQ29"> ul ~ table</li>
                        <li><input class="form-check-input" type="radio" name="cssQ29" value="wrong" v-model="selectedCssQ29"> ul table</li>
                        <li><input class="form-check-input" type="radio" name="cssQ29" value="wrong" v-model="selectedCssQ29"> ul > table</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">How do you Selects all disabled form elements ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="cssQ30" value="right" v-model="selectedCssQ30"> :disabled</li>
                        <li><input class="form-check-input" type="radio" name="cssQ30" value="wrong" v-model="selectedCssQ30"> [disabled]</li>
                        <li><input class="form-check-input" type="radio" name="cssQ30" value="wrong" v-model="selectedCssQ30"> .disabled</li>
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
        var app = new Vue({
            el: "#VueApp",
            data: {
                selectedCssQ1: '', selectedCssQ2: '', selectedCssQ3: '',
                selectedCssQ4: '', selectedCssQ5: '', selectedCssQ6: '',
                selectedCssQ7: '', selectedCssQ8: '', selectedCssQ9: '',
                selectedCssQ10: '', selectedCssQ11: '', selectedCssQ12: '',
                selectedCssQ13: '', selectedCssQ14: '', selectedCssQ15: '',
                selectedCssQ16: '', selectedCssQ17: '', selectedCssQ18: '',
                selectedCssQ19: '', selectedCssQ20: '', selectedCssQ21: '',
                selectedCssQ22: '', selectedCssQ23: '', selectedCssQ24: '',
                selectedCssQ25: '', selectedCssQ26: '', selectedCssQ27: '',
                selectedCssQ28: '', selectedCssQ29: '', selectedCssQ30: '',

                sumCSSQuizResult: 0,
            },
            methods: {
                // getanswer : function() {
                //     if(!this.selectedCssQ1) {
                //         alert('Please answer the question number 1');
                //         return false;
                //     } 
                //     if(this.selectedCssQ1 === 'right')
                //         this.sumCSSQuizResult++;

                //     if(!this.selectedCssQ2)  {
                //         alert('Please answer the question number 2');
                //         return false;
                //     } 
                //     if(this.selectedCssQ2 === 'right')
                //         this.sumCSSQuizResult++;

                //     if(!this.selectedCssQ3)  {
                //         alert('Please answer the question number 3');
                //         return false;
                //     }  
                //     if(this.selectedCssQ3 === 'right')
                //         this.sumCSSQuizResult++;

                //     if(!this.selectedCssQ4) {
                //         alert('Please answer the question number 4');
                //         return false;
                //     } 
                //     if(this.selectedCssQ4 === 'right')
                //         this.sumCSSQuizResult++;

                //     if(!this.selectedCssQ5) {
                //         alert('Please answer the question number 5');
                //         return false;
                //     } 
                //     if(this.selectedCssQ5 === 'right')
                //         this.sumCSSQuizResult++;                        

                //     if(!this.selectedCssQ6) {
                //         alert('Please answer the question number 6');
                //         return false;
                //     } 
                //     if(this.selectedCssQ6 === 'right')
                //         this.sumCSSQuizResult++;

                //     if(!this.selectedCssQ7) {
                //         alert('Please answer the question number 7');
                //         return false;
                //     } 
                //     if(this.selectedCssQ7 === 'right')
                //         this.sumCSSQuizResult++;  
                    
                //     if(!this.selectedCssQ8) {
                //         alert('Please answer the question number 8');
                //         return false;
                //     } 
                //     if(this.selectedCssQ8 === 'right')
                //         this.sumCSSQuizResult++; 
                    
                //     if(!this.selectedCssQ9) {
                //         alert('Please answer the question number 9');
                //         return false;
                //     } 
                //     if(this.selectedCssQ9 === 'right')
                //         this.sumCSSQuizResult++; 
                    
                //     if(!this.selectedCssQ10) {
                //         alert('Please answer the question number 10');
                //         return false;
                //     } 
                //     if(this.selectedCssQ10 === 'right')
                //         this.sumCSSQuizResult++;

                //     if(!this.selectedCssQ11) {
                //         alert('Please answer the question number 11');
                //         return false;
                //     } 
                //     if(this.selectedCssQ11 === 'right')
                //         this.sumCSSQuizResult++; 
                    
                //     if(!this.selectedCssQ12) {
                //         alert('Please answer the question number 12');
                //         return false;
                //     } 
                //     if(this.selectedCssQ12 === 'right')
                //         this.sumCSSQuizResult++; 
                    
                //     if(!this.selectedCssQ13) {
                //         alert('Please answer the question number 13');
                //         return false;
                //     } 
                //     if(this.selectedCssQ13 === 'right')
                //         this.sumCSSQuizResult++;

                //     if(!this.selectedCssQ14) {
                //         alert('Please answer the question number 14');
                //         return false;
                //     } 
                //     if(this.selectedCssQ14 === 'right')
                //         this.sumCSSQuizResult++;

                //     if(!this.selectedCssQ15) {
                //         alert('Please answer the question number 15');
                //         return false;
                //     } 
                //     if(this.selectedCssQ15 === 'right')
                //         this.sumCSSQuizResult++;

                //     if(!this.selectedCssQ16) {
                //         alert('Please answer the question number 16');
                //         return false;
                //     } 
                //     if(this.selectedCssQ16 === 'right')
                //         this.sumCSSQuizResult++;

                //     if(!this.selectedCssQ17) {
                //         alert('Please answer the question number 17s');
                //         return false;
                //     } 
                //     if(this.selectedCssQ17 === 'right')
                //         this.sumCSSQuizResult++;

                //     if(!this.selectedCssQ18) {
                //         alert('Please answer the question number 18');
                //         return false;
                //     } 
                //     if(this.selectedCssQ18 === 'right')
                //         this.sumCSSQuizResult++;

                //     if(!this.selectedCssQ19) {
                //         alert('Please answer the question number 19');
                //         return false;
                //     } 
                //     if(this.selectedCssQ19 === 'right')
                //         this.sumCSSQuizResult++;

                //     if(!this.selectedCssQ20) {
                //         alert('Please answer the question number 20s');
                //         return false;
                //     } 
                //     if(this.selectedCssQ20 === 'right')
                //         this.sumCSSQuizResult++;

                //     if(!this.selectedCssQ21) {
                //         alert('Please answer the question number 21');
                //         return false;
                //     } 
                //     if(this.selectedCssQ21 === 'right')
                //         this.sumCSSQuizResult++;

                //     if(!this.selectedCssQ22) {
                //         alert('Please answer the question number 22');
                //         return false;
                //     } 
                //     if(this.selectedCssQ22 === 'right')
                //         this.sumCSSQuizResult++;

                //     if(!this.selectedCssQ23) {
                //         alert('Please answer the question number 23');
                //         return false;
                //     } 
                //     if(this.selectedCssQ23 === 'right')
                //         this.sumCSSQuizResult++;

                //     if(!this.selectedCssQ24) {
                //         alert('Please answer the question number 24');
                //         return false;
                //     } 
                //     if(this.selectedCssQ24 === 'right')
                //         this.sumCSSQuizResult++;

                //     if(!this.selectedCssQ25) {
                //         alert('Please answer the question number 25');
                //         return false;
                //     } 
                //     if(this.selectedCssQ25 === 'right')
                //         this.sumCSSQuizResult++;

                //     if(!this.selectedCssQ26) {
                //         alert('Please answer the question number 26');
                //         return false;
                //     } 
                //     if(this.selectedCssQ26 === 'right')
                //         this.sumCSSQuizResult++; 
                    
                //     if(!this.selectedCssQ27) {
                //         alert('Please answer the question number 27');
                //         return false;
                //     } 
                //     if(this.selectedCssQ27 === 'right')
                //         this.sumCSSQuizResult++;

                //     if(!this.selectedCssQ28) {
                //         alert('Please answer the question number 28');
                //         return false;
                //     } 
                //     if(this.selectedCssQ28 === 'right')
                //         this.sumCSSQuizResult++;

                //     if(!this.selectedCssQ29) {
                //         alert('Please answer the question number 29');
                //         return false;
                //     } 
                //     if(this.selectedCssQ29 === 'right')
                //         this.sumCSSQuizResult++;

                //     if(!this.selectedCssQ30) {
                //         alert('Please answer the question number 30');
                //         return false;
                //     } 
                //     if(this.selectedCssQ30 === 'right')
                //         this.sumCSSQuizResult++;
                                            
                //     alert('correct answer is ' + this.sumCSSQuizResult);
                //     this.sumCSSQuizResult = 0;
                // },
            },
        });
    </script>
@endsection
@endsection