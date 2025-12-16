<?php

namespace App\Filament\Resources\Tickets\Schemas;

use App\Enums\TicketPriority;
use App\Enums\TicketStatus;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TicketForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Select::make('status')
                    ->options(TicketStatus::class)
                    ->default('open')
                    ->required(),
                Select::make('priority')
                    ->options(TicketPriority::class)
                    ->default('normal')
                    ->required(),
                TextInput::make('assigned_to_user_id')
                    ->numeric(),
                TextInput::make('created_by_user_id')
                    ->numeric(),
            ]);
    }
}
