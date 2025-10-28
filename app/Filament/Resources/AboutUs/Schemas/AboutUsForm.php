<?php

namespace App\Filament\Resources\AboutUs\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AboutUsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('banner_image')
                    ->label('Banner Image')
                    ->image()
                    ->disk('public')
                    ->directory('about-us/attachments')
                    ->nullable(),

                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255),

                Textarea::make('description')
                    ->label('Description')
                    ->required()
                    ->rows(4),

                TextInput::make('years_of_experience')
                    ->label('Years of Experience')
                    ->numeric()
                    ->nullable(),

                TextInput::make('years_of_experience_text')
                    ->label('Years of Experience Text')
                    ->nullable()
                    ->maxLength(255),

                TextInput::make('text_in_image_tag')
                    ->label('Text in Image Tag')
                    ->nullable()
                    ->maxLength(255),

                TextInput::make('more_about_button_text')
                    ->label('More About Button Text')
                    ->nullable()
                    ->maxLength(255),

                TextInput::make('name_of_founder')
                    ->label('Name of Founder')
                    ->nullable()
                    ->maxLength(255),

                TextInput::make('role')
                    ->label('Role')
                    ->nullable()
                    ->maxLength(255),

                FileUpload::make('profile_image')
                    ->label('Profile Image')
                    ->image()
                    ->disk('public')
                    ->directory('about-us/attachments')
                    ->nullable(),

                FileUpload::make('front_image')
                    ->label('Front Image')
                    ->image()
                    ->disk('public')
                    ->directory('about-us/attachments')
                    ->nullable(),

                FileUpload::make('back_image')
                    ->label('Back Image')
                    ->image()
                    ->disk('public')
                    ->directory('about-us/attachments')
                    ->nullable(),

                TextInput::make('video_url')
                    ->label('Video URL')
                    ->url()
                    ->nullable()
                    ->placeholder('Enter video URL'),

                FileUpload::make('video_background_image')
                    ->label('Video Background Image')
                    ->image()
                    ->disk('public')
                    ->directory('about-us/attachments')
                    ->nullable(),
            ]);
    }
}
