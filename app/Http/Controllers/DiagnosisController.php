<?php

namespace App\Http\Controllers;

use App\Models\Diagnosis;
use App\Models\DiagnosisQuestion;
use Illuminate\Http\Request;

class DiagnosisController extends Controller
{
    public function index()
    {
        return view('diagnosis.index', [
            'diagnoses' => Diagnosis::all()
        ]);
    }

    public function hospice_eligibility_requirements()
    {
        return view('diagnosis.hospice_eligibility_requirements', [
            'diagnoses' => Diagnosis::all()
        ]);
    }

    public function create()
    {
        return view('diagnosis.create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'diagnosis' => 'required'
        ]);        

        $formFields['diagnosis'] = ucwords($formFields['diagnosis']);
        Diagnosis::create($formFields);

        return redirect('/diagnosis')->with('message', 'Diagnosis created successfully!');
    }

    public function show(Diagnosis $diagnosis)
    {
        $questions = DiagnosisQuestion::where('diagnosis_id', $diagnosis->id)->get();

        return view('diagnosis.show', [
            'questions' => $questions,
            'diagnosis' => $diagnosis
        ]);
    }

    public function her_show(Diagnosis $diagnosis)
    {
        $questions = DiagnosisQuestion::where('diagnosis_id', $diagnosis->id)->get();

        return view('diagnosis.her_answer', [
            'questions' => $questions,
            'diagnosis' => $diagnosis
        ]);
    }

    public function answer_her(Request $request, Diagnosis $diagnosis)
    {
        //dd(request()->get('3'));
        $questions = DiagnosisQuestion::where('diagnosis_id', $diagnosis->id)->get();

        $counter = 0;
        foreach($questions as $question)
        {
            // if($request->${"n" . $question->id} == "on")
            // {
            //     $counter++;
            // }
            if(request()->get($question->id) == 'on'){
                $counter++;
            }
        }

        $anwers = $request->all();

        return view('diagnosis.her_answer', [
            'questions' => $questions,
            'diagnosis' => $diagnosis,
            'anwers' => $anwers,
            'counter' => $counter
        ]);
    }

    public function store_question(Request $request, Diagnosis $diagnosis)
    {
        $formFields = $request->validate([
            'question' => 'required'
        ]);    

        $formFields['question'] = ucwords($formFields['question']);
        $formFields['diagnosis_id'] = $diagnosis->id;
        DiagnosisQuestion::create($formFields);

        $questions = DiagnosisQuestion::where('diagnosis_id', $diagnosis->id)->get();

        return view('diagnosis.show', [
            'questions' => $questions,
            'diagnosis' => $diagnosis
        ]);
    }

    public function delete_question(DiagnosisQuestion $question)
    {
        $diagnosis_id = $question->diagnosis_id;
        $question->delete();

        //'/diagnosis/{diagnosis}/show'
        return redirect('/diagnosis/'.$diagnosis_id.'/show')->with('message', 'Question deleted.');
    }

    public function edit(Diagnosis $diagnosis)
    {
        return view('diagnosis.edit', [
            'diagnosis' => $diagnosis
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diagnosis $diagnosis)
    {
        $formFields = $request->validate([
            'diagnosis' => 'required'          
        ]);        

        $formFields['diagnosis'] = ucwords($formFields['diagnosis']);
        $diagnosis->update($formFields);

        return redirect('/diagnosis')->with('message', 'Diagnosis updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diagnosis $diagnosis)
    {
        $diagnosis->delete();
        return redirect('/diagnosis')->with('message', 'Diagnosis deleted successfully');
    }
}
