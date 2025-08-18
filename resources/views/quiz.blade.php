@extends('layouts.app')


@section('content')
<div class="mt-5">
    <ol>
        <li> <a href="{{ route('cssQuiz') }}">CSS Quiz</a> </li>
        <li> <a href="{{ route('javascriptQuiz') }}">JavaScript Quiz</a> </li>
        <li> <a href="{{ route('pythonQuiz') }}">Python Quiz</a> </li>
        <li> <a href="{{ route('phpQuiz') }}">PHP Quiz</a> </li>
        <li> <a href="{{ route('nodejsQuiz') }}">Node.js Quiz</a> </li>
        <li> <a href="{{ route('bootstrapQuiz') }}">Bootstrap Quiz</a> </li>
        <li> <a href="{{ route('jqueryQuiz') }}">jQuery Quiz</a> </li>
        <li> <a href="{{ route('vuejsQuiz') }}">Vue.js Quiz</a> </li>
    </ol>
</div>
@endsection