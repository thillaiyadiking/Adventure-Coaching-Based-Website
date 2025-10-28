<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('banner_image')
                    ->disk('public') // 👈 use Laravel's local public storage
                    ->directory('services/attachments')
                    ->visibility('public'),
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

                Section::make('Section 1')
                    ->description('Configure the first section content')
                    ->schema([
                        FileUpload::make('section_1_image')
                            ->disk('public')
                            ->directory('services/section')
                            ->visibility('public')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                '16:9',
                                '4:3',
                                '1:1',
                            ])
                            ->imageEditorEmptyFillColor('#000000')
                            ->imageEditorMode(2)
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('16:9')
                            ->imageResizeTargetWidth('1920')
                            ->imageResizeTargetHeight('1080')
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp'])
                            ->helperText('Upload a section image. Maximum file size: 2MB.')
                            ->columnSpanFull(),

                        TextInput::make('section_1_image_text')
                            ->label('Section Image Text'),

                        TextInput::make('section_1_title')
                            ->label('Section Title')
                            ->required(),

                        Textarea::make('section_1_description')
                            ->label('Section Description'),

                        Repeater::make('section_1_subtitles_points')
                            ->schema([
                                TextInput::make('subtitle')
                                    ->label('Subtitle')
                                    ->required(),
                                Repeater::make('points')
                                    ->schema([
                                        TextInput::make('point')
                                            ->label('Point')
                                            ->required(),
                                    ])
                                    ->grid(1)
                                    ->columnSpanFull()
                                    ->defaultItems(1)
                                    ->collapsible()
                                    ->helperText('Add multiple points for this subtitle'),
                            ])
                            ->grid(1)
                            ->columnSpanFull()
                            ->defaultItems(1)
                            ->collapsible()
                            ->helperText('Add multiple subtitles with their respective points'),

                        FileUpload::make('section_1_profile_pictures')
                            ->disk('public')
                            ->directory('services/profiles')
                            ->multiple()
                            ->reorderable()
                            ->visibility('public')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                '1:1',
                            ])
                            ->imageEditorEmptyFillColor('#000000')
                            ->imageEditorMode(2)
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('1:1')
                            ->imageResizeTargetWidth('400')
                            ->imageResizeTargetHeight('400')
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp'])
                            ->helperText('Upload multiple profile pictures. Maximum file size: 2MB each.')
                            ->columnSpanFull()
                            ->imagePreviewHeight('150'),

                        TextInput::make('section_1_button_text')
                            ->label('Button Text')
                            ->default('More About Us'),
                    ])
                    ->collapsible()
                    ->compact(),

                Section::make('Section 2')
                    ->description('Configure the second section content')
                    ->schema([
                        FileUpload::make('section_2_image')
                            ->disk('public')
                            ->directory('services/section')
                            ->visibility('public')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                '16:9',
                                '4:3',
                                '1:1',
                            ])
                            ->imageEditorEmptyFillColor('#000000')
                            ->imageEditorMode(2)
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('16:9')
                            ->imageResizeTargetWidth('1920')
                            ->imageResizeTargetHeight('1080')
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp'])
                            ->helperText('Upload a section image. Maximum file size: 2MB.')
                            ->columnSpanFull(),

                        TextInput::make('section_2_image_text')
                            ->label('Section Image Text'),

                        TextInput::make('section_2_title')
                            ->label('Section Title')
                            ->required(),

                        Textarea::make('section_2_description')
                            ->label('Section Description'),

                        Repeater::make('section_2_subtitles_points')
                            ->schema([
                                TextInput::make('subtitle')
                                    ->label('Subtitle')
                                    ->required(),
                                Repeater::make('points')
                                    ->schema([
                                        TextInput::make('point')
                                            ->label('Point')
                                            ->required(),
                                    ])
                                    ->grid(1)
                                    ->columnSpanFull()
                                    ->defaultItems(1)
                                    ->collapsible()
                                    ->helperText('Add multiple points for this subtitle'),
                            ])
                            ->grid(1)
                            ->columnSpanFull()
                            ->defaultItems(1)
                            ->collapsible()
                            ->helperText('Add multiple subtitles with their respective points'),

                        FileUpload::make('section_2_profile_pictures')
                            ->disk('public')
                            ->directory('services/profiles')
                            ->multiple()
                            ->reorderable()
                            ->visibility('public')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                '1:1',
                            ])
                            ->imageEditorEmptyFillColor('#000000')
                            ->imageEditorMode(2)
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('1:1')
                            ->imageResizeTargetWidth('400')
                            ->imageResizeTargetHeight('400')
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp'])
                            ->helperText('Upload multiple profile pictures. Maximum file size: 2MB each.')
                            ->columnSpanFull()
                            ->imagePreviewHeight('150'),

                        TextInput::make('section_2_button_text')
                            ->label('Button Text')
                            ->default('More About Us'),
                    ])
                    ->collapsible()
                    ->compact(),



                Section::make('Section 3')
                    ->description('Configure the third section content')
                    ->schema([
                        FileUpload::make('section_3_image')
                            ->disk('public')
                            ->directory('services/section')
                            ->multiple()
                            ->maxFiles(6)
                            ->visibility('public')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                '16:9',
                                '4:3',
                                '1:1',
                            ])
                            ->imageEditorEmptyFillColor('#000000')
                            ->imageEditorMode(2)
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('16:9')
                            ->imageResizeTargetWidth('1920')
                            ->imageResizeTargetHeight('1080')
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp'])
                            ->helperText('Upload a section image. Maximum file size: 2MB.')
                            ->columnSpanFull(),

                        TextInput::make('section_3_image_text')
                            ->label('Section Image Text'),

                        TextInput::make('section_3_title')
                            ->label('Section Title')
                            ->required(),

                        Textarea::make('section_3_description')
                            ->label('Section Description'),

                        Repeater::make('section_3_subtitles_points')
                            ->schema([
                                TextInput::make('subtitle')
                                    ->label('Subtitle')
                                    ->required(),
                                Repeater::make('points')
                                    ->schema([
                                        TextInput::make('point')
                                            ->label('Point')
                                            ->required(),
                                    ])
                                    ->grid(1)
                                    ->columnSpanFull()
                                    ->defaultItems(1)
                                    ->collapsible()
                                    ->helperText('Add multiple points for this subtitle'),
                            ])
                            ->grid(1)
                            ->columnSpanFull()
                            ->defaultItems(1)
                            ->collapsible()
                            ->helperText('Add multiple subtitles with their respective points'),

                        FileUpload::make('section_3_profile_pictures')
                            ->disk('public')
                            ->directory('services/profiles')
                            ->multiple()
                            ->reorderable()
                            ->visibility('public')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                '1:1',
                            ])
                            ->imageEditorEmptyFillColor('#000000')
                            ->imageEditorMode(2)
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('1:1')
                            ->imageResizeTargetWidth('400')
                            ->imageResizeTargetHeight('400')
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp'])
                            ->helperText('Upload multiple profile pictures. Maximum file size: 2MB each.')
                            ->columnSpanFull()
                            ->imagePreviewHeight('150'),

                        TextInput::make('section_3_button_text')
                            ->label('Button Text')
                            ->default('More About Us'),
                    ])
                    ->collapsible()
                    ->compact(),


            ]);
    }
}
