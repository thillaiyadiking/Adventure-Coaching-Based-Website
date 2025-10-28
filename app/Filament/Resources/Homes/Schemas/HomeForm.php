<?php

namespace App\Filament\Resources\Homes\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class HomeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Header')
                    ->schema([
                        TextInput::make('header_text')
                            ->label('Header Text')
                            ->required(),
                        Repeater::make('header_notes')
                            ->label('Header Notes')
                            ->schema([
                                TextInput::make('note')
                                    ->label('Note')
                                    ->required(),
                            ])
                            ->columns(1)
                            ->collapsible(),
                    ]),

                Section::make('Brand Logos')
                    ->schema([
                        Repeater::make('brand_logos')
                            ->label('Brand Logos')
                            ->schema([
                                TextInput::make('url')
                                    ->label('Logo URL')
                                    ->placeholder('Enter URL or leave blank to upload'),
                                FileUpload::make('file')
                                    ->disk('public')
                                    ->label('Upload Logo')
                                    ->image()
                                    ->directory('homes/logos')
                                    ->visibility('public'),
                            ])
                            ->columns(2)
                            ->collapsible(),
                    ]),

                Section::make('Banner Media')
                    ->schema([
                        Repeater::make('banner_images')
                            ->label('Banner Media')
                            ->schema([
                                TextInput::make('url')
                                    ->label('Media URL')
                                    ->placeholder('Enter URL or leave blank to upload'),
                                FileUpload::make('file')
                                    ->disk('public')
                                    ->label('Upload Media')
                                    ->acceptedFileTypes(['image/*', 'video/*'])
                                    ->directory('homes/banners')
                                    ->visibility('public'),
                            ])
                            ->columns(2)
                            ->collapsible(),
                    ]),

                Section::make('Summary of Places')
                    ->schema([
                        Repeater::make('summary_of_places')
                            ->label('Places')
                            ->schema([
                                TextInput::make('title_head')
                                    ->label('Title Head')
                                    ->required(),
                                Repeater::make('images')
                                    ->label('Images')
                                    ->schema([
                                        TextInput::make('url')
                                            ->label('Image URL')
                                            ->placeholder('Enter URL or leave blank to upload'),
                                        FileUpload::make('file')
                                            ->disk('public')
                                            ->label('Upload Image')
                                            ->image()
                                            ->directory('homes/places')
                                            ->visibility('public'),
                                        TextInput::make('days')
                                            ->label('Days')
                                            ->numeric()
                                            ->required(),
                                        TextInput::make('place')
                                            ->label('Place')
                                            ->required(),
                                    ])
                                    ->columns(2),
                            ])
                            ->columns(1)
                            ->collapsible(),
                    ]),

                Section::make('Summary of Services')
                    ->schema([
                        Repeater::make('summary_of_services')
                            ->label('Services')
                            ->schema([
                                TextInput::make('icon_url')
                                    ->label('Icon URL')
                                    ->placeholder('Enter URL or leave blank to upload'),
                                FileUpload::make('icon_file')
                                    ->disk('public')
                                    ->label('Upload Icon')
                                    ->image()
                                    ->directory('homes/icons')
                                    ->visibility('public'),
                                TextInput::make('title')
                                    ->label('Title')
                                    ->required(),
                                TextInput::make('description')
                                    ->label('Description')
                                    ->required(),
                                TextInput::make('button_name')
                                    ->label('Button Name')
                                    ->required(),
                            ])
                            ->columns(2)
                            ->collapsible(),
                    ]),

                Section::make('Summary of Overview')
                    ->schema([
                        TextInput::make('summary_of_overview.title')
                            ->label('Title')
                            ->required(),
                        TextInput::make('summary_of_overview.description')
                            ->label('Description')
                            ->required(),
                        TextInput::make('summary_of_overview.image_url')
                            ->label('Image URL')
                            ->placeholder('Enter URL or leave blank to upload'),
                        FileUpload::make('summary_of_overview.image_file')
                            ->disk('public')
                            ->label('Upload Image')
                            ->image()
                            ->directory('homes/overview')
                            ->visibility('public'),
                        Repeater::make('summary_of_overview.list')
                            ->label('List')
                            ->schema([
                                TextInput::make('icon_url')
                                    ->label('Icon URL')
                                    ->placeholder('Enter URL or leave blank to upload'),
                                FileUpload::make('icon_file')
                                    ->disk('public')
                                    ->label('Upload Icon')
                                    ->image()
                                    ->directory('homes/overview')
                                    ->visibility('public'),
                                TextInput::make('title')
                                    ->label('Title')
                                    ->required(),
                            ])
                            ->columns(2)
                            ->collapsible(),
                    ]),

                Section::make('Main Image')
                    ->schema([
                        TextInput::make('main_image_url')
                            ->label('Main Image URL')
                            ->placeholder('Enter URL or leave blank to upload'),
                        FileUpload::make('main_image_file')
                            ->disk('public')
                            ->label('Upload Main Image')
                            ->image()
                            ->directory('homes/main')
                            ->visibility('public'),
                    ]),
            ]);
    }
}
