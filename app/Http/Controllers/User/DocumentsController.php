<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MattDaneshvar\Survey\Models\Survey;
use MattDaneshvar\Survey\Models\Entry;
use App\Models\User;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travels = Survey::where('status', 1)->get();
        //dd($travels);
        return view('panel.everyone.documents.index', compact('travels'));
    }

    protected function survey(Survey $survey)
    {
        return $survey;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Survey $survey, Request $request)
     {
         $survey = $this->survey();
         $answers = $this->validate($request, $survey->rules);
         $user = auth()->user();
         (new Entry)->for($survey)->by($user)->fromArray($answers)->push();

         return back()->with('success', 'elo');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Survey $survey)
    {
        //abort_if(Gate::denies('permission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        // dd($survey);
        return view('panel.everyone.travels.show', compact('survey'));
    }
}
