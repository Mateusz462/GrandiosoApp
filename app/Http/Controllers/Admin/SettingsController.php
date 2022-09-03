<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\Section;
// use App\Models\PermissionModule;
// use App\Models\OgraniczeniaPanel;
use Gate;
use Symfony\Component\HttpFoundation\Response;
// use App\Http\Requests\StoreRoleRequest;
// use App\Http\Requests\UpdateRoleRequest;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //abort_if(Gate::denies('role_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('panel.admin.settings.index');
    }

    public function modules()
    {
        //abort_if(Gate::denies('role_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('panel.admin.settings.modules');
    }

    public function sections()
    {
        //abort_if(Gate::denies('role_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sections = Section::with(['instruments', 'owner'])->get();

        return view('panel.admin.settings.sections', compact('sections'));
    }

    public function storesections(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        try{
            $data = [
                'name' => $request->name,
                'description' => $request->description,
                'settings' => '',
                'owner_id' => auth()->user()->id,
            ];
            $user = Section::create($data);

            Toastr::success('Sekcja została utworzona pomyślnie','Sukces');
            return redirect()->route('settings.sections')->with('success', 'Sekcja została utworzona pomyślnie');
        } catch (\Exception $e) {
            Toastr::error('Wystąpił błąd podczas tworzenia sekcji','Błąd!');
            return redirect()->route('settings.sections')->with('error', $e);
        }
    }

    public function availability()
    {
        //abort_if(Gate::denies('role_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('panel.admin.settings.availability');
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
