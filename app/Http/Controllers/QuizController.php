<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\User;

class QuizController extends Controller
{
    public function quiz() {
        return view('quiz');
    }

    public function cssquiz() {
        return view('quiz.css');
    }

    public function cssquizAction(Request $request) {
        $countCorrectAnswer = 0;
        $correctPrcentage = 0;

        if($request->cssQ1 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ2 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ3 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ4 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ5 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ6 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ7 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ8 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ9 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ10 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ11 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ12 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ13 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ14 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ15 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ16 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ17 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ18 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ19 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ20 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ21 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ22 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ23 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ24 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ25 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ26 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ27 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ28 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ29 === 'right')
            $countCorrectAnswer++;
        if($request->cssQ30 === 'right')
            $countCorrectAnswer++;                                                 

        Quiz::create([
            'course_name' => 'css',
            'question_number' => 30,
            'result' => $countCorrectAnswer,
            'user_id' => auth()->user()->id,
        ]);
        $correctPrcentage = ($countCorrectAnswer * 100) / 30;
        return redirect()->back()->with(['success_complate' => 'you get '. $countCorrectAnswer . ' out of 30. Result '. round($correctPrcentage,2). '%']);;
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
