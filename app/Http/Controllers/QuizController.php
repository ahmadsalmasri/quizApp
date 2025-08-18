<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function quiz() {
        return view('quiz');
    }

    public function cssquiz() {
        return view('quiz.css');
    }

    public function cssquizAction(Request $request) {
        
    }
    public function jsquiz() {
        return view('quiz.js');
    }

    public function pythonquiz() {
        return view('quiz.python');
    }

    public function phpquiz() {
        return view('quiz.php');
    }

    public function nodejsquiz() {
        return view('quiz.nodejs');
    }

    public function bootstrapquiz() {
        return view('quiz.bootstrap');
    }

    public function jqueryquiz() {
        return view('quiz.jquery');
    }

    public function vuejsquiz() {
        return view('quiz.vuejs');
    }
}
