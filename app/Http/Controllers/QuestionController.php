<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreQuestion;
use App\Http\Requests\UpdateQuestion;
use App\Question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();

        return view('questions.index',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestion $request)
    {
        $validated = $request->validated();

        $answers = $request->answer;
        $correctAnswer = (int)$request->correct_answer;
        $finalAnswers = $this->manageAnswers($answers, $correctAnswer);

        $question = Question::create(['question' => $request->question]);

        $question->answers()->createMany($finalAnswers);
        return redirect()->route('questions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //$question = Question::findOrFail($id);
        return view('questions.show',compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //$question = Question::findOrFail($id);
        return view('questions.edit',compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestion $request, Question $question)
    {
        $validated = $request->validated();
        $project->update($validated);
        return redirect()->route('questions.show',compact('question'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return redirect('/questions');
    }

    public function manageAnswers($answers, $correctAnswer)
    {
        $ans=[];
        foreach($answers as $index => $answer) {
            array_push($ans, ['answer' => $answer, 'correct_answer' => 0]);
        }
        $ans[$correctAnswer-1]['correct_answer'] = 1;

        return $ans;
    }
}
