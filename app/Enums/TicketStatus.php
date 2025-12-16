<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum TicketStatus: string implements HasLabel
{
    case Open = 'open';
    case InProgress = 'in_progress';
    case Closed = 'closed';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Open => 'Open',
            self::InProgress => 'In Progress',
            self::Closed => 'Closed',
        };
    }
}
