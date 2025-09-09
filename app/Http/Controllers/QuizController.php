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

        if($request->cssQ1 === 'cssQ1_3')
            $countCorrectAnswer++;
        if($request->cssQ2 === 'cssQ2_1')
            $countCorrectAnswer++;
        if($request->cssQ3 === 'cssQ3_2')
            $countCorrectAnswer++;
        if($request->cssQ4 === 'cssQ4_3')
            $countCorrectAnswer++;
        if($request->cssQ5 === 'cssQ5_2')
            $countCorrectAnswer++;
        if($request->cssQ6 === 'cssQ6_1')
            $countCorrectAnswer++;
        if($request->cssQ7 === 'cssQ7_3')
            $countCorrectAnswer++;
        if($request->cssQ8 === 'cssQ8_1')
            $countCorrectAnswer++;
        if($request->cssQ9 === 'cssQ9_2')
            $countCorrectAnswer++;
        if($request->cssQ10 === 'cssQ10_1')
            $countCorrectAnswer++;
        if($request->cssQ11 === 'cssQ11_4')
            $countCorrectAnswer++;
        if($request->cssQ12 === 'cssQ12_2')
            $countCorrectAnswer++;
        if($request->cssQ13 === 'cssQ13_4')
            $countCorrectAnswer++;
        if($request->cssQ14 === 'cssQ14_4')
            $countCorrectAnswer++;
        if($request->cssQ15 === 'cssQ15_3')
            $countCorrectAnswer++;
        if($request->cssQ16 === 'cssQ16_1')
            $countCorrectAnswer++;
        if($request->cssQ17 === 'cssQ17_1')
            $countCorrectAnswer++;
        if($request->cssQ18 === 'cssQ18_3')
            $countCorrectAnswer++;
        if($request->cssQ19 === 'cssQ19_1')
            $countCorrectAnswer++;
        if($request->cssQ20 === 'cssQ20_3')
            $countCorrectAnswer++;
        if($request->cssQ21 === 'cssQ21_2')
            $countCorrectAnswer++;
        if($request->cssQ22 === 'cssQ22_1')
            $countCorrectAnswer++;
        if($request->cssQ23 === 'cssQ23_3')
            $countCorrectAnswer++;
        if($request->cssQ24 === 'cssQ24_1')
            $countCorrectAnswer++;
        if($request->cssQ25 === 'cssQ25_2')
            $countCorrectAnswer++;
        if($request->cssQ26 === 'cssQ26_3')
            $countCorrectAnswer++;
        if($request->cssQ27 === 'cssQ27_3')
            $countCorrectAnswer++;
        if($request->cssQ28 === 'cssQ28_1')
            $countCorrectAnswer++;
        if($request->cssQ29 === 'cssQ29_2')
            $countCorrectAnswer++;
        if($request->cssQ30 === 'cssQ30_1')
            $countCorrectAnswer++;

        Quiz::create([
            'course_name' => 'css',
            'question_number' => 30,
            'result' => $countCorrectAnswer,
            'user_id' => auth()->user()->id,
        ]);
        $correctPrcentage = ($countCorrectAnswer * 100) / 30;
        return redirect()->back()->with(['success_complate' => 'you get '. $countCorrectAnswer . ' out of 30. Result '. round($correctPrcentage,2). '%']);
    }

    public function jsquiz() {
        return view('quiz.js');
    }
    public function javascriptquizAction(Request $request) {
        $countCorrectAnswer = 0;
        $correctPrcentage = 0;

        if($request->jsQ1 === 'jsQ1_1')
            $countCorrectAnswer++;
        if($request->jsQ2 === 'jsQ2_4')
            $countCorrectAnswer++;
        if($request->jsQ3 === 'jsQ3_3')
            $countCorrectAnswer++;
        if($request->jsQ4 === 'jsQ4_2')
            $countCorrectAnswer++;
        if($request->jsQ5 === 'jsQ5_1')
            $countCorrectAnswer++;
        if($request->jsQ6 === 'jsQ6_2')
            $countCorrectAnswer++;
        if($request->jsQ7 === 'jsQ7_3')
            $countCorrectAnswer++;
        if($request->jsQ8 === 'jsQ8_4')
            $countCorrectAnswer++;
        if($request->jsQ9 === 'jsQ9_1')
            $countCorrectAnswer++;
        if($request->jsQ10 === 'jsQ10_4')
            $countCorrectAnswer++;
        if($request->jsQ11 === 'jsQ11_2')
            $countCorrectAnswer++;
        if($request->jsQ12 === 'jsQ12_3')
            $countCorrectAnswer++;
        if($request->jsQ13 === 'jsQ13_3')
            $countCorrectAnswer++;
        if($request->jsQ14 === 'jsQ14_1')
            $countCorrectAnswer++;
        if($request->jsQ15 === 'jsQ15_2')
            $countCorrectAnswer++;
        if($request->jsQ16 === 'jsQ16_3')
            $countCorrectAnswer++;
        if($request->jsQ17 === 'jsQ17_1')
            $countCorrectAnswer++;
        if($request->jsQ18 === 'jsQ18_2')
            $countCorrectAnswer++;
        if($request->jsQ19 === 'jsQ19_3')
            $countCorrectAnswer++;
        if($request->jsQ20 === 'jsQ20_1')
            $countCorrectAnswer++;
        if($request->jsQ21 === 'jsQ21_1')
            $countCorrectAnswer++;
        if($request->jsQ22 === 'jsQ22_2')
            $countCorrectAnswer++;
        if($request->jsQ23 === 'jsQ23_2')
            $countCorrectAnswer++;
        if($request->jsQ24 === 'jsQ24_1')
            $countCorrectAnswer++;
        if($request->jsQ25 === 'jsQ25_4')
            $countCorrectAnswer++;

        Quiz::create([
            'course_name' => 'javascript',
            'question_number' => 25,
            'result' => $countCorrectAnswer,
            'user_id' => auth()->user()->id,
        ]);
        $correctPrcentage = ($countCorrectAnswer * 100) / 25;
        return redirect()->back()->with(['success_complate' => 'you get '. $countCorrectAnswer . ' out of 25. Result '. round($correctPrcentage,2). '%']);
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
    public function nodejsquizAction(Request $request)
    {
        $countCorrectAnswer = 0;
        $correctPrcentage = 0;

        if($request->nodejsQ1 === 'nodejsQ1_2')
            $countCorrectAnswer++;
        if($request->nodejsQ2 === 'nodejsQ2_1')
            $countCorrectAnswer++;
        if($request->nodejsQ3 === 'nodejsQ3_1')
            $countCorrectAnswer++;
        if($request->nodejsQ4 === 'nodejsQ4_4')
            $countCorrectAnswer++;
        if($request->nodejsQ5 === 'nodejsQ5_3')
            $countCorrectAnswer++;
        if($request->nodejsQ6 === 'nodejsQ6_2')
            $countCorrectAnswer++;
        if($request->nodejsQ7 === 'nodejsQ7_1')
            $countCorrectAnswer++;
        if($request->nodejsQ8 === 'nodejsQ8_3')
            $countCorrectAnswer++;
        if($request->nodejsQ9 === 'nodejsQ9_4')
            $countCorrectAnswer++;
        if($request->nodejsQ10 === 'nodejsQ10_4')
            $countCorrectAnswer++;
        if($request->nodejsQ11 === 'nodejsQ11_2')
            $countCorrectAnswer++;
        if($request->nodejsQ12 === 'nodejsQ12_1')
            $countCorrectAnswer++;
        if($request->nodejsQ13 === 'nodejsQ13_2')
            $countCorrectAnswer++;
        if($request->nodejsQ14 === 'nodejsQ14_3')
            $countCorrectAnswer++;
        if($request->nodejsQ15 === 'nodejsQ15_1')
            $countCorrectAnswer++;
        if($request->nodejsQ16 === 'nodejsQ16_4')
            $countCorrectAnswer++;
        if($request->nodejsQ17 === 'nodejsQ17_3')
            $countCorrectAnswer++;
        if($request->nodejsQ18 === 'nodejsQ18_4')
            $countCorrectAnswer++;
        if($request->nodejsQ19 === 'nodejsQ19_2')
            $countCorrectAnswer++;
        if($request->nodejsQ20 === 'nodejsQ20_4')
            $countCorrectAnswer++;
        if($request->nodejsQ21 === 'nodejsQ21_3')
            $countCorrectAnswer++;
        if($request->nodejsQ22 === 'nodejsQ22_1')
            $countCorrectAnswer++;
        if($request->nodejsQ23 === 'nodejsQ23_1')
            $countCorrectAnswer++;
        if($request->nodejsQ24 === 'nodejsQ24_2')
            $countCorrectAnswer++;
        if($request->nodejsQ25 === 'nodejsQ25_4')
            $countCorrectAnswer++;

        Quiz::create([
            'course_name' => 'nodejs',
            'question_number' => 25,
            'result' => $countCorrectAnswer,
            'user_id' => auth()->user()->id,
        ]);
        $correctPrcentage = ($countCorrectAnswer * 100) / 25;
        return redirect()->back()->with(['success_complate' => 'you get '. $countCorrectAnswer . ' out of 25. Result '. round($correctPrcentage,2). '%']);
    }

    public function bootstrapquiz() {
        return view('quiz.bootstrap');
    }
    public function bootstrapquizAction(Request $request)
    {
        $countCorrectAnswer = 0;
        $correctPrcentage = 0;

        if($request->bootstrapQ1 === 'bootstrapQ1_1')
            $countCorrectAnswer++;
        if($request->bootstrapQ2 === 'bootstrapQ2_4')
            $countCorrectAnswer++;
        if($request->bootstrapQ3 === 'bootstrapQ3_3')
            $countCorrectAnswer++;
        if($request->bootstrapQ4 === 'bootstrapQ4_1')
            $countCorrectAnswer++;
        if($request->bootstrapQ5 === 'bootstrapQ5_1')
            $countCorrectAnswer++;
        if($request->bootstrapQ6 === 'bootstrapQ6_2')
            $countCorrectAnswer++;
        if($request->bootstrapQ7 === 'bootstrapQ7_4')
            $countCorrectAnswer++;
        if($request->bootstrapQ8 === 'bootstrapQ8_1')
            $countCorrectAnswer++;
        if($request->bootstrapQ9 === 'bootstrapQ9_4')
            $countCorrectAnswer++;
        if($request->bootstrapQ10 === 'bootstrapQ10_3')
            $countCorrectAnswer++;
        if($request->bootstrapQ11 === 'bootstrapQ11_2')
            $countCorrectAnswer++;
        if($request->bootstrapQ12 === 'bootstrapQ12_4')
            $countCorrectAnswer++;
        if($request->bootstrapQ13 === 'bootstrapQ13_2')
            $countCorrectAnswer++;
        if($request->bootstrapQ14 === 'bootstrapQ14_1')
            $countCorrectAnswer++;
        if($request->bootstrapQ15 === 'bootstrapQ15_3')
            $countCorrectAnswer++;
        if($request->bootstrapQ16 === 'bootstrapQ16_1')
            $countCorrectAnswer++;
        if($request->bootstrapQ17 === 'bootstrapQ17_1')
            $countCorrectAnswer++;
        if($request->bootstrapQ18 === 'bootstrapQ18_3')
            $countCorrectAnswer++;
        if($request->bootstrapQ19 === 'bootstrapQ19_1')
            $countCorrectAnswer++;
        if($request->bootstrapQ20 === 'bootstrapQ20_3')
            $countCorrectAnswer++;
        if($request->bootstrapQ21 === 'bootstrapQ21_1')
            $countCorrectAnswer++;
        if($request->bootstrapQ22 === 'bootstrapQ22_4')
            $countCorrectAnswer++;
        if($request->bootstrapQ23 === 'bootstrapQ23_2')
            $countCorrectAnswer++;
        if($request->bootstrapQ24 === 'bootstrapQ24_1')
            $countCorrectAnswer++;
        if($request->bootstrapQ25 === 'bootstrapQ25_3')
            $countCorrectAnswer++;

        Quiz::create([
            'course_name' => 'bootstrap',
            'question_number' => 25,
            'result' => $countCorrectAnswer,
            'user_id' => auth()->user()->id,
        ]);
        $correctPrcentage = ($countCorrectAnswer * 100) / 25;
        return redirect()->back()->with(['success_complate' => 'you get '. $countCorrectAnswer . ' out of 25. Result '. round($correctPrcentage,2). '%']);
    }

    public function jqueryquiz() {
        return view('quiz.jquery');
    }
    public function jqueyquizAction(Request $request)
    {
        $countCorrectAnswer = 0;
        $correctPrcentage = 0;

        if($request->jqueryQ1 === 'jqueryQ1_4')
            $countCorrectAnswer++;
        if($request->jqueryQ2 === 'jqueryQ2_2')
            $countCorrectAnswer++;
        if($request->jqueryQ3 === 'jqueryQ3_1')
            $countCorrectAnswer++;
        if($request->jqueryQ4 === 'jqueryQ4_2')
            $countCorrectAnswer++;
        if($request->jqueryQ5 === 'jqueryQ5_1')
            $countCorrectAnswer++;
        if($request->jqueryQ6 === 'jqueryQ6_4')
            $countCorrectAnswer++;
        if($request->jqueryQ7 === 'jqueryQ7_1')
            $countCorrectAnswer++;
        if($request->jqueryQ8 === 'jqueryQ8_3')
            $countCorrectAnswer++;
        if($request->jqueryQ9 === 'jqueryQ9_2')
            $countCorrectAnswer++;
        if($request->jqueryQ10 === 'jqueryQ10_1')
            $countCorrectAnswer++;
        if($request->jqueryQ11 === 'jqueryQ11_2')
            $countCorrectAnswer++;
        if($request->jqueryQ12 === 'jqueryQ12_4')
            $countCorrectAnswer++;
        if($request->jqueryQ13 === 'jqueryQ13_1')
            $countCorrectAnswer++;
        if($request->jqueryQ14 === 'jqueryQ14_2')
            $countCorrectAnswer++;
        if($request->jqueryQ15 === 'jqueryQ15_3')
            $countCorrectAnswer++;
        if($request->jqueryQ16 === 'jqueryQ16_4')
            $countCorrectAnswer++;
        if($request->jqueryQ17 === 'jqueryQ17_1')
            $countCorrectAnswer++;
        if($request->jqueryQ18 === 'jqueryQ18_1')
            $countCorrectAnswer++;
        if($request->jqueryQ19 === 'jqueryQ19_3')
            $countCorrectAnswer++;
        if($request->jqueryQ20 === 'jqueryQ20_2')
            $countCorrectAnswer++;
        if($request->jqueryQ21 === 'jqueryQ21_2')
            $countCorrectAnswer++;
        if($request->jqueryQ22 === 'jqueryQ22_4')
            $countCorrectAnswer++;
        if($request->jqueryQ23 === 'jqueryQ23_1')
            $countCorrectAnswer++;
        if($request->jqueryQ24 === 'jqueryQ24_3')
            $countCorrectAnswer++;
        if($request->jqueryQ25 === 'jqueryQ25_1')
            $countCorrectAnswer++;

        Quiz::create([
            'course_name' => 'jquery',
            'question_number' => 25,
            'result' => $countCorrectAnswer,
            'user_id' => auth()->user()->id,
        ]);
        $correctPrcentage = ($countCorrectAnswer * 100) / 25;
        return redirect()->back()->with(['success_complate' => 'you get '. $countCorrectAnswer . ' out of 25. Result '. round($correctPrcentage,2). '%']);
    }

    public function vuejsquiz() {
        return view('quiz.vuejs');
    }
}
