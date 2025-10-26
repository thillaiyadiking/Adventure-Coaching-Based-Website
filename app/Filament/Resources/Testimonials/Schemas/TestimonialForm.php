<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('banner_image')
                    ->label('Banner Image')
                    ->directory('testimonials')
                    ->disk('public') 
                    ->image()
                    ->required(),
                TextInput::make('title')
                    ->label('Title')
                    ->required(),
                Textarea::make('description')
                    ->label('Description')
                    ->nullable(),
                Repeater::make('detailed_testimonials')
                    ->label('Detailed Testimonials')
                    ->schema([
                        FileUpload::make('profile_pic')
                            ->label('Profile Picture')
                            ->directory('testimonials/attachments')
                            ->disk('public') // 👈 use Laravel's local public storage
                            ->image()
                            ->nullable(),
                        TextInput::make('name')
                            ->label('Name')
                            ->required(),
                        TextInput::make('role')
                            ->label('Role')
                            ->nullable(),
                        Select::make('stars')
                            ->label('Stars')
                            ->options([
                                1 => '1 Star',
                                2 => '2 Stars',
                                3 => '3 Stars',
                                4 => '4 Stars',
                                5 => '5 Stars',
                            ])
                            ->nullable(),
                        Textarea::make('review')->label('Review')->nullable(),
                    ])->grid(2) // 👈 Two items (offers) per row
                    ->columnSpanFull() // 👈 makes repeater take full width of form
                    ->columns(2)
                    ->defaultItems(1)
                    ->collapsible()
                    ->nullable(),
            ]);
    }
}
