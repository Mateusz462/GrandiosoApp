<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annouments;
use Brian2694\Toastr\Facades\Toastr;

class MarshingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //abort_if(Gate::denies('permission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $annouments = Annouments::all();

        return view('panel.everyone.marshing.index', compact('annouments'));
    }

    public function sections()
    {
        //abort_if(Gate::denies('permission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $annouments = Annouments::all();

        return view('panel.everyone.sections.show', compact('annouments'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Annouments $annoument)
    {
        //abort_if(Gate::denies('permission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        //$annouments->load('tags');
        //dd($annoument);
        if($annoument->status == 1){
            return view('panel.everyone.annouments.show', compact('annoument'));
        } else {
            if(auth()->user()->hasRole('Administrator')) {
                return view('panel.everyone.annouments.show', compact('annoument'));
            } else {
                Toastr::error('Nie takiego ogłoszenia lub brak uprawnień!','Błąd!');
                return redirect()->route('home')->with('error', 'Nie takiego ogłoszenia lub brak uprawnień!');
            }
        }
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
