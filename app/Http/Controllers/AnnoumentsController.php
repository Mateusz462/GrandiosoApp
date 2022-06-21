<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annouments;
use Brian2694\Toastr\Facades\Toastr;
use Spatie\Permission\Models\Role;

class AnnoumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //abort_if(Gate::denies('permission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $annouments = Annouments::orderByDesc('id')->get();

        return view('panel.everyone.annouments.index', compact('annouments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('prefix', '!=', 1)->get()->pluck('name', 'id');
        return view('panel.everyone.annouments.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //abort_if(Gate::denies('permission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        // $request->validate([
        //     'title' => 'required',
        //     'text' => 'required',
        //
        //     'is_pinned' => 'required',
        //     'status' => 'required',
        // ]);
        try {
            if ($request->status == '' || $request->status == 'null') {
                $request->status = 0;
            } elseif ($request->status == 'on') {
                $request->status = 1;
            }

            if ($request->is_pinned == '' || $request->is_pinned == 'null') {
                $request->is_pinned = 0;
            } elseif ($request->is_pinned == 'on') {
                $request->is_pinned = 1;
            }

            $data = [
                'title' => $request->title,
                'text' => $request->text,
                'slug' => '0',
                'user_id' => auth()->user()->id,
                'is_pinned' => $request->is_pinned,
                'status' => $request->status
            ];

            $ann = Annouments::create($data);
            //$ann->tags()->sync($request->input('tags', []));

            Toastr::success('Ogłoszenie zostało dodane pomyślnie','Sukces');
            return redirect()->route('home')->with('success', 'Ogłoszenie zostało dodane pomyślnie');
        } catch (\Exception $e) {
            Toastr::error($e,'Błąd!');
            return redirect()->route('home')->with('error', 'Wystąpił błąd podczas dodawania ogłoszenia');
        }
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
