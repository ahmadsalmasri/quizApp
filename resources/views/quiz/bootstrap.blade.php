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
        <h2>bootstrap 5 Quiz</h2>
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
            <form method="POST" action="{{ route('bootstrapQuizAction') }}" enctype="multipart/form-data">
                @csrf
                <ol>
                    <li style="color: blueviolet;">Which class provides a responsive fixed width container ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ1" value="bootstrapQ1_1" v-model="selectedBootstrapssQ1"> .container</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ1" value="bootstrapQ1_2" v-model="selectedBootstrapssQ1"> .container-responsive</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ1" value="bootstrapQ1_3" v-model="selectedBootstrapssQ1"> .container-fluid</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ1" value="bootstrapQ1_4" v-model="selectedBootstrapssQ1"> .container-fixed</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class shapes an image to a circle ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ2" value="bootstrapQ2_1" v-model="selectedBootstrapssQ2"> .img-round</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ2" value="bootstrapQ2_2" v-model="selectedBootstrapssQ2"> .img-rounded</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ2" value="bootstrapQ2_3" v-model="selectedBootstrapssQ2"> .img-circle</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ2" value="bootstrapQ2_4" v-model="selectedBootstrapssQ2"> .rounded-circle</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class is used to create a basic list group ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ3" value="bootstrapQ3_1" v-model="selectedBootstrapssQ3"> .group-list</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ3" value="bootstrapQ3_2" v-model="selectedBootstrapssQ3"> .grouped-list</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ3" value="bootstrapQ3_3" v-model="selectedBootstrapssQ3"> .list-group</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">The .container class provides a full width container, spanning the entire width of the screen</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ4" value="bootstrapQ4_1" v-model="selectedBootstrapssQ4"> False</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ4" value="bootstrapQ4_2" v-model="selectedBootstrapssQ4">  True</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class is used to create a loader ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ5" value="bootstrapQ5_1" v-model="selectedBootstrapssQ5"> .spinner-border</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ5" value="bootstrapQ5_2" v-model="selectedBootstrapssQ5"> .spinner</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ5" value="bootstrapQ5_3" v-model="selectedBootstrapssQ5"> .spinner-loader</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ5" value="bootstrapQ5_4" v-model="selectedBootstrapssQ5"> .loader</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">A standard navigation tab is created with:</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ6" value="bootstrapQ6_1" v-model="selectedBootstrapssQ6"> &lt;ul class="nav nav-tabs"&gt; </li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ6" value="bootstrapQ6_2" v-model="selectedBootstrapssQ6"> &lt;ul class="nav nav-navbar"&gt;</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ6" value="bootstrapQ6_3" v-model="selectedBootstrapssQ6"> &lt;ul class="nav tabs"&gt;</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ6" value="bootstrapQ6_4" v-model="selectedBootstrapssQ6"> &lt;ul class="navigation-tabs"&gt;</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">A standard navigation bar is created with:</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ7" value="bootstrapQ7_1" v-model="selectedBootstrapssQ7"> &lt;nav class="navbar navbar-default"&gt;</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ7" value="bootstrapQ7_2" v-model="selectedBootstrapssQ7"> &lt;nav class="nav navbar"&gt;</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ7" value="bootstrapQ7_3" v-model="selectedBootstrapssQ7"> &lt;nav class="navigationbar navbar-default"&gt;</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ7" value="bootstrapQ7_4" v-model="selectedBootstrapssQ7"> &lt;nav class="navbar navbar-expand-sm"&gt;</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which contextual class indicates a succesful or positive action ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ8" value="bootstrapQ8_1" v-model="selectedBootstrapssQ8"> .bg-success</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ8" value="bootstrapQ8_2" v-model="selectedBootstrapssQ8"> .bg-primary</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ8" value="bootstrapQ8_3" v-model="selectedBootstrapssQ8"> .bg-info</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ8" value="bootstrapQ8_4" v-model="selectedBootstrapssQ8"> .bg-warning</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class is used to create a badge ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ9" value="bootstrapQ9_1" v-model="selectedBootstrapssQ9"> .badge-item</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ9" value="bootstrapQ9_2" v-model="selectedBootstrapssQ9"> .label-badge</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ9" value="bootstrapQ9_3" v-model="selectedBootstrapssQ9"> .badge-label</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ9" value="bootstrapQ9_4" v-model="selectedBootstrapssQ9"> .badge</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class is used to create a big box for calling extra attention ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ10" value="bootstrapQ10_1" v-model="selectedBootstrapssQ10"> .bigbox </li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ10" value="bootstrapQ10_2" v-model="selectedBootstrapssQ10"> .container</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ10" value="bootstrapQ10_3" v-model="selectedBootstrapssQ10"> There is no such class</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ10" value="bootstrapQ10_4" v-model="selectedBootstrapssQ10"> .jumbotron</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class can be used to float an element to the right of the page ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ11" value="bootstrapQ11_1" v-model="selectedBootstrapssQ11"> .float-start</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ11" value="bootstrapQ11_2" v-model="selectedBootstrapssQ11"> .float-end</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ11" value="bootstrapQ11_3" v-model="selectedBootstrapssQ11"> .float-r</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ11" value="bootstrapQ11_4" v-model="selectedBootstrapssQ11"> .float-right</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which button class is used to create a large button ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ12" value="bootstrapQ12_1" v-model="selectedBootstrapssQ12"> .btn-large</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ12" value="bootstrapQ12_2" v-model="selectedBootstrapssQ12"> .btn-l2</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ12" value="bootstrapQ12_3" v-model="selectedBootstrapssQ12"> .btn-l</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ12" value="bootstrapQ12_4" v-model="selectedBootstrapssQ12"> .btn-lg</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class adds zebra-stripes to a table ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ13" value="bootstrapQ13_1" v-model="selectedBootstrapssQ13"> .table-bordered</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ13" value="bootstrapQ13_2" v-model="selectedBootstrapssQ13"> .table-striped</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ13" value="bootstrapQ13_3" v-model="selectedBootstrapssQ13"> .table-zebra</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ13" value="bootstrapQ13_4" v-model="selectedBootstrapssQ13"> .even and .odd</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class indicates a dropdown menu ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ14" value="bootstrapQ14_1" v-model="selectedBootstrapssQ14"> .dropdown</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ14" value="bootstrapQ14_2" v-model="selectedBootstrapssQ14"> .dropdown-list</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ14" value="bootstrapQ14_3" v-model="selectedBootstrapssQ14"> .select</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class is used to create a button group ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ15" value="bootstrapQ15_1" v-model="selectedBootstrapssQ15"> .group-btn</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ15" value="bootstrapQ15_2" v-model="selectedBootstrapssQ15"> .group-button</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ15" value="bootstrapQ15_3" v-model="selectedBootstrapssQ15"> .btn-group</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ15" value="bootstrapQ15_4" v-model="selectedBootstrapssQ15"> .button-group</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which component is used to cycle through elements, like a slideshow ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ16" value="bootstrapQ16_1" v-model="selectedBootstrapssQ16"> Carousel</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ16" value="bootstrapQ16_2" v-model="selectedBootstrapssQ16"> Orbit</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ16" value="bootstrapQ16_2" v-model="selectedBootstrapssQ16"> Scrollspy</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ16" value="bootstrapQ16_4" v-model="selectedBootstrapssQ16"> Slideshow</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">The Bootstrap grid system is based on how many columns ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ17" value="bootstrapQ17_1" v-model="selectedBootstrapssQ17"> 12</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ17" value="bootstrapQ17_2" v-model="selectedBootstrapssQ17"> 9</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ17" value="bootstrapQ17_3" v-model="selectedBootstrapssQ17"> 3</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ17" value="bootstrapQ17_4" v-model="selectedBootstrapssQ17"> 6</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which attribute is used to create a tooltip ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ18" value="bootstrapQ18_1" v-model="selectedBootstrapssQ18"> data-bs-toggle="modal"</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ18" value="bootstrapQ18_2" v-model="selectedBootstrapssQ18"> data-bs-toggle="collapse"</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ18" value="bootstrapQ18_3" v-model="selectedBootstrapssQ18"> data-bs-toggle="tooltip"</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ18" value="bootstrapQ18_4" v-model="selectedBootstrapssQ18"> data-bs-toggle="popup"</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class is used to create a vertical navigation bar ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ19" value="bootstrapQ19_1" v-model="selectedBootstrapssQ19"> .navbar</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ19" value="bootstrapQ19_2" v-model="selectedBootstrapssQ19"> .navbar navbar-vertical</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ19" value="bootstrapQ19_3" v-model="selectedBootstrapssQ19"> .navbar-vertical</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ19" value="bootstrapQ19_4" v-model="selectedBootstrapssQ19"> .navbar-inverse</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class is used to style a close icon ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ20" value="bootstrapQ20_1" v-model="selectedBootstrapssQ20"> .x</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ20" value="bootstrapQ20_2" v-model="selectedBootstrapssQ20"> .close-icon</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ20" value="bootstrapQ20_3" v-model="selectedBootstrapssQ20"> .btn-close</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ20" value="bootstrapQ20_4" v-model="selectedBootstrapssQ20"> .btn-x</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which contextual class is used to create an orange text color ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ21" value="bootstrapQ21_1" v-model="selectedBootstrapssQ21"> .text-warning</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ21" value="bootstrapQ21_2" v-model="selectedBootstrapssQ21"> .txt-warning</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ21" value="bootstrapQ21_3" v-model="selectedBootstrapssQ21"> .bg-warning</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ21" value="bootstrapQ21_4" v-model="selectedBootstrapssQ21"> .txt-orange</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class is used to create a basic pagination ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ22" value="bootstrapQ22_1" v-model="selectedBootstrapssQ22"> .navigation</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ22" value="bootstrapQ22_2" v-model="selectedBootstrapssQ22"> .page</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ22" value="bootstrapQ22_3" v-model="selectedBootstrapssQ22"> .pages</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ22" value="bootstrapQ22_4" v-model="selectedBootstrapssQ22"> .pagination </li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which contextual class indicates a dangerous or potentially negative action ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ23" value="bootstrapQ23_1" v-model="selectedBootstrapssQ23"> .bg-dark</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ23" value="bootstrapQ23_2" v-model="selectedBootstrapssQ23"> .bg-danger</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ23" value="bootstrapQ23_3" v-model="selectedBootstrapssQ23"> .bg-primary</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ23" value="bootstrapQ23_4" v-model="selectedBootstrapssQ23"> .bg-info</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class adds a heading to a card ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ24" value="bootstrapQ24_1" v-model="selectedBootstrapssQ24"> .card-header </li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ24" value="bootstrapQ24_2" v-model="selectedBootstrapssQ24"> .card-footer</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ24" value="bootstrapQ24_3" v-model="selectedBootstrapssQ24"> .card-heading</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ24" value="bootstrapQ24_4" v-model="selectedBootstrapssQ24"> .card-head</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class indicates uppercased text ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ25" value="bootstrapQ25_1" v-model="selectedBootstrapssQ25"> .ucase</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ25" value="bootstrapQ25_2" v-model="selectedBootstrapssQ25"> .text-capitalize</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ25" value="bootstrapQ25_3" v-model="selectedBootstrapssQ25"> .text-uppercase</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ25" value="bootstrapQ25_4" v-model="selectedBootstrapssQ25"> .uppercase</li>                    </ul>
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
