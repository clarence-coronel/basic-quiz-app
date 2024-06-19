<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function index(){
        $quizzes = Quiz::where('user_id', Auth::id())->with('questions')->latest()->paginate(10);

        return view('quiz.index', [ 'quizzes' => $quizzes]);

        return view("quiz.create");
    }

    public function create(){
        return view("quiz.create");
    }

    public function show(Quiz $quiz){
        $quiz->load('questions');

        return view('quiz.show', ['quiz' => $quiz]);
    }

    public function store(){
        $attributes = request()->validate([
            'title' => ['required', 'max:20'],
            'about' => ['required', 'max:100']
        ]);

        $attributes['user_id'] = Auth::user()->id;

        $newQuiz = Quiz::create($attributes);

        return redirect('/quiz/' . $newQuiz->id);
    }
}
