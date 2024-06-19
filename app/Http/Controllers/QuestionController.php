<?php

namespace App\Http\Controllers;
use App\Models\Question;
use App\Models\Choice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create($quiz_id){
        return view("question.create", ['quiz_id' => $quiz_id]);
    }

    public function store($quiz_id){
        $attributes = request()->validate([
            'content' => ['required', 'max:50'],
            'choice_a' => ['required', 'max:50'],
            'choice_b' => ['required', 'max:50'],
            'choice_c' => ['required', 'max:50'],
            'choice_d' => ['required', 'max:50'],
            'answer' => ['required'],
        ]);

        $correct_choice_id = null;

        $newQuestion = Question::create([
            'quiz_id' => $quiz_id,
            'content' => $attributes['content'],
        ]);

        $choice_a = Choice::create([
            'question_id' => $newQuestion->id,
            'content' => $attributes['choice_a']
        ]);

        $choice_b = Choice::create([
            'question_id' => $newQuestion->id,
            'content' => $attributes['choice_b']
        ]);

        $choice_c = Choice::create([
            'question_id' => $newQuestion->id,
            'content' => $attributes['choice_c']
        ]);

        $choice_d = Choice::create([
            'question_id' => $newQuestion->id,
            'content' => $attributes['choice_d']
        ]);

        switch($attributes['answer']){
            case 'choice_a':
                $correct_choice_id = $choice_a->id;
                break;
            case 'choice_b':
                $correct_choice_id = $choice_b->id;
                break;
            case 'choice_c':
                $correct_choice_id = $choice_c->id;
                break;
            case 'choice_d':
                $correct_choice_id = $choice_d->id;
                break;
        }

        // Update $newQuestion and add new correct_choice_id
        $newQuestion->update(['choice_id' => $correct_choice_id]);

        return redirect('/quiz/' . $quiz_id);
    }

    public function edit(Question $question){
        $question->load('choices');

        return view("question.edit", ['question' => $question]);
    }

    public function update(Question $question){

        $attributes = request()->validate([
            'content' => ['required', 'max:50'],
            'choice_a' => ['required', 'max:50'],
            'choice_b' => ['required', 'max:50'],
            'choice_c' => ['required', 'max:50'],
            'choice_d' => ['required', 'max:50'],
            'answer' => ['required'],
        ]);

        $correct_choice_id = null;

        $question->update(["choice_id" => null]);

        // Delete old choices
        $choices = Choice::where('question_id', $question->id)->get();

        foreach ($choices as $choice) {
            $choice->delete();
        }

        $choice_a = Choice::create([
            'question_id' => $question->id,
            'content' => $attributes['choice_a']
        ]);

        $choice_b = Choice::create([
            'question_id' => $question->id,
            'content' => $attributes['choice_b']
        ]);

        $choice_c = Choice::create([
            'question_id' => $question->id,
            'content' => $attributes['choice_c']
        ]);

        $choice_d = Choice::create([
            'question_id' => $question->id,
            'content' => $attributes['choice_d']
        ]);

        switch($attributes['answer']){
            case 'choice_a':
                $correct_choice_id = $choice_a->id;
                break;
            case 'choice_b':
                $correct_choice_id = $choice_b->id;
                break;
            case 'choice_c':
                $correct_choice_id = $choice_c->id;
                break;
            case 'choice_d':
                $correct_choice_id = $choice_d->id;
                break;
        }

        $question->update([
            'content' => $attributes['content'],
            'choice_id' => $correct_choice_id
        ]);

        return redirect('/quiz/' . $question->quiz_id );
    }

    public function destroy(Question $question){
        $quiz_id = $question->quiz_id;

        $question->delete();

        return redirect('/quiz/' . $quiz_id);
    }
}