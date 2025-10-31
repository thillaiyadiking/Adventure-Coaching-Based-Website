<?php

namespace App\Filament\Resources\Generals\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GeneralForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Repeater::make('social_media_links')
                    ->label('Social Media Links')
                    ->schema([
                        TextInput::make('platform')
                        ->label('Platform')
                        ->required(),
                        TextInput::make('icon')
                            ->label('Icon')
                            ->placeholder('Enter icon class or URL'),
                        TextInput::make('url')
                            ->label('URL')
                            ->url()
                            ->required(),
                    ])
                    ->columns(3)
                    ->addable()
                    ->deletable()
                    ->reorderable(),
            ]);
    }
}
