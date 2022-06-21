<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{

    public function images($image){

        abort_if(auth()->guest(), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $path = "avatars/{$image}";

        if(Storage::exists($path)) {
            return response()->file(Storage::path($path));
        }

        abort(404);
    }
}
