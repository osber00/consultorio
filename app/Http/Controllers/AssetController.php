<?php

namespace Consultorio\Http\Controllers;

use Consultorio\Models\Notasolicitud;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class AssetController extends Controller
{

    public function notadocumento($id){
        $nota = Notasolicitud::find($id);
        $headers = [];
        return response()->download(
            storage_path("app/{$nota->archivo}"),
            null,
            $headers,
            ResponseHeaderBag::DISPOSITION_INLINE
        );
    }
}
