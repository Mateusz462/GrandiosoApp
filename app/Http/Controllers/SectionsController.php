<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\ChatMessage;
use Brian2694\Toastr\Facades\Toastr;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SectionsController extends Controller
{
    public function index()
    {
        //abort_if(Gate::denies('permission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sections = Section::with(['instruments', 'owner'])->get();

        return view('panel.everyone.sections.index', compact('sections'));
    }

    public function show(Section $section)
    {
        //abort_if(Gate::denies('permission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        //$annouments->load('tags');
        //dd($annoument);
        $section->load(['instruments', 'owner']);

        $chatpermuser = DB::table('users_sections')->where('sections_id', $section->id)->where('user_id', auth()->id())->first();
        if(empty($chatpermuser) && $section->owner != auth()->user()){
            Toastr::error('Brak uprawnień!','Błąd!');
            return redirect()->route('home')->with('danger', 'Brak uprawnień!');
        } else {
            return view('panel.everyone.sections.show', compact('section', 'chatpermuser'));
        }
    }

    public function chat(Section $section)
    {
        //abort_if(Gate::denies('permission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        //$annouments->load('tags');
        //dd($annoument);
        $section->load(['instruments', 'owner']);
        $chatmassage = ChatMessage::with(['user'])->where('sections_id', $section->id)->get();
        $chatsettings = DB::table('chat_sections_settings')->where('sections_id', $section->id)
        ->join('users', 'user_id', '=', 'users.id')
        ->first();
        $chatpermuser = DB::table('users_sections')->where('sections_id', $section->id)->where('user_id', auth()->id())->first();
        if(empty($chatpermuser) && $section->owner != auth()->user()){
            Toastr::error('Brak uprawnień!','Błąd!');
            return redirect()->route('home')->with('danger', 'Brak uprawnień!');

        } else {
            return view('panel.everyone.sections.chat', compact('section', 'chatmassage', 'chatpermuser', 'chatsettings'));
            // return view('panel.user.test', compact('section', 'chatmassage', 'chatpermuser', 'chatsettings'));
        }
    }

    public function announcements(Section $section)
    {
        //abort_if(Gate::denies('permission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        //$annouments->load('tags');
        //dd($annoument);
        $section->load(['instruments', 'owner', 'users']);

        $chatpermuser = DB::table('users_sections')->where('sections_id', $section->id)->where('user_id', auth()->id())->first();
        if(empty($chatpermuser) && $section->owner != auth()->user()){
            Toastr::error('Brak uprawnień!','Błąd!');
            return redirect()->route('home')->with('danger', 'Brak uprawnień!');
        } else {
            return view('panel.everyone.sections.announcements', compact('section', 'chatpermuser'));
        }
    }

    public function hashtags(Section $section)
    {
        //abort_if(Gate::denies('permission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        //$annouments->load('tags');
        //dd($annoument);
        $section->load(['instruments', 'owner']);

        $chatpermuser = DB::table('users_sections')->where('sections_id', $section->id)->where('user_id', auth()->id())->first();
        if(empty($chatpermuser) && $section->owner != auth()->user()){
            Toastr::error('Brak uprawnień!','Błąd!');
            return redirect()->route('home')->with('danger', 'Brak uprawnień!');
        } else {
            return view('panel.everyone.sections.errors.404', compact('section', 'chatpermuser'));
        }
    }

    public function members(Section $section)
    {
        //abort_if(Gate::denies('permission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        //$annouments->load('tags');
        //dd($annoument);
        $section->load(['instruments', 'owner', 'users']);

        $chatpermuser = DB::table('users_sections')->where('sections_id', $section->id)->where('user_id', auth()->id())->first();
        if(empty($chatpermuser) && $section->owner != auth()->user()){
            Toastr::error('Brak uprawnień!','Błąd!');
            return redirect()->route('home')->with('danger', 'Brak uprawnień!');
        } else {
            return view('panel.everyone.sections.members', compact('section', 'chatpermuser'));
        }
    }

    public function media(Section $section)
    {
        //abort_if(Gate::denies('permission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        //$annouments->load('tags');
        //dd($annoument);
        $section->load(['instruments', 'owner']);

        $chatpermuser = DB::table('users_sections')->where('sections_id', $section->id)->where('user_id', auth()->id())->first();
        if(empty($chatpermuser) && $section->owner != auth()->user()){
            Toastr::error('Brak uprawnień!','Błąd!');
            return redirect()->route('home')->with('danger', 'Brak uprawnień!');
        } else {
            return view('panel.everyone.sections.media', compact('section', 'chatpermuser'));
        }
    }

    public function files(Section $section)
    {
        //abort_if(Gate::denies('permission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        //$annouments->load('tags');
        //dd($annoument);
        $section->load(['instruments', 'owner']);

        $chatpermuser = DB::table('users_sections')->where('sections_id', $section->id)->where('user_id', auth()->id())->first();
        if(empty($chatpermuser) && $section->owner != auth()->user()){
            Toastr::error('Brak uprawnień!','Błąd!');
            return redirect()->route('home')->with('danger', 'Brak uprawnień!');
        } else {
            return view('panel.everyone.sections.files', compact('section', 'chatpermuser'));
        }
    }

    public function overview(Section $section)
    {
        //abort_if(Gate::denies('permission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        //$annouments->load('tags');
        //dd($annoument);
        $section->load(['instruments', 'owner']);

        $chatpermuser = DB::table('users_sections')->where('sections_id', $section->id)->where('user_id', auth()->id())->first();
        if(empty($chatpermuser) && $section->owner != auth()->user()){
            Toastr::error('Brak uprawnień!','Błąd!');
            return redirect()->route('home')->with('danger', 'Brak uprawnień!');
        } else {
            return view('panel.everyone.sections.errors.404', compact('section', 'chatpermuser'));
        }
    }

    public function sendmessage(Request $request, Section $section)
    {
        $request->validate(['message' => 'required|max:255',]);
        $request['sections_id'] = $section->id;
        $request['user_id'] = auth()->id();
        $request['time'] = Carbon::now();

        try{
            $message = ChatMessage::create($request->all());

            Toastr::success('Wiadomość została wysłana pomyślnie','Sukces');

            return response()->json(['success'=>'Wiadomość została wysłana pomyślnie']);
        } catch (\Exception $e) {

            Toastr::error('Wystąpił błąd podczas wysłania wiadomości','Błąd!');
            return response()->json(['errors'=>'Wystąpił błąd podczas wysłania wiadomości']);
        }
    }

    public function getmessage(Request $request, Section $section)
    {
        $chatmassage = ChatMessage::with(['user'])->where('sections_id', $section->id)->get();
        $chatpermuser = DB::table('users_sections')->where('sections_id', $section->id)->where('user_id', auth()->id())->first();


        $icon = '';

        $output = '';
        if(count($chatmassage) > 0){
            foreach($chatmassage as $message){
                $output .= '<div class="d-flex flex-row'; if($message->user == auth()->user()): $output .= 'd-flex flex-row justify-content-end'; else: $output .= 'justify-content-start'; endif; $output .= '">';
                if($message->user == auth()->user()):
                    $output .= '<div>
                    <p class="text-end small px-2 me-2 mb-1">'. $icon .' '. $message->user->firstname.' '.$message->user->lastname .'</p>
                    <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-secondary ">
                    '. $message->message .'
                    </p>
                    <p class="small me-3 mb-3 rounded-3 text-muted float-end">'. $message->time->format("H:i") .' | '. $message->time->format("d.m.Y") .'</p>
                    </div>
                    <img class="rounded-circle" src="'. $message->user->getPicture() .'" alt="avatar 1" style="width: 45px; height: 100%;">';
                else:
                    $output .= '
                    <img class="rounded-circle" src="'. $message->user->getPicture() .'" alt="avatar 1" style="width: 45px; height: 100%;">
                    <div>
                    <p class="small px-2 ms-2 mb-1">'. $icon .' '. $message->user->firstname .' '. $message->user->lastname .'</p>
                    <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: rgba(177, 58, 252, 0.30)">'. $message->message .'</p>
                    <p class="small ms-3 mb-3 rounded-3 text-muted float-start">'. $message->time->format("H:i") .' | '. $message->time->format("d.m.Y") .'</p>
                    </div>';
                endif;
                $output .= '</div>';
            }
        } else {
            $output .= '
            <div class="mt-5 mb-5 d-flex justify-content-center">
                <div class="p-3">
                    <div class="first text-center">
                        <i class="fas fa-times-circle fa-6x"></i>
                        <h3 class="mt-3">Brak wiadomości</h3>
                        <p class="text-muted">
                            To jest początek tego czatu!
                        </p>
                    </div>
                </div>
            </div>';
        }

        return ($output);

    }

    public function getuserchatperm(Request $request, Section $section)
    {
        $chatpermuser = DB::table('users_sections')->where('user_id', auth()->id())->where('sections_id', $section->id)->get();
        dd($chatpermuser);
        $output = '';
        if($chatpermuser->blocked == 0){

            $output .= '<div class="d-flex flex-row'; if($message->user == auth()->user()): $output .= 'd-flex flex-row justify-content-end'; else: $output .= 'justify-content-start'; endif; $output .= '">';

                $output .= '<div>
                <p class="text-end small px-2 me-2 mb-1">'. $message->user->firstname.' '.$message->user->lastname .'</p>
                <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-warning">
                '. $message->message .'
                </p>
                <p class="small me-3 mb-3 rounded-3 text-muted float-end">'. $message->time->format("H:i") .' | '. $message->time->format("d.m.Y") .'</p>
                </div>
                <img class="rounded-circle" src="'. $message->user->getPicture() .'" alt="avatar 1" style="width: 45px; height: 100%;">';

            $output .= '</div>';
        } else {
            $output .= '
            <div class="mt-5 mb-5 d-flex justify-content-center">
                <div class="p-3">
                    <div class="first text-center">
                        <i class="fas fa-times-circle fa-6x"></i>
                        <h3 class="mt-3">Brak wiadomości</h3>
                        <p class="text-muted">
                            To jest początek tego chatu!
                        </p>
                    </div>
                </div>
            </div>';
        }

        return ($output);

    }

}
