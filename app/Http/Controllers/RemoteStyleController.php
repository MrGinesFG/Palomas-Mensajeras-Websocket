<?php

namespace App\Http\Controllers;

use App\Events\RemoteStyleUpdate;
use Illuminate\Http\Request;

class RemoteStyleController extends Controller
{
    public function emisor()
    {
        return view('emisor');
    }

    public function receptor()
    {
        return view('receptor');
    }

    public function emitir(Request $request)
    {
        $data = $request->validate([
            'newText' => ['required', 'string'],
            'newStyle' => ['nullable', 'string'],
            'pigeonType' => ['nullable', 'string'],
            'senderName' => ['nullable', 'string', 'max:40'],
        ]);

        $sender = trim($data['senderName'] ?? '') !== '' ? trim($data['senderName']) : 'Viajero Anónimo';

        broadcast(new RemoteStyleUpdate(
            $data['newText'],
            $data['newStyle'] ?? '',
            $data['pigeonType'] ?? 'white',
            $sender
        ));

        return back()->with('ok', '¡Tu paloma mensajera ha emprendido el vuelo!');
    }
}
