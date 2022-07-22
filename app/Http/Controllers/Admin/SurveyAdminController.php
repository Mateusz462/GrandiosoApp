<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MattDaneshvar\Survey\Models\Survey;
use MattDaneshvar\Survey\Models\Entry;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;

class SurveyAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $survey = Survey::where('status', 1)->first();
        return view('panel.admin.survey', compact('survey'));
    }

    protected function survey()
    {
        return $survey = Survey::where('status', 1)->first();;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

         try{
            (new Entry)->for($survey)->by($user)->fromArray($answers)->push();

             Toastr::success('Ankieta została wypełniona pomyślnie','Sukces');
             return redirect()->route('user.surveys')->with('success', 'Ankieta została wypełniona pomyślnie');
         } catch (\Exception $e) {
             Toastr::error('Wystąpił błąd podczas zapisywania odpowiedzi użytkownika','Błąd!');
             return redirect()->route('user.surveys')->with('error', 'Wystąpił błąd podczas zapisywania odpowiedzi użytkownika');
         }
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
