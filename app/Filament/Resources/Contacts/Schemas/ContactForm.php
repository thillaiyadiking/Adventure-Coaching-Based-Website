<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Repeater::make('phone_numbers')
                    ->label('Phone Numbers')
                    ->schema([
                        TextInput::make('phone')
                            ->label('Phone Number')
                            ->placeholder('Enter phone number')
                            ->required(),
                    ])
                    ->collapsible()
                    ->itemLabel(fn(array $state): ?string => $state['phone'] ?? null),

                Repeater::make('email_addresses')
                    ->label('Email Addresses')
                    ->schema([
                        TextInput::make('email')
                            ->label('Email Address')
                            ->email()
                            ->placeholder('Enter email address')
                            ->required(),
                    ])
                    ->collapsible()
                    ->itemLabel(fn(array $state): ?string => $state['email'] ?? null),

                Repeater::make('physical_addresses')
                    ->label('Physical Addresses')
                    ->schema([
                        TextInput::make('address')
                            ->label('Physical Address')
                            ->placeholder('Enter physical address')
                            ->required(),
                    ])
                    ->collapsible()
                    ->itemLabel(fn(array $state): ?string => $state['address'] ?? null),

                Repeater::make('websites')
                    ->label('Websites')
                    ->schema([
                        TextInput::make('url')
                            ->label('Website URL')
                            ->url()
                            ->placeholder('Enter website URL')
                            ->required(),
                    ])
                    ->collapsible()
                    ->itemLabel(fn(array $state): ?string => $state['url'] ?? null),

                FileUpload::make('banner_image')
                    ->label('Banner Image')
                    ->image()
                    ->disk('public')
                    ->directory('contacts/attachments')
                    ->nullable(),
            ]);
    }
}
