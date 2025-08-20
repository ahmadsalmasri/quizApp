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
                        <li><input class="form-check-input" type="radio" name="bootstrapQ1" value="right" v-model="selectedBootstrapssQ1"> .container</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ1" value="wrong" v-model="selectedBootstrapssQ1"> .container-responsive</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ1" value="wrong" v-model="selectedBootstrapssQ1"> .container-fluid</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ1" value="wrong" v-model="selectedBootstrapssQ1"> .container-fixed</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class shapes an image to a circle ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ2" value="wrong" v-model="selectedBootstrapssQ2"> .img-round</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ2" value="wrong" v-model="selectedBootstrapssQ2"> .img-rounded</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ2" value="wrong" v-model="selectedBootstrapssQ2"> .img-circle</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ2" value="right" v-model="selectedBootstrapssQ2"> .rounded-circle</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class is used to create a basic list group ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ3" value="wrong" v-model="selectedBootstrapssQ3"> .group-list</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ3" value="wrong" v-model="selectedBootstrapssQ3"> .grouped-list</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ3" value="right" v-model="selectedBootstrapssQ3"> .list-group</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">The .container class provides a full width container, spanning the entire width of the screen</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ4" value="right" v-model="selectedBootstrapssQ4"> False</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ4" value="wrong" v-model="selectedBootstrapssQ4">  True</li>
                    </ul> 
                    <hr>
                    <li style="color: blueviolet;">Which class is used to create a loader ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ5" value="right" v-model="selectedBootstrapssQ5"> .spinner-border</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ5" value="wrong" v-model="selectedBootstrapssQ5"> .spinner</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ5" value="wrong" v-model="selectedBootstrapssQ5"> .spinner-loader</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ5" value="wrong" v-model="selectedBootstrapssQ5"> .loader</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">A standard navigation tab is created with:</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ6" value="wrong" v-model="selectedBootstrapssQ6"> &lt;ul class="nav nav-tabs"&gt; </li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ6" value="right" v-model="selectedBootstrapssQ6"> &lt;ul class="nav nav-navbar"&gt;</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ6" value="wrong" v-model="selectedBootstrapssQ6"> &lt;ul class="nav tabs"&gt;</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ6" value="wrong" v-model="selectedBootstrapssQ6"> &lt;ul class="navigation-tabs"&gt;</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">A standard navigation bar is created with:</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ7" value="wrong" v-model="selectedBootstrapssQ7"> &lt;nav class="navbar navbar-default"&gt;</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ7" value="wrong" v-model="selectedBootstrapssQ7"> &lt;nav class="nav navbar"&gt;</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ7" value="wrong" v-model="selectedBootstrapssQ7"> &lt;nav class="navigationbar navbar-default"&gt;</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ7" value="right" v-model="selectedBootstrapssQ7"> &lt;nav class="navbar navbar-expand-sm"&gt;</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which contextual class indicates a succesful or positive action ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ8" value="right" v-model="selectedBootstrapssQ8"> .bg-success</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ8" value="wrong" v-model="selectedBootstrapssQ8"> .bg-primary</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ8" value="wrong" v-model="selectedBootstrapssQ8"> .bg-info</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ8" value="wrong" v-model="selectedBootstrapssQ8"> .bg-warning</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class is used to create a badge ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ9" value="wrong" v-model="selectedBootstrapssQ9"> .badge-item</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ9" value="wrong" v-model="selectedBootstrapssQ9"> .label-badge</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ9" value="wrong" v-model="selectedBootstrapssQ9"> .badge-label</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ9" value="right" v-model="selectedBootstrapssQ9"> .badge</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class is used to create a big box for calling extra attention ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ10" value="worng" v-model="selectedBootstrapssQ10"> .bigbox </li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ10" value="wrong" v-model="selectedBootstrapssQ10"> .container</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ10" value="right" v-model="selectedBootstrapssQ10"> There is no such class</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ10" value="wrong" v-model="selectedBootstrapssQ10"> .jumbotron</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class can be used to float an element to the right of the page ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ11" value="wrong" v-model="selectedBootstrapssQ11"> .float-start</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ11" value="right" v-model="selectedBootstrapssQ11"> .float-end</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ11" value="wrong" v-model="selectedBootstrapssQ11"> .float-r</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ11" value="wrong" v-model="selectedBootstrapssQ11"> .float-right</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which button class is used to create a large button ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ12" value="wrong" v-model="selectedBootstrapssQ12"> .btn-large</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ12" value="wrong" v-model="selectedBootstrapssQ12"> .btn-l2</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ12" value="wrong" v-model="selectedBootstrapssQ12"> .btn-l</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ12" value="right" v-model="selectedBootstrapssQ12"> .btn-lg</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class adds zebra-stripes to a table ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ13" value="wrong" v-model="selectedBootstrapssQ13"> .table-bordered</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ13" value="right" v-model="selectedBootstrapssQ13"> .table-striped</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ13" value="wrong" v-model="selectedBootstrapssQ13"> .table-zebra</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ13" value="wrong" v-model="selectedBootstrapssQ13"> .even and .odd</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class indicates a dropdown menu ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ14" value="right" v-model="selectedBootstrapssQ14"> .dropdown</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ14" value="wrong" v-model="selectedBootstrapssQ14"> .dropdown-list</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ14" value="wrong" v-model="selectedBootstrapssQ14"> .select</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class is used to create a button group ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ15" value="wrong" v-model="selectedBootstrapssQ15"> .group-btn</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ15" value="wrong" v-model="selectedBootstrapssQ15"> .group-button</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ15" value="right" v-model="selectedBootstrapssQ15"> .btn-group</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ15" value="wrong" v-model="selectedBootstrapssQ15"> .button-group</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which component is used to cycle through elements, like a slideshow ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ16" value="right" v-model="selectedBootstrapssQ16"> Carousel</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ16" value="wrong" v-model="selectedBootstrapssQ16"> Orbit</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ16" value="wrong" v-model="selectedBootstrapssQ16"> Scrollspy</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ16" value="wrong" v-model="selectedBootstrapssQ16"> Slideshow</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">The Bootstrap grid system is based on how many columns ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ17" value="right" v-model="selectedBootstrapssQ17"> 12</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ17" value="wrong" v-model="selectedBootstrapssQ17"> 9</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ17" value="wrong" v-model="selectedBootstrapssQ17"> 3</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ17" value="wrong" v-model="selectedBootstrapssQ17"> 6</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which attribute is used to create a tooltip ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ18" value="wrong" v-model="selectedBootstrapssQ18"> data-bs-toggle="modal"</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ18" value="wrong" v-model="selectedBootstrapssQ18"> data-bs-toggle="collapse"</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ18" value="right" v-model="selectedBootstrapssQ18"> data-bs-toggle="tooltip"</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ18" value="wrong" v-model="selectedBootstrapssQ18"> data-bs-toggle="popup"</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class is used to create a vertical navigation bar ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ19" value="right" v-model="selectedBootstrapssQ19"> .navbar</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ19" value="wrong" v-model="selectedBootstrapssQ19"> .navbar navbar-vertical</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ19" value="wrong" v-model="selectedBootstrapssQ19"> .navbar-vertical</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ19" value="wrong" v-model="selectedBootstrapssQ19"> .navbar-inverse</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class is used to style a close icon ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ20" value="wrong" v-model="selectedBootstrapssQ20"> .x</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ20" value="wrong" v-model="selectedBootstrapssQ20"> .close-icon</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ20" value="right" v-model="selectedBootstrapssQ20"> .btn-close</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ20" value="wrong" v-model="selectedBootstrapssQ20"> .btn-x</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which contextual class is used to create an orange text color ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ21" value="right" v-model="selectedBootstrapssQ21"> .text-warning</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ21" value="wrong" v-model="selectedBootstrapssQ21"> .txt-warning</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ21" value="wrong" v-model="selectedBootstrapssQ21"> .bg-warning</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ21" value="wrong" v-model="selectedBootstrapssQ21"> .txt-orange</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class is used to create a basic pagination ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ22" value="wrong" v-model="selectedBootstrapssQ22"> .navigation</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ22" value="wrong" v-model="selectedBootstrapssQ22"> .page</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ22" value="wrong" v-model="selectedBootstrapssQ22"> .pages</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ22" value="right" v-model="selectedBootstrapssQ22"> .pagination </li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which contextual class indicates a dangerous or potentially negative action ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ23" value="wrong" v-model="selectedBootstrapssQ23"> .bg-dark</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ23" value="right" v-model="selectedBootstrapssQ23"> .bg-danger</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ23" value="wrong" v-model="selectedBootstrapssQ23"> .bg-primary</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ23" value="wrong" v-model="selectedBootstrapssQ23"> .bg-info</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class adds a heading to a card ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ24" value="right" v-model="selectedBootstrapssQ24"> .card-header </li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ24" value="wrong" v-model="selectedBootstrapssQ24"> .card-footer</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ24" value="wrong" v-model="selectedBootstrapssQ24"> .card-heading</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ24" value="wrong" v-model="selectedBootstrapssQ24"> .card-head</li>
                    </ul>
                    <hr>
                    <li style="color: blueviolet;">Which class indicates uppercased text ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="bootstrapQ25" value="wrong" v-model="selectedBootstrapssQ25"> .ucase</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ25" value="wrong" v-model="selectedBootstrapssQ25"> .text-capitalize</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ25" value="right" v-model="selectedBootstrapssQ25"> .text-uppercase</li>
                        <li><input class="form-check-input" type="radio" name="bootstrapQ25" value="wrong" v-model="selectedBootstrapssQ25"> .uppercase</li>                    </ul>                                                                                                                                                                                                                                                                                                                               
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