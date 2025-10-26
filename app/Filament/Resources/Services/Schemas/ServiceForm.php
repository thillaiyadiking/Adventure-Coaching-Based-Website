<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title')
                    ->required(),
                Textarea::make('description')
                    ->label('Description'),

                FileUpload::make('service_attachment')
                    ->disk('public') // 👈 use Laravel's local public storage
                    ->directory('services/attachments')
                    ->visibility('public'),

                Repeater::make('offers')
                    ->schema([
                        TextInput::make('offer_title')
                            ->label('Offer Title')
                            ->required(),
                        Textarea::make('offer_description')
                            ->label('Offer Description')
                            ->required(),
                    ])
                    ->grid(2) // 👈 Two items (offers) per row
                    ->columnSpanFull() // 👈 makes repeater take full width of form
                    ->columns(2)
                    ->defaultItems(1)
                    ->collapsible(),
            ]);
    }
}
