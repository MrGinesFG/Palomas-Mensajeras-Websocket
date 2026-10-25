<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class RemoteStyleUpdate implements ShouldBroadcast
{
    public string $newText;

    public string $newStyle;

    public string $pigeonType;

    public string $senderName;

    public function __construct(string $newText, string $newStyle, string $pigeonType = 'white', string $senderName = 'Anónimo')
    {
        $this->newText = $newText;
        $this->newStyle = $newStyle;
        $this->pigeonType = $pigeonType;
        $this->senderName = $senderName;
    }

    // Canal PÚBLICO (no requiere auth)
    public function broadcastOn(): array
    {
        return [new Channel('style-channel')];
    }

    // (Opcional) nombre del evento en el frontend
    public function broadcastAs(): string
    {
        return 'RemoteStyleUpdate';
    }
}
